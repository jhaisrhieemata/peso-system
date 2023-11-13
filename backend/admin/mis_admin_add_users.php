<!--Server side code to handle  Pesoclient Registration-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['add_user']))
		{
			$user_fname=$_POST['user_fname'];
			$user_lname=$_POST['user_lname'];
            $user_email=$_POST['user_email'];
            $user_number=$_POST['user_number'];
            $user_pwd=sha1(md5($_POST['user_pwd']));//double encrypt to increase security
            $user_pwd_confirm=sha1(md5($_POST['user_pwd_confirm']));//double encrypt to increase security
            $regtype=$_POST['regtype'];
            $user_dpic=$_POST['user_dpic'];
            
            //sql to insert captured values
			$query="INSERT INTO mis_user (user_fname, user_lname, user_email, user_number, user_pwd, user_pwd_confirm, regtype, user_dpic) values(?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('ssssssss', $user_fname, $user_lname, $user_email, $user_number, $user_pwd, $user_pwd_confirm, $regtype, $user_dpic);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "User Employee Details Added";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}
			
			
		}
?>
<!--End Server Side-->
<!--End Pesoclient Registration-->
<!DOCTYPE html>
<html lang="en">
    
    <!--Head-->
    <?php include('assets/inc/head.php');?>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include("assets/inc/nav.php");?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include("assets/inc/sidebar.php");?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

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
                                            <li class="breadcrumb-item"><a href="mis_admin_dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                            <li class="breadcrumb-item active">Add User </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add User Details</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <div class="row"> 
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Fill all fields</h4>
                                        <!--Add Patient Form-->
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputfirstname" class="col-form-label">First Name</label>
                                                    <input type="text" required="required" name="user_fname" class="form-control" id="inputfirstname" placeholder="First Name" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputlastname" class="col-form-label">Last Name</label>
                                                    <input required="required" type="text" name="user_lname" class="form-control"  id="inputlastname" placeholder="Lastname">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-2" style="display:none">
                                                    <?php 
                                                        $length = 5;    
                                                        $user_code =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                                                    ?>
                                                    <label for="inpuusernumber" class="col-form-label">user Number</label>
                                                    <input type="number" name="user_number" value="<?php echo $user_code;?>" class="form-control" id="inpuusernumber">
                                                </div>
                                                <div class="form-row">
                                               <div class="form-group col-md-6">
                                                     <label for="inputemail" class="col-form-label">Email</label>
                                                     <input required="required" type="email" class="form-control" name="user_email" id="inputemail" placeholder="Email">
                                                </div>
                                                 <div class="form-group col-md-6">
                                                       <label for="inputcontact" class="col-form-label">Contact Number</label>
                                                       <input required="required" type="number" name="user_number" class="form-control"  id="inputcontact" placeholder="Contact Number" pattern="\d{11}" title="Please enter 11 digits">
                                                 </div>
                                            </div>

                                            <div class="form-row">
                                               <div class="form-group col-md-6">
                                                    <label for="regtype" class="col-form-label">Registration Type</label>
                                                    <select id="regtype" required="required" name="regtype" class="form-control">
                                                    <option value="">-Select-</option>
                                                       <option>Employment</option>
                                                        <option>Scholarship</option>
                                                        <option>SPES</option>
                                                        <option>GIP</option>
                                                        <option>TesdaTraining</option>
                                                    </select>
                                                </div>
                                            
                                                 <div class="form-group col-md-6">
                                                    <label for="user_pwd" class="col-form-label">Password</label>
                                                    <input required="required" type="password" name="user_pwd" class="form-control" id="user_pwd" placeholder="Password">
                                                </div>
                                            </div>

                                            <div class="form-row">     
                                                <div class="form-group col-md-6">
                                                    <label for="inputprofilepic" class="col-form-label">Profile Picture</label>
                                                    <input required="required"  type="file" name="user_dpic" class="btn btn-success form-control"  id="inputprofilepic" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                     <label for="user_pwd_confirm">Confirm Password</label>
                                                     <input required="required"  type="password" name="user_pwd_confirm" class="form-control"   id="user_pwd_confirm" placeholder="Confirm Password"> 
                                                     <span id="password-error" style="color: red;"></span>                   
                                                 </div>
                                            </div>

                                            <button type="submit" name="add_user" class="ladda-button btn btn-success" data-style="expand-right">Add User</button>

                                        </form>
                                        <!--End Pesoclient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include('assets/inc/footer.php');?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

       
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>

        <!-- Loading buttons js -->
        <script src="assets/libs/ladda/spin.js"></script>
        <script src="assets/libs/ladda/ladda.js"></script>

        <!-- Buttons init js-->
        <script src="assets/js/pages/loading-btn.init.js"></script>
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
        
    </body>

</html>