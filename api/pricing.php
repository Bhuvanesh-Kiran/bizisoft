<?php
$pageTitle = 'Pricing';
$metaDesc  = 'Bizisoft pricing plans — Starter ₹8,500, Growth ₹12,500, Business ₹18,500. All annual plans, all prices exclusive of GST.';
require_once 'includes/header.php';
?>

<section class="page-hero" style="padding-top:140px; padding-bottom:80px;">
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

    <!-- Plan Cards -->
    <div class="plans-grid">
      <?php
      $allFeatures = [
        'Menu', 'Unlimited Menu Items', 'Item Category', 'Area Management',
        'Table Management', 'Reservation', 'KOT (Kitchen Order Tickets)',
        'Unlimited Orders', 'Customer Management', 'Unlimited Staff',
        'Payment Gateway Integration', 'Reports & Analytics', 'Settings',
        'Delivery Executive', 'Waiter Request', 'Expenses Tracking',
        'Cash Register', 'Inventory Management', 'Kiosk Mode',
        'Change Branch', 'Export Reports (PDF/Excel)', 'Table Reservation',
        'Theme Setting', 'Customer Display',
      ];

      $plans = [
        [
          'name'     => 'Standard',
          'price'    => '8,500',
          'branches' => '1 Restaurant / Outlet',
          'popular'  => false,
          'desc'     => 'Perfect for a single restaurant or tiffin centre just getting started with digital management.',
          'features' => $allFeatures, // all features included for all plans as per bizisoft.com
        ],
        [
          'name'     => 'Premium',
          'price'    => '12,500',
          'branches' => 'Up to 3 Branches',
          'popular'  => true,
          'desc'     => 'Ideal for growing food businesses managing 2–3 branches from one unified dashboard.',
          'features' => $allFeatures,
        ],
        [
          'name'     => 'Business',
          'price'    => '18,500',
          'branches' => 'Up to 5 Branches',
          'popular'  => false,
          'desc'     => 'Full power for established food chains running up to 5 locations with advanced reporting.',
          'features' => $allFeatures,
        ],
      ];

      foreach($plans as $p):
      ?>
      <div class="plan-card reveal <?= $p['popular'] ? 'popular' : '' ?>">
        <?php if($p['popular']): ?><div class="plan-tag">Most Popular</div><?php endif; ?>
        <div class="plan-name"><?= $p['name'] ?></div>
        <div class="plan-price"><sup>₹</sup><?= $p['price'] ?><span style="font-size:1rem;font-family:var(--fb);font-weight:400;color:var(--muted);letter-spacing:0;">.00</span></div>
        <div class="plan-gst">Pay Annually &nbsp;|&nbsp; + 18% GST</div>
        <div class="plan-branches"><?= $p['branches'] ?></div>
        <p class="plan-desc"><?= $p['desc'] ?></p>
        <div class="plan-cta">
          <a href="contact.php?plan=<?= urlencode($p['name']) ?>" class="btn btn-red" style="width:100%;justify-content:center;">
            Get Started →
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:20px;font-size:0.82rem;color:var(--muted);">
      * All prices are exclusive of 18% GST. &nbsp;|&nbsp; Annual subscription, renews yearly.
    </div>
  </div>
</section>

<!-- ══ FULL FEATURE COMPARISON TABLE ══ -->
<section class="compare-section">
  <div class="container">
    <div class="section-header center reveal">
      <div class="section-eyebrow">Plan Comparison</div>
      <h2 class="section-heading">EVERYTHING INCLUDED<br>IN EVERY PLAN</h2>
      <p class="section-sub" style="margin:0 auto;">All features are available across all plans. Choose based on number of branches.</p>
    </div>

    <div class="reveal" style="overflow-x:auto;">
      <table class="compare-table" style="min-width:600px;">
        <thead>
          <tr>
            <th style="text-align:left; width:40%;">Feature</th>
            <th>Standard<br><span style="font-family:var(--fb);font-weight:400;font-size:0.8rem;color:var(--muted);text-transform:none;letter-spacing:0;">₹8,500/yr</span></th>
            <th class="highlight">Premium<br><span style="font-family:var(--fb);font-weight:400;font-size:0.8rem;color:var(--red);text-transform:none;letter-spacing:0;">₹12,500/yr</span></th>
            <th>Business<br><span style="font-family:var(--fb);font-weight:400;font-size:0.8rem;color:var(--muted);text-transform:none;letter-spacing:0;">₹18,500/yr</span></th>
          </tr>
        </thead>
        <tbody>
          <?php
          $rows = [
            ['Branches',                    '1',          'Up to 3',    'Up to 5'],
            ['Menu',                         'yes',        'yes',        'yes'],
            ['Menu Item',                    'Unlimited',  'Unlimited',  'Unlimited'],
            ['Item Category',                'yes',        'yes',        'yes'],
            ['Area',                         'yes',        'yes',        'yes'],
            ['Table',                        'yes',        'yes',        'yes'],
            ['Reservation',                  'yes',        'yes',        'yes'],
            ['KOT (Kitchen Order Ticket)',   'yes',        'yes',        'yes'],
            ['Order',                        'Unlimited',  'Unlimited',  'Unlimited'],
            ['Customer',                     'yes',        'yes',        'yes'],
            ['Staff',                        'Unlimited',  'Unlimited',  'Unlimited'],
            ['Payment',                      'yes',        'yes',        'yes'],
            ['Report',                       'yes',        'yes',        'yes'],
            ['Settings',                     'yes',        'yes',        'yes'],
            ['Delivery Executive',           'yes',        'yes',        'yes'],
            ['Waiter Request',               'yes',        'yes',        'yes'],
            ['Expenses',                     'yes',        'yes',        'yes'],
            ['Cash Register',                'yes',        'yes',        'yes'],
            ['Inventory',                    'yes',        'yes',        'yes'],
            ['Kiosk',                        'yes',        'yes',        'yes'],
            ['Change Branch',                'yes',        'yes',        'yes'],
            ['Export Report',                'yes',        'yes',        'yes'],
            ['Table Reservation',            'yes',        'yes',        'yes'],
            ['Payment Gateway Integration',  'yes',        'yes',        'yes'],
            ['Theme Setting',                'yes',        'yes',        'yes'],
            ['Customer Display',             'yes',        'yes',        'yes'],
          ];

          foreach($rows as [$feat, $s, $p, $b]):
            function rc($v) {
              if ($v === 'yes') return '<span class="yes">✓</span>';
              if ($v === 'no')  return '<span class="no">—</span>';
              return '<span style="color:var(--red);font-weight:700;font-size:0.8rem;">'.$v.'</span>';
            }
          ?>
          <tr>
            <td><?= $feat ?></td>
            <td><?= rc($s) ?></td>
            <td class="highlight"><?= rc($p) ?></td>
            <td><?= rc($b) ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ══ FAQ ══ -->
<section class="faq-section">
  <div class="container">
    <div class="section-header center reveal">
      <div class="section-eyebrow">FAQ</div>
      <h2 class="section-heading">COMMON QUESTIONS</h2>
    </div>
    <div class="faq-grid reveal">
      <?php
      $faqs = [
        ['Is GST included in the price?', 'No, all listed prices are exclusive of 18% GST. GST will be added at checkout as applicable under Indian tax law.'],
        ['Can I switch plans later?', 'Yes. You can upgrade or downgrade your plan at renewal time. Contact our team and we\'ll make it seamless.'],
        ['Is there a free trial?', 'We offer a live demo session so you can see every feature in action before committing. Contact us to schedule one.'],
        ['What payment methods are accepted?', 'We accept UPI, NEFT/RTGS, bank transfer, and all major cards. Payment is annual and confirmed via invoice.'],
        ['Do all plans include all features?', 'Yes! As seen in the comparison table, all features are included in all plans. The only difference is the number of branches you can manage.'],
        ['What support is provided?', 'All plans include onboarding support, training, and ongoing assistance via WhatsApp and email during business hours.'],
        ['Is there a setup fee?', 'No setup fees. The annual plan price covers everything including onboarding, training, and access to all features.'],
        ['Can I manage multiple branches?', 'Standard supports 1 outlet. Premium supports up to 3 branches. Business supports up to 5 branches from one unified dashboard.'],
      ];
      foreach($faqs as [$q,$a]):
      ?>
      <div class="faq-item">
        <button class="faq-q"><?= $q ?> <span class="faq-icon">+</span></button>
        <div class="faq-a"><p><?= $a ?></p></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>