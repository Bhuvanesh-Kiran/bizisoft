<?php
define('SITE_NAME',    'Bizisoft');
define('SITE_TAGLINE', 'Restaurant Management Software');
define('SITE_EMAIL',   'contact@bizisoft.com');
define('SITE_PHONE',   '+91 90307 61831');
define('SITE_PHONE_RAW', '+919030761831');
define('SITE_ADDRESS', 'Visakhapatnam, Andhra Pradesh, India');
define('CURRENT_YEAR', date('Y'));
define('BASE_URL',     '');

// Active page detection
function activePage(string $page): string {
    $current = basename($_SERVER['PHP_SELF'], '.php');
    return ($current === $page || ($current === 'index' && $page === 'home')) ? 'active' : '';
}

// Sanitize helper
function clean(string $input): string {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}
?>
