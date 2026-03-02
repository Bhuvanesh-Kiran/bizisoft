<?php
$pageTitle = 'Features';
$metaDesc  = 'Explore all Bizisoft features — POS, QR Code Menu, KOT, Staff Management, Multi-Branch, Inventory and more for restaurants and tiffin centres.';
require_once 'includes/header.php';
?>

<!-- ══ PAGE HERO ══ -->
<section class="page-hero" style="padding-top:140px; padding-bottom:80px;">
  <div class="hero-bg-text">FEATURES</div>
  <div class="container" style="text-align:center; position:relative; z-index:1;">
    <div class="section-eyebrow reveal" style="justify-content:center;">All Features</div>
    <h1 class="display-heading reveal" style="margin-bottom:16px;">
      EVERYTHING<br>YOUR <span class="red">RESTAURANT</span><br>NEEDS.
    </h1>
    <p class="section-sub reveal" style="margin:0 auto; font-size:1rem;">
      Bizisoft is packed with tools built specifically for restaurants, tiffin centres, cloud kitchens, and all food businesses.
    </p>
    <div class="hero-actions reveal" style="justify-content:center;">
      <a href="pricing.php" class="btn btn-red">View Pricing →</a>
      <a href="contact.php" class="btn btn-outline">Contact Sales</a>
    </div>
  </div>
</section>

<!-- ══ MAIN FEATURES ══ -->
<section class="features-page" id="pos">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-eyebrow">Core Platform</div>
      <h2 class="section-heading">POWERFUL FEATURES,<br>SIMPLE TO USE</h2>
      <p class="section-sub">Every tool you need from day one — no complicated setup required.</p>
    </div>

    <!-- BIG FEATURE CARDS -->
    <div class="features-big-grid">
      <div class="feature-card featured reveal-left" id="pos">
        <div class="fc-icon">🖥️</div>
        <div class="fc-title">Complete POS System</div>
        <p class="fc-desc">A lightning-fast, intuitive Point-of-Sale that handles every order type — dine-in, takeaway, and delivery. Built for busy food service environments.</p>
        <ul class="fc-list">
          <li>One-click order entry & modification</li>
          <li>Split bills, discounts & custom charges</li>
          <li>Offline mode — works without internet</li>
          <li>Thermal printer & receipt support</li>
          <li>Cash register & daily settlement</li>
        </ul>
      </div>
      <div class="feature-card reveal-right" id="qr">
        <div class="fc-icon">📲</div>
        <div class="fc-title">QR Code Digital Menu</div>
        <p class="fc-desc">Let customers scan and browse your menu instantly from their phone. Contactless, fast, and always up-to-date without reprinting anything.</p>
        <ul class="fc-list">
          <li>Unique QR per table or counter</li>
          <li>Real-time menu updates</li>
          <li>Beautiful mobile-friendly menu display</li>
          <li>Item availability toggle</li>
          <li>Customer-facing ordering option</li>
        </ul>
      </div>
    </div>

    <div class="features-big-grid" style="margin-top:32px;">
      <div class="feature-card reveal-left" id="kot">
        <div class="fc-icon">🎟️</div>
        <div class="fc-title">Kitchen Order Tickets (KOT)</div>
        <p class="fc-desc">Orders are sent instantly to your kitchen display or printer. No shouting, no lost orders, no confusion — just a smooth kitchen workflow every service.</p>
        <ul class="fc-list">
          <li>Auto-print on order placement</li>
          <li>Category-wise kitchen routing</li>
          <li>Order timing & delay alerts</li>
          <li>Multi-station printing support</li>
        </ul>
      </div>
      <div class="feature-card reveal-right" id="reports">
        <div class="fc-icon">📊</div>
        <div class="fc-title">Reports & Analytics</div>
        <p class="fc-desc">Make data-driven decisions with comprehensive reports on sales, items, staff performance, and expenses — all exportable in one click.</p>
        <ul class="fc-list">
          <li>Daily, weekly, monthly sales reports</li>
          <li>Best-selling items analysis</li>
          <li>Staff performance reports</li>
          <li>Export to PDF & Excel</li>
          <li>Tax & GST reports</li>
        </ul>
      </div>
    </div>

    <!-- SMALL FEATURE GRID -->
    <div style="margin-top:48px;">
      <div class="section-header center reveal">
        <div class="section-eyebrow">More Features</div>
        <h2 class="section-heading">EVERYTHING INCLUDED</h2>
      </div>
      <div class="features-small-grid reveal">
        <?php
        $mini = [
          ['💳', 'Payment Gateway',      'Razorpay & Stripe integration for UPI, cards and wallets.'],
          ['👥', 'Staff Management',      'Role-based logins — waiter, cashier, manager, admin.'],
          ['🗺️', 'Custom Floor Plans',    'Drag-and-drop table layout to match your space.'],
          ['📅', 'Table Reservations',    'Accept and manage advance bookings with ease.'],
          ['📦', 'Inventory',             'Track stock levels, set low-stock alerts, reduce waste.'],
          ['🛵', 'Delivery Management',   'Assign and track delivery executives per order.'],
          ['💰', 'Expense Tracking',      'Log and categorize all business expenses.'],
          ['🏪', 'Multi-Branch',          'Manage up to 5 locations from one dashboard.'],
          ['🖨️', 'Bill Printing',         'Fast, accurate billing with custom templates.'],
          ['📱', 'Waiter App',            'Waiters can take orders from their own device.'],
          ['🎨', 'Theme Customisation',   'Customise colours and branding to match your outlet.'],
          ['📺', 'Customer Display',      'Show order summary on a customer-facing screen.'],
        ];
        foreach($mini as [$icon,$title,$desc]):
        ?>
        <div class="feat-mini">
          <div class="icon"><?= $icon ?></div>
          <h4><?= $title ?></h4>
          <p><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ══ HOW IT WORKS ══ -->
<section style="padding:80px 0 100px; background:var(--black2); border-top:1px solid var(--border);">
  <div class="container">
    <div class="section-header center reveal">
      <div class="section-eyebrow">Getting Started</div>
      <h2 class="section-heading">UP AND RUNNING<br>IN MINUTES</h2>
    </div>
    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:32px;" class="reveal">
      <?php
      $steps = [
        ['01', 'Choose Your Plan',   'Pick the annual plan that fits your business size — 1 outlet to 5 branches.'],
        ['02', 'Onboard With Us',    'Our team configures your menus, tables, and staff settings for you.'],
        ['03', 'Go Live',            'Start taking orders, printing bills, and tracking performance the same day.'],
      ];
      foreach($steps as [$num,$title,$desc]):
      ?>
      <div style="text-align:center; padding:32px 24px; background:var(--black3); border:1px solid var(--border); border-radius:var(--r); position:relative;">
        <div style="font-family:var(--fh); font-size:4rem; color:rgba(204,0,0,0.15); position:absolute; top:16px; left:50%; transform:translateX(-50%); letter-spacing:2px;"><?= $num ?></div>
        <div style="width:52px;height:52px;border:2px solid var(--red);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 20px;font-family:var(--fh);font-size:1.1rem;color:var(--red); position:relative; z-index:1;"><?= $num ?></div>
        <h4 style="font-family:var(--fh);font-size:1.3rem;letter-spacing:1px;color:var(--white);margin-bottom:10px;"><?= $title ?></h4>
        <p style="font-size:0.85rem;color:var(--muted2);"><?= $desc ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center; margin-top:40px;">
      <a href="contact.php" class="btn btn-red btn-lg">Get Started Today →</a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
