<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    
<section class="header-section" id="header-placeholder">
    <?php include 'includes/header.php'; ?>
</section>

<?php
    // Get the current URL path
    $currentPath = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    // Define the default page
    $defaultPage = '/about';
    
    // Map paths to files
    $pageMap = [
        '/product' => 'product.php',
        '/contact' => 'contact.php',
        '/feature' => 'feature.php',
        '/about' => 'about.php',
        '/home' => 'home.php',
    ];

    // Determine the file to include based on the current path
    $fileToInclude = isset($pageMap[$currentPath]) ? $pageMap[$currentPath] : $pageMap[$defaultPage];
?>

<main>
    <?php include $fileToInclude; ?>
</main>

<?php include 'includes/foot.php'; ?>
</body>
</html>
