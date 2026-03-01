<?php
$pageTitle = 'Pricing';
$metaDesc  = 'Bizisoft pricing plans — Starter ₹8,500, Growth ₹12,500, Business ₹18,500. All annual plans, all prices exclusive of GST.';
require_once 'includes/header.php';
?>

<section class="page-hero" style="background:linear-gradient(180deg,#0e0000 0%,var(--black) 100%); padding-bottom:60px;">
  <div class="hero-bg-text">PRICE</div>
  <div class="container" style="text-align:center; position:relative; z-index:1;">
    <div class="section-eyebrow reveal" style="justify-content:center;">Pricing Plans</div>
    <h1 class="display-heading reveal" style="margin-bottom:16px;">
      TRANSPARENT<br><span class="red">ANNUAL</span> PLANS
    </h1>
    <p class="section-sub reveal" style="margin:0 auto; font-size:1rem;">
      No hidden fees. No monthly traps. One annual price includes everything — pay once, use all year.
    </p>
  </div>
</section>

<section class="pricing-page">
  <div class="container">

    <div class="pricing-note reveal">
      <span>📅</span>
      <span><span>Annual billing only</span> — all plans are billed once per year. Prices shown are exclusive of GST (18%).</span>
    </div>

    <div class="plans-grid">
      <?php
      $plans = [
        [
          'name'     => 'Starter',
          'price'    => '8,500',
          'branches' => '1 Restaurant / Outlet',
          'popular'  => false,
          'desc'     => 'Perfect for a single restaurant or tiffin centre just getting started with digital management.',
          'features' => [
            '1 Restaurant / Outlet', 'Unlimited Menu Items', 'POS & Billing System', 'QR Code Digital Menu',
            'Kitchen Order Tickets (KOT)', 'Bill Printing', 'Staff Management', 'Basic Sales Reports',
            'Payment Gateway (Razorpay)', 'Customer Management',
          ],
          'na' => ['Multi-Branch Dashboard', 'Export Reports (PDF/Excel)', 'Priority Support'],
        ],
        [
          'name'     => 'Growth',
          'price'    => '12,500',
          'branches' => 'Up to 3 Branches',
          'popular'  => true,
          'desc'     => 'Ideal for growing food businesses managing 2–3 branches, all from one unified dashboard.',
          'features' => [
            'Up to 3 Branches', 'Unlimited Menu Items', 'POS & Billing System', 'QR Code Digital Menu',
            'Kitchen Order Tickets (KOT)', 'Bill Printing', 'Staff Management', 'Advanced Reports',
            'Payment Gateway (Razorpay)', 'Multi-Branch Dashboard', 'Export Reports (PDF/Excel)', 'Customer Management',
          ],
          'na' => ['Priority Support'],
        ],
        [
          'name'     => 'Business',
          'price'    => '18,500',
          'branches' => 'Up to 5 Branches',
          'popular'  => false,
          'desc'     => 'Full power for established food chains running up to 5 locations with advanced reporting.',
          'features' => [
            'Up to 5 Branches', 'Unlimited Menu Items', 'POS & Billing System', 'QR Code Digital Menu',
            'Kitchen Order Tickets (KOT)', 'Bill Printing', 'Staff Management', 'Advanced Reports + Analytics',
            'Payment Gateway (Razorpay/Stripe)', 'Multi-Branch Dashboard', 'Export Reports (PDF/Excel)',
            'Customer Management', 'Inventory Tracking', 'Priority Support',
          ],
          'na' => [],
        ],
      ];

      foreach($plans as $p):
      ?>
      <div class="plan-card reveal <?= $p['popular'] ? 'popular' : '' ?>">
        <?php if($p['popular']): ?><div class="plan-tag">Most Popular</div><?php endif; ?>
        <div class="plan-name"><?= $p['name'] ?></div>
        <div class="plan-price"><sup>₹</sup><?= $p['price'] ?></div>
        <div class="plan-gst">+ GST &nbsp;|&nbsp; Billed Annually</div>
        <div class="plan-branches"><?= $p['branches'] ?></div>
        <p class="plan-desc"><?= $p['desc'] ?></p>
        <ul class="plan-features">
          <?php foreach($p['features'] as $f): ?>
          <li><span class="chk">✓</span> <?= htmlspecialchars($f) ?></li>
          <?php endforeach; ?>
          <?php foreach($p['na'] as $f): ?>
          <li class="off"><span class="chk">—</span> <?= htmlspecialchars($f) ?></li>
          <?php endforeach; ?>
        </ul>
        <div class="plan-cta">
          <a href="contact.php?plan=<?= urlencode($p['name']) ?>" class="btn <?= $p['popular'] ? 'btn-red' : 'btn-outline' ?>" style="width:100%;justify-content:center;">
            Get <?= $p['name'] ?> Plan →
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:28px;font-size:0.82rem;color:var(--muted);">
      * All prices are exclusive of 18% GST as applicable. &nbsp;|&nbsp; Annual subscription, auto-renews yearly.
    </div>
  </div>
</section>

<section class="compare-section">
  <div class="container">
    <div class="section-header center reveal">
      <div class="section-eyebrow">Plan Comparison</div>
      <h2 class="section-heading">COMPARE ALL PLANS</h2>
    </div>
    <div class="reveal" style="overflow-x:auto;">
      <table class="compare-table" style="min-width:600px;">
        <thead>
          <tr>
            <th style="text-align:left; width:40%;">Feature</th>
            <th>Starter</th>
            <th class="highlight">Growth</th>
            <th>Business</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Define the helper function OUTSIDE the loop
          function renderCell($v) {
            if($v === 'yes') return '<span class="yes">✓</span>';
            if($v === 'no')  return '<span class="no">—</span>';
            return $v;
          }

          $compare = [
            ['Price (+ GST/yr)', '₹8,500', '₹12,500', '₹18,500'],
            ['Branches', '1', 'Up to 3', 'Up to 5'],
            ['POS System', 'yes', 'yes', 'yes'],
            ['QR Code Menu', 'yes', 'yes', 'yes'],
            ['Kitchen Order Tickets', 'yes', 'yes', 'yes'],
            ['Bill Printing', 'yes', 'yes', 'yes'],
            ['Staff Management', 'yes', 'yes', 'yes'],
            ['Payment Gateway', 'yes', 'yes', 'yes'],
            ['Basic Reports', 'yes', 'yes', 'yes'],
            ['Multi-Branch Dashboard', 'no', 'yes', 'yes'],
            ['Export Reports', 'no', 'yes', 'yes'],
            ['Inventory Management', 'no', 'no', 'yes'],
            ['Priority Support', 'no', 'no', 'yes'],
          ];
          
          foreach($compare as [$feat,$s,$g,$b]):
          ?>
          <tr>
            <td><?= $feat ?></td>
            <td><?= renderCell($s) ?></td>
            <td class="highlight"><?= renderCell($g) ?></td>
            <td><?= renderCell($b) ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>