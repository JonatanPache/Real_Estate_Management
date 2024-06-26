<?php include 'config/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <title>The Home</title>

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <!-- All CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/all.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/meanmenu.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/spacing.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>dist/css/style.css">

    <!-- All Javascripts -->
    <script src="<?php echo BASE_URL; ?>dist/js/jquery-3.6.3.min.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/js/wow.min.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/js/select2.min.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/js/moment.min.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/js/owl.carousel.min.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/js/jquery.meanmenu.js"></script>
    <script src="<?php echo BASE_URL; ?>dist/tinymce/tinymce.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="navbar-area" id="stickymenu">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="<?php echo BASE_URL; ?>uploads/logoew.png" alt="">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="<?php echo BASE_URL; ?>">
                        <img src="<?php echo BASE_URL; ?>uploads/logoew.png" alt="">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a href="<?php echo BASE_URL; ?>" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="properties.html" class="nav-link">Properties</a>
                            </li>
                            <li class="nav-item">
                                <a href="agents.html" class="nav-link">Agents</a>
                            </li>
                            <li class="nav-item">
                                <a href="locations.html" class="nav-link">Locations</a>
                            </li>
                            <li class="nav-item">
                                <a href="pricing.html" class="nav-link">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a href="faq.html" class="nav-link">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog.html" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo BASE_URL; ?>select_user.php" class="nav-link">Login</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>