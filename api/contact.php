<?php
$root = file_exists(dirname(__DIR__) . '/includes/config.php')
        ? dirname(__DIR__) : __DIR__;
require_once $root . '/includes/config.php';

$pageTitle = 'Contact Us';
$metaDesc  = 'Contact Bizisoft — Get in touch for a demo or to start your plan. Email: contact@bizisoft.com | Phone: +91 90307 61831 | Visakhapatnam.';

$preselectedPlan = clean($_GET['plan'] ?? '');
require_once $root . '/includes/header.php';
?>

<!-- ══ HERO ══ -->
<section class="page-hero" style="background:linear-gradient(180deg,#0e0000 0%,var(--black) 100%); padding-bottom:60px;">
  <div class="hero-bg-text">CONTACT</div>
  <div class="container" style="text-align:center; position:relative; z-index:1;">
    <div class="section-eyebrow reveal" style="justify-content:center;">Get in Touch</div>
    <h1 class="display-heading reveal" style="margin-bottom:16px;">
      LET'S <span class="red">GROW</span><br>YOUR BUSINESS<br><span class="dim">TOGETHER.</span>
    </h1>
    <p class="section-sub reveal" style="margin:0 auto; font-size:1rem;">
      Have questions or ready to start? Our team will get back to you within 24 hours.
    </p>
  </div>
</section>

<!-- ══ CONTACT LAYOUT ══ -->
<section class="contact-page">
  <div class="container">
    <div class="contact-layout">

      <!-- LEFT: Contact Info -->
      <div class="contact-info-col reveal-left">
        <div class="section-eyebrow">Contact Details</div>
        <h2>REACH US<br>ANYTIME</h2>
        <p>We're based in Visakhapatnam and serve food businesses across India. Drop us a message or call directly.</p>

        <div class="contact-item">
          <div class="contact-ic">📧</div>
          <div>
            <div class="ci-label">Email</div>
            <div class="ci-value"><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></div>
          </div>
        </div>

        <div class="contact-item">
          <div class="contact-ic">📞</div>
          <div>
            <div class="ci-label">Phone / WhatsApp</div>
            <div class="ci-value"><a href="tel:<?= SITE_PHONE_RAW ?>"><?= SITE_PHONE ?></a></div>
          </div>
        </div>

        <div class="contact-item">
          <div class="contact-ic">📍</div>
          <div>
            <div class="ci-label">Address</div>
            <div class="ci-value"><?= SITE_ADDRESS ?></div>
          </div>
        </div>

        <div class="contact-item">
          <div class="contact-ic">🕐</div>
          <div>
            <div class="ci-label">Business Hours</div>
            <div class="ci-value">Mon – Sat: 9:00 AM – 7:00 PM IST</div>
          </div>
        </div>
      </div>

      <!-- RIGHT: Contact Form — powered by Formspree -->
      <div class="contact-form-wrap reveal-right">
        <h3>SEND A MESSAGE</h3>
        <p>Fill in the form and we'll get back to you promptly.</p>

        <!-- Success message shown after Formspree redirects back with ?sent=1 -->
        <?php if (isset($_GET['sent']) && $_GET['sent'] === '1'): ?>
        <div class="alert alert-success">
          ✅ &nbsp;Your message has been sent! We'll contact you within 24 hours.
        </div>
        <?php endif; ?>

        <!--
          FORMSPREE SETUP (one-time, 2 minutes):
          1. Go to https://formspree.io and sign up free
          2. Click "New Form" → name it "Bizisoft Contact"
          3. Copy your form endpoint (looks like https://formspree.io/f/xyzabcde)
          4. Replace YOUR_FORMSPREE_ID below with just the ID part (e.g. xyzabcde)
        -->
        <form
          action="https://formspree.io/f/YOUR_FORMSPREE_ID"
          method="POST"
          novalidate>

          <!-- Tell Formspree where to redirect after success -->
          <input type="hidden" name="_next"    value="https://YOUR-SITE.vercel.app/contact.php?sent=1" />
          <!-- Email subject line in your inbox -->
          <input type="hidden" name="_subject" value="New Enquiry — Bizisoft Website" />
          <!-- Bot trap -->
          <input type="text"   name="_gotcha"  style="display:none;" tabindex="-1" autocomplete="off" />

          <div class="form-row">
            <div class="form-group">
              <label for="f_name">Full Name *</label>
              <input type="text" id="f_name" name="name"
                     placeholder="Your full name" required />
            </div>
            <div class="form-group">
              <label for="f_phone">Phone / WhatsApp</label>
              <input type="tel" id="f_phone" name="phone"
                     placeholder="+91 98765 43210" />
            </div>
          </div>

          <div class="form-group">
            <label for="f_email">Email Address *</label>
            <input type="email" id="f_email" name="email"
                   placeholder="you@yourrestaurant.com" required />
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="f_biz">Business Type</label>
              <select id="f_biz" name="Business Type">
                <option value="">Select type…</option>
                <?php
                $bizTypes = [
                  'Restaurant (Single Outlet)',
                  'Tiffin Centre',
                  'Multi-Branch Restaurant',
                  'Cloud Kitchen',
                  'Cafeteria / Canteen',
                  'Hotel Restaurant',
                  'Fast Food Outlet',
                  'Other',
                ];
                foreach ($bizTypes as $t): ?>
                <option><?= htmlspecialchars($t) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="f_plan">Interested Plan</label>
              <select id="f_plan" name="Interested Plan">
                <option value="">Select plan…</option>
                <?php
                $planOpts = [
                  'Starter — ₹8,500 + GST (1 Outlet)',
                  'Growth — ₹12,500 + GST (Up to 3 Branches)',
                  'Business — ₹18,500 + GST (Up to 5 Branches)',
                  'Not sure — need recommendation',
                ];
                foreach ($planOpts as $opt):
                  $selected = (!empty($preselectedPlan) && strpos($opt, $preselectedPlan) !== false) ? 'selected' : '';
                ?>
                <option <?= $selected ?>><?= htmlspecialchars($opt) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="f_msg">Message *</label>
            <textarea id="f_msg" name="message"
                      placeholder="Tell us about your business, number of tables, or any specific questions…"></textarea>
          </div>

          <button type="submit" class="btn btn-red"
                  style="width:100%;justify-content:center;font-size:1rem;padding:16px;">
            Send Message →
          </button>

        </form>
      </div>

    </div>
  </div>
</section>

<!-- ══ LOCATION ══ -->
<section style="padding:0 0 80px;">
  <div class="container">
    <div style="background:var(--black2); border:1px solid var(--border); border-radius:var(--r); overflow:hidden;">
      <div style="background:linear-gradient(135deg,var(--black3),var(--black2)); height:200px; display:flex; align-items:center; justify-content:center; gap:20px; border-bottom:1px solid var(--border);">
        <div style="font-size:3rem;">📍</div>
        <div>
          <div style="font-family:var(--fh);font-size:1.4rem;letter-spacing:1px;color:var(--white);">VISAKHAPATNAM</div>
          <div style="font-size:0.85rem;color:var(--muted);margin-top:4px;">Andhra Pradesh, India</div>
          <a href="https://maps.google.com/?q=Visakhapatnam,Andhra+Pradesh"
             target="_blank" rel="noopener"
             style="font-size:0.78rem;color:var(--red);margin-top:8px;display:inline-block;">
            Open in Google Maps →
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once $root . '/includes/footer.php'; ?>