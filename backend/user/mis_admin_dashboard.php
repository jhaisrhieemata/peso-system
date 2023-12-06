<!-- <?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
check_login();
  $ad_id=$_SESSION['ad_id'];
?> -->
<!DOCTYPE html>
<html lang="en">
    
    <!--Head Code-->
    <?php include("assets/inc/head.php");?>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include('assets/inc/nav.php');?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include('assets/inc/sidebar.php');?>
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
                                    
                                    <h4 class="page-title">Public Employment Service Office Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        

                        <div class="row">
                            <!--Start employment-->
                            <div class="col-md-6 col-xl-4">
                            <a href="mis_admin_view_employment.php">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="far fa-user-circle  font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //code for summing up number of out jobseeker 
                                                    $result ="SELECT count(*) FROM job_seeker ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($employment);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $employment;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">Job Seeker</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                              </a>
                            </div> <!-- end col-->
                            <!--End Out jobssekers-->


                            <!--Start tesda trainee-->
                            <div class="col-md-6 col-xl-4">
                            <a href="mis_admin_view_tesdatraining.php">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="fas fa-chalkboard-teacher font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //code for summing up number of out jobseeker 
                                                    $result ="SELECT count(*) FROM tesda_applicant";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($tesdatraining);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $tesdatraining;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">Tesda Trainee</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                              </a>
                            </div> <!-- end col-->

                            <!--Start Employees-->
                            <div class="col-md-6 col-xl-4">
                             <a href="mis_admin_view_users.php">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="fas fa-users font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //code for summing up number of user employee  
                                                    $result ="SELECT count(*) FROM tesda_training ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($user_employee);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $user_employee;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">Tesda Training</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                             </a>
                            </div> <!-- end col-->
                            <!--End Employees-->
                        
                        </div>

                        <div class="row">

                        <div class="col-md-6 col-xl-4">
                            <a href="mis_admin_view_claimclearance.php">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="fa fa-address-card font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //code for summing up number of out jobseeker 
                                                    $result ="SELECT count(*) FROM claim_clearance ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($pesoclearance);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $pesoclearance;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">Claim Clearance</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                                </a>
                            </div> <!-- end col-->

                             <!--Start Employees-->
                             <div class="col-md-6 col-xl-4">
                                <a href="mis_admin_view_scholarship.php">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="fa fa-graduation-cap font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //code for summing up number of employees in the certain scholarship 
                                                    $result ="SELECT count(*) FROM  lgu_scholarship ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($scholarship);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $scholarship;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate"> LGU Scholar</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                                </a>
                            </div> <!-- end col-->
                            <!--End Employees-->
                            <div class="col-md-6 col-xl-4">
                            <a href="mis_admin_view_joboffer.php">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="fa fa-newspaper  font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //code for summing up number of out jobseeker 
                                                    $result ="SELECT count(*) FROM  job_posting ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($job_opening);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $job_opening;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">Job Available</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                             </a>
                            </div> <!-- end col-->
                            <!--Start Employees-->
                            <div class="col-md-6 col-xl-4">
                                <a href="mis_admin_view_spes.php">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="fa fa-graduation-cap font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //code for summing up number of employees in the certain scholarship 
                                                    $result ="SELECT count(*) FROM  spes ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($scholarship);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $scholarship;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">SPES</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                                </a>
                            </div> <!-- end col-->
                            <!--End Employees-->
                            <!--Start Employees-->
                            <div class="col-md-6 col-xl-4">
                                <a href="mis_admin_view_gip.php">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="fa fa-graduation-cap font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //code for summing up number of employees in the certain scholarship 
                                                    $result ="SELECT count(*) FROM  gip ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($scholarship);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $scholarship;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">GIP</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                                </a>
                            </div> <!-- end col-->
                            <!--End Employees-->

                            <!--End Employees-->
                            <div class="col-md-6 col-xl-4">
                            <a href="mis_admin_view_agency.php">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="fa fa-newspaper  font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <?php
                                                    //code for summing up number of out jobseeker 
                                                    $result ="SELECT count(*) FROM  agency";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($job_opening);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $job_opening;?></span></h3>
                                                <p class="text-muted mb-1 text-truncate">Agency</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                             </a>
                            </div> <!-- end col-->
                            <!--Start Employees-->
                        </div>
                        

                        
                        <!--Recently Employed Employees-->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Users</h4>

                                    <div class="table-responsive">
                                        <table class="table table-borderless table-hover table-centered m-0">

                                            <thead class="thead-light">
                                                <tr>
                                                    <th colspan="2">Picture</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Contact Number</th>
                                                    <!-- <th>Registration Type</th> -->
                                                    <!-- <th>Department</th> -->
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $ret = "SELECT * FROM user_staff ORDER BY user_id ASC LIMIT 10";
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
                                                    <td style="width: 36px;">
                                                        <img src="../user/assets/images/users/<?php echo $row->user_dpic;?>" alt="img" title="contact-img" class="rounded-circle avatar-sm" />
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->user_fname;?> <?php echo $row->user_lname;?>
                                                    </td>    
                                                    <td>
                                                        <?php echo $row->user_email;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->user_number;?>
                                                    </td>
                                                    <!-- <td>
                                                        <?php echo $row->regtype;?>
                                                    </td>  -->
                                                    <td>
                                                        <a href="mis_admin_view_single_user.php?user_id=<?php echo $row->user_id;?>&&user_email=<?php echo $row->user_email;?>" class="btn btn-xs btn-primary"><i class="mdi mdi-eye"></i> View</a>
                                                    </td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                </tr>
                                            </tbody>
                                            <?php }?>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->                                                                                                                                                                                                                                         
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Job Seeker</h4>

                                    <div class="table-responsive">
                                        <table class="table table-borderless table-hover table-centered m-0">

                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Date of Birth</th>
                                                    <th>Sex</th>
                                                    <th>Address</th>
                                                    <th>Religion</th>
                                                    <th>Civil Status</th>
                                                    <th>Contact</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $ret="SELECT * FROM job_seeker ORDER BY job_posting_id ASC LIMIT 10 "; 
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
                                                    
                                                    <td>
                                                        <?php echo $row->firstname;?> <?php echo $row->middlename;?> <?php echo $row->surname;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->date_of_birth;?>
                                                    </td>    
                                                    <td>
                                                        <?php echo $row->sex;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->barangay;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->religion;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->civil_status;?> 
                                                    </td>
                                                    <td>
                                                        <?php echo $row->contact_number;?> 
                                                    </td>
                                                    <td>
                                                    <!--mis_admin_view_single_jobseeker.php-->
                                                   <!-- user_staff_view_single_jobseeker.php-->
                                                        <a href="mis_admin_view_single_employment.php?job_posting_id=<?php echo $row->job_posting_id;?>&&job_sname=<?php echo $row->surname;?>&&firstname=<?php echo $row->firstname;?>_<?php echo $row->middlename;?>" class="btn btn-xs btn-primary"><i class="mdi mdi-eye"></i> View</a>
                                                    </td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                </tr>
                                            </tbody>
                                            <?php }?>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->                                                                                                                                                                                                                                         
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Tesda Trainee</h4>

                                    <div class="table-responsive">
                                        <table class="table table-borderless table-hover table-centered m-0">

                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th>Date of Birth</th>
                                                    <th>Sex</th>
                                                    <th>Address</th>
                                                    <th>Religion</th>
                                                    <th>Civil Status</th>
                                                    <th>Contact</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $ret="SELECT * FROM tesda_applicant ORDER BY tesda_applicant_id ASC LIMIT 10 "; 
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
                                                    
                                                    <td>
                                                        <?php echo $row->firstname;?> <?php echo $row->middlename;?> <?php echo $row->surname;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->date_of_birth;?>
                                                    </td>    
                                                    <td>
                                                        <?php echo $row->sex;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->barangay;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->religion;?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row->civil_status;?> 
                                                    </td>
                                                    <td>
                                                        <?php echo $row->contact_number;?> 
                                                    </td>
                                                    <td>
                                                    <!--mis_admin_view_single_jobseeker.php-->
                                                   <!-- user_staff_view_single_jobseeker.php-->
                                                        <a href="mis_admin_view_single_tesdatraining.php?tesda_applicant_id=<?php echo $row->tesda_applicant_id;?>&&surname=<?php echo $row->surname;?>&&firstname=<?php echo $row->firstname;?>_<?php echo $row->middlename;?>" class="btn btn-xs btn-primary"><i class="mdi mdi-eye"></i> View</a>
                                                    </td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                </tr>
                                            </tbody>
                                            <?php }?>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->                                                                                                                                                                                                                                         
                        </div>
                        
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

        <!-- Plugins js-->
        <!-- <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script> -->

        <!-- Dashboar 1 init js-->
        <script src="assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>