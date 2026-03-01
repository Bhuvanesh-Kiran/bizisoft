<?php

// Import PHPMailer classes into the global namespace

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\SMTP;

use PHPMailer\PHPMailer\Exception;



require_once 'includes/config.php';



// Load PHPMailer files manually from your vendor folder

require 'vendor/PHPMailer/Exception.php';

require 'vendor/PHPMailer/PHPMailer.php';

require 'vendor/PHPMailer/SMTP.php';



$pageTitle = 'Contact Us';
$metaDesc  = 'Contact Bizisoft — Get in touch for a demo or to start your plan. Email: contact@bizisoft.com | Phone: +91 90307 61831 | Visakhapatnam.';

/* ═══════════════════════════════════════════
    FORM HANDLER
═══════════════════════════════════════════ */
// ... [rest of your logic remains the same]

/* ═══════════════════════════════════════════
   FORM HANDLER
═══════════════════════════════════════════ */
$formSuccess = false;
$formError   = '';
$formData    = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['contact_submit'])) {

    /* Sanitise inputs using the helper from config.php */
    $name    = clean($_POST['name']    ?? '');
    $phone   = clean($_POST['phone']   ?? '');
    $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $biz     = clean($_POST['biz']     ?? '');
    $plan    = clean($_POST['plan']    ?? '');
    $message = clean($_POST['message'] ?? '');
    $honey   = $_POST['website'] ?? ''; // hidden bot trap

    $formData = compact('name','phone','email','biz','plan','message');

    /* Bot trap check */
    if (!empty($honey)) {
        $formSuccess = true; // Silently succeed to trick bots
    }
    /* Validation logic */
    elseif (empty($name)) {
        $formError = 'Please enter your name.';
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formError = 'Please enter a valid email address.';
    } elseif (empty($message)) {
        $formError = 'Please write a message.';
    } else {
        
        $mail = new PHPMailer(true);

        try {
            // --- SMTP SETTINGS ---
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'bhuvibarla.2004@gmail.com';
            $mail->Password   = 'hukx pkzc hocu nwzs'; // Your Google App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // --- EMAIL CONTENT ---
            $mail->setFrom('noreply@bizisoft.com', 'Bizisoft Website');
            $mail->addAddress(SITE_EMAIL); // Forwarding to contact@bizisoft.com
            $mail->addReplyTo($email, $name); // Sets customer as the reply target

            $mail->isHTML(false); // Plain text format for better deliverability
            $mail->Subject = "New Enquiry from {$name} — Bizisoft";
            
            $body  = "NEW CONTACT FORM SUBMISSION\n";
            $body .= "═══════════════════════════════════\n\n";
            $body .= "Name          : {$name}\n";
            $body .= "Phone         : {$phone}\n";
            $body .= "Email         : {$email}\n";
            $body .= "Business Type : {$biz}\n";
            $body .= "Interested In : {$plan}\n\n";
            $body .= "Message:\n{$message}\n";

            $mail->Body = $body;

            $mail->send();
            
            // Post-Redirect-Get pattern to prevent form resubmission on refresh
            header('Location: contact.php?sent=1');
            exit;
        } catch (Exception $e) {
            $formError = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

/* Trigger success alert after redirect */
if (isset($_GET['sent']) && $_GET['sent'] === '1') {
    $formSuccess = true;
}

$preselectedPlan = clean($_GET['plan'] ?? '');
require_once 'includes/header.php';
?>

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

<section class="contact-page">
  <div class="container">
    <div class="contact-layout">

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

      <div class="contact-form-wrap reveal-right">
        <h3>SEND A MESSAGE</h3>
        <p>Fill in the form and we'll get back to you promptly.</p>

        <?php if ($formSuccess): ?>
        <div class="alert alert-success">
          ✅   Your message has been sent! We'll contact you within 24 hours.
        </div>
        <?php endif; ?>

        <?php if ($formError): ?>
        <div class="alert alert-error">
          ⚠️   <?= htmlspecialchars($formError) ?>
        </div>
        <?php endif; ?>

        <form method="POST" action="contact.php" novalidate>
          <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off" />

          <div class="form-row">
            <div class="form-group">
              <label for="f_name">Full Name *</label>
              <input type="text" id="f_name" name="name"
                     placeholder="Your full name"
                     value="<?= htmlspecialchars($formData['name'] ?? '') ?>" required />
            </div>
            <div class="form-group">
              <label for="f_phone">Phone / WhatsApp</label>
              <input type="tel" id="f_phone" name="phone"
                     placeholder="+91 98765 43210"
                     value="<?= htmlspecialchars($formData['phone'] ?? '') ?>" />
            </div>
          </div>

          <div class="form-group">
            <label for="f_email">Email Address *</label>
            <input type="email" id="f_email" name="email"
                   placeholder="you@yourrestaurant.com"
                   value="<?= htmlspecialchars($formData['email'] ?? '') ?>" required />
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="f_biz">Business Type</label>
              <select id="f_biz" name="biz">
                <option value="">Select type…</option>
                <?php
                $bizTypes = ['Restaurant (Single Outlet)', 'Tiffin Centre', 'Multi-Branch Restaurant', 'Cloud Kitchen', 'Cafeteria / Canteen', 'Hotel Restaurant', 'Fast Food Outlet', 'Other'];
                foreach($bizTypes as $t):
                  $sel = (($formData['biz'] ?? '') === $t) ? 'selected' : '';
                ?>
                <option <?= $sel ?>><?= htmlspecialchars($t) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="f_plan">Interested Plan</label>
              <select id="f_plan" name="plan">
                <option value="">Select plan…</option>
                <?php
                $planOpts = [
                  'Starter — ₹8,500 + GST (1 Outlet)',
                  'Growth — ₹12,500 + GST (Up to 3 Branches)',
                  'Business — ₹18,500 + GST (Up to 5 Branches)',
                  'Not sure — need recommendation',
                ];
                foreach($planOpts as $opt):
                  $selPlan = ($formData['plan'] ?? $preselectedPlan);
                  $selected = (strpos($opt, $selPlan) !== false && !empty($selPlan)) ? 'selected' : '';
                ?>
                <option <?= $selected ?>><?= htmlspecialchars($opt) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="f_msg">Message *</label>
            <textarea id="f_msg" name="message"
                      placeholder="Tell us about your business, tables, or specific questions…"><?= htmlspecialchars($formData['message'] ?? '') ?></textarea>
          </div>

          <button type="submit" name="contact_submit" value="1" class="btn btn-red" style="width:100%;justify-content:center;font-size:1rem;padding:16px;">
            Send Message →
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<section style="padding:0 0 80px;">
  <div class="container">
    <div style="background:var(--black2); border:1px solid var(--border); border-radius:var(--r); overflow:hidden;">
      <div style="background:linear-gradient(135deg,var(--black3),var(--black2)); height:200px; display:flex;align-items:center;justify-content:center;gap:20px; border-bottom:1px solid var(--border);">
        <div style="font-size:3rem;">📍</div>
        <div>
          <div style="font-family:var(--fh);font-size:1.4rem;letter-spacing:1px;color:var(--white);">VISAKHAPATNAM</div>
          <div style="font-size:0.85rem;color:var(--muted);margin-top:4px;">Andhra Pradesh, India</div>
          <a href="https://maps.google.com/?q=Visakhapatnam,Andhra+Pradesh" target="_blank" rel="noopener"
             style="font-size:0.78rem;color:var(--red);margin-top:8px;display:inline-block;">Open in Google Maps →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>