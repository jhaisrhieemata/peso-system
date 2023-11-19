<!-- Server side code to handle  Jobseeker Registration Form -->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['add_agency']))
		{
			$agency_name=$_POST['agency_name'];
			$address=$_POST['address'];
			$contact=$_POST['contact']; 
            $email=$_POST['email'];
           
            //sql to insert captured values
			$query="INSERT into mis_agency (agency_name, address, contact, email) values(?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('ssss', $agency_name, $address, $contact ,$email);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Agency Added";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}
			
			
		}
?>
<!--End Server Side-->
<!--End Patient Registration-->
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Agency</a></li>
                                            <li class="breadcrumb-item active">New Agency </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Create New Agency </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">INFORMATION AGENCY</h4>
                                        <!--Add Jobseeker Form-->
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputagencyname" class="col-form-label">Agency Name</label>
                                                    <input type="text" required="required" name="agency_name" class="form-control" id="inputagencyname" placeholder="Agency Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputaddress" class="col-form-label">Address</label>
                                                    <input required="required" type="text" name="address" class="form-control"  id="inputaddress" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                       <label for="inputcontact" class="col-form-label">Contact</label>
                                                          <input type="text" required="required" name="contact" class="form-control" id="inputcontact" placeholder="Contact">
                                                 </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputemail" class="col-form-label">Email</label>
                                                    <input type="email" required="required" name="email" class="form-control" id="inputemail" placeholder="Email">
                                                </div>
                                            </div>
                                
                                           <button type="submit" name="add_agency" class="ladda-button btn btn-primary" data-style="expand-right">Add Agency</button>
                                        </form>
                                        <!--End Patient Form-->
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
        
    </body>

</html>