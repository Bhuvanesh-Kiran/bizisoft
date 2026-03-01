<?php
$pageTitle = 'Restaurant Management Software';
$metaDesc  = 'Bizisoft — All-in-one POS & management software for restaurants, tiffin centres, and food businesses across India. Annual plans from ₹8,500.';
require_once 'includes/header.php';
?>

<!-- ══ HERO ══ -->
<section class="page-hero" style="padding-top:140px; padding-bottom:80px; background: linear-gradient(180deg, #0e0000 0%, var(--black) 100%);">
  <div class="hero-bg-text">FOOD</div>
  <div class="container">
    <div class="hero-grid">
      <div class="hero-left reveal-left">
        <div class="section-eyebrow">Restaurant Software</div>
        <h1 class="display-heading">
          MANAGE<br>
          YOUR <span class="red">FOOD</span><br>
          <span class="dim">BUSINESS.</span>
        </h1>
        <p style="font-size:1.05rem; color:var(--muted2); max-width:480px; margin-top:20px; font-weight:300; line-height:1.8;">
          From single restaurants to multi-branch tiffin centres — Bizisoft gives you POS, orders, tables, billing, and analytics in one powerful platform.
        </p>
        <div class="hero-actions">
          <a href="pricing.php" class="btn btn-red btn-lg">View Plans →</a>
          <a href="features.php" class="btn btn-outline btn-lg">Explore Features</a>
        </div>
        <div class="hero-stats">
          <div class="hero-stat-item">
            <div class="num" data-count="500" data-suffix="+">500+</div>
            <div class="lbl">Restaurants</div>
          </div>
          <div class="hero-stat-item">
            <div class="num" data-count="50000" data-suffix="+">50,000+</div>
            <div class="lbl">Daily Orders</div>
          </div>
          <div class="hero-stat-item">
            <div class="num" data-count="99" data-suffix="%">99%</div>
            <div class="lbl">Uptime</div>
          </div>
        </div>
      </div>

      <!-- DASHBOARD PREVIEW CARD -->
      <div class="hero-right reveal-right" style="position:relative;">
        <div style="background:var(--black2); border:1px solid var(--border); border-top:2px solid var(--red); border-radius:var(--r); padding:28px; position:relative; overflow:hidden;">
          <div style="position:absolute;top:-40px;right:-40px;width:180px;height:180px;background:radial-gradient(circle,rgba(204,0,0,0.12) 0%,transparent 70%);pointer-events:none;"></div>
          <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:24px;">
            <div>
              <div style="font-size:0.65rem;text-transform:uppercase;letter-spacing:2px;color:var(--muted);">Today's Revenue</div>
              <div style="font-family:var(--fh);font-size:2.2rem;letter-spacing:1px;color:var(--white);margin-top:4px;">₹24,850</div>
              <div style="font-size:0.75rem;color:#4ade80;margin-top:3px;">↑ 18% vs yesterday</div>
            </div>
            <div style="text-align:right;">
              <div style="font-size:0.65rem;text-transform:uppercase;letter-spacing:2px;color:var(--muted);">Orders</div>
              <div style="font-family:var(--fh);font-size:2.2rem;letter-spacing:1px;color:var(--red);">142</div>
              <div style="font-size:0.75rem;color:var(--muted);">↑ 23 new</div>
            </div>
          </div>
          <div style="display:flex;align-items:flex-end;gap:6px;height:52px;margin-bottom:20px;">
            <?php foreach([25,45,35,70,55,85,65,90,72,88] as $h): ?>
            <div style="flex:1;height:<?=$h?>%;background:<?=$h>70?'var(--red)':'rgba(255,255,255,0.1)'?>;border-radius:3px 3px 0 0;transition:height 0.3s;"></div>
            <?php endforeach; ?>
          </div>
          <?php foreach([['Table 04 — Biryani ×2','₹480','delivered'],['Takeaway — Thali ×3','₹360','preparing'],['Table 07 — Dosa Set','₹220','delivered']] as [$item,$price,$status]): ?>
          <div style="display:flex;justify-content:space-between;align-items:center;font-size:0.8rem;padding:8px 12px;background:var(--black3);border-radius:6px;margin-bottom:8px;">
            <span style="color:var(--muted2);"><?= $item ?></span>
            <span style="color:var(--text);font-weight:600;"><?= $price ?></span>
            <span style="color:<?=$status==='delivered'?'#4ade80':'#facc15'?>;font-size:0.7rem;text-transform:uppercase;"><?= ucfirst($status) ?></span>
          </div>
          <?php endforeach; ?>
        </div>
        <div style="position:absolute;bottom:-16px;left:-16px;background:var(--red);border-radius:var(--rs);padding:14px 20px;box-shadow:var(--shadow-red);">
          <div style="font-size:0.65rem;text-transform:uppercase;letter-spacing:1.5px;color:rgba(255,255,255,0.7);">Active Tables</div>
          <div style="font-family:var(--fh);font-size:1.6rem;color:white;letter-spacing:1px;">12/16</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ STATS ══ -->
<div class="stats-strip">
  <div class="container">
    <div class="stats-row reveal">
      <div class="stat-cell"><div class="num"><span data-count="500" data-suffix="+">500+</span></div><div class="lbl">Restaurants Served</div></div>
      <div class="stat-cell"><div class="num"><span data-count="50000" data-suffix="+">50K+</span></div><div class="lbl">Daily Orders Processed</div></div>
      <div class="stat-cell"><div class="num"><span data-count="99" data-suffix="%">99%</span></div><div class="lbl">Uptime SLA</div></div>
      <div class="stat-cell"><div class="num">24<em>/7</em></div><div class="lbl">Customer Support</div></div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════════
     SHOWCASE SECTIONS — 4 feature highlights
     Layout mirrors bizisoft.com exactly:
     screenshot on one side, text on the other
     alternating per row
══════════════════════════════════════════════ -->

<!-- 1. Streamline Order Management — image LEFT, text RIGHT -->
<section class="sc-section">
  <div class="container">
    <div class="sc-row reveal">

      <div class="sc-img-col">
        <!--
          SAVE your screenshot as: assets/images/sc-orders.png
          (the image showing order cards / billing screen from bizisoft.com)
        -->
        <img src="assets/img/order-management.png"
             alt="Order Management Dashboard"
             class="sc-screenshot" />
      </div>

      <div class="sc-text-col">
        <h2 class="sc-heading">Streamline Order Management</h2>
        <p class="sc-desc">Never lose track of an order again. All your customer orders — from dine-in to takeout — are organized and easily accessible in one place. Speed up service and keep your kitchen running smoothly.</p>
        <ul class="sc-list">
          <li>Real-time order tracking across all channels</li>
          <li>Instant KOT printing straight to the kitchen</li>
          <li>Dine-in, takeaway &amp; delivery in one unified view</li>
          <li>Live status — New, Preparing, Delivered</li>
        </ul>
        <a href="features.php" class="btn btn-ghost" style="margin-top:28px;">Learn More →</a>
      </div>

    </div>
  </div>
</section>

<!-- 2. Optimize Table Reservations — text LEFT, image RIGHT -->
<section class="sc-section sc-alt">
  <div class="container">
    <div class="sc-row sc-row-reverse reveal">

      <div class="sc-text-col">
        <h2 class="sc-heading">Optimize Table Reservations</h2>
        <p class="sc-desc">Maximize seating efficiency with real-time table tracking and reservations. Reduce wait times and ensure no table sits empty during peak hours, improving customer experience and turnover.</p>
        <ul class="sc-list">
          <li>Live reservation list with customer details</li>
          <li>Date &amp; time-based booking management</li>
          <li>Assign tables instantly to walk-ins or bookings</li>
          <li>Confirmed, Checked-In &amp; No-Show tracking</li>
        </ul>
        <a href="features.php" class="btn btn-ghost" style="margin-top:28px;">Learn More →</a>
      </div>

      <div class="sc-img-col">
        <!--
          SAVE your screenshot as: assets/images/sc-reservations.png
          (the image showing the reservation list with date picker)
        -->
        <img src="assets/img/table-reservation.png"
             alt="Table Reservations"
             class="sc-screenshot" />
      </div>

    </div>
  </div>
</section>

<!-- 3. Effortless Menu Management — image LEFT, text RIGHT -->
<section class="sc-section">
  <div class="container">
    <div class="sc-row reveal">

      <div class="sc-img-col">
        <!--
          SAVE your screenshot as: assets/images/sc-menu.png
          (the image showing the billing / order detail screen)
        -->
        <img src="assets/img/effortless.png"
             alt="Menu Management"
             class="sc-screenshot" />
      </div>

      <div class="sc-text-col">
        <h2 class="sc-heading">Effortless Menu Management</h2>
        <p class="sc-desc">Easily add, edit, or remove items from your menu on the go. Highlight specials, update prices, and keep everything in sync across all platforms, so your staff and customers always see the latest offerings.</p>
        <ul class="sc-list">
          <li>Add &amp; update items instantly from any device</li>
          <li>Organise by categories &amp; sub-categories</li>
          <li>Toggle item availability with a single click</li>
          <li>Auto-syncs with your QR Code digital menu</li>
        </ul>
        <a href="features.php" class="btn btn-ghost" style="margin-top:28px;">Learn More →</a>
      </div>

    </div>
  </div>
</section>

<!-- 4. Reports & Analytics — text LEFT, image RIGHT -->
<section class="sc-section sc-alt">
  <div class="container">
    <div class="sc-row sc-row-reverse reveal">

      <div class="sc-text-col">
        <h2 class="sc-heading">Powerful Reports &amp; Analytics</h2>
        <p class="sc-desc">Get complete visibility into your restaurant's performance. Track revenue, today's orders, top-selling dishes, and payment methods — all in one real-time dashboard that helps you make smarter decisions.</p>
        <ul class="sc-list">
          <li>Today's orders, earnings &amp; customer count</li>
          <li>Monthly sales graph &amp; trend analysis</li>
          <li>Top selling dishes &amp; tables at a glance</li>
          <li>Payment method breakdown (Cash, UPI, Card)</li>
        </ul>
        <a href="features.php" class="btn btn-ghost" style="margin-top:28px;">Learn More →</a>
      </div>

      <div class="sc-img-col">
        <!--
          SAVE your screenshot as: assets/images/sc-reports.png
          (the image showing the full dashboard with statistics)
        -->
        <img src="assets/img/dashboard.png"
             alt="Reports and Analytics Dashboard"
             class="sc-screenshot" />
      </div>

    </div>
  </div>
</section>

<!-- ══ HOME FEATURES ══ -->
<section class="home-features">
  <div class="container">
    <div class="section-header reveal">
      <div class="section-eyebrow">Core Features</div>
      <h2 class="section-heading">BUILT FOR<br>FOOD BUSINESSES</h2>
      <p class="section-sub">Everything you need to run your restaurant efficiently — from billing to branch management.</p>
    </div>
    <div class="feat-strip reveal">
      <?php
      $hfeats = [
        ['🖥️', 'POS System',         'Complete point-of-sale for dine-in, takeaway and delivery.'],
        ['📲', 'QR Code Menu',        'Contactless digital menus customers scan instantly.'],
        ['🎟️', 'Kitchen Tickets',     'Real-time KOT printing to keep your kitchen in sync.'],
        ['📊', 'Reports',             'Daily, weekly and monthly analytics at a glance.'],
        ['👥', 'Staff Management',    'Role-based access for every team member.'],
        ['🏪', 'Multi-Branch',        'Manage up to 5 branches from one dashboard.'],
      ];
      foreach($hfeats as [$icon,$title,$desc]):
      ?>
      <div class="feat-strip-item">
        <div class="fsi-icon"><?= $icon ?></div>
        <div class="fsi-title"><?= $title ?></div>
        <p class="fsi-desc"><?= $desc ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center; margin-top:36px;">
      <a href="features.php" class="btn btn-ghost">See All Features →</a>
    </div>
  </div>
</section>

<!-- ══ PRICING PREVIEW ══ -->
<section style="padding:80px 0; background:var(--black2); border-top:1px solid var(--border);">
  <div class="container">
    <div class="section-header center reveal">
      <div class="section-eyebrow">Pricing</div>
      <h2 class="section-heading">SIMPLE, ANNUAL PLANS</h2>
      <p class="section-sub">All plans include full access with no hidden fees. GST applicable separately.</p>
    </div>
    <div class="plans-grid reveal">
      <?php
      $plans = [
        ['Starter',  '8,500',  '1 Restaurant',       false, 'Perfect for a single outlet.'],
        ['Growth',   '12,500', 'Up to 3 Branches',   true,  'For expanding food businesses.'],
        ['Business', '18,500', 'Up to 5 Branches',   false, 'Full power for food chains.'],
      ];
      foreach($plans as [$name,$price,$branches,$popular,$desc]):
      ?>
      <div class="plan-card <?= $popular ? 'popular' : '' ?>">
        <?php if($popular): ?><div class="plan-tag">Most Popular</div><?php endif; ?>
        <div class="plan-name"><?= $name ?></div>
        <div class="plan-price"><sup>₹</sup><?= $price ?></div>
        <div class="plan-gst">+ GST per year</div>
        <div class="plan-branches"><?= $branches ?></div>
        <div class="plan-desc"><?= $desc ?></div>
        <div class="plan-cta">
          <a href="pricing.php" class="btn <?= $popular ? 'btn-red' : 'btn-outline' ?>" style="width:100%;justify-content:center;">Learn More</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center; margin-top:32px;">
      <a href="pricing.php" class="btn btn-ghost">Full Pricing Details →</a>
    </div>
  </div>
</section>

<!-- ══ TESTIMONIALS ══ -->
<section class="testimonials">
  <div class="container">
    <div class="section-header center reveal">
      <div class="section-eyebrow">Testimonials</div>
      <h2 class="section-heading">TRUSTED BY<br>FOOD BUSINESSES</h2>
    </div>
    <div class="testi-grid reveal">
      <?php
      $testimonials = [
        ['RK', 'Ravi Kumar',   'Owner, Andhra Spice Restaurant', '"Bizisoft transformed how we run our restaurant. Managing orders, tables, and staff from one platform reduced our workload dramatically."'],
        ['SM', 'Sunita Mehra', 'Manager, Lakshmi Tiffin Centre',  '"The QR menu and Razorpay integration are game-changers. Table turnover improved significantly within the first month."'],
        ['AP', 'Arjun Prasad', 'CEO, Prasad Food Chain',          '"Running 3 branches used to be a nightmare. Now everything is synced in real-time. Worth every rupee of the annual plan."'],
      ];
      foreach($testimonials as [$init,$name,$role,$quote]):
      ?>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-text"><?= htmlspecialchars($quote) ?></p>
        <div class="testi-author">
          <div class="testi-av"><?= $init ?></div>
          <div>
            <div class="testi-name"><?= $name ?></div>
            <div class="testi-role"><?= $role ?></div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ BIG CTA ══ -->
<section class="big-cta">
  <div class="container">
    <div class="big-cta-inner reveal">
      <div>
        <h2>READY TO <span>GROW</span><br>YOUR BUSINESS?</h2>
        <p style="margin-top:10px; font-size:0.9rem; color:var(--muted2); max-width:400px;">Get started with Bizisoft today and take full control of your restaurant operations.</p>
      </div>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-red btn-lg">Get Started →</a>
        <a href="pricing.php" class="btn btn-outline btn-lg">View Pricing</a>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>