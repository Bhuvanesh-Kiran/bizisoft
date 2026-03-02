</main>

<!-- FOOTER -->
<footer id="siteFooter">
  <div class="ft-top">
    <div class="container">
      <div class="ft-grid">
        <div class="ft-brand">
          <a class="logo" href="index.php">
            <a class="logo" href="index.php">
      <img src="assets/img/bizi.png" alt="Bizisoft Logo" style="height: 42px; width: auto; display: block; object-fit: contain;">
    </a>
          </a>
          <p>All-in-one restaurant POS &amp; management software for food businesses across India.</p>
          <div class="ft-contact-mini">
            <a href="mailto:<?= SITE_EMAIL ?>">📧 <?= SITE_EMAIL ?></a>
            <a href="tel:<?= SITE_PHONE_RAW ?>">📞 <?= SITE_PHONE ?></a>
            <span>📍 <?= SITE_ADDRESS ?></span>
          </div>
        </div>
        <div class="ft-links">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="features.php">Features</a></li>
            <li><a href="pricing.php">Pricing</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
        <div class="ft-links">
          <h4>Plans</h4>
          <ul>
            <li><a href="pricing.php">Starter — ₹8,500+GST</a></li>
            <li><a href="pricing.php">Growth — ₹12,500+GST</a></li>
            <li><a href="pricing.php">Business — ₹18,500+GST</a></li>
          </ul>
        </div>
        <div class="ft-links">
          <h4>Features</h4>
          <ul>
            <li><a href="features.php#pos">POS System</a></li>
            <li><a href="features.php#qr">QR Code Menu</a></li>
            <li><a href="features.php#kot">Kitchen Order Tickets</a></li>
            <li><a href="features.php#reports">Reports & Analytics</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="ft-bottom">
    <div class="container">
      <p>© <?= CURRENT_YEAR ?> <?= SITE_NAME ?>. All Rights Reserved. Built for food businesses in India.</p>
    </div>
  </div>

  <a href="https://wa.me/<?= SITE_PHONE_RAW ?>" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
    <svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor">
      <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.767 5.767 0 1.267.408 2.445 1.103 3.407l-.722 2.637 2.7-.71c.927.576 2.016.914 3.187.914 3.181 0 5.767-2.586 5.767-5.767 0-3.181-2.586-5.767-5.767-5.767zm3.39 8.187c-.147.414-.73.743-1.006.786-.255.04-.582.072-1.748-.41-1.488-.614-2.445-2.126-2.52-2.226-.073-.1-1.31-1.742-1.31-3.324 0-1.582.81-2.36.1.1 0 0 .1 0 0 0-.25.414.07-.643.165-.843.1-.2.245-.3.49-.3.245 0 .49 0 .614.3.3.74 1.488 1.8 1.8 1.95.3.15.5.15.7-.15.2-.3.85-1.1 1.05-1.3.2-.2.4-.15.7 0 .3.15 1.9.95 2.1 1.05.2.1.35.15.4.25.05.1.05.575-.1.99z"/>
    </svg>
    <span>Chat with us</span>
  </a>
</footer>

<script src="assets/js/main.js?v=1.3"></script>
<?= isset($extraJs) ? $extraJs : '' ?>
</body>
</html>
