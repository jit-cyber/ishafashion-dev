<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>

<section class="header-section" id="header-placeholder">
    <?php include 'includes/header.php'; ?>
</section>

<?php
    // Enable error reporting for debugging
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Get the current URL path and remove trailing slashes
    $currentPath = rtrim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), '/');

    // Define the default page
    $defaultPage = '/home';
    
    // Map paths to files
    $pageMap = [
        '/product' => 'product.php',
        '/contact' => 'contact.php',
        '/feature' => 'feature.php',
        '/about' => 'about.php',
        '/home' => 'Home.php',
    ];

    // Determine the file to include based on the current path
    $fileToInclude = isset($pageMap[$currentPath]) ? $pageMap[$currentPath] : $pageMap[$defaultPage];

    // Fallback to a 404 page if the file does not exist
    if (!file_exists($fileToInclude)) {
        $fileToInclude = '404.php';
    }
?>

<main>
    <?php include $fileToInclude; ?>
</main>

<!-- <?php include 'includes/foot.php'; ?> -->
</body>
</html>

