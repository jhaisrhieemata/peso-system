<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $user_id=$_SESSION['user_id'];
  $user_number = $_SESSION['user_email'];

?>
<!DOCTYPE html>
<html lang="en">
    
    <!--Head Code-->
    <?php include("assets/inc/head.php");?>

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
                $ret="SELECT 
                mis_employment.employment_id, 
                mis_employment.special_skill,
                mis_scholarship.scholarship_id,
                mis_user.user_id,
                mis_user.user_email, 
                mis_user.user_fname, 
                mis_user.user_lname 
            FROM mis_user
            LEFT JOIN mis_employment ON mis_user.user_id = mis_employment.user_id
            LEFT JOIN mis_scholarship ON mis_user.user_id = mis_scholarship.user_id
                 WHERE mis_user.user_id = ?";
                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$user_id );
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
                                    
                                    <h4 class="page-title">Hello, <?php echo ucwords($row->user_fname . ' ' . $row->user_lname);?> </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        

             <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                             <ul class="nav nav-tabs">
                              <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#1a" data-toggle="tab">Matched jobs</a>
                              </li>
                              <li class="nav-item"> <a class="nav-link"  href="#2a" data-toggle="tab">Job List</a>
                              </li>
                              <li class="nav-item"> <a class="nav-link"  href="#3a" data-toggle="tab">Tesda Course List</a>
                              </li>
                            </ul>
                            
			              <div class="tab-content clearfix">
			                 <div class="tab-pane active" id="1a">
                             <?php
                                   $special_skill = $row->special_skill;
                                   $job_prediction = "";
                               
                                   // Define a mapping of skills to jobs
                                   $skill_to_job_mapping = array(
                                       "Coding/Programming" => "Sofware developer",
                                       "Data Analysis" => "Data Scientist",
                                       "Digital Marketing" => "Marketing Manager",
                                       "Communication" => "Teacher",
                                       "Project Management" => "Project Manager",
                                       "Problem Solving" => "Problem Solver",
                                       "Adaptability" => "Adaptability Specialist",
                                       "Customer Service" => "Customer Service Representative",
                                       "Creativity" => "Creative Designer",
                                       "Foreign Language Proficiency" => "Language Interpreter"
                                   );
                               
                                   // Check if the special_skill exist in the mapping
                                   if (isset($skill_to_job_mapping[$special_skill])) {
                                       $job_prediction = $skill_to_job_mapping[$special_skill];
                                       echo "<h5>Your predicted job: $job_prediction</h5>";
                                   } else {
                                       echo "<h4>There are no matched jobs for you now. Keep your profile up-to-date to see jobs that match your skills and qualifications.</h4>";
                                   }
                             ?>
                             <!-- <script>
                                      // Display the default content for tabs
                                      document.getElementById('1a').classList.add('active'); // Make 'Matched jobs' tab active
                                      document.getElementById('2a').classList.remove('active'); // Remove 'Job List' tab active state
                                      document.getElementById('3a').classList.remove('active'); // Remove 'Tesda Course List' tab active state
                                    
                                      // Display default content for 'Matched jobs' tab
                                      document.getElementById('1a').innerHTML = "<?php echo addslashes("<h5>Your predicted job: $job_prediction</h5>"); ?>";
                                      document.getElementById('2a').innerHTML = "<?php echo addslashes("<h4>Coming Soon!</h4>"); ?>"; // Default content for 'Job List' tab
                                      document.getElementById('3a').innerHTML = "<?php echo addslashes("<h4>Tesda course Coming Soon!</h4>"); ?>"; // Default content for 'Tesda Course List' tab
                                    </script> -->
				             </div>
			                	<div class="tab-pane" id="2a">
                                      <h4>Coming Soon!</h4>
			                   	</div>
                                <div class="tab-pane" id="3a">
                                      <h4>Tesda course Coming Soon!</h4>
			                   	</div>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	                     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

                        </div>
                    </div>
                </div>
            </div>                     
        </div> <!-- container -->

    </div> <!-- content -->

                <!-- Footer Start -->
                <?php include('assets/inc/footer.php');?>
                <!-- end Footer -->
 
            <?php }?>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>