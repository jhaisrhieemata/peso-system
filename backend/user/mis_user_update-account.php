<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['update_profile']))
		{
			$user_id=$_SESSION['user_id'];
            $user_fname=$_POST['user_fname'];
			$user_lname=$_POST['user_lname'];
            $user_email=$_POST['user_email'];
            $user_number=$_POST['user_number'];
            $user_dpic=$_FILES["user_dpic"]["name"];
		    move_uploaded_file($_FILES["user_dpic"]["tmp_name"],"assets/images/users/".$_FILES["user_dpic"]["name"]);

            //sql to insert captured values
			$query="UPDATE mis_user SET user_fname=?, user_lname=?, user_email=?, user_number=?, user_dpic=? WHERE user_id = ?";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssssi', $user_fname, $user_lname, $user_email, $user_number, $user_dpic, $user_id);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Profile Updated";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}
			
			
        }
        //Change Password
        if(isset($_POST['update_pwd']))
		{
            $user_id=$_SESSION['user_id'];
            $user_pwd=sha1(md5($_POST['user_pwd']));//double encrypt 
            $user_pwd_confirm=sha1(md5($_POST['user_pwd_confirm']));//double encrypt 
            
            //sql to insert captured values
			$query="UPDATE mis_user SET user_pwd =?, user_pwd_confirm=? WHERE user_id = ?";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('ssi', $user_pwd, $user_pwd_confirm, $user_id);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Password Updated";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}
			
			
		}
        include('assets/inc/checklogin.php');
check_login();
$user_id = $_SESSION['user_id'];
if(isset($_GET['update']))
{
      $id=intval($_GET['delete']);
      $adn="updatefrom mis_employment where employment_id=?";
      $stmt= $mysqli->prepare($adn);
      $stmt->bind_param('i',$id);
      $stmt->execute();
      $stmt->close();	 

        if($stmt)
        {
          $success = "Employment Records Updated";
        }
          else
          {
              $err = "Try Again Later";
          }
  } 
?>
<!DOCTYPE html>
    <html lang="en">
        <?php include('assets/inc/head.php');?>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include('assets/inc/nav.php');?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <?php
                $user_id=$_SESSION['user_id'];
                // $user_dpic=$_GET['user_dpic'];
                $ret="SELECT * FROM  mis_user where user_id=?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$user_id);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                //$cnt=1;
                while($row=$res->fetch_object())
                {
            ?>
                <div class="content-page">
                    <div class="content">

                        <!-- Start Content-->
                        <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="mis_user_dashboard.php">Dashboard</a></li>
                                                <!-- <li class="breadcrumb-item"><a href="mis_user_update_single_employment.php?employment_id=1">Profile</a></li> -->
                                                <li class="breadcrumb-item active">Account</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Manage your account</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title -->

                            <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">
                                    <img src="assets/images/users/<?php echo $row->user_dpic;?>" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                    
                                    <div class="text-left mt-3">
                                        
                                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2"><?php echo $row->user_fname;?> <?php echo $row->user_lname;?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Contact Number:</strong> <span class="ml-2"><?php echo $row->user_number;?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Registration Type :</strong> <span class="ml-2"><?php echo $row->regtype;?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2"><?php echo $row->user_email;?></span></p>


                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col-->

                                <div class="col-lg-8 col-xl-8">
                                    <div class="card-box">
                                        <ul class="nav nav-pills navtab-bg nav-justified">
                                            <li class="nav-item">
                                                <a href="#aboutme" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Update Account
                                                </a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                    Change Password
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="aboutme">

                                            <form method="post" enctype="multipart/form-data">
                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="firstname">First Name</label>
                                                                <input  required="required" type="text" name="user_fname"  class="form-control" id="firstname" value="<?php echo $row->user_fname;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="lastname">Last Name</label>
                                                                <input  required="required" type="text" name="user_lname" class="form-control" id="lastname" value="<?php echo $row->user_lname;?>">
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="useremail">Email Address</label>
                                                                <input  required="required" type="email" name="user_email" class="form-control" id="useremail" value="<?php echo $row->user_email;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="user_number">Contact Number</label>
                                                                <input  required="required" type="number" name="user_number" class="form-control" id="user_number" value="<?php echo $row->user_number;?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row">
                                                          <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="user_dpic">Profile Picture</label>
                                                                <!-- If the file exists, set the input value to display the file name -->
                                                                <!-- Display the current file name -->
                                                                <!-- Display the current file name (shortened) -->
                                                                <p>Current File: <?php echo isset($row->user_dpic) ? (strlen($row->user_dpic) > 20 ? substr($row->user_dpic, 0, 20) . '...' : $row->user_dpic) : 'No file uploaded'; ?></p>

                                                                    <!-- File input for uploading a new file -->
                                                                     <input required="required" type="file" name="user_dpic" class="form-control btn btn-success" id="user_dpic">

                                                                       <!-- Hidden input to store the current file name (for server-side processing) -->
                                                                          <input type="hidden" name="user_dpic" value="<?php echo isset($row->user_dpic) ? $row->user_dpic : ''; ?>">

                                                            </div>
                                                            <div id="file-name"></div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="regtype">Registration Type</label>
                                                                <input required="required" type="text" name="regtype" class="form-control" id="regtype" value="<?php echo $row->regtype;?>" disabled>
                                                            </div>
                                                        </div>
                                                        
                                                    </div> <!-- end row -->

                                                    
                                                    <!-- <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Company Info</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="companyname">Company Name</label>
                                                                <input type="text" class="form-control" id="companyname" placeholder="Enter company name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="cwebsite">Website</label>
                                                                <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                                            </div>
                                                        </div> 
                                                    </div> 

                                                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i> Social</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-fb">Facebook</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-fb" placeholder="Url">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-tw">Twitter</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-tw" placeholder="Username">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div> 

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-insta">Instagram</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-insta" placeholder="Url">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-lin">Linkedin</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-lin" placeholder="Url">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div> 

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-sky">Skype</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fab fa-skype"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-sky" placeholder="@username">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="social-gh">Github</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fab fa-github"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="social-gh" placeholder="Username">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>  -->
                                                    
                                                    <div class="text-right">
                                                        <button type="submit" name="update_profile" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                                    </div>
                                                </form>


                                            </div> <!-- end tab-pane -->
                                            <!-- end about me section content -->

                                           

                                            <div class="tab-pane" id="settings">
                                                <form method="post">
                                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="Old_Password">Old Password</label>
                                                                <input type="password" required="required" class="form-control" name="user_pwd" id="Old_Password" placeholder="Enter Old Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="user_pwd">New Password</label>
                                                                <input type="password" required="required" class="form-control" name="user_pwd" id="user_pwd" placeholder="Enter New Password">
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->

                                                    <div class="form-group">
                                                        <label for="user_pwd_confirm">Confirm Password</label>
                                                        <input type="password"  required="required" class="form-control" name="user_pwd_confirm" id="user_pwd_confirm" placeholder="Confirm New Password">
                                                        <span id="password-error" style="color: red;"></span> 
                                                    </div>

                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                                        <button type="submit" name="update_pwd" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Update Password</button>
                                                      </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- end settings content-->

                                        </div> <!-- end tab-content -->
                                    </div> <!-- end card-box-->

                                </div> <!-- end col -->
                            </div>
                            <!-- end row-->

                        </div> <!-- container -->

                    </div> <!-- content -->

                    <!-- Footer Start -->
                    <?php include("assets/inc/footer.php");?>
                    <!-- end Footer -->

                </div>
            <?php }?>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
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
<!-- to show file name of profile picture -->
<script>
document.getElementById('user_dpic').onchange = function() {
    document.getElementById('file-name').textContent = this.files[0].name;
};
</script>

    </body>


</html>