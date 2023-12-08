<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['user_id'];
?>

<!DOCTYPE html>
    <html lang="en">

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

            <!--Get Details Of A Single User And Display Them Here-->
            <?php
                // $middlename=$_GET['middlename'];
                $job_seeker_id=$_GET['job_seeker_id'];
                $ret = "SELECT * FROM job_seeker WHERE job_seeker_id = ?";

                $stmt= $mysqli->prepare($ret) ;
                $stmt->bind_param('i',$job_seeker_id);
                $stmt->execute() ;//ok
                $res=$stmt->get_result();
                //$cnt=1;
                while($row=$res->fetch_object())
            {
                $mysqlDateTime = $row->date_joined;
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Peso Client</a></li>
                                            <li class="breadcrumb-item active">Profile Peso client</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title"><?php echo $row->firstname;?> <?php echo $row->middlename;?> <?php echo $row->surname;?>'s Profile</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">
                                    <img src="assets/images/users/User Default.png" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                                    <div class="text-left mt-3">
                                        
                                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2"><?php echo $row->firstname;?> <?php echo $row->middlename;?> <?php echo $row->surname;?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Date Of Birth:</strong><span class="ml-2"><?php echo $row->date_of_birth;?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Sex :</strong> <span class="ml-2"><?php echo $row->sex;?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Address :</strong> <span class="ml-2"><?php echo $row->barangay;?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Religion :</strong> <span class="ml-2"><?php echo $row->religion;?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Civil Status :</strong> <span class="ml-2"><?php echo $row->civil_status;?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Contact :</strong> <span class="ml-2"><?php echo $row->contact_number;?></span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Position :</strong> <span class="ml-2"><?php echo $row->position;?></span></p>
                                        <hr>
                                        <p class="text-muted mb-2 font-13"><strong>Date Recorded :</strong> <span class="ml-2"><?php echo date("d/m/Y - h:m", strtotime($mysqlDateTime));?></span></p>
                                        <hr>




                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col-->
                            
                            
                            <div class="col-lg-4 col-xl-4">
                                <div class="card-box">
                                    <ul class="nav nav-pills navtab-bg nav-justified">
                                        <li class="nav-item">
                                        <style>
                                               .custom-link {
                                                   font-family: 'YourFont', sans-serif;
                                                   font-size: 16px;
                                                   font-weight: none;
                                                   text-decoration: none;
                                                   color: #fff;
                                               }
                                           </style>
                                           
                                           <a href="matched_job.php" class="badge badge-primary custom-link" aria-expanded="true">
                                           Job Offer List!
                                           </a>

                                        </li>
                                    </ul>

                               </div> 
                               <!-- end card-box-->

                            </div> 
                            <!-- end col -->
                        </div>
                    <?php }?>
                        <!-- end row-->
                        <div class="mt-4 mb-1">
                                            <!-- <div class="text-right d-print-none">
                                                <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-printer mr-1"></i> Print</a>
                                            </div>
                                        </div> -->

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

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>


</html>