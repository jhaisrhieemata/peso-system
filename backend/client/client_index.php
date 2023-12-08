<?php
session_start();
include('assets/inc/config.php'); // get configuration file
if(isset($_POST['user_login']))
{
    // Check value and navigate to a specific page accordingly
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['regtype']))
    switch ($_POST['regtype']) {
        case "Jobseeker":
            header("Location: mis_admin_register_employment.php");
            break;
        case "Scholarship":
            header("Location: mis_admin_register_scholarship.php");
            break;
        case "SPES":
            header("Location: mis_admin_register_spes.php");
            break;
        case "GIP":
            header("Location: mis_admin_register_gip.php");
            break;
        case "TesdaTraining":
            header("Location: mis_admin_register_tesdatraining.php");
            break;
        // Add other cases as needed
        default:
            $err = "Please Choose Registration Invalid input!."; // Handling other values
            break;
  }      
  
}
?>
<!-- End Login -->
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... your existing head content ... -->
    <meta charset="utf-8" />
        <title>PESO Manolo Fortich</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="MartDevelopers" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/Peso_logo.png">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!--Load Sweet Alert Javascript-->
        
        <script src="assets/js/swal.js"></script>
        <!--Inject SWAL-->
        <?php if(isset($success)) {?>
        <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Success","<?php echo $success;?>","success");
                            },
                                100);
                </script>

        <?php } ?>

        <?php if(isset($err)) {?>
        <!--This code for injecting an alert-->
                <script>
                            setTimeout(function () 
                            { 
                                swal("Failed","<?php echo $err;?>","error");
                            },
                                100);
                </script>

        <?php } ?>
</head>

<body class="authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <!-- ... your existing HTML content ... -->
        <body class="authentication-bg authentication-bg-pattern">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-pattern">

                    <div class="card-body p-4">
                        
                        <div class="text-center w-75 m-auto">
                            <a href="index.php">
                                <span><img src="assets/images/Peso_logo.png" alt="" height="100"></span>
                            </a>
                            <p class="text-muted mb-4 mt-3"><h4>Welcome!<br>Public Employment Service Office</p></h4>

                        </div>
        <form method='post'>
            <div class="form-group mb-3">
                <label for="regtype">Choose Registration</label>
                <select id="regtype" required="required" name="regtype" class="form-control">
                    <option value="-Select-">-Select-</option>
                    <option value="Jobseeker">Jobseeker</option>
                    <option value="Scholarship">Scholarship</option>
                    <option value="SPES">SPES</option>
                    <option value="GIP">GIP</option>
                    <option value="TesdaTraining">TesdaTraining</option>
                </select>
            </div>

            <div class="form-group mb-0 text-center">
                <button class="btn btn-success btn-block" name="user_login" type="submit"> Proceed </button>
            </div>
        </form>
        <!-- ... your existing HTML content ... -->
    </div>

    <!-- ... your existing HTML content ... -->


<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>

</html>
