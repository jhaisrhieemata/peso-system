<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['ad_id'];
  if(isset($_GET['delete']))
  {
        $id=intval($_GET['delete']);
        $adn="delete from tesda_applicant where tesda_applicant_id=?";
        $stmt= $mysqli->prepare($adn);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	 
  
          if($stmt)
          {
            $success = "Tesda Training Records Deleted";
          }
            else
            {
                $err = "Try Again Later";
            }
    }
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tesda Training</a></li>
                                            <li class="breadcrumb-item active">Manage Tesda Training</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Manage Tesda Training</h4>
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
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="10">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-toggle="true">Full Name</th>
                                                <th data-hide="phone">Date of Birth</th>
                                                <th data-hide="phone">Sex</th>
                                                <th data-hide="phone">Civil Status</th>
                                                <th data-hide="phone">Contact</th>
                                                <th data-hide="phone">Employment Status</th>
                                                <th data-hide="phone">Action</th>
                                            </tr>
                                            </thead>
                                            <?php
                                            /*
                                                *get details of alljobseeker
                                                *
                                            */
                                                $ret="SELECT * FROM  tesda_applicant ORDER BY tesda_applicant_id ASC"; 
                                                //sql code to get to ten jobseeker  randomly
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
                                                    <td><?php echo $row->date_of_birth;?></td>
                                                    <td><?php echo $row->sex;?></td>
                                                    <td><?php echo $row->civil_status;?></td>
                                                    <td><?php echo $row->contact_number;?></td>
                                                    <td><?php echo $row->employment_status;?></td>
                                                    
                                                    <td>
                                                        <a href="mis_admin_manage_tesdatraining.php?delete=<?php echo $row->tesda_applicant_id;?>" class="badge badge-danger"><i class=" mdi mdi-trash-can-outline "></i> Delete</a>
                                                        <a href="mis_admin_view_single_tesdatraining.php?tesda_applicant_id=<?php echo $row->tesda_applicant_id;?>&&surname=<?php echo $row->surname;?>" class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                        <a href="mis_admin_update_single_tesdaclient.php?tesda_applicant_id=<?php echo $row->tesda_applicant_id;?>" class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i> Update</a>
                                                    </td>
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