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
</footer>

<script src="assets/js/main.js?v=1.3"></script>
<?= isset($extraJs) ? $extraJs : '' ?>
</body>
</html>
