<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['ad_id'];
?>

<!DOCTYPE html>
<html lang="en">
    
<?php include('assets/inc/head.php');?>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
                <?php include('assets/inc/nav.php');?>
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
                                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Peso Clients</a></li> -->
                                            <li class="breadcrumb-item active">View Clearance</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">List of Clearances </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title"></h4>
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
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Full Name</th>
                                                <th>Address</th>
                                                <th>Sex</th>
                                                <th>OR NO</th>
                                                <th>Date Issued</th>
                                                <th>Contact</th>
                                                <th>Agency</th>
                                                <!-- <th>Email</th> -->
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <?php
                                            /*
                                                *get details of all Jobseeker
                                                *
                                            */
                                                $ret="SELECT * FROM   job_seeker ORDER BY job_seeker_id "; 
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
                                                    <td><?php echo $cnt;?></td>
                                                    <td><?php echo $row->firstname;?> <?php echo $row->middlename;?> <?php echo $row->surname;?></td>
                                                    <td><?php echo $row->barangay;?><?php echo $row->municipality;?><?php echo $row->province;?></td>
                                                    <td><?php echo $row->sex;?></td>
                                                    <td><?php echo $row->or_no;?></td>
                                                    <td><?php echo $row->date_joined;?></td>
                                                    <td><?php echo $row->contact_number;?></td>
                                                    <td><?php echo $row->agency_name;?></td>
                                                    <!-- <td><?php echo $row->email;?></td> -->
                                                    
                                                    
                                                    <td><a href="mis_admin_view_single_employment.php?job_seeker_id=<?php echo $row->job_seeker_id;?>&&middlename=<?php echo $row->middlename;?>" class="badge badge-success"><i class="mdi mdi-eye"></i> View</a></td>
                                                </tr>
                                                </tbody>
                                            <?php  $cnt = $cnt +1 ; }?>
                                            <tfoot>
                                            <tr class="active">
                                                <td colspan="9">
                                                    <div class="text-right">
                                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!-- end .table-responsive-->
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