<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trim - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/animate.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/aos.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Trim.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#services" class="nav-link">Services &amp; Pricing</a></li>
                <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="#blog" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                <?php if(logged_in()): ?>
                <li class="nav-item dropdown d-flex align-items-center">
                    <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= base_url('assets/home/images/person_1.jpg') ?>" class="rounded-circle" style="width: 35px; height: 35px; object-fit: cover;">
                        <span class="ml-2 d-none d-lg-inline">Ujang Maman</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
                <?php else: ?>
                    <li class="nav-item pl-3">
                    <a href="login" class="nav-link text-white font-weight-bold border border-light rounded" style="white-space: nowrap; height: 35px; line-height: 35px; padding-top: 0; padding-bottom: 0; display: inline-flex; align-items: center;">Login</a>
                </li>
                  <?php  endif; ?>
            </ul>
        </div>
    </div>
</nav>





    <?= $this->renderSection("content") ?>
    <?= $this->include("home/layouts/footer") ?>








    <script src="<?= base_url() ?>assets/home/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url() ?>assets/home/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/jquery.stellar.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/aos.js"></script>
    <script src="<?= base_url() ?>assets/home/js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url() ?>assets/home/js/jquery.timepicker.min.js"></script>
    <script src="<?= base_url() ?>assets/home/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?= base_url() ?>assets/home/js/google-map.js"></script>
    <script src="<?= base_url() ?>assets/home/js/main.js"></script>

</body>

</html>