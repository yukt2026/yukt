<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/db.php';

// If not logged in, redirect to partner landing
if (!isset($_SESSION['partner_id'])) {
    header('Location: partner.php');
    exit;
}

$partnerId = $_SESSION['partner_id'];
$partnerCode = $_SESSION['partner_code'] ?? 'YUKT' . rand(1000, 9999);
$partnerName = $_SESSION['partner_name'] ?? 'Partner';
$partnerShop = $_SESSION['partner_shop'] ?? 'Digital Center';
$partnerStatus = $_SESSION['partner_status'] ?? 'pending_verification';

// Fetch fresh record from DB if possible
if ($pdo) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM partners WHERE id = :id LIMIT 1");
        $stmt->execute([':id' => $partnerId]);
        $row = $stmt->fetch();
        if ($row) {
            $partnerCode = $row['partner_code'];
            $partnerName = $row['full_name'];
            $partnerShop = $row['shop_name'];
            $partnerStatus = $row['status'];
        }
    } catch (Exception $e) {
        // use session defaults
    }
}

$refUrlHome = COMPANY_URL . '/?ref=' . urlencode($partnerCode);
$refUrlPartner = COMPANY_URL . '/partner.php?ref=' . urlencode($partnerCode);
$refUrlServices = COMPANY_URL . '/service-catalogue.php?ref=' . urlencode($partnerCode);

$shareMessage = "Namaste! Agar aapko Website Development, Software, Business Automation, Professional Document Services ya Digital Marketing ki zarurat hai, to YUKT IT SOLUTIONS se contact kar sakte hain.\n\nYUKT Digital Partner Program ke through aap bhi apne area mein digital services ka business expand kar sakte hain.\n\nExplore: " . $refUrlHome;
$waShareUrl = 'https://api.whatsapp.com/send?text=' . rawurlencode($shareMessage);

$pageTitle = 'Registration Confirmed | YUKT Digital Partner Program';
$pageDesc = 'Your YUKT Digital Partner account has been successfully created. Welcome to the YUKT digital service ecosystem.';
$activePage = 'partner';

require_once __DIR__ . '/includes/header.php';
?>

<div class="min-h-screen bg-navy-950 bg-grid-dark text-slate-100 pt-28 pb-20 px-4 sm:px-6 lg:px-8">
  <div class="max-w-3xl mx-auto">
    
    <!-- Success Badge & Heading -->
    <div class="text-center space-y-4 mb-10">
      <div class="inline-flex items-center justify-center w-20 h-20 rounded-3xl bg-gradient-to-tr from-emerald-500/20 to-electric-500/20 border border-emerald-400/40 text-emerald-400 shadow-2xl shadow-emerald-500/20 mb-2">
        <i data-lucide="check-circle" class="w-10 h-10"></i>
      </div>
      <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-emerald-500/10 border border-emerald-400/30 text-emerald-400 font-mono text-xs uppercase tracking-wider">
        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
        Application Submitted Successfully
      </div>
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-display font-bold text-white tracking-tight">
        Welcome to the YUKT Ecosystem, <span class="text-gradient-electric"><?php echo htmlspecialchars($partnerName); ?>!</span>
      </h1>
      <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto leading-relaxed">
        Your partner profile for <strong class="text-white"><?php echo htmlspecialchars($partnerShop); ?></strong> has been generated in our system. You are now ready to offer 140+ premium digital services from your shop.
      </p>
    </div>

    <!-- Partner Credentials Card -->
    <div class="bg-navy-900/90 border border-white/15 rounded-3xl p-6 sm:p-8 shadow-2xl backdrop-blur-xl relative overflow-hidden mb-8">
      <div class="absolute -top-24 -right-24 w-60 h-60 bg-electric-500/10 rounded-full blur-3xl pointer-events-none"></div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pb-6 border-b border-white/10">
        <div>
          <span class="text-xs font-mono uppercase tracking-wider text-slate-400 block mb-1">Your Unique Partner ID</span>
          <div class="flex items-center gap-2">
            <span class="text-2xl sm:text-3xl font-mono font-bold text-electric-400 tracking-wider"><?php echo htmlspecialchars($partnerCode); ?></span>
            <button type="button" onclick="navigator.clipboard.writeText('<?php echo $partnerCode; ?>'); alert('Partner ID Copied: <?php echo $partnerCode; ?>');" class="p-1.5 rounded-lg bg-white/5 hover:bg-white/10 text-slate-300 hover:text-white transition-colors" title="Copy Partner ID">
              <i data-lucide="copy" class="w-4 h-4"></i>
            </button>
          </div>
          <span class="text-[11px] text-slate-400 mt-1 block">Quote this ID for all administrative communications.</span>
        </div>

        <div>
          <span class="text-xs font-mono uppercase tracking-wider text-slate-400 block mb-1">Account Verification Status</span>
          <div class="flex items-center gap-2 mt-1">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-mono font-semibold bg-amber-500/15 text-amber-400 border border-amber-400/30">
              <i data-lucide="clock" class="w-3.5 h-3.5"></i>
              <span>Pending Verification</span>
            </span>
          </div>
          <p class="text-[11px] text-slate-400 mt-1.5 leading-relaxed">
            Our onboarding desk will verify your details within 2-4 hours. You can already submit leads and explore partner marketing assets!
          </p>
        </div>
      </div>

      <!-- Referral Link Box -->
      <div class="pt-6 space-y-4">
        <div>
          <label class="text-xs font-mono uppercase tracking-wider text-slate-300 block mb-2">
            Your Dedicated Client Referral Link
          </label>
          <div class="flex flex-col sm:flex-row items-stretch gap-2">
            <input 
              type="text" 
              readonly 
              value="<?php echo htmlspecialchars($refUrlHome); ?>" 
              id="refLinkInput" 
              class="w-full px-4 py-3 rounded-xl bg-navy-950/80 border border-white/15 text-slate-200 text-xs sm:text-sm font-mono select-all focus:outline-none"
            >
            <button 
              type="button" 
              onclick="copyRefLink()" 
              class="px-5 py-3 rounded-xl bg-white/10 hover:bg-white/15 text-white font-medium text-xs sm:text-sm shrink-0 flex items-center justify-center gap-1.5 transition-colors border border-white/10"
            >
              <i data-lucide="copy" class="w-4 h-4"></i>
              <span id="copyBtnText">Copy Link</span>
            </button>
            <a 
              href="<?php echo $waShareUrl; ?>" 
              target="_blank" 
              rel="noopener noreferrer" 
              class="px-5 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-medium text-xs sm:text-sm shrink-0 flex items-center justify-center gap-2 transition-all shadow-lg shadow-emerald-600/30"
            >
              <i data-lucide="share-2" class="w-4 h-4"></i>
              <span>Share on WhatsApp</span>
            </a>
          </div>
        </div>

        <div class="p-3.5 rounded-2xl bg-white/[0.03] border border-white/5 text-xs text-slate-300 flex items-start gap-2.5">
          <i data-lucide="info" class="w-4 h-4 text-electric-400 shrink-0 mt-0.5"></i>
          <span>
            Every client who visits your link is automatically tracked. Whenever they request a quote or project, you earn <strong>15% to 25% commission</strong> upon project milestones!
          </span>
        </div>
      </div>
    </div>

    <!-- Next Steps Checklist -->
    <div class="bg-navy-900/40 border border-white/10 rounded-3xl p-6 sm:p-8 mb-8 space-y-4">
      <h3 class="text-lg font-display font-bold text-white flex items-center gap-2">
        <i data-lucide="check-square" class="w-5 h-5 text-electric-400"></i>
        <span>Recommended Next Steps:</span>
      </h3>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs">
        <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/5 space-y-2">
          <div class="w-7 h-7 rounded-lg bg-electric-500/20 text-electric-400 flex items-center justify-center font-mono font-bold">1</div>
          <div class="font-semibold text-white">Access Dashboard</div>
          <p class="text-slate-400">View real-time lead analytics, track commission balances, and update your bank details.</p>
        </div>
        <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/5 space-y-2">
          <div class="w-7 h-7 rounded-lg bg-amber-500/20 text-amber-400 flex items-center justify-center font-mono font-bold">2</div>
          <div class="font-semibold text-white">Fast-Track Verification</div>
          <p class="text-slate-400">Send a quick WhatsApp ping to our onboarding lead to accelerate your account verification.</p>
        </div>
        <div class="p-4 rounded-2xl bg-white/[0.02] border border-white/5 space-y-2">
          <div class="w-7 h-7 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-mono font-bold">3</div>
          <div class="font-semibold text-white">Download Shop Poster</div>
          <p class="text-slate-400">Print the A3/A4 "Digital Services Available Here" poster to display in your shopfront.</p>
        </div>
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-4">
      <a 
        href="partner-dashboard.php" 
        class="px-8 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-electric-600 to-blue-700 hover:from-electric-500 hover:to-blue-600 shadow-xl shadow-electric-600/30 transition-all flex items-center justify-center gap-2"
      >
        <span>Open Partner Dashboard</span>
        <i data-lucide="arrow-right" class="w-4 h-4"></i>
      </a>

      <?php
      $waVerifyMsg = "Hi YUKT Team, I have registered as a Partner!\nPartner ID: " . $partnerCode . "\nName: " . $partnerName . "\nShop: " . $partnerShop . "\nPlease verify my account.";
      $waVerifyUrl = getWhatsAppUrl($waVerifyMsg);
      ?>
      <a 
        href="<?php echo $waVerifyUrl; ?>" 
        target="_blank" 
        rel="noopener noreferrer" 
        class="px-8 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-yukt-orange to-amber-600 hover:from-yukt-orangeLight hover:to-yukt-orange shadow-xl shadow-yukt-orange/25 transition-all flex items-center justify-center gap-2"
      >
        <i data-lucide="message-circle" class="w-4 h-4"></i>
        <span>Fast-Track via WhatsApp Desk</span>
      </a>
    </div>

  </div>
</div>

<script>
function copyRefLink() {
  const input = document.getElementById('refLinkInput');
  input.select();
  input.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(input.value).then(() => {
    const btn = document.getElementById('copyBtnText');
    btn.textContent = 'Copied!';
    setTimeout(() => { btn.textContent = 'Copy Link'; }, 2000);
  });
}
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
