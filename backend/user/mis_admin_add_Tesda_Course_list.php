<!-- Server side code to handle  Jobseeker Registration Form -->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['add_tesda_course']))
		{
			$course_offered=$_POST['course_offered'];
			$training_hours=$_POST['training_hours'];
            $training_discription=$_POST['training_discription'];
			$trainer=$_POST['trainer']; 
            $status=$_POST['status'];
           
            //sql to insert captured values
			$query="INSERT into tesda_training (course_offered, training_hours, training_discription, trainer, status) values(?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssss', $course_offered, $training_hours, $training_discription, $trainer ,$status);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Tesda Course Added";
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tesda Training</a></li>
                                            <li class="breadcrumb-item active">New Tesda Training</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Create New Tesda Training </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Information Tesda Course</h4>
                                        <!--Add Jobseeker Form-->
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputagencyname" class="col-form-label">Training Offerred</label>
                                                    <input type="text" required="required" name="course_offered" class="form-control" id="inputagencyname" placeholder="Training Offerred">
                                                </div>
                                               
                                                <div class="form-group col-md-6">
                                                    <label for="inputtraining_hours" class="col-form-label">Training Hours</label>
                                                    <input required="required" type="number" name="training_hours" class="form-control"  id="inputtraining_hours" placeholder="Training Hour">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                     <label for="inputjobname" class="col-form-label">Training Discription</label>
                                                     <input required="required" type="text" class="form-control" name="training_discription" id="inputjobname" placeholder="Training Discription">
                                                   </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                       <label for="inputtrainer" class="col-form-label">Trainer</label>
                                                          <input type="text" required="required" name="trainer" class="form-control" id="inputtrainer" placeholder="Trainer">
                                                 </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputstatus" class="col-form-label">Status</label>
                                                    <input type="status" required="required" name="status" class="form-control" id="inputstatus" placeholder="Status">
                                                </div>
                                            </div>
                                
                                           <button type="submit" name="add_tesda_course" class="ladda-button btn btn-primary" data-style="expand-right">Add Tesda Course</button>
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
