<!-- Server side code to handle  Jobseeker Registration Form -->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['update_tesda_course']))
		{
			$tesda_course_id=$_GET['tesda_course_id'];
            $course_offered=$_POST['course_offered'];
			$training_hours=$_POST['training_hours'];
            $training_discription=$_POST['training_discription'];
			$trainer=$_POST['trainer']; 
            $status=$_POST['status'];
           
            //sql to insert captured values
			$query="UPDATE mis_tesda_course SET course_offered=?, training_hours=?, training_discription=?, trainer=?, status=? WHERE tesda_course_id = ?";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssssi', $course_offered, $training_hours,$training_discription, $trainer ,$status, $tesda_course_id);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Tesda Training Updated";
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tesda Course</a></li>
                                            <li class="breadcrumb-item active">Manage Tesda Course </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title"></h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <?php
                            $tesda_course_id=$_GET['tesda_course_id'];
                            $ret="SELECT  * FROM  mis_tesda_course WHERE tesda_course_id=?";
                            $stmt= $mysqli->prepare($ret) ;
                            $stmt->bind_param('i',$tesda_course_id);
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
                                        <h4 class="header-title">Information Tesda Course</h4>
                                        <!--Add Jobseeker Form-->
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputagencyname" class="col-form-label">Course Offered</label>
                                                       <input type="text" required="required" value="<?php echo $row->course_offered;?>" name="course_offered" class="form-control" id="inputagencyname" placeholder="Course Offered">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputtraining_hours" class="col-form-label">Training Hours</label>
                                                    <input required="required" type="number" value="<?php echo $row->training_hours;?>" name="training_hours" class="form-control"  id="inputtraining_hours" placeholder="Training Hours">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                     <label for="inputjobname" class="col-form-label">Training Discription</label>
                                                     <input required="required" type="text" value="<?php echo $row->training_discription;?>" class="form-control" name="training_discription" id="inputjobname" placeholder="Training Discription">
                                                   </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                       <label for="inputtrainer" class="col-form-label">Trainer</label>
                                                          <input type="text" required="required" value="<?php echo $row->trainer;?>" name="trainer" class="form-control" id="inputtrainer" placeholder="Trainer">
                                                 </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputstatus" class="col-form-label">Status</label>
                                                    <input type="status" required="required" value="<?php echo $row->status;?>" name="status" class="form-control" id="inputstatus" placeholder="Status">
                                                </div>
                                            </div>
                                
                                           <button type="submit" name="update_tesda_course" class="ladda-button btn btn-primary" data-style="expand-right">Update Tesda Course</button>
                                        </form>
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <?php  }?>

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
