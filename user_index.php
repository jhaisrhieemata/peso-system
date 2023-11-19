<?php
$dt = new DateTime('Asia/Manila');
$dateFormatted = $dt->format('D, F d Y | H:i:s a');
// $fontColor = 'black'; // Define the font color as black
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Page Title -->
    <title>PESO Manolo Fortich</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/Peso_log.png" type="image/x-icon">
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
       <div class="spinner"></div>
    </div>
    <!-- Preloader End -->
    <!-- Header Area Starts -->
    <header class="header-area">
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.php"></a>
                </div>
                <nav id="nav-menu-container" >
                    <ul class="nav-menu">
                       <li><a href="user_index.php"><?php echo $dateFormatted; ?></a></li>
                       <li><a href="https://web.manolofortich.gov.ph/">LGU MANOLO FORTICH</a></li>
                       <li class="menu-active"><a href="user_index.php">Home</a></li>
                       <!-- <li><a href="https://whattime.is/en/time-in/Philippines/Manolo+Fortich"><?php echo $dateFormatted; ?></a></li> -->
                         <!-- <li><a href="https://peis.philjobnet.ph/index.aspx">PESO OFFICE NATIONAL</a></li> -->
                        <!-- <li><a href="https://www.facebook.com/pesomanolo">FACEBOOK</a></li> -->
                        <li><a href="backend/user/mis_user_register.php">Sign Up</a></li>
                        <li><a href="backend/user/index.php">Login</a></li>
                      
                    </ul>
                </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                   
            </div>
        </div>
    </section>
    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
