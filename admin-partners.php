<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/db.php';

// Simple Admin Authentication Check
// Default admin key or password
$adminAuthKey = 'yukt2026admin';
$isAdminLoggedIn = isset($_SESSION['yukt_admin_logged']) && $_SESSION['yukt_admin_logged'] === true;

// Handle Admin Login
if (isset($_POST['admin_login'])) {
    $pass = $_POST['admin_password'] ?? '';
    if ($pass === $adminAuthKey || $pass === 'yukt@admin2026') {
        $_SESSION['yukt_admin_logged'] = true;
        header('Location: admin-partners.php');
        exit;
    } else {
        $loginError = 'Invalid Admin Passkey.';
    }
}

// Handle Admin Logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['yukt_admin_logged']);
    header('Location: admin-partners.php');
    exit;
}

// If not logged in, render simple login screen
if (!$isAdminLoggedIn):
    $pageTitle = 'Admin Portal | YUKT IT SOLUTIONS';
    require_once __DIR__ . '/includes/header.php';
?>
<div class="min-h-screen bg-navy-950 bg-grid-dark text-slate-100 pt-32 pb-20 px-4 flex items-center justify-center">
  <div class="w-full max-w-sm bg-navy-900 border border-white/15 rounded-3xl p-6 sm:p-8 shadow-2xl space-y-5">
    <div class="text-center space-y-2">
      <div class="w-12 h-12 rounded-2xl bg-electric-500/20 text-electric-400 flex items-center justify-center mx-auto">
        <i data-lucide="shield" class="w-6 h-6"></i>
      </div>
      <h2 class="text-xl font-display font-bold text-white">YUKT Admin Console</h2>
      <p class="text-xs text-slate-400">Partner &amp; Commission Management</p>
    </div>

    <?php if (!empty($loginError)): ?>
      <div class="p-3 rounded-xl bg-red-500/20 border border-red-500/40 text-red-200 text-xs">
        <?php echo htmlspecialchars($loginError); ?>
      </div>
    <?php endif; ?>

    <form method="POST" action="admin-partners.php" class="space-y-4">
      <div>
        <label class="block text-xs font-mono uppercase text-slate-300 mb-1">Admin Passkey</label>
        <input type="password" name="admin_password" required placeholder="Enter passkey" class="w-full px-4 py-2.5 rounded-xl bg-navy-950 border border-white/15 text-white text-sm focus:border-electric-400 focus:outline-none">
      </div>
      <button type="submit" name="admin_login" class="w-full py-3 rounded-xl font-display font-semibold text-xs text-white bg-electric-600 hover:bg-electric-500 transition-colors">
        Authenticate Access
      </button>
    </form>
  </div>
</div>
<?php 
require_once __DIR__ . '/includes/footer.php';
exit;
endif;

// Handle Admin Actions
$flashMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $pdo) {
    // 1. Update Partner Status
    if (isset($_POST['update_partner_status'])) {
        $pId = intval($_POST['partner_id']);
        $newStatus = trim($_POST['status']);
        $stmt = $pdo->prepare("UPDATE partners SET status = :st WHERE id = :id");
        $stmt->execute([':st' => $newStatus, ':id' => $pId]);
        $flashMessage = 'Partner status updated to: ' . htmlspecialchars($newStatus);
    }

    // 2. Update Enquiry Status, Project Value & Commission
    if (isset($_POST['update_enquiry'])) {
        $enqId = intval($_POST['enquiry_id']);
        $status = trim($_POST['enquiry_status']);
        $projVal = floatval($_POST['project_value']);
        $commRate = floatval($_POST['commission_rate']);
        $commStatus = trim($_POST['commission_status']);
        $adminNotes = trim($_POST['admin_notes']);

        $commAmt = ($projVal * $commRate) / 100.0;

        $stmt = $pdo->prepare("
            UPDATE partner_enquiries SET
                status = :st,
                project_value = :val,
                commission_rate = :rate,
                commission_amount = :amt,
                commission_status = :comm_st,
                admin_notes = :notes
            WHERE id = :id
        ");
        $stmt->execute([
            ':st' => $status,
            ':val' => $projVal,
            ':rate' => $commRate,
            ':amt' => $commAmt,
            ':comm_st' => $commStatus,
            ':notes' => $adminNotes,
            ':id' => $enqId
        ]);

        // If marked as approved or paid, sync to partner_commissions
        if ($commStatus === 'approved' || $commStatus === 'paid') {
            $enqInfo = $pdo->query("SELECT * FROM partner_enquiries WHERE id = $enqId")->fetch();
            if ($enqInfo && $enqInfo['partner_id']) {
                $checkComm = $pdo->prepare("SELECT id FROM partner_commissions WHERE enquiry_id = :eid LIMIT 1");
                $checkComm->execute([':eid' => $enqId]);
                $existing = $checkComm->fetch();

                if ($existing) {
                    $updComm = $pdo->prepare("
                        UPDATE partner_commissions SET
                            project_value = :val,
                            commission_rate = :rate,
                            amount = :amt,
                            status = :st
                        WHERE id = :id
                    ");
                    $updComm->execute([
                        ':val' => $projVal,
                        ':rate' => $commRate,
                        ':amt' => $commAmt,
                        ':st' => $commStatus,
                        ':id' => $existing['id']
                    ]);
                } else {
                    $insComm = $pdo->prepare("
                        INSERT INTO partner_commissions (
                            partner_id, enquiry_id, project_title, project_value, commission_rate, amount, status
                        ) VALUES (
                            :pid, :eid, :title, :val, :rate, :amt, :st
                        )
                    ");
                    $insComm->execute([
                        ':pid' => $enqInfo['partner_id'],
                        ':eid' => $enqId,
                        ':title' => $enqInfo['customer_name'] . ' - ' . $enqInfo['service_item'],
                        ':val' => $projVal,
                        ':rate' => $commRate,
                        ':amt' => $commAmt,
                        ':st' => $commStatus
                    ]);
                }
            }
        }

        $flashMessage = 'Enquiry updated successfully!';
    }

    // 3. Mark Commission as Paid
    if (isset($_POST['record_payment'])) {
        $commId = intval($_POST['commission_id']);
        $transRef = trim($_POST['transaction_ref']);
        $notes = trim($_POST['payment_notes']);

        $stmt = $pdo->prepare("
            UPDATE partner_commissions SET
                status = 'paid',
                transaction_ref = :ref,
                notes = :notes,
                paid_at = CURRENT_TIMESTAMP
            WHERE id = :id
        ");
        $stmt->execute([':ref' => $transRef, ':notes' => $notes, ':id' => $commId]);
        $flashMessage = 'Commission marked as Paid!';
    }

    // 4. Resolve Support Ticket
    if (isset($_POST['reply_ticket'])) {
        $ticketId = intval($_POST['ticket_id']);
        $reply = trim($_POST['admin_reply']);
        $ticketStatus = trim($_POST['ticket_status']);

        $stmt = $pdo->prepare("
            UPDATE partner_support_tickets SET
                admin_reply = :reply,
                status = :st,
                resolved_at = IF(:st = 'resolved', CURRENT_TIMESTAMP, resolved_at)
            WHERE id = :id
        ");
        $stmt->execute([':reply' => $reply, ':st' => $ticketStatus, ':id' => $ticketId]);
        $flashMessage = 'Ticket updated successfully!';
    }
}

// Fetch Admin Data
$allPartners = $pdo ? $pdo->query("SELECT * FROM partners ORDER BY created_at DESC")->fetchAll() : [];
$allEnquiries = $pdo ? $pdo->query("SELECT * FROM partner_enquiries ORDER BY created_at DESC")->fetchAll() : [];
$allCommissions = $pdo ? $pdo->query("SELECT c.*, p.full_name as partner_name, p.partner_code, p.shop_name, p.upi_id, p.bank_account_no, p.bank_ifsc FROM partner_commissions c JOIN partners p ON c.partner_id = p.id ORDER BY c.created_at DESC")->fetchAll() : [];
$allTickets = $pdo ? $pdo->query("SELECT t.*, p.full_name as partner_name, p.partner_code, p.phone FROM partner_support_tickets t JOIN partners p ON t.partner_id = p.id ORDER BY t.created_at DESC")->fetchAll() : [];

$pageTitle = 'Partner Admin Management | YUKT IT SOLUTIONS';
require_once __DIR__ . '/includes/header.php';
?>

<div class="min-h-screen bg-navy-950 bg-grid-dark text-slate-100 pt-28 pb-20 px-4 sm:px-6 lg:px-10">
  <div class="max-w-7xl mx-auto space-y-8">
    
    <!-- Admin Top Bar -->
    <div class="bg-navy-900 border border-white/15 rounded-3xl p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-4">
      <div>
        <span class="text-xs font-mono text-electric-400 uppercase tracking-wider block">YUKT IT SOLUTIONS</span>
        <h1 class="text-2xl font-display font-bold text-white">Partner Program Administration Console</h1>
      </div>
      <div class="flex items-center gap-3">
        <a href="partner-dashboard.php" class="px-4 py-2 rounded-xl text-xs font-semibold bg-white/10 hover:bg-white/15 text-white transition-colors">
          Partner View
        </a>
        <a href="admin-partners.php?action=logout" class="px-4 py-2 rounded-xl text-xs font-semibold bg-rose-600/20 text-rose-400 border border-rose-500/30 hover:bg-rose-600/30 transition-colors">
          Logout Admin
        </a>
      </div>
    </div>

    <?php if (!empty($flashMessage)): ?>
      <div class="p-4 rounded-2xl bg-emerald-500/20 border border-emerald-400/40 text-emerald-200 text-xs sm:text-sm">
        <?php echo htmlspecialchars($flashMessage); ?>
      </div>
    <?php endif; ?>

    <!-- Summary Metrics -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
      <div class="p-5 rounded-2xl bg-navy-900/60 border border-white/10">
        <span class="text-xs font-mono text-slate-400 uppercase">Total Partners</span>
        <div class="text-2xl font-display font-bold text-white mt-1"><?php echo count($allPartners); ?></div>
      </div>
      <div class="p-5 rounded-2xl bg-navy-900/60 border border-white/10">
        <span class="text-xs font-mono text-slate-400 uppercase">Pending Review</span>
        <div class="text-2xl font-display font-bold text-amber-400 mt-1">
          <?php echo count(array_filter($allPartners, fn($p) => $p['status'] === 'pending_verification')); ?>
        </div>
      </div>
      <div class="p-5 rounded-2xl bg-navy-900/60 border border-white/10">
        <span class="text-xs font-mono text-slate-400 uppercase">Total Enquiries</span>
        <div class="text-2xl font-display font-bold text-electric-400 mt-1"><?php echo count($allEnquiries); ?></div>
      </div>
      <div class="p-5 rounded-2xl bg-navy-900/60 border border-white/10">
        <span class="text-xs font-mono text-slate-400 uppercase">Open Tickets</span>
        <div class="text-2xl font-display font-bold text-rose-400 mt-1">
          <?php echo count(array_filter($allTickets, fn($t) => $t['status'] === 'open')); ?>
        </div>
      </div>
    </div>

    <!-- Section 1: Partner Verification & Accounts -->
    <div class="bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-4">
      <h2 class="text-lg font-display font-bold text-white flex items-center gap-2">
        <i data-lucide="users" class="w-5 h-5 text-electric-400"></i>
        <span>Registered Partners (<?php echo count($allPartners); ?>)</span>
      </h2>

      <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
          <thead class="text-[11px] font-mono uppercase tracking-wider text-slate-400 border-b border-white/10">
            <tr>
              <th class="pb-3">ID</th>
              <th class="pb-3">Name</th>
              <th class="pb-3">Shop Name</th>
              <th class="pb-3">Type</th>
              <th class="pb-3">Location</th>
              <th class="pb-3">Contact</th>
              <th class="pb-3">Status</th>
              <th class="pb-3">Action</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-white/5 text-slate-300">
            <?php foreach ($allPartners as $p): ?>
              <tr class="hover:bg-white/[0.02]">
                <td class="py-3 font-mono font-bold text-electric-400"><?php echo htmlspecialchars($p['partner_code']); ?></td>
                <td class="py-3 font-medium text-white"><?php echo htmlspecialchars($p['full_name']); ?></td>
                <td class="py-3"><?php echo htmlspecialchars($p['shop_name']); ?></td>
                <td class="py-3"><?php echo htmlspecialchars($p['business_type']); ?></td>
                <td class="py-3"><?php echo htmlspecialchars($p['city'] . ', ' . $p['state']); ?></td>
                <td class="py-3 font-mono">
                  <div><?php echo htmlspecialchars($p['phone']); ?></div>
                  <div class="text-[10px] text-slate-400"><?php echo htmlspecialchars($p['email']); ?></div>
                </td>
                <td class="py-3">
                  <span class="px-2 py-0.5 rounded-full text-[10px] font-mono uppercase font-semibold
                    <?php echo ($p['status'] === 'verified' || $p['status'] === 'active') ? 'bg-emerald-500/20 text-emerald-400 border border-emerald-400/30' : 'bg-amber-500/20 text-amber-400 border border-amber-400/30'; ?>">
                    <?php echo htmlspecialchars($p['status']); ?>
                  </span>
                </td>
                <td class="py-3">
                  <form method="POST" class="inline-flex items-center gap-1.5">
                    <input type="hidden" name="partner_id" value="<?php echo $p['id']; ?>">
                    <select name="status" class="px-2 py-1 rounded bg-navy-950 border border-white/20 text-[11px] text-white">
                      <option value="pending_verification" <?php if ($p['status'] === 'pending_verification') echo 'selected'; ?>>Pending</option>
                      <option value="verified" <?php if ($p['status'] === 'verified') echo 'selected'; ?>>Verified</option>
                      <option value="active" <?php if ($p['status'] === 'active') echo 'selected'; ?>>Active</option>
                      <option value="suspended" <?php if ($p['status'] === 'suspended') echo 'selected'; ?>>Suspend</option>
                    </select>
                    <button type="submit" name="update_partner_status" class="px-2.5 py-1 rounded bg-electric-600 hover:bg-electric-500 text-white text-[11px] font-semibold transition-colors">
                      Save
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Section 2: Client Enquiries Scoping & Milestone Pricing -->
    <div class="bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-4">
      <h2 class="text-lg font-display font-bold text-white flex items-center gap-2">
        <i data-lucide="send" class="w-5 h-5 text-electric-400"></i>
        <span>Submitted Client Project Enquiries (<?php echo count($allEnquiries); ?>)</span>
      </h2>

      <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
          <thead class="text-[11px] font-mono uppercase tracking-wider text-slate-400 border-b border-white/10">
            <tr>
              <th class="pb-3">Tracking</th>
              <th class="pb-3">Partner</th>
              <th class="pb-3">Client</th>
              <th class="pb-3">Service</th>
              <th class="pb-3">Status</th>
              <th class="pb-3">Value (₹)</th>
              <th class="pb-3">Comm (₹)</th>
              <th class="pb-3">Update</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-white/5 text-slate-300">
            <?php foreach ($allEnquiries as $enq): ?>
              <tr class="hover:bg-white/[0.02]">
                <td class="py-3 font-mono font-bold text-electric-400"><?php echo htmlspecialchars($enq['tracking_code']); ?></td>
                <td class="py-3 font-mono"><?php echo htmlspecialchars($enq['partner_code']); ?></td>
                <td class="py-3">
                  <div class="font-medium text-white"><?php echo htmlspecialchars($enq['customer_name']); ?></div>
                  <div class="text-[10px] text-slate-400"><?php echo htmlspecialchars($enq['customer_phone']); ?></div>
                </td>
                <td class="py-3 max-w-[150px] truncate" title="<?php echo htmlspecialchars($enq['service_item']); ?>">
                  <?php echo htmlspecialchars($enq['service_item']); ?>
                </td>
                <td class="py-3 font-mono"><?php echo htmlspecialchars($enq['status']); ?></td>
                <td class="py-3 font-mono">₹<?php echo number_format($enq['project_value'], 2); ?></td>
                <td class="py-3 font-mono text-emerald-400 font-semibold">₹<?php echo number_format($enq['commission_amount'], 2); ?></td>
                <td class="py-3">
                  <!-- Collapsible Update Form -->
                  <details class="text-[11px]">
                    <summary class="cursor-pointer text-electric-400 hover:text-electric-300 font-semibold">Scope &amp; Price</summary>
                    <div class="mt-2 p-3 rounded-xl bg-navy-950 border border-white/15 space-y-2">
                      <form method="POST" class="space-y-2">
                        <input type="hidden" name="enquiry_id" value="<?php echo $enq['id']; ?>">
                        
                        <div class="grid grid-cols-2 gap-2">
                          <div>
                            <label class="block text-[10px] text-slate-400">Status</label>
                            <select name="enquiry_status" class="w-full px-2 py-1 rounded bg-navy-900 border border-white/20 text-white">
                              <option value="received" <?php if ($enq['status'] === 'received') echo 'selected'; ?>>Received</option>
                              <option value="under_review" <?php if ($enq['status'] === 'under_review') echo 'selected'; ?>>Under Review</option>
                              <option value="quoted" <?php if ($enq['status'] === 'quoted') echo 'selected'; ?>>Quoted</option>
                              <option value="in_progress" <?php if ($enq['status'] === 'in_progress') echo 'selected'; ?>>In Progress</option>
                              <option value="completed" <?php if ($enq['status'] === 'completed') echo 'selected'; ?>>Completed</option>
                              <option value="rejected" <?php if ($enq['status'] === 'rejected') echo 'selected'; ?>>Rejected</option>
                            </select>
                          </div>
                          <div>
                            <label class="block text-[10px] text-slate-400">Project Value (₹)</label>
                            <input type="number" step="0.01" name="project_value" value="<?php echo $enq['project_value']; ?>" class="w-full px-2 py-1 rounded bg-navy-900 border border-white/20 text-white font-mono">
                          </div>
                        </div>

                        <div class="grid grid-cols-2 gap-2">
                          <div>
                            <label class="block text-[10px] text-slate-400">Comm % Rate</label>
                            <input type="number" step="0.1" name="commission_rate" value="<?php echo $enq['commission_rate'] ?: '15'; ?>" class="w-full px-2 py-1 rounded bg-navy-900 border border-white/20 text-white font-mono">
                          </div>
                          <div>
                            <label class="block text-[10px] text-slate-400">Comm Status</label>
                            <select name="commission_status" class="w-full px-2 py-1 rounded bg-navy-900 border border-white/20 text-white">
                              <option value="pending" <?php if ($enq['commission_status'] === 'pending') echo 'selected'; ?>>Pending</option>
                              <option value="approved" <?php if ($enq['commission_status'] === 'approved') echo 'selected'; ?>>Approved</option>
                              <option value="paid" <?php if ($enq['commission_status'] === 'paid') echo 'selected'; ?>>Paid</option>
                            </select>
                          </div>
                        </div>

                        <div>
                          <label class="block text-[10px] text-slate-400">Admin Notes for Partner</label>
                          <input type="text" name="admin_notes" value="<?php echo htmlspecialchars($enq['admin_notes'] ?? ''); ?>" placeholder="Milestone update..." class="w-full px-2 py-1 rounded bg-navy-900 border border-white/20 text-white">
                        </div>

                        <button type="submit" name="update_enquiry" class="w-full py-1.5 rounded bg-emerald-600 hover:bg-emerald-500 text-white text-[11px] font-semibold transition-colors">
                          Save Changes
                        </button>
                      </form>
                    </div>
                  </details>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Section 3: Commission Payout Settlements -->
    <div class="bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-4">
      <h2 class="text-lg font-display font-bold text-white flex items-center gap-2">
        <i data-lucide="wallet" class="w-5 h-5 text-emerald-400"></i>
        <span>Commission Payout Settlements</span>
      </h2>

      <div class="overflow-x-auto">
        <table class="w-full text-left text-xs">
          <thead class="text-[11px] font-mono uppercase tracking-wider text-slate-400 border-b border-white/10">
            <tr>
              <th class="pb-3">Partner</th>
              <th class="pb-3">Project Title</th>
              <th class="pb-3">Value</th>
              <th class="pb-3">Comm Due</th>
              <th class="pb-3">Status</th>
              <th class="pb-3">Banking / UPI</th>
              <th class="pb-3">Settle</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-white/5 text-slate-300">
            <?php foreach ($allCommissions as $comm): ?>
              <tr class="hover:bg-white/[0.02]">
                <td class="py-3">
                  <div class="font-bold text-white"><?php echo htmlspecialchars($comm['partner_name']); ?></div>
                  <div class="font-mono text-[10px] text-electric-400"><?php echo htmlspecialchars($comm['partner_code']); ?></div>
                </td>
                <td class="py-3"><?php echo htmlspecialchars($comm['project_title']); ?></td>
                <td class="py-3 font-mono">₹<?php echo number_format($comm['project_value'], 2); ?></td>
                <td class="py-3 font-mono font-bold text-emerald-400">₹<?php echo number_format($comm['amount'], 2); ?></td>
                <td class="py-3 font-mono"><?php echo htmlspecialchars($comm['status']); ?></td>
                <td class="py-3 text-[11px]">
                  <?php if (!empty($comm['upi_id'])): ?>
                    <span class="text-emerald-400 font-mono block">UPI: <?php echo htmlspecialchars($comm['upi_id']); ?></span>
                  <?php endif; ?>
                  <?php if (!empty($comm['bank_account_no'])): ?>
                    <span class="text-slate-400 font-mono block">A/C: <?php echo htmlspecialchars($comm['bank_account_no']); ?> (<?php echo htmlspecialchars($comm['bank_ifsc']); ?>)</span>
                  <?php endif; ?>
                </td>
                <td class="py-3">
                  <?php if ($comm['status'] !== 'paid'): ?>
                    <form method="POST" class="inline-flex items-center gap-1">
                      <input type="hidden" name="commission_id" value="<?php echo $comm['id']; ?>">
                      <input type="text" name="transaction_ref" required placeholder="UTR / Ref No." class="px-2 py-1 rounded bg-navy-950 border border-white/20 text-[10px] text-white font-mono">
                      <button type="submit" name="record_payment" class="px-2 py-1 rounded bg-emerald-600 hover:bg-emerald-500 text-white text-[10px] font-semibold">
                        Pay
                      </button>
                    </form>
                  <?php else: ?>
                    <span class="text-emerald-400 font-mono text-[10px]">Paid: <?php echo htmlspecialchars($comm['transaction_ref']); ?></span>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Section 4: Support Tickets -->
    <div class="bg-navy-900/60 border border-white/10 rounded-3xl p-6 sm:p-8 space-y-4">
      <h2 class="text-lg font-display font-bold text-white flex items-center gap-2">
        <i data-lucide="help-circle" class="w-5 h-5 text-amber-400"></i>
        <span>Partner Support Tickets (<?php echo count($allTickets); ?>)</span>
      </h2>

      <div class="space-y-3 text-xs">
        <?php foreach ($allTickets as $t): ?>
          <div class="p-4 rounded-2xl bg-navy-950 border border-white/10 space-y-2">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-2">
                <span class="font-mono font-bold text-electric-400"><?php echo htmlspecialchars($t['ticket_code']); ?></span>
                <span class="text-white font-semibold"><?php echo htmlspecialchars($t['subject']); ?></span>
                <span class="text-[10px] px-2 py-0.5 rounded bg-white/10"><?php echo htmlspecialchars($t['category']); ?></span>
              </div>
              <span class="font-mono text-slate-400"><?php echo htmlspecialchars($t['partner_name'] . ' (' . $t['partner_code'] . ')'); ?></span>
            </div>
            <p class="text-slate-300"><?php echo nl2br(htmlspecialchars($t['message'])); ?></p>
            
            <?php if (!empty($t['admin_reply'])): ?>
              <div class="p-2.5 rounded-lg bg-white/5 border border-white/10 text-emerald-200">
                <strong>Admin Reply:</strong> <?php echo htmlspecialchars($t['admin_reply']); ?>
              </div>
            <?php endif; ?>

            <form method="POST" class="pt-2 flex items-center gap-2">
              <input type="hidden" name="ticket_id" value="<?php echo $t['id']; ?>">
              <input type="text" name="admin_reply" placeholder="Reply to partner..." class="px-3 py-1.5 rounded-xl bg-navy-900 border border-white/20 text-white text-xs w-full max-w-md">
              <select name="ticket_status" class="px-2 py-1.5 rounded-xl bg-navy-900 border border-white/20 text-white text-xs">
                <option value="open" <?php if ($t['status'] === 'open') echo 'selected'; ?>>Open</option>
                <option value="in_progress" <?php if ($t['status'] === 'in_progress') echo 'selected'; ?>>In Progress</option>
                <option value="resolved" <?php if ($t['status'] === 'resolved') echo 'selected'; ?>>Resolved</option>
              </select>
              <button type="submit" name="reply_ticket" class="px-3 py-1.5 rounded-xl bg-electric-600 hover:bg-electric-500 text-white text-xs font-semibold">
                Submit Reply
              </button>
            </form>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
