<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/services-catalogue-data.php';

// Auth Guard
if (!isset($_SESSION['partner_id'])) {
    header('Location: partner-login.php');
    exit;
}

$partnerId = $_SESSION['partner_id'];
$partner = null;

if ($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM partners WHERE id = :id LIMIT 1");
    $stmt->execute([':id' => $partnerId]);
    $partner = $stmt->fetch();
}

if (!$partner) {
    // Session invalidated
    session_destroy();
    header('Location: partner-login.php');
    exit;
}

$partnerCode = $partner['partner_code'];
$partnerStatus = $partner['status']; // pending_verification, verified, active, suspended

// Fetch Referrals Data
$referrals = [];
$totalReferrals = 0;
$pendingReferrals = 0;
$convertedReferrals = 0;

if ($pdo) {
    $refStmt = $pdo->prepare("SELECT * FROM partner_referrals WHERE partner_code = :c ORDER BY created_at DESC");
    $refStmt->execute([':c' => $partnerCode]);
    $referrals = $refStmt->fetchAll();
    $totalReferrals = count($referrals);
    foreach ($referrals as $r) {
        if ($r['conversion_status'] === 'converted') {
            $convertedReferrals++;
        } elseif ($r['conversion_status'] === 'lead_submitted' || $r['conversion_status'] === 'visited') {
            $pendingReferrals++;
        }
    }
}

// Fetch Enquiries Data
$enquiries = [];
if ($pdo) {
    $enqStmt = $pdo->prepare("SELECT * FROM partner_enquiries WHERE partner_id = :pid OR partner_code = :c ORDER BY created_at DESC");
    $enqStmt->execute([':pid' => $partnerId, ':c' => $partnerCode]);
    $enquiries = $enqStmt->fetchAll();
}

// Fetch Commissions Data
$commissions = [];
$approvedCommission = 0.00;
$pendingCommission = 0.00;
$paidCommission = 0.00;

if ($pdo) {
    $commStmt = $pdo->prepare("SELECT * FROM partner_commissions WHERE partner_id = :pid ORDER BY created_at DESC");
    $commStmt->execute([':pid' => $partnerId]);
    $commissions = $commStmt->fetchAll();

    foreach ($commissions as $c) {
        $val = floatval($c['amount']);
        if ($c['status'] === 'paid') {
            $paidCommission += $val;
        } elseif ($c['status'] === 'approved') {
            $approvedCommission += $val;
        } else {
            $pendingCommission += $val;
        }
    }

    // Also count potential commission from enquiries table
    foreach ($enquiries as $enq) {
        $commAmt = floatval($enq['commission_amount']);
        if ($commAmt > 0 && empty($commissions)) {
            if ($enq['commission_status'] === 'paid') {
                $paidCommission += $commAmt;
            } elseif ($enq['commission_status'] === 'approved') {
                $approvedCommission += $commAmt;
            } else {
                $pendingCommission += $commAmt;
            }
        }
    }
}

// Fetch Support Tickets
$tickets = [];
if ($pdo) {
    $tickStmt = $pdo->prepare("SELECT * FROM partner_support_tickets WHERE partner_id = :pid ORDER BY created_at DESC");
    $tickStmt->execute([':pid' => $partnerId]);
    $tickets = $tickStmt->fetchAll();
}

// Referral URLs & Messaging
$refUrlHome = COMPANY_URL . '/?ref=' . urlencode($partnerCode);
$refUrlPartner = COMPANY_URL . '/partner.php?ref=' . urlencode($partnerCode);
$refUrlServices = COMPANY_URL . '/service-catalogue.php?ref=' . urlencode($partnerCode);

$shareMessage = "Namaste! Agar aapko Website Development, Software, Business Automation, Professional Document Services ya Digital Marketing ki zarurat hai, to YUKT IT SOLUTIONS se contact kar sakte hain.\n\nYUKT Digital Partner Program ke through aap bhi apne area mein digital services ka business expand kar sakte hain.\n\nExplore: " . $refUrlHome;
$waShareUrl = 'https://api.whatsapp.com/send?text=' . rawurlencode($shareMessage);
$fbShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($refUrlHome);
$tgShareUrl = 'https://t.me/share/url?url=' . urlencode($refUrlHome) . '&text=' . rawurlencode($shareMessage);
$emailShareUrl = 'mailto:?subject=' . rawurlencode('Explore Digital & IT Solutions from YUKT') . '&body=' . rawurlencode($shareMessage);

$catalogueCategories = getCatalogueCategories();
$allCatalogueServices = getCatalogueServices();

$pageTitle = 'Partner Dashboard | YUKT IT SOLUTIONS';
$pageDesc = 'Manage your referrals, customer project enquiries, commission ledger, and support tickets in the YUKT Digital Partner Portal.';
$activePage = 'partner';

require_once __DIR__ . '/includes/header.php';
?>

<div class="min-h-screen bg-navy-950 bg-grid-dark text-slate-100 pt-28 pb-20 px-4 sm:px-6 lg:px-10">
  <div class="max-w-7xl mx-auto space-y-8">
    
    <!-- Top Header Bar with Partner Identity & Verification Status -->
    <div class="bg-navy-900/90 border border-white/15 rounded-3xl p-6 sm:p-8 backdrop-blur-xl shadow-2xl relative overflow-hidden flex flex-col md:flex-row md:items-center md:justify-between gap-6">
      <div class="absolute -top-24 -right-24 w-72 h-72 bg-electric-500/10 rounded-full blur-3xl pointer-events-none"></div>

      <div class="space-y-2">
        <div class="flex flex-wrap items-center gap-3">
          <span class="font-mono text-xs uppercase px-3 py-1 rounded-full bg-electric-500/15 text-electric-400 border border-electric-400/30">
            Partner Portal
          </span>
          
          <?php if ($partnerStatus === 'verified' || $partnerStatus === 'active'): ?>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-mono font-semibold bg-emerald-500/15 text-emerald-400 border border-emerald-400/30">
              <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
              Verified Partner
            </span>
          <?php else: ?>
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-mono font-semibold bg-amber-500/15 text-amber-400 border border-amber-400/30">
              <i data-lucide="clock" class="w-3.5 h-3.5"></i>
              Pending Verification
            </span>
          <?php endif; ?>

          <span class="text-xs font-mono text-slate-400">
            Shop: <strong class="text-white"><?php echo htmlspecialchars($partner['shop_name']); ?></strong> (<?php echo htmlspecialchars($partner['business_type']); ?>)
          </span>
        </div>

        <h1 class="text-2xl sm:text-3xl font-display font-bold text-white tracking-tight">
          Hello, <span class="text-gradient-electric"><?php echo htmlspecialchars($partner['full_name']); ?></span>
        </h1>
        <p class="text-xs sm:text-sm text-slate-400">
          Partner ID: <strong class="text-electric-400 font-mono text-base tracking-wider"><?php echo htmlspecialchars($partnerCode); ?></strong> &bull; Location: <?php echo htmlspecialchars($partner['city'] . ', ' . $partner['state']); ?>
        </p>
      </div>

      <!-- Quick Action / Switch / Logout -->
      <div class="flex flex-wrap items-center gap-3">
        <a 
          href="service-catalogue.php" 
          class="px-4 py-2.5 rounded-xl text-xs font-semibold text-slate-200 bg-white/5 hover:bg-white/10 border border-white/10 transition-colors flex items-center gap-1.5"
        >
          <i data-lucide="book-open" class="w-4 h-4 text-electric-400"></i>
          <span>140+ Services Directory</span>
        </a>

        <a 
          href="partner-logout.php" 
          class="px-4 py-2.5 rounded-xl text-xs font-semibold text-rose-300 bg-rose-500/10 hover:bg-rose-500/20 border border-rose-500/20 transition-colors flex items-center gap-1.5"
        >
          <i data-lucide="log-out" class="w-4 h-4"></i>
          <span>Logout</span>
        </a>
      </div>
    </div>

    <!-- Notice for Pending Verification -->
    <?php if ($partnerStatus === 'pending_verification'): ?>
      <div class="p-4 sm:p-5 rounded-2xl bg-amber-500/10 border border-amber-400/25 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="flex items-start gap-3">
          <div class="w-8 h-8 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center shrink-0 mt-0.5">
            <i data-lucide="shield-alert" class="w-4 h-4"></i>
          </div>
          <div>
            <div class="text-sm font-semibold text-white">Application Under Review (Verification Pending)</div>
            <p class="text-xs text-slate-300 mt-0.5">
              Your partner account is being reviewed by the YUKT technical onboarding desk. You can already explore 140+ services, share your referral link, and submit customer project inquiries! Payout withdrawals will be enabled once your business credentials are verified.
            </p>
          </div>
        </div>
        <a 
          href="<?php echo getWhatsAppUrl('Hi YUKT Team, please fast-track the verification for my Partner ID ' . $partnerCode . ' (' . $partner['shop_name'] . ').'); ?>" 
          target="_blank" 
          rel="noopener noreferrer" 
          class="px-4 py-2 rounded-xl text-xs font-semibold text-amber-900 bg-amber-400 hover:bg-amber-300 transition-colors shrink-0 flex items-center justify-center gap-1.5"
        >
          <i data-lucide="zap" class="w-3.5 h-3.5"></i>
          <span>Fast-Track on WhatsApp</span>
        </a>
      </div>
    <?php endif; ?>

    <!-- Navigation Tabs -->
    <div class="flex flex-wrap items-center gap-2 border-b border-white/10 pb-2">
      <button type="button" onclick="switchTab('overview')" id="tabBtn-overview" class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all text-white bg-electric-600 shadow-lg shadow-electric-600/30 flex items-center gap-2">
        <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
        <span>Overview</span>
      </button>
      <button type="button" onclick="switchTab('referrals')" id="tabBtn-referrals" class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all text-slate-400 hover:text-white hover:bg-white/5 flex items-center gap-2">
        <i data-lucide="share-2" class="w-4 h-4"></i>
        <span>Referral &amp; Share</span>
      </button>
      <button type="button" onclick="switchTab('enquiries')" id="tabBtn-enquiries" class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all text-slate-400 hover:text-white hover:bg-white/5 flex items-center gap-2">
        <i data-lucide="send" class="w-4 h-4"></i>
        <span>Submit Client Enquiry</span>
      </button>
      <button type="button" onclick="switchTab('commissions')" id="tabBtn-commissions" class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all text-slate-400 hover:text-white hover:bg-white/5 flex items-center gap-2">
        <i data-lucide="wallet" class="w-4 h-4"></i>
        <span>Commission Ledger</span>
      </button>
      <button type="button" onclick="switchTab('profile')" id="tabBtn-profile" class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all text-slate-400 hover:text-white hover:bg-white/5 flex items-center gap-2">
        <i data-lucide="user-check" class="w-4 h-4"></i>
        <span>Profile &amp; Bank</span>
      </button>
      <button type="button" onclick="switchTab('support')" id="tabBtn-support" class="tab-btn px-4 py-2.5 rounded-xl text-xs sm:text-sm font-semibold transition-all text-slate-400 hover:text-white hover:bg-white/5 flex items-center gap-2">
        <i data-lucide="help-circle" class="w-4 h-4"></i>
        <span>Support &amp; Toolkit</span>
      </button>
    </div>

    <!-- ====================================================================
         TAB 1: OVERVIEW
    ==================================================================== -->
    <div id="tab-overview" class="tab-content space-y-8">
      
      <!-- 6 Stat Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        
        <!-- Total Referrals -->
        <div class="bg-navy-900/60 border border-white/10 rounded-2xl p-5 hover:border-electric-400/40 transition-colors">
          <div class="flex items-center justify-between">
            <span class="text-xs font-mono text-slate-400 uppercase tracking-wider">Total Referral Clicks</span>
            <div class="w-9 h-9 rounded-xl bg-electric-500/15 text-electric-400 flex items-center justify-center">
              <i data-lucide="mouse-pointer" class="w-4 h-4"></i>
            </div>
          </div>
          <div class="text-3xl font-display font-bold text-white mt-3"><?php echo $totalReferrals; ?></div>
          <div class="text-[11px] text-slate-400 mt-1">Visitors tracked via your unique link</div>
        </div>

        <!-- Pending Referrals / Leads -->
        <div class="bg-navy-900/60 border border-white/10 rounded-2xl p-5 hover:border-amber-400/40 transition-colors">
          <div class="flex items-center justify-between">
            <span class="text-xs font-mono text-slate-400 uppercase tracking-wider">Active Client Inquiries</span>
            <div class="w-9 h-9 rounded-xl bg-amber-500/15 text-amber-400 flex items-center justify-center">
              <i data-lucide="hourglass" class="w-4 h-4"></i>
            </div>
          </div>
          <div class="text-3xl font-display font-bold text-amber-400 mt-3"><?php echo count($enquiries); ?></div>
          <div class="text-[11px] text-slate-400 mt-1">Projects submitted for scoping &amp; quotes</div>
        </div>

        <!-- Converted Referrals -->
        <div class="bg-navy-900/60 border border-white/10 rounded-2xl p-5 hover:border-emerald-400/40 transition-colors">
          <div class="flex items-center justify-between">
            <span class="text-xs font-mono text-slate-400 uppercase tracking-wider">Converted Projects</span>
            <div class="w-9 h-9 rounded-xl bg-emerald-500/15 text-emerald-400 flex items-center justify-center">
              <i data-lucide="check-circle" class="w-4 h-4"></i>
            </div>
          </div>
          <div class="text-3xl font-display font-bold text-emerald-400 mt-3"><?php echo $convertedReferrals; ?></div>
          <div class="text-[11px] text-slate-400 mt-1">Successful commercial projects executed</div>
        </div>

        <!-- Approved Commission -->
        <div class="bg-navy-900/60 border border-white/10 rounded-2xl p-5 hover:border-emerald-400/40 transition-colors">
          <div class="flex items-center justify-between">
            <span class="text-xs font-mono text-slate-400 uppercase tracking-wider">Approved Commission</span>
            <div class="w-9 h-9 rounded-xl bg-emerald-500/15 text-emerald-400 flex items-center justify-center">
              <i data-lucide="badge-percent" class="w-4 h-4"></i>
            </div>
          </div>
          <div class="text-3xl font-display font-bold text-emerald-400 mt-3">₹<?php echo number_format($approvedCommission, 2); ?></div>
          <div class="text-[11px] text-slate-400 mt-1">Ready for settlement payout</div>
        </div>

        <!-- Pending Commission -->
        <div class="bg-navy-900/60 border border-white/10 rounded-2xl p-5 hover:border-amber-400/40 transition-colors">
          <div class="flex items-center justify-between">
            <span class="text-xs font-mono text-slate-400 uppercase tracking-wider">Pending Commission</span>
            <div class="w-9 h-9 rounded-xl bg-amber-500/15 text-amber-400 flex items-center justify-center">
              <i data-lucide="clock" class="w-4 h-4"></i>
            </div>
          </div>
          <div class="text-3xl font-display font-bold text-amber-400 mt-3">₹<?php echo number_format($pendingCommission, 2); ?></div>
          <div class="text-[11px] text-slate-400 mt-1">Under project milestone execution</div>
        </div>

        <!-- Paid Commission -->
        <div class="bg-navy-900/60 border border-white/10 rounded-2xl p-5 hover:border-electric-400/40 transition-colors">
          <div class="flex items-center justify-between">
            <span class="text-xs font-mono text-slate-400 uppercase tracking-wider">Total Paid Out</span>
            <div class="w-9 h-9 rounded-xl bg-electric-500/15 text-electric-400 flex items-center justify-center">
              <i data-lucide="credit-card" class="w-4 h-4"></i>
            </div>
          </div>
          <div class="text-3xl font-display font-bold text-white mt-3">₹<?php echo number_format($paidCommission, 2); ?></div>
          <div class="text-[11px] text-slate-400 mt-1">Disbursed directly to your Bank / UPI</div>
        </div>

      </div>

      <!-- Quick Referral Share Banner -->
      <div class="bg-gradient-to-r from-electric-950/70 via-navy-900/90 to-slate-900/80 border border-electric-500/30 rounded-3xl p-6 sm:p-8 relative overflow-hidden shadow-xl">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
          <div class="space-y-2 max-w-xl">
            <span class="text-xs font-mono uppercase tracking-wider text-electric-400">Instant Client Referral Link</span>
            <h3 class="text-xl sm:text-2xl font-display font-bold text-white">Share YUKT with Local Clients</h3>
            <p class="text-xs sm:text-sm text-slate-300">
              When walk-in customers or business contacts visit your link, all their inquiries are tagged to your Partner ID.
            </p>
            <div class="pt-2 flex items-center gap-2">
              <input type="text" readonly value="<?php echo htmlspecialchars($refUrlHome); ?>" id="quickRefInput" class="px-3.5 py-2 rounded-xl bg-navy-950 border border-white/15 text-slate-300 font-mono text-xs w-full max-w-md select-all">
              <button type="button" onclick="navigator.clipboard.writeText('<?php echo $refUrlHome; ?>'); alert('Referral link copied!');" class="px-4 py-2 rounded-xl bg-electric-600 hover:bg-electric-500 text-white font-medium text-xs shrink-0 transition-colors">
                Copy
              </button>
            </div>
          </div>

          <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0">
            <a href="<?php echo $waShareUrl; ?>" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs sm:text-sm flex items-center justify-center gap-2 shadow-lg shadow-emerald-600/25 transition-all">
              <i data-lucide="share-2" class="w-4 h-4"></i>
              <span>WhatsApp Share</span>
            </a>
            <button type="button" onclick="switchTab('enquiries')" class="w-full sm:w-auto px-5 py-3 rounded-xl bg-white/10 hover:bg-white/15 text-white font-semibold text-xs sm:text-sm flex items-center justify-center gap-2 transition-colors border border-white/10">
              <i data-lucide="plus-circle" class="w-4 h-4"></i>
              <span>Submit Direct Lead</span>
            </button>
          </div>
        </div>
      </div>

      <!-- Recent Customer Enquiries Quick Table -->
      <div class="bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-4">
        <div class="flex items-center justify-between">
          <h3 class="text-lg font-display font-bold text-white flex items-center gap-2">
            <i data-lucide="list" class="w-5 h-5 text-electric-400"></i>
            <span>Recent Client Enquiries</span>
          </h3>
          <button type="button" onclick="switchTab('enquiries')" class="text-xs text-electric-400 hover:text-electric-300 font-medium">
            View All &amp; Submit New &rarr;
          </button>
        </div>

        <?php if (empty($enquiries)): ?>
          <div class="text-center py-12 space-y-3">
            <div class="w-12 h-12 rounded-2xl bg-white/5 flex items-center justify-center text-slate-500 mx-auto">
              <i data-lucide="inbox" class="w-6 h-6"></i>
            </div>
            <p class="text-sm text-slate-400">No client enquiries submitted yet.</p>
            <button type="button" onclick="switchTab('enquiries')" class="px-4 py-2 rounded-xl text-xs font-semibold text-white bg-electric-600 hover:bg-electric-500 transition-colors">
              Submit Your First Client Lead
            </button>
          </div>
        <?php else: ?>
          <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
              <thead class="text-[11px] font-mono uppercase tracking-wider text-slate-400 border-b border-white/10">
                <tr>
                  <th class="pb-3">Tracking Code</th>
                  <th class="pb-3">Client Name</th>
                  <th class="pb-3">Service</th>
                  <th class="pb-3">Status</th>
                  <th class="pb-3">Project Value</th>
                  <th class="pb-3">Commission</th>
                  <th class="pb-3">Date</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-white/5 text-slate-300">
                <?php foreach (array_slice($enquiries, 0, 5) as $enq): ?>
                  <tr class="hover:bg-white/[0.02]">
                    <td class="py-3 font-mono font-semibold text-electric-400"><?php echo htmlspecialchars($enq['tracking_code']); ?></td>
                    <td class="py-3 font-medium text-white"><?php echo htmlspecialchars($enq['customer_name']); ?></td>
                    <td class="py-3"><?php echo htmlspecialchars($enq['service_item']); ?></td>
                    <td class="py-3">
                      <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono uppercase font-semibold
                        <?php 
                          switch($enq['status']) {
                            case 'completed': echo 'bg-emerald-500/15 text-emerald-400 border border-emerald-400/30'; break;
                            case 'in_progress': echo 'bg-blue-500/15 text-blue-400 border border-blue-400/30'; break;
                            case 'quoted': echo 'bg-amber-500/15 text-amber-400 border border-amber-400/30'; break;
                            default: echo 'bg-slate-500/15 text-slate-300 border border-slate-400/30';
                          }
                        ?>">
                        <?php echo htmlspecialchars($enq['status']); ?>
                      </span>
                    </td>
                    <td class="py-3 font-mono">₹<?php echo number_format($enq['project_value'], 2); ?></td>
                    <td class="py-3 font-mono font-semibold text-emerald-400">₹<?php echo number_format($enq['commission_amount'], 2); ?></td>
                    <td class="py-3 font-mono text-slate-400"><?php echo date('d M Y', strtotime($enq['created_at'])); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php endif; ?>
      </div>

    </div>

    <!-- ====================================================================
         TAB 2: REFERRAL & SHARE SYSTEM
    ==================================================================== -->
    <div id="tab-referrals" class="tab-content hidden space-y-8">
      
      <div class="bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-6">
        <div>
          <span class="text-xs font-mono uppercase tracking-wider text-electric-400">Core Feature</span>
          <h2 class="text-2xl font-display font-bold text-white tracking-tight mt-1">
            Referral &amp; Multi-Channel Share Engine
          </h2>
          <p class="text-xs sm:text-sm text-slate-300 mt-1 max-w-2xl">
            Promote your partner links via WhatsApp groups, Facebook, Telegram, and walk-in posters. When a customer registers or orders services, you earn guaranteed commissions.
          </p>
        </div>

        <!-- Links Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/10 space-y-2">
            <span class="text-xs font-mono text-electric-400 uppercase font-semibold">1. Main Homepage Link</span>
            <input type="text" readonly value="<?php echo htmlspecialchars($refUrlHome); ?>" class="w-full px-3 py-2 rounded-xl bg-navy-950 border border-white/15 text-slate-300 text-xs font-mono select-all">
            <button type="button" onclick="navigator.clipboard.writeText('<?php echo $refUrlHome; ?>'); alert('Homepage referral link copied!');" class="w-full py-2 rounded-lg bg-white/10 hover:bg-white/15 text-xs text-white transition-colors">
              Copy Homepage Link
            </button>
          </div>

          <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/10 space-y-2">
            <span class="text-xs font-mono text-electric-400 uppercase font-semibold">2. Service Directory Link</span>
            <input type="text" readonly value="<?php echo htmlspecialchars($refUrlServices); ?>" class="w-full px-3 py-2 rounded-xl bg-navy-950 border border-white/15 text-slate-300 text-xs font-mono select-all">
            <button type="button" onclick="navigator.clipboard.writeText('<?php echo $refUrlServices; ?>'); alert('Catalogue link copied!');" class="w-full py-2 rounded-lg bg-white/10 hover:bg-white/15 text-xs text-white transition-colors">
              Copy 140+ Services Link
            </button>
          </div>

          <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/10 space-y-2">
            <span class="text-xs font-mono text-electric-400 uppercase font-semibold">3. Partner Invite Link</span>
            <input type="text" readonly value="<?php echo htmlspecialchars($refUrlPartner); ?>" class="w-full px-3 py-2 rounded-xl bg-navy-950 border border-white/15 text-slate-300 text-xs font-mono select-all">
            <button type="button" onclick="navigator.clipboard.writeText('<?php echo $refUrlPartner; ?>'); alert('Partner registration link copied!');" class="w-full py-2 rounded-lg bg-white/10 hover:bg-white/15 text-xs text-white transition-colors">
              Copy Partner Invite Link
            </button>
          </div>
        </div>

        <!-- Social Share Buttons -->
        <div class="pt-2">
          <label class="text-xs font-mono uppercase tracking-wider text-slate-400 block mb-3">1-Click Social Sharing</label>
          <div class="flex flex-wrap items-center gap-3">
            <a href="<?php echo $waShareUrl; ?>" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-semibold flex items-center gap-2 shadow-lg shadow-emerald-600/25 transition-all">
              <i data-lucide="message-circle" class="w-4 h-4"></i>
              <span>WhatsApp</span>
            </a>

            <a href="<?php echo $fbShareUrl; ?>" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 rounded-xl bg-blue-600 hover:bg-blue-500 text-white text-xs font-semibold flex items-center gap-2 transition-all">
              <i data-lucide="facebook" class="w-4 h-4"></i>
              <span>Facebook</span>
            </a>

            <a href="<?php echo $tgShareUrl; ?>" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 rounded-xl bg-sky-600 hover:bg-sky-500 text-white text-xs font-semibold flex items-center gap-2 transition-all">
              <i data-lucide="send" class="w-4 h-4"></i>
              <span>Telegram</span>
            </a>

            <a href="<?php echo $emailShareUrl; ?>" class="px-5 py-2.5 rounded-xl bg-slate-700 hover:bg-slate-600 text-white text-xs font-semibold flex items-center gap-2 transition-all">
              <i data-lucide="mail" class="w-4 h-4"></i>
              <span>Email</span>
            </a>

            <?php if (true): ?>
              <button type="button" onclick="if(navigator.share){navigator.share({title:'YUKT IT SOLUTIONS',text:'<?php echo addslashes($shareMessage); ?>',url:'<?php echo $refUrlHome; ?>'});}else{alert('Native share not supported on this browser. Use WhatsApp or Copy Link.');}" class="px-5 py-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-white text-xs font-semibold flex items-center gap-2 border border-white/10 transition-all">
                <i data-lucide="share" class="w-4 h-4"></i>
                <span>Native Share</span>
              </button>
            <?php endif; ?>
          </div>
        </div>

        <!-- Pre-written Hindi/Hinglish Pitch Text -->
        <div class="pt-4 border-t border-white/10 space-y-2">
          <label class="text-xs font-mono uppercase tracking-wider text-slate-400 block">Pre-Written Hindi/Hinglish Promotional Message</label>
          <div class="relative">
            <textarea id="sharePitchText" readonly rows="5" class="w-full p-4 rounded-2xl bg-navy-950/90 border border-white/15 text-slate-200 text-xs sm:text-sm font-sans leading-relaxed select-all"><?php echo htmlspecialchars($shareMessage); ?></textarea>
            <button type="button" onclick="navigator.clipboard.writeText(document.getElementById('sharePitchText').value); alert('Promotional message copied!');" class="absolute top-3 right-3 px-3 py-1.5 rounded-lg bg-electric-600 hover:bg-electric-500 text-white text-[11px] font-semibold transition-colors flex items-center gap-1">
              <i data-lucide="copy" class="w-3.5 h-3.5"></i>
              <span>Copy Text</span>
            </button>
          </div>
        </div>

      </div>

      <!-- Referral Visitor Logs Table -->
      <div class="bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-4">
        <h3 class="text-lg font-display font-bold text-white flex items-center gap-2">
          <i data-lucide="activity" class="w-5 h-5 text-electric-400"></i>
          <span>Referral Visitor &amp; Lead Logs</span>
        </h3>

        <?php if (empty($referrals)): ?>
          <div class="text-center py-8 text-xs text-slate-400">
            No visitor clicks recorded yet. Share your referral link above to start generating leads!
          </div>
        <?php else: ?>
          <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
              <thead class="text-[11px] font-mono uppercase tracking-wider text-slate-400 border-b border-white/10">
                <tr>
                  <th class="pb-3">Date &amp; Time</th>
                  <th class="pb-3">Client / Visitor</th>
                  <th class="pb-3">Contact</th>
                  <th class="pb-3">Status</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-white/5 text-slate-300">
                <?php foreach ($referrals as $ref): ?>
                  <tr class="hover:bg-white/[0.02]">
                    <td class="py-3 font-mono text-slate-400"><?php echo date('d M Y, h:i A', strtotime($ref['created_at'])); ?></td>
                    <td class="py-3 font-medium text-white"><?php echo htmlspecialchars($ref['referred_client_name'] ?? 'Website Visitor'); ?></td>
                    <td class="py-3 font-mono"><?php echo htmlspecialchars($ref['referred_client_phone'] ?? '—'); ?></td>
                    <td class="py-3">
                      <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono uppercase font-semibold
                        <?php 
                          switch($ref['conversion_status']) {
                            case 'converted': echo 'bg-emerald-500/15 text-emerald-400 border border-emerald-400/30'; break;
                            case 'lead_submitted': echo 'bg-blue-500/15 text-blue-400 border border-blue-400/30'; break;
                            default: echo 'bg-slate-500/15 text-slate-400 border border-slate-500/30';
                          }
                        ?>">
                        <?php echo htmlspecialchars($ref['conversion_status']); ?>
                      </span>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php endif; ?>
      </div>

    </div>

    <!-- ====================================================================
         TAB 3: SUBMIT CLIENT ENQUIRY
    ==================================================================== -->
    <div id="tab-enquiries" class="tab-content hidden space-y-8">
      
      <div class="bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-6">
        <div>
          <span class="text-xs font-mono uppercase tracking-wider text-electric-400">Direct Fulfillment</span>
          <h2 class="text-2xl font-display font-bold text-white tracking-tight mt-1">
            Submit Customer Project Enquiry
          </h2>
          <p class="text-xs sm:text-sm text-slate-300 mt-1 max-w-2xl">
            Have a walk-in client or local business requesting a website, software, document service, or marketing? Fill out the details below. Our technical engineering team will review requirements, prepare the estimate, and fulfill the project.
          </p>
        </div>

        <form id="partnerEnquiryForm" enctype="multipart/form-data" class="space-y-4">
          <input type="hidden" name="partner_code" value="<?php echo htmlspecialchars($partnerCode); ?>">
          
          <div id="enquiryFormFeedback" class="hidden p-3.5 rounded-xl text-xs"></div>

          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1.5">
                Client Name <span class="text-yukt-orange">*</span>
              </label>
              <input type="text" name="customer_name" required placeholder="e.g. Ramesh Verma" class="w-full px-4 py-3 rounded-xl bg-navy-950 border border-white/15 text-slate-100 placeholder-slate-500 text-sm focus:border-electric-400 focus:outline-none">
            </div>

            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1.5">
                Client Mobile / WhatsApp <span class="text-yukt-orange">*</span>
              </label>
              <input type="tel" name="customer_phone" required placeholder="+91 98765 43210" class="w-full px-4 py-3 rounded-xl bg-navy-950 border border-white/15 text-slate-100 placeholder-slate-500 text-sm focus:border-electric-400 focus:outline-none">
            </div>

            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1.5">
                Client Email Address (Optional)
              </label>
              <input type="email" name="customer_email" placeholder="client@gmail.com" class="w-full px-4 py-3 rounded-xl bg-navy-950 border border-white/15 text-slate-100 placeholder-slate-500 text-sm focus:border-electric-400 focus:outline-none">
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1.5">
                Service Category <span class="text-yukt-orange">*</span>
              </label>
              <select id="enqCategorySelect" name="service_category" required onchange="populateSubServices(this.value)" class="w-full px-4 py-3 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-sm focus:border-electric-400 focus:outline-none">
                <option value="">Select Service Category</option>
                <?php foreach ($catalogueCategories as $catId => $cat): ?>
                  <option value="<?php echo htmlspecialchars($cat['name']); ?>" data-catid="<?php echo $catId; ?>">
                    [Category <?php echo $cat['letter']; ?>] <?php echo htmlspecialchars($cat['name']); ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>

            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1.5">
                Required Service Item <span class="text-yukt-orange">*</span>
              </label>
              <select id="enqServiceSelect" name="service_item" required class="w-full px-4 py-3 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-sm focus:border-electric-400 focus:outline-none">
                <option value="">Select Category First</option>
              </select>
            </div>
          </div>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1.5">
                Estimated Client Budget
              </label>
              <select name="estimated_budget" class="w-full px-4 py-3 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-sm focus:border-electric-400 focus:outline-none">
                <option value="Under ₹5,000">Under ₹5,000 (Documents / Minor Setup)</option>
                <option value="₹5,000 - ₹15,000" selected>₹5,000 – ₹15,000 (Basic Website / Design)</option>
                <option value="₹15,000 - ₹50,000">₹15,000 – ₹50,000 (Custom Web / Software)</option>
                <option value="₹50,000 - ₹1.5 Lakh">₹50,000 – ₹1,50,000 (ERP / Mobile App)</option>
                <option value="Above ₹1.5 Lakh">Above ₹1,50,000 (Enterprise Solution)</option>
                <option value="Client is flexible">Client is flexible / Needs quote</option>
              </select>
            </div>

            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1.5">
                Upload Client File / Brief (Optional, Max 25MB)
              </label>
              <input type="file" name="attachment" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.txt,.rtf,.png,.jpg,.jpeg,.webp,.zip,.rar" class="w-full px-4 py-2.5 rounded-xl bg-navy-950 border border-white/15 text-slate-300 text-xs file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-electric-600 file:text-white hover:file:bg-electric-500">
              <span class="text-[11px] text-slate-500 mt-1 block">Accepts Word, Excel, PDF, Images, Scans, and Zip files.</span>
            </div>
          </div>

          <div>
            <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1.5">
              Project Description &amp; Specific Customer Notes <span class="text-yukt-orange">*</span>
            </label>
            <textarea name="project_description" required rows="4" placeholder="Detail what the customer is asking for (e.g. Needs a 5-page school website with fee collection; or needs English to Hindi translation of 10 pages; or needs restaurant billing software)..." class="w-full px-4 py-3 rounded-xl bg-navy-950 border border-white/15 text-slate-100 placeholder-slate-500 text-sm focus:border-electric-400 focus:outline-none"></textarea>
          </div>

          <button type="submit" id="submitEnquiryBtn" class="px-8 py-3.5 rounded-xl font-display font-semibold text-sm text-white bg-gradient-to-r from-electric-600 to-blue-700 hover:from-electric-500 hover:to-blue-600 shadow-xl shadow-electric-600/30 transition-all flex items-center justify-center gap-2">
            <span>Submit Customer Enquiry</span>
            <i data-lucide="send" class="w-4 h-4"></i>
          </button>
        </form>
      </div>

      <!-- Enquiries Tracking Table -->
      <div class="bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-4">
        <h3 class="text-lg font-display font-bold text-white flex items-center gap-2">
          <i data-lucide="inbox" class="w-5 h-5 text-electric-400"></i>
          <span>All Submitted Enquiries &amp; Status</span>
        </h3>

        <?php if (empty($enquiries)): ?>
          <div class="text-center py-8 text-xs text-slate-400">
            No customer enquiries submitted yet.
          </div>
        <?php else: ?>
          <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
              <thead class="text-[11px] font-mono uppercase tracking-wider text-slate-400 border-b border-white/10">
                <tr>
                  <th class="pb-3">Tracking</th>
                  <th class="pb-3">Client</th>
                  <th class="pb-3">Service</th>
                  <th class="pb-3">Budget</th>
                  <th class="pb-3">Status</th>
                  <th class="pb-3">Project Value</th>
                  <th class="pb-3">Commission</th>
                  <th class="pb-3">Attachment</th>
                  <th class="pb-3">Date</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-white/5 text-slate-300">
                <?php foreach ($enquiries as $enq): ?>
                  <tr class="hover:bg-white/[0.02]">
                    <td class="py-3 font-mono font-bold text-electric-400"><?php echo htmlspecialchars($enq['tracking_code']); ?></td>
                    <td class="py-3">
                      <div class="font-medium text-white"><?php echo htmlspecialchars($enq['customer_name']); ?></div>
                      <div class="text-[10px] text-slate-400 font-mono"><?php echo htmlspecialchars($enq['customer_phone']); ?></div>
                    </td>
                    <td class="py-3 max-w-[180px] truncate" title="<?php echo htmlspecialchars($enq['service_item']); ?>">
                      <?php echo htmlspecialchars($enq['service_item']); ?>
                    </td>
                    <td class="py-3 text-slate-400"><?php echo htmlspecialchars($enq['estimated_budget'] ?? '—'); ?></td>
                    <td class="py-3">
                      <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono uppercase font-semibold
                        <?php 
                          switch($enq['status']) {
                            case 'completed': echo 'bg-emerald-500/15 text-emerald-400 border border-emerald-400/30'; break;
                            case 'in_progress': echo 'bg-blue-500/15 text-blue-400 border border-blue-400/30'; break;
                            case 'quoted': echo 'bg-amber-500/15 text-amber-400 border border-amber-400/30'; break;
                            default: echo 'bg-slate-500/15 text-slate-300 border border-slate-400/30';
                          }
                        ?>">
                        <?php echo htmlspecialchars($enq['status']); ?>
                      </span>
                    </td>
                    <td class="py-3 font-mono">₹<?php echo number_format($enq['project_value'], 2); ?></td>
                    <td class="py-3 font-mono font-semibold text-emerald-400">
                      ₹<?php echo number_format($enq['commission_amount'], 2); ?>
                      <span class="text-[9px] block text-slate-400">(<?php echo htmlspecialchars($enq['commission_status']); ?>)</span>
                    </td>
                    <td class="py-3 font-mono">
                      <?php if (!empty($enq['attachment_path'])): ?>
                        <a href="<?php echo htmlspecialchars($enq['attachment_path']); ?>" target="_blank" class="text-electric-400 hover:text-electric-300 flex items-center gap-1">
                          <i data-lucide="paperclip" class="w-3.5 h-3.5"></i>
                          <span>View</span>
                        </a>
                      <?php else: ?>
                        <span class="text-slate-600">—</span>
                      <?php endif; ?>
                    </td>
                    <td class="py-3 font-mono text-slate-400"><?php echo date('d M Y', strtotime($enq['created_at'])); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php endif; ?>
      </div>

    </div>

    <!-- ====================================================================
         TAB 4: COMMISSION LEDGER
    ==================================================================== -->
    <div id="tab-commissions" class="tab-content hidden space-y-8">
      
      <div class="bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-6">
        <div>
          <span class="text-xs font-mono uppercase tracking-wider text-emerald-400">Transparent Earnings</span>
          <h2 class="text-2xl font-display font-bold text-white tracking-tight mt-1">
            Commission &amp; Payout Ledger
          </h2>
          <p class="text-xs sm:text-sm text-slate-300 mt-1 max-w-2xl">
            Review detailed accounting for every completed and in-progress client project. Commissions range from 15% to 25% of the total project milestone value.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
          <div class="p-5 rounded-2xl bg-white/[0.03] border border-white/10">
            <span class="text-xs font-mono text-slate-400 uppercase">Available for Payout</span>
            <div class="text-2xl sm:text-3xl font-display font-bold text-emerald-400 mt-2">
              ₹<?php echo number_format($approvedCommission, 2); ?>
            </div>
            <span class="text-[11px] text-slate-400 mt-1 block">Approved &amp; scheduled for bank credit</span>
          </div>

          <div class="p-5 rounded-2xl bg-white/[0.03] border border-white/10">
            <span class="text-xs font-mono text-slate-400 uppercase">Milestone Pending</span>
            <div class="text-2xl sm:text-3xl font-display font-bold text-amber-400 mt-2">
              ₹<?php echo number_format($pendingCommission, 2); ?>
            </div>
            <span class="text-[11px] text-slate-400 mt-1 block">Awaiting customer project delivery milestone</span>
          </div>

          <div class="p-5 rounded-2xl bg-white/[0.03] border border-white/10">
            <span class="text-xs font-mono text-slate-400 uppercase">Lifetime Paid Out</span>
            <div class="text-2xl sm:text-3xl font-display font-bold text-white mt-2">
              ₹<?php echo number_format($paidCommission, 2); ?>
            </div>
            <span class="text-[11px] text-slate-400 mt-1 block">Successfully transferred to your account</span>
          </div>
        </div>

        <!-- Commission Records Table -->
        <div class="space-y-4 pt-4 border-t border-white/10">
          <h3 class="text-base font-display font-bold text-white">Itemized Commission Records</h3>
          <?php if (empty($commissions)): ?>
            <div class="text-center py-8 text-xs text-slate-400">
              No historical commission disbursement records yet. Once customer projects pass verification, payouts appear here.
            </div>
          <?php else: ?>
            <div class="overflow-x-auto">
              <table class="w-full text-left text-xs">
                <thead class="text-[11px] font-mono uppercase tracking-wider text-slate-400 border-b border-white/10">
                  <tr>
                    <th class="pb-3">Project Title</th>
                    <th class="pb-3">Project Value</th>
                    <th class="pb-3">Rate</th>
                    <th class="pb-3">Commission Amount</th>
                    <th class="pb-3">Status</th>
                    <th class="pb-3">UTR / Payment Ref</th>
                    <th class="pb-3">Date</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-white/5 text-slate-300">
                  <?php foreach ($commissions as $comm): ?>
                    <tr class="hover:bg-white/[0.02]">
                      <td class="py-3 font-medium text-white"><?php echo htmlspecialchars($comm['project_title']); ?></td>
                      <td class="py-3 font-mono">₹<?php echo number_format($comm['project_value'], 2); ?></td>
                      <td class="py-3 font-mono"><?php echo number_format($comm['commission_rate'], 1); ?>%</td>
                      <td class="py-3 font-mono font-bold text-emerald-400">₹<?php echo number_format($comm['amount'], 2); ?></td>
                      <td class="py-3">
                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-mono uppercase font-semibold
                          <?php 
                            switch($comm['status']) {
                              case 'paid': echo 'bg-emerald-500/15 text-emerald-400 border border-emerald-400/30'; break;
                              case 'approved': echo 'bg-blue-500/15 text-blue-400 border border-blue-400/30'; break;
                              default: echo 'bg-amber-500/15 text-amber-400 border border-amber-400/30';
                            }
                          ?>">
                          <?php echo htmlspecialchars($comm['status']); ?>
                        </span>
                      </td>
                      <td class="py-3 font-mono text-slate-400"><?php echo htmlspecialchars($comm['transaction_ref'] ?? 'Pending Settlement'); ?></td>
                      <td class="py-3 font-mono text-slate-400"><?php echo date('d M Y', strtotime($comm['created_at'])); ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          <?php endif; ?>
        </div>

      </div>

    </div>

    <!-- ====================================================================
         TAB 5: PROFILE & BANK DETAILS
    ==================================================================== -->
    <div id="tab-profile" class="tab-content hidden space-y-8">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- Left: Partner & Shop Profile (7 Cols) -->
        <div class="lg:col-span-7 bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-5">
          <h3 class="text-lg font-display font-bold text-white flex items-center gap-2">
            <i data-lucide="store" class="w-5 h-5 text-electric-400"></i>
            <span>Shop &amp; Partner Details</span>
          </h3>

          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
            <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/5">
              <span class="text-slate-400 block font-mono">Full Name</span>
              <span class="font-semibold text-white mt-1 block"><?php echo htmlspecialchars($partner['full_name']); ?></span>
            </div>
            <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/5">
              <span class="text-slate-400 block font-mono">Shop / Business Name</span>
              <span class="font-semibold text-white mt-1 block"><?php echo htmlspecialchars($partner['shop_name']); ?></span>
            </div>
            <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/5">
              <span class="text-slate-400 block font-mono">Mobile Number</span>
              <span class="font-semibold text-white mt-1 block"><?php echo htmlspecialchars($partner['phone']); ?></span>
            </div>
            <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/5">
              <span class="text-slate-400 block font-mono">WhatsApp Number</span>
              <span class="font-semibold text-white mt-1 block"><?php echo htmlspecialchars($partner['whatsapp']); ?></span>
            </div>
            <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/5">
              <span class="text-slate-400 block font-mono">Email Address</span>
              <span class="font-semibold text-white mt-1 block"><?php echo htmlspecialchars($partner['email']); ?></span>
            </div>
            <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/5">
              <span class="text-slate-400 block font-mono">Business Category</span>
              <span class="font-semibold text-white mt-1 block"><?php echo htmlspecialchars($partner['business_type']); ?></span>
            </div>
          </div>

          <div class="p-3.5 rounded-xl bg-white/[0.02] border border-white/5 text-xs">
            <span class="text-slate-400 block font-mono">Shop Address</span>
            <span class="text-white mt-1 block leading-relaxed">
              <?php echo htmlspecialchars($partner['address'] . ', ' . $partner['city'] . ', ' . $partner['district'] . ', ' . $partner['state']); ?>
            </span>
          </div>

          <div class="pt-2 text-[11px] text-slate-400 flex items-center gap-2">
            <i data-lucide="info" class="w-4 h-4 text-electric-400 shrink-0"></i>
            <span>To modify permanent profile data (Name, Shop Name), please contact our partner verification admin.</span>
          </div>
        </div>

        <!-- Right: Payout & Bank Account Form (5 Cols) -->
        <div class="lg:col-span-5 bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-5">
          <div>
            <h3 class="text-lg font-display font-bold text-white flex items-center gap-2">
              <i data-lucide="credit-card" class="w-5 h-5 text-emerald-400"></i>
              <span>Payout &amp; Banking Details</span>
            </h3>
            <p class="text-xs text-slate-400 mt-1">
              Required for disbursing approved commissions directly to your account.
            </p>
          </div>

          <form id="payoutDetailsForm" class="space-y-4">
            <div id="payoutFormFeedback" class="hidden p-3 rounded-xl text-xs"></div>

            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1">
                UPI ID (Recommended for Fast Payout)
              </label>
              <input type="text" name="upi_id" value="<?php echo htmlspecialchars($partner['upi_id'] ?? ''); ?>" placeholder="e.g. mobile@upi, gpay, paytm" class="w-full px-3.5 py-2.5 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-xs focus:border-emerald-400 focus:outline-none">
            </div>

            <div class="pt-2 border-t border-white/10">
              <span class="text-[11px] font-mono text-slate-400 block mb-2">OR Bank Account (NEFT / IMPS)</span>
            </div>

            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1">
                Account Holder Name
              </label>
              <input type="text" name="bank_holder_name" value="<?php echo htmlspecialchars($partner['bank_holder_name'] ?? ''); ?>" placeholder="As per bank passbook" class="w-full px-3.5 py-2.5 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-xs focus:border-emerald-400 focus:outline-none">
            </div>

            <div class="grid grid-cols-2 gap-3">
              <div>
                <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1">
                  Bank Name
                </label>
                <input type="text" name="bank_name" value="<?php echo htmlspecialchars($partner['bank_name'] ?? ''); ?>" placeholder="e.g. SBI, HDFC" class="w-full px-3.5 py-2.5 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-xs focus:border-emerald-400 focus:outline-none">
              </div>

              <div>
                <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1">
                  IFSC Code
                </label>
                <input type="text" name="bank_ifsc" value="<?php echo htmlspecialchars($partner['bank_ifsc'] ?? ''); ?>" placeholder="SBIN0001234" class="w-full px-3.5 py-2.5 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-xs uppercase font-mono focus:border-emerald-400 focus:outline-none">
              </div>
            </div>

            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1">
                Bank Account Number
              </label>
              <input type="text" name="bank_account_no" value="<?php echo htmlspecialchars($partner['bank_account_no'] ?? ''); ?>" placeholder="••••••••••••••" class="w-full px-3.5 py-2.5 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-xs font-mono focus:border-emerald-400 focus:outline-none">
            </div>

            <button type="submit" id="savePayoutBtn" class="w-full py-3 rounded-xl font-display font-semibold text-xs text-white bg-emerald-600 hover:bg-emerald-500 shadow-lg shadow-emerald-600/25 transition-all flex items-center justify-center gap-1.5">
              <span>Save Payout Details</span>
              <i data-lucide="check" class="w-4 h-4"></i>
            </button>
          </form>
        </div>

      </div>

    </div>

    <!-- ====================================================================
         TAB 6: SUPPORT & PARTNER TOOLKIT
    ==================================================================== -->
    <div id="tab-support" class="tab-content hidden space-y-8">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- Left: Downloadable Partner Marketing Toolkit (6 Cols) -->
        <div class="lg:col-span-6 bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-6">
          <div>
            <span class="text-xs font-mono uppercase tracking-wider text-electric-400">Marketing Assets</span>
            <h3 class="text-xl font-display font-bold text-white tracking-tight mt-1">
              Shopfront Marketing &amp; Sales Toolkit
            </h3>
            <p class="text-xs text-slate-300 mt-1">
              Printable banners, WhatsApp scripts, and customer rate cards to display in your shop and drive walk-in orders.
            </p>
          </div>

          <div class="space-y-4">
            <!-- Asset 1: Printable Shop Poster -->
            <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/10 flex items-start justify-between gap-4">
              <div class="flex items-start gap-3">
                <div class="w-10 h-10 rounded-xl bg-electric-500/20 text-electric-400 flex items-center justify-center shrink-0">
                  <i data-lucide="image" class="w-5 h-5"></i>
                </div>
                <div>
                  <div class="text-xs font-bold text-white">Printable Shop Poster (A3 / A4)</div>
                  <p class="text-[11px] text-slate-400 mt-0.5">"Digital &amp; IT Services Available Here" with YUKT Partner branding. Print and paste on shop wall or glass.</p>
                </div>
              </div>
              <a href="brochure/partner-poster-template.html" target="_blank" class="px-3.5 py-2 rounded-lg bg-electric-600 hover:bg-electric-500 text-white text-xs font-medium shrink-0 transition-colors">
                View &amp; Print
              </a>
            </div>

            <!-- Asset 2: WhatsApp Promotion Kit -->
            <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/10 flex items-start justify-between gap-4">
              <div class="flex items-start gap-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                  <i data-lucide="message-square" class="w-5 h-5"></i>
                </div>
                <div>
                  <div class="text-xs font-bold text-white">WhatsApp Status &amp; Broadcast Scripts</div>
                  <p class="text-[11px] text-slate-400 mt-0.5">Ready-made Hindi and Hinglish captions for broadcasting to your local customer contact lists.</p>
                </div>
              </div>
              <button type="button" onclick="navigator.clipboard.writeText('<?php echo addslashes($shareMessage); ?>'); alert('WhatsApp script copied to clipboard!');" class="px-3.5 py-2 rounded-lg bg-white/10 hover:bg-white/15 text-white text-xs font-medium shrink-0 transition-colors">
                Copy Script
              </button>
            </div>

            <!-- Asset 3: 140+ Services Rate Card -->
            <div class="p-4 rounded-2xl bg-white/[0.03] border border-white/10 flex items-start justify-between gap-4">
              <div class="flex items-start gap-3">
                <div class="w-10 h-10 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center shrink-0">
                  <i data-lucide="file-text" class="w-5 h-5"></i>
                </div>
                <div>
                  <div class="text-xs font-bold text-white">Complete 140+ Services Reference Guide</div>
                  <p class="text-[11px] text-slate-400 mt-0.5">Full checklist of deliverables, typical timelines, and recommended client pricing across 10 categories.</p>
                </div>
              </div>
              <a href="service-catalogue.php" target="_blank" class="px-3.5 py-2 rounded-lg bg-white/10 hover:bg-white/15 text-white text-xs font-medium shrink-0 transition-colors">
                Open Directory
              </a>
            </div>
          </div>
        </div>

        <!-- Right: Submit Support Ticket (6 Cols) -->
        <div class="lg:col-span-6 bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-6">
          <div>
            <span class="text-xs font-mono uppercase tracking-wider text-electric-400">Dedicated Desk</span>
            <h3 class="text-xl font-display font-bold text-white tracking-tight mt-1">
              Submit Partner Support Ticket
            </h3>
            <p class="text-xs text-slate-300 mt-1">
              Have questions regarding verification, client scoping assistance, or payouts? Submit a ticket or reach our team directly.
            </p>
          </div>

          <form id="partnerTicketForm" class="space-y-4">
            <div id="ticketFormFeedback" class="hidden p-3 rounded-xl text-xs"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <div>
                <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1">
                  Ticket Category <span class="text-yukt-orange">*</span>
                </label>
                <select name="category" required class="w-full px-3.5 py-2.5 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-xs focus:border-electric-400 focus:outline-none">
                  <option value="Commission & Payout">Commission &amp; Payout</option>
                  <option value="Account Verification">Account Verification</option>
                  <option value="Client Project Scoping">Client Project Scoping</option>
                  <option value="Marketing Material Assistance">Marketing Material Assistance</option>
                  <option value="Technical Question">Technical Question</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <div>
                <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1">
                  Urgency Priority
                </label>
                <select name="priority" class="w-full px-3.5 py-2.5 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-xs focus:border-electric-400 focus:outline-none">
                  <option value="normal" selected>Normal (24h response)</option>
                  <option value="high">High (Urgent client meeting)</option>
                  <option value="urgent">Critical (Payment issue)</option>
                </select>
              </div>
            </div>

            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1">
                Subject <span class="text-yukt-orange">*</span>
              </label>
              <input type="text" name="subject" required placeholder="e.g. Need quick quotation for a school portal" class="w-full px-3.5 py-2.5 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-xs focus:border-electric-400 focus:outline-none">
            </div>

            <div>
              <label class="block text-xs font-mono uppercase tracking-wider text-slate-300 mb-1">
                Detailed Message <span class="text-yukt-orange">*</span>
              </label>
              <textarea name="message" required rows="3" placeholder="Describe your inquiry..." class="w-full px-3.5 py-2.5 rounded-xl bg-navy-950 border border-white/15 text-slate-100 text-xs focus:border-electric-400 focus:outline-none"></textarea>
            </div>

            <button type="submit" id="submitTicketBtn" class="w-full py-3 rounded-xl font-display font-semibold text-xs text-white bg-electric-600 hover:bg-electric-500 shadow-lg shadow-electric-600/25 transition-all flex items-center justify-center gap-1.5">
              <span>Create Support Ticket</span>
              <i data-lucide="send" class="w-4 h-4"></i>
            </button>
          </form>

          <!-- WhatsApp Direct Link -->
          <div class="pt-3 border-t border-white/10 flex items-center justify-between text-xs">
            <span class="text-slate-400">Need instant help?</span>
            <a href="<?php echo getWhatsAppUrl('Hi YUKT Support, I am Partner ' . $partnerCode . '. I need urgent assistance.'); ?>" target="_blank" rel="noopener noreferrer" class="text-emerald-400 hover:text-emerald-300 font-semibold flex items-center gap-1">
              <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
              <span>Live WhatsApp Hotline (+91 82354 11806)</span>
            </a>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>

<!-- Dynamic Sub-Service Population Script & Tab Switching -->
<script>
const CATALOGUE_SERVICES = <?php echo json_encode($allCatalogueServices); ?>;

function switchTab(tabId) {
  document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.classList.remove('text-white', 'bg-electric-600', 'shadow-lg', 'shadow-electric-600/30');
    btn.classList.add('text-slate-400');
  });

  const activeContent = document.getElementById('tab-' + tabId);
  const activeBtn = document.getElementById('tabBtn-' + tabId);

  if (activeContent) activeContent.classList.remove('hidden');
  if (activeBtn) {
    activeBtn.classList.add('text-white', 'bg-electric-600', 'shadow-lg', 'shadow-electric-600/30');
    activeBtn.classList.remove('text-slate-400');
  }

  // Refresh Lucide icons in newly exposed DOM
  if (window.lucide) {
    window.lucide.createIcons();
  }
}

function populateSubServices(categoryName) {
  const select = document.getElementById('enqServiceSelect');
  select.innerHTML = '<option value="">Select Service Item</option>';
  if (!categoryName) return;

  const catSelect = document.getElementById('enqCategorySelect');
  const selectedOption = catSelect.options[catSelect.selectedIndex];
  const catId = selectedOption ? selectedOption.getAttribute('data-catid') : '';

  const filtered = CATALOGUE_SERVICES.filter(s => s.category_id === catId);
  if (filtered.length > 0) {
    filtered.forEach(s => {
      const opt = document.createElement('option');
      opt.value = s.name;
      opt.textContent = (s.subgroup ? '[' + s.subgroup + '] ' : '') + s.name;
      select.appendChild(opt);
    });
  } else {
    CATALOGUE_SERVICES.forEach(s => {
      const opt = document.createElement('option');
      opt.value = s.name;
      opt.textContent = s.name;
      select.appendChild(opt);
    });
  }
}

// Handle Client Enquiry Submission via AJAX
document.getElementById('partnerEnquiryForm')?.addEventListener('submit', function(e) {
  e.preventDefault();
  const form = this;
  const btn = document.getElementById('submitEnquiryBtn');
  const feedback = document.getElementById('enquiryFormFeedback');
  const formData = new FormData(form);

  btn.disabled = true;
  btn.innerHTML = '<span>Submitting Lead...</span>';
  feedback.className = 'hidden';

  fetch('api/partner-enquiry-submit.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    btn.disabled = false;
    btn.innerHTML = '<span>Submit Customer Enquiry</span><i data-lucide="send" class="w-4 h-4"></i>';
    if (window.lucide) window.lucide.createIcons();

    if (data.success) {
      feedback.className = 'p-3.5 rounded-xl text-xs bg-emerald-500/20 border border-emerald-400/40 text-emerald-200 block';
      feedback.textContent = data.message;
      form.reset();
      setTimeout(() => { location.reload(); }, 2000);
    } else {
      feedback.className = 'p-3.5 rounded-xl text-xs bg-red-500/20 border border-red-400/40 text-red-200 block';
      feedback.textContent = data.message || 'Error submitting enquiry.';
    }
  })
  .catch(err => {
    btn.disabled = false;
    btn.innerHTML = '<span>Submit Customer Enquiry</span><i data-lucide="send" class="w-4 h-4"></i>';
    feedback.className = 'p-3.5 rounded-xl text-xs bg-red-500/20 border border-red-400/40 text-red-200 block';
    feedback.textContent = 'Server communication error. Please try again or ping WhatsApp.';
  });
});

// Handle Payout Details Form
document.getElementById('payoutDetailsForm')?.addEventListener('submit', function(e) {
  e.preventDefault();
  const form = this;
  const btn = document.getElementById('savePayoutBtn');
  const feedback = document.getElementById('payoutFormFeedback');
  const formData = new FormData(form);

  btn.disabled = true;
  feedback.className = 'hidden';

  fetch('api/partner-payout-update.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    btn.disabled = false;
    if (data.success) {
      feedback.className = 'p-3 rounded-xl text-xs bg-emerald-500/20 border border-emerald-400/40 text-emerald-200 block';
      feedback.textContent = data.message;
    } else {
      feedback.className = 'p-3 rounded-xl text-xs bg-red-500/20 border border-red-400/40 text-red-200 block';
      feedback.textContent = data.message;
    }
  })
  .catch(err => {
    btn.disabled = false;
    feedback.className = 'p-3 rounded-xl text-xs bg-red-500/20 border border-red-400/40 text-red-200 block';
    feedback.textContent = 'Failed to update payout details.';
  });
});

// Handle Ticket Submission
document.getElementById('partnerTicketForm')?.addEventListener('submit', function(e) {
  e.preventDefault();
  const form = this;
  const btn = document.getElementById('submitTicketBtn');
  const feedback = document.getElementById('ticketFormFeedback');
  const formData = new FormData(form);

  btn.disabled = true;
  feedback.className = 'hidden';

  fetch('api/partner-ticket-submit.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    btn.disabled = false;
    if (data.success) {
      feedback.className = 'p-3 rounded-xl text-xs bg-emerald-500/20 border border-emerald-400/40 text-emerald-200 block';
      feedback.textContent = data.message;
      form.reset();
    } else {
      feedback.className = 'p-3 rounded-xl text-xs bg-red-500/20 border border-red-400/40 text-red-200 block';
      feedback.textContent = data.message;
    }
  })
  .catch(err => {
    btn.disabled = false;
    feedback.className = 'p-3 rounded-xl text-xs bg-red-500/20 border border-red-400/40 text-red-200 block';
    feedback.textContent = 'Failed to submit ticket.';
  });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
