<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['update_user']))
		{
            $user_id=$_GET['user_id'];
			$user_fname=$_POST['user_fname'];
			$user_lname=$_POST['user_lname'];
            $user_email=$_POST['user_email'];
            $user_number=$_POST['user_number'];
            $regtype=$_POST['regtype'];
            $user_pwd=sha1(md5($_POST['user_pwd']));//double encrypt to increase security
            $user_pwd_confirm=sha1(md5($_POST['user_pwd_confirm']));//double encrypt to increase security
            // $user_pwd=sha1(md5($_POST['user_pwd']));
            $user_dpic=$_FILES["user_dpic"]["name"];
		    move_uploaded_file($_FILES["user_dpic"]["tmp_name"],"../user/assets/images/users/".$_FILES["user_dpic"]["name"]);

            //sql to insert captured values
			$query="UPDATE mis_user SET user_fname=?, user_lname=?,user_email=?, user_number=?, regtype=?, user_pwd=?, user_pwd_confirm=?, user_dpic=? WHERE user_id = ?";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('ssssssssi', $user_fname, $user_lname,$user_email, $user_number, $regtype, $user_pwd, $user_pwd_confirm, $user_dpic, $user_id);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "User Employee Details Updated";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}
			
			
		}
?>
<!--End Server Side-->
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
                                            <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                            <li class="breadcrumb-item active">Manage</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Update User Details</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <?php
                            $user_id=$_GET['user_id'];
                            $ret="SELECT  * FROM mis_user WHERE user_id=?";
                            $stmt= $mysqli->prepare($ret) ;
                            $stmt->bind_param('i',$user_id);
                            $stmt->execute() ;//ok
                            $res=$stmt->get_result();
                            //$cnt=1;
                            while($row=$res->fetch_object())
                            {
                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Fill all fields</h4>
                                        <!--Add user Form-->
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputuserfirstname" class="col-form-label">First Name</label>
                                                    <input type="text" required="required" value="<?php echo $row->user_fname;?>" name="user_fname" class="form-control" id="inputuserfirstname" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputuserlastname" class="col-form-label">Last Name</label>
                                                    <input required="required" type="text" value="<?php echo $row->user_lname;?>" name="user_lname" class="form-control"  id="inputuserlastname">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                               <div class="form-group col-md-6">
                                                         <label for="inputuseremail" class="col-form-label">Email</label>
                                                          <input required="required" type="email" value="<?php echo $row->user_email;?>" class="form-control" name="user_email" id="inputuseremail">
                                                 </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputusernumber" class="col-form-label">Contact Number</label>
                                                    <input required="required" type="number" value="<?php echo $row->user_number;?>" class="form-control" name="user_number" id="inputusernumber">
                                                  </div>
                                            </div>
                                             <div class="form-row">
                                              <div class="form-group col-md-6">
                                                    <label for="regtype" class="col-form-label">Registration Type</label>
                                                    <select id="regtype" required="required" name="regtype" class="form-control">
                                                    <option value="">-Select-</option>
                                                       <option value="Employment" <?php if ($row->regtype == 'Employment') echo 'selected'; ?>>Employment</option>
                                                       <option value="Scholarship" <?php if ($row->regtype == 'Scholarship') echo 'selected'; ?>>Scholarship</option>
                                                       <option value="SPES" <?php if ($row->regtype == 'SPES') echo 'selected'; ?>>SPES</option>
                                                       <option value="GIP" <?php if ($row->regtype == 'GIP') echo 'selected'; ?>>GIP</option>
                                                       <option value="TesdaTraining" <?php if ($row->regtype == 'TesdaTraining') echo 'selected'; ?>>TesdaTraining</option>
                                                    </select>
                                                </div>
                                                  <div class="form-group col-md-6">
                                                       <label for="user_pwd" class="col-form-label">Password</label>
                                                       <input required="required" type="password"  name="user_pwd" class="form-control"  id="user_pwd" placeholder="Password">
                                                   </div>
                                            </div> 
                                                <div class="form-row"> 
                                                <div class="form-group col-md-6">
                                                    <label for="inputuserprofilepicture" class="col-form-label">Profile Picture</label>
                                                    <input required="required" type="file" value="<?php echo $row->user_dpic;?>"  name="user_dpic" class="btn btn-success form-control"  id="inputuserprofilepicture">
                                                </div>  
                                                 <div class="form-group col-md-6">
                                                     <label for="user_pwd_confirm">Confirm Password</label>
                                                     <input required="required"  type="password" name="user_pwd_confirm" class="form-control"   id="user_pwd_confirm" placeholder="Confirm Password"> 
                                                     <span id="password-error" style="color: red;"></span>                   
                                                 </div>   
                                             
                                           
                                                
                                            </div>                                            

                                            <button type="submit" name="update_user" class="ladda-button btn btn-success" data-style="expand-right">Update User</button>

                                        </form>
                                        <!--End user Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <?php }?>

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