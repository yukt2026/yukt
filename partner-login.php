<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/db.php';

// If already logged in, redirect to dashboard
if (isset($_SESSION['partner_id'])) {
    header('Location: partner-dashboard.php');
    exit;
}

$error = '';
$login_identifier = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login_identifier = trim($_POST['login_identifier'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($login_identifier) || empty($password)) {
        $error = 'Please enter your registered Email or Mobile Number and Password.';
    } elseif (!$pdo) {
        $error = 'Database connection error. Please contact WhatsApp support.';
    } else {
        try {
            // Find partner by email, phone, or partner_code
            $cleanPhone = preg_replace('/[^0-9]/', '', $login_identifier);
            $stmt = $pdo->prepare("
                SELECT * FROM partners 
                WHERE email = :ident1 
                   OR partner_code = :ident2 
                   OR (phone LIKE :ident3 AND LENGTH(:cleanPhone) >= 10)
                LIMIT 1
            ");
            $stmt->execute([
                ':ident1' => strtolower($login_identifier),
                ':ident2' => strtoupper($login_identifier),
                ':ident3' => '%' . (strlen($cleanPhone) >= 10 ? substr($cleanPhone, -10) : 'NOMATCH'),
                ':cleanPhone' => $cleanPhone
            ]);
            $partner = $stmt->fetch();

            if ($partner && password_verify($password, $partner['password_hash'])) {
                // Login successful
                $_SESSION['partner_id'] = $partner['id'];
                $_SESSION['partner_code'] = $partner['partner_code'];
                $_SESSION['partner_name'] = $partner['full_name'];
                $_SESSION['partner_email'] = $partner['email'];
                $_SESSION['partner_shop'] = $partner['shop_name'];
                $_SESSION['partner_status'] = $partner['status'];

                header('Location: partner-dashboard.php');
                exit;
            } else {
                $error = 'Invalid credentials. Please verify your Email/Phone and Password.';
            }
        } catch (Exception $e) {
            error_log("Partner login error: " . $e->getMessage());
            $error = 'An unexpected error occurred. Please try again or contact support.';
        }
    }
}

$pageTitle = 'Partner Portal Login | YUKT IT SOLUTIONS';
$pageDesc = 'Log in to your YUKT Digital Partner dashboard to track referrals, submit client project inquiries, and manage commission payouts.';
$activePage = 'partner';

require_once __DIR__ . '/includes/header.php';
?>

<div class="min-h-screen bg-navy-950 bg-grid-dark text-slate-100 pt-28 pb-20 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
  <div class="w-full max-w-md">
    
    <!-- Top Branding & Headline -->
    <div class="text-center space-y-3 mb-8">
      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-electric-500/10 border border-electric-400/25 text-electric-400 font-mono text-xs uppercase tracking-wider">
        <i data-lucide="lock" class="w-3.5 h-3.5"></i>
        <span>Authorized Partner Access</span>
      </div>
      <h1 class="text-2xl sm:text-3xl font-display font-bold text-white tracking-tight">
        Partner Portal Login
      </h1>
      <p class="text-xs sm:text-sm text-slate-400">
        Access your referral analytics, client projects, and commission ledger.
      </p>
    </div>

    <!-- Login Glass Card -->
    <div class="bg-navy-900/90 border border-white/15 rounded-3xl p-6 sm:p-8 shadow-2xl backdrop-blur-xl relative overflow-hidden">
      
      <?php if (!empty($error)): ?>
        <div class="mb-5 p-3.5 rounded-xl bg-red-500/15 border border-red-500/30 text-red-200 text-xs flex items-center gap-2.5">
          <i data-lucide="alert-circle" class="w-4 h-4 text-red-400 shrink-0"></i>
          <span><?php echo htmlspecialchars($error); ?></span>
        </div>
      <?php endif; ?>

      <form method="POST" action="partner-login.php" class="space-y-4">
        <div>
          <label for="login_identifier" class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1.5">
            Email / Mobile / Partner ID
          </label>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
              <i data-lucide="user" class="w-4 h-4"></i>
            </span>
            <input 
              type="text" 
              id="login_identifier" 
              name="login_identifier" 
              value="<?php echo htmlspecialchars($login_identifier); ?>"
              required 
              placeholder="e.g. name@shop.com or 9876543210" 
              class="w-full pl-10 pr-4 py-3 rounded-xl bg-navy-950/90 border border-white/15 text-slate-100 placeholder-slate-500 text-sm focus:border-electric-400 focus:outline-none focus:ring-1 focus:ring-electric-400 transition-colors"
            >
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between mb-1.5">
            <label for="password" class="block text-xs font-mono uppercase tracking-wider text-slate-300">
              Password
            </label>
            <a 
              href="<?php echo getWhatsAppUrl('Hi YUKT Support, I forgot my partner account password. My phone/email is: '); ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="text-[11px] text-electric-400 hover:text-electric-300 transition-colors"
            >
              Forgot Password?
            </a>
          </div>
          <div class="relative">
            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
              <i data-lucide="lock" class="w-4 h-4"></i>
            </span>
            <input 
              type="password" 
              id="password" 
              name="password" 
              required 
              placeholder="••••••••" 
              class="w-full pl-10 pr-4 py-3 rounded-xl bg-navy-950/90 border border-white/15 text-slate-100 placeholder-slate-500 text-sm focus:border-electric-400 focus:outline-none focus:ring-1 focus:ring-electric-400 transition-colors"
            >
          </div>
        </div>

        <button 
          type="submit" 
          class="w-full py-3.5 px-6 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-electric-600 to-blue-700 hover:from-electric-500 hover:to-blue-600 shadow-xl shadow-electric-600/30 transition-all flex items-center justify-center gap-2 mt-2"
        >
          <span>Sign In to Dashboard</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </button>
      </form>

      <div class="mt-6 pt-5 border-t border-white/10 text-center">
        <p class="text-xs text-slate-400">
          Not a registered partner yet? 
          <a href="partner.php#register" class="text-yukt-orange hover:text-amber-400 font-semibold transition-colors">
            Apply for Free Registration &rarr;
          </a>
        </p>
      </div>

    </div>

    <!-- Quick Support Link -->
    <div class="mt-6 text-center">
      <a 
        href="<?php echo getWhatsAppUrl('Hi YUKT Support Desk, I need assistance logging into the Partner Portal.'); ?>" 
        target="_blank" 
        rel="noopener noreferrer" 
        class="inline-flex items-center gap-1.5 text-xs text-slate-400 hover:text-slate-200 transition-colors"
      >
        <i data-lucide="help-circle" class="w-3.5 h-3.5 text-emerald-400"></i>
        <span>Need help? Contact Dedicated Partner Desk on WhatsApp</span>
      </a>
    </div>

  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
