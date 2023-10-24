<!--Server side code to handle  sign up-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['user_signup']))
		{
			$user_fname=$_POST['user_fname'];
			$user_lname=$_POST['user_lname'];
            $user_number=$_POST['user_number'];
			$user_email=$_POST['user_email'];
			$user_pwd=sha1(md5($_POST['user_pwd']));//double encrypt to increase security
            $user_pwd_confirm=sha1(md5($_POST['user_pwd_confirm']));//double encrypt to increase security
            // $user_dpic=$_FILES["user_dpic"];
            $checkEmailQuery = "SELECT user_email FROM mis_user WHERE user_email = ?";
            $stmt = $mysqli->prepare($checkEmailQuery);
            $stmt->bind_param('s', $user_email);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $err = "Email already exists. Please use a different email address.";
            } else {
                if ($user_pwd !== $user_pwd_confirm) {
                    $err = "Passwords do not match";
                } else {
            //sql to insert captured values
			$insertQuery ="INSERT INTO mis_user (user_fname, user_lname, user_number, user_email, user_pwd, user_pwd_confirm, user_dpic) values(?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($insertQuery);
			$rc=$stmt->bind_param('sssssss', $user_fname, $user_lname, $user_number, $user_email, $user_pwd, $user_pwd_confirm, $user_dpic);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Created Account. Proceed To Log In";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}
			
			
		}

       }

    }
?>
<!--End Server Side-->
<!--End Login-->
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>PESO Manolo Fortich</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
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
                                swal("Failed","<?php echo $err;?>","Failed");
                            },
                                100);
                </script>

        <?php } ?>

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="his_admin_register.php">
                                        <span><img src="assets/images/Peso_logo.png" alt="" height="50"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Don't have an account? Create your account, it takes less than a minute</p>
                                </div>

                                <form  method='post'>

                                    <div class="form-group">
                                        <label for="inputfirstname">First Name</label>
                                        <input required="required" class="form-control" type="text"  name = "user_fname" id="inputfirstname" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputlastname">Last Name</label>
                                        <input required="required"  type="text" class="form-control"  name="user_lname" id="inputlastname" placeholder="Enter your lastname" required>
                                    </div>
                                    <div class="form-group col-md-2" style="display:none">
                                                    <!-- <?php 
                                                        $length = 5;    
                                                        $user_number =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                                                    ?> -->
                                                    <label for="inputZip" class="col-form-label">user Number</label>
                                                    <input type="number" name="user_number" value="<?php echo $user_number;?>" class="form-control" id="inputZip">
                                                </div>
                                    <div class="form-group">
                                        <label for="inputemailaddress">Email address</label>
                                        <input required="required" type="email" class="form-control" name="user_email"  id="inputemailaddress" required placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_pwd">Password</label>
                                        <input class="form-control"  type="password"  class="form-control" name="user_pwd" id="user_pwd" placeholder="Enter your password">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_pwd_confirm">Confirm Password</label>
                                        <input class="form-control"  type="password"  class="form-control"  name="user_pwd_confirm" id="user_pwd_confirm" placeholder="Confirm Password">
                                                 <span id="password-error" style="color: red;"></span>
                                                 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                    <script>
                                                         $(document).ready(function() {
                                                            $("#user_pwd_confirm").on("keyup", function() {
                                                                 var password = $("#user_pwd").val();
                                                                 var confirmPassword = $(this).val();
                                                                 var passwordError = $("#password-error");

                                                                  if (password !== confirmPassword) {
                                                                     passwordError.text("Passwords do not match");
                                                                      } else {
                                                                   passwordError.text("");
                                                                      }
                                                                  });
                                                              });
                                                        </script>

                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="inputprofilepicture">Profile Picture</label>
                                        <input required="required" type="file" class="form-control" name="user_dpic"  id="inputprofilepicture">
                                    </div> -->
                                    
                                    
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-success btn-block" name="user_signup" type="submit"> Sign Up </button>
                                    </div>

                                </form>
                                <!--Lets Disable This For We tryna implement it in later versions of this system
                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign up using</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                -->

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-white-50">Already have account?  <a href="index.php" class="text-white ml-1"><b>Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!--Footer-->
            <?php include("assets/inc/footer1.php");?>
        <!-- End Footer-->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>