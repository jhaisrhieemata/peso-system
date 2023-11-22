<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['user_id'];
  $user_email = $_SESSION['user_email'];

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
                                    <div class="card-box">
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
                                                                     echo "<h4>Your predicted job: $job_prediction</h4>";
                                                                 } else {
                                                                     echo "<h4>You do not currently have any matched jobs, make sure your profile is updated.</h4>";
                                                                 }
                                                              ?>
                            
				                                        </div>
			                                                                 <div class="tab-pane" id="2a">
                                                                                        <?php
                                                                                              //code for summing up number of out jobseeker 
                                                                                              $result ="SELECT count(*) FROM  mis_job_opening ";
                                                                                              $stmt = $mysqli->prepare($result);
                                                                                              $stmt->execute();
                                                                                              $stmt->bind_result($job_opening);
                                                                                              $stmt->fetch();
                                                                                              $stmt->close();
                                                                                          ?>
                                                                             <h4 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $job_opening;?> </span> Job Openings</h4>
                                                                             <h4 class="header-title"> </h4>
                                                                              <div class="mb-2">
                                                                                 <div class="row">
                                                                                     <div class="col-12 text-sm-center form-inline" >
                                                                                         <div class="form-group mr-2" style="display:none">
                                                                                             <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                                                                 <option value="">Show all</option>
                                                                                             </select>
                                                                                         </div>
                                                                                         <div class="form-group">
                                                                                             <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                    
                                                                             <div class="table-responsive">
                                                                                 <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="10">
                                                                                     <thead>
                                                                                     <tr>
                                                                                         <!-- <th>#</th> -->
                                                                                         <th data-toggle="true">Job Name</th>
                                                                                         <th data-hide="phone">JOb Description</th>
                                                                                         <th data-hide="phone">Company Name</th>
                                                                                         <!-- <th data-hide="phone">Address</th>
                                                                                         <th data-hide="phone">Contact</th>
                                                                                         <th data-hide="phone">Email</th> -->
                                                                                         <th data-hide="phone">Action</th>
                                                                                     </tr>
                                                                                     </thead>
                                                                                     <?php
                                                                                     /*
                                                                                         *get details of allpatients
                                                                                         *
                                                                                     */
                                                                                         $ret="SELECT * FROM  mis_job_opening ORDER BY job_opening_id ASC "; 
                                                                                         //sql code to get to ten user  randomly
                                                                                         $stmt= $mysqli->prepare($ret) ;
                                                                                         $stmt->execute() ;//ok
                                                                                         $res=$stmt->get_result();
                                                                                         $cnt=1;
                                                                                         while($row=$res->fetch_object())
                                                                                         {
                                                                                     ?>
                                         
                                                                                         <tbody>
                                                                                         <tr>
                                                                                             <!-- <td><?php echo $cnt;?></td> -->
                                                                                             <td><?php echo $row->job_name;?></td>
                                                                                             <td><?php echo $row->job_description;?></td> 
                                                                                             <td><?php echo $row->com_name;?></td>  
                                                                                             <!-- <td><?php echo $row->address;?></td> 
                                                                                             <td><?php echo $row->contact;?></td> 
                                                                                             <td><?php echo $row->email;?></td>                                                       -->
                                                                                             <td><a href="mis_user_view_single_joboffer.php?job_opening_id=<?php echo $row->job_opening_id;?>" class="badge badge-success"><i class="mdi mdi-eye"></i> View</a></td>
                                                                                         </tr>
                                                                                         </tbody>
                                                                                     <?php  $cnt = $cnt +1 ; }?>
                                                                                     <tfoot>
                                                                                     <tr class="active">
                                                                                         <td colspan="8">
                                                                                             <div class="text-right">
                                                                                                 <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                                                                             </div>
                                                                                         </td>
                                                                                     </tr>
                                                                                     </tfoot>
                                                                                 </table>
                                                                             </div> <!-- end .table-responsive-->
                                                                         </div>
                                                                         <div class="tab-pane" id="3a">
                                                                                        <?php
                                                                                              //code for summing up number of out tesda course 
                                                                                              $result ="SELECT count(*) FROM  mis_tesda_course ";
                                                                                              $stmt = $mysqli->prepare($result);
                                                                                              $stmt->execute();
                                                                                              $stmt->bind_result($tesda_course);
                                                                                              $stmt->fetch();
                                                                                              $stmt->close();
                                                                                          ?>
                                                                             <h4 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $tesda_course;?> </span> Tesda Courses</h4>
                                                                             <!-- <h4 class="header-title"> </h4>
                                                                              <div class="mb-2">
                                                                                 <div class="row">
                                                                                     <div class="col-12 text-sm-center form-inline" >
                                                                                         <div class="form-group mr-2" style="display:none">
                                                                                             <select id="demo-foo-filter-status_1" class="custom-select custom-select-sm">
                                                                                                 <option value="">Show all</option>
                                                                                             </select>
                                                                                         </div>
                                                                                         <div class="form-group">
                                                                                             <input id="demo-foo-search_1" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div> -->
                                    
                                                                             <div class="table-responsive">
                                                                                 <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="10">
                                                                                     <thead>
                                                                                     <tr>
                                                                                         <!-- <th>#</th> -->
                                                                                         <th data-toggle="true">Course Offerd</th>
                                                                                         <th data-hide="phone">Training Hours</th>
                                                                                         <!-- <th data-hide="phone">Trainer</th> -->
                                                                                         <th data-hide="phone">Status</th>
                                                                                         <th data-hide="phone">Action</th>
                                                                                     </tr>
                                                                                     </thead>
                                                                                     <?php
                                                                                     /*
                                                                                         *get details of tesda course
                                                                                         *
                                                                                     */
                                                                                         $ret="SELECT * FROM  mis_tesda_course ORDER BY tesda_course_id ASC "; 
                                                                                         //sql code to get to ten user  randomly
                                                                                         $stmt= $mysqli->prepare($ret) ;
                                                                                         $stmt->execute() ;//ok
                                                                                         $res=$stmt->get_result();
                                                                                         $cnt=1;
                                                                                         while($row=$res->fetch_object())
                                                                                         {
                                                                                     ?>
                                         
                                                                                         <tbody>
                                                                                         <tr>
                                                                                             <!-- <td><?php echo $cnt;?></td> -->
                                                                                             <td><?php echo $row->course_offered;?></td>
                                                                                             <td><?php echo $row->trainer_hours;?></td> 
                                                                                             <!-- <td><?php echo $row->trainer;?></td>   -->
                                                                                             <td><?php echo $row->status;?></td>                                                       
                                                                                             <td><a href="mis_user_view_single_tesda_course.php?tesda_course_id=<?php echo $row->tesda_course_id;?>" class="badge badge-success"><i class="mdi mdi-eye"></i> View</a></td>
                                                                                         </tr>
                                                                                         </tbody>
                                                                                     <?php  $cnt = $cnt +1 ; }?>
                                                                                     <tfoot>
                                                                                     <tr class="active">
                                                                                         <td colspan="8">
                                                                                             <div class="text-right">
                                                                                                 <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                                                                             </div>
                                                                                         </td>
                                                                                     </tr>
                                                                                     </tfoot>
                                                                                 </table>
                                                                             </div> <!-- end .table-responsive-->
                                                                         </div>
                                                                                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	                                                                                                  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                                     </div> <!-- end card-box -->
                                  </div> <!-- end col -->

                                </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                 <?php include('assets/inc/footer.php');?>
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

        <!-- Footable js -->
        <script src="assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/foo-tables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>
