<!--Server side code to handle  Jobseeker Registration Form-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['add_employment']))
		{
			$job_sname=$_POST['job_sname'];
			$job_fname=$_POST['job_fname'];
			$job_mname=$_POST['job_mname'];
            $job_suffix=$_POST['job_suffix'];
            $job_dob=$_POST['job_dob'];
            $job_sex=$_POST['job_sex'];
           
            //sql to insert captured values
			$query="insert into mis_jobseeker_reg_frm (job_sname, job_fname, job_mname, job_suffix, job_dob, job_sex, job_addr, job_rel, job_cs, job_tin, job_disa, job_height, job_contact, job_email, job_emplo_stat, job_ayofw, job_ayfofw, job_4psbene, job_po, job_pwl, job_lang, job_curen_sch, job_level, job_course, job_train, job_certifition, job_eligi, job_professional, job_comp, job_posi, job_numberofmonths, job_oskill, job_referred_to) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssssssssssssssssssssssssssssssss', $job_sname, $job_fname, $job_mname,$job_suffix, $job_dob, $job_sex, $job_addr, $job_rel, $job_cs,$job_tin, $job_disa, $job_height, $job_contact, $job_email, $job_emplo_stat, $job_ayofw, $job_ayfofw, $job_4psbene, $job_po, $job_pwl, $job_lang, $job_curen_sch, $job_level, $job_course, $job_train, $job_certifition, $job_eligi, $job_professional, $job_comp, $job_posi, $job_numberofmonths, $job_oskill, $job_referred_to);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Details Added";
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Employment </a></li>
                                            <li class="breadcrumb-item active">New Employment </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Create New Employment </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">PERSONAL INFORMATION</h4>
                                        <!--Add Jobseeker Form-->
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">SurName</label>
                                                    <input type="text" required="required" name="job_sname" class="form-control" id="inputEmail4" placeholder="SurName">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">First Name</label>
                                                    <input required="required" type="text" name="job_fname" class="form-control"  id="inputPassword4" placeholder="Firts Name">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Middle Name</label>
                                                    <input type="text" required="required" name="job_mname" class="form-control" id="inputEmail4" placeholder="Middle Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Suffix</label>
                                                    <select id="inputState" required="required" name="job_suffix" class="form-control">
                                                       <option>NA</option>
                                                        <option>Sr</option>
                                                        <option>Jr</option>
                                                        <option>III</option>
                                                        <option>II</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Address</label>
                                                    <input type="text" required="required" name="job_addr" class="form-control" id="inputEmail4" placeholder="Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Contact</label>
                                                    <input required="required" type="text" name="job_contact" class="form-control"  id="inputPassword4" placeholder="Contact">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Educational Attainment</label>
                                                    <input type="text" required="required" name="job_edu" class="form-control" id="inputEmail4" placeholder="Educational Attainment">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Company Applied</label>
                                                    <input required="required" type="text" name="job_companayapplied" class="form-control"  id="inputPassword4" placeholder="Company Applied">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Position Applied</label>
                                                    <input type="text" required="required" name="job_positionapplied" class="form-control" id="inputEmail4" placeholder="Position Applied">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Date Applied</label>
                                                    <input type="date" required="required" name="job_dob" class="form-control" id="inputEmail4" placeholder="Date Applied">
                                                </div>
                                                
                                            </div>

                                            

                                           <button type="submit" name="add_employment" class="ladda-button btn btn-primary" data-style="expand-right">Add Employment</button>
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