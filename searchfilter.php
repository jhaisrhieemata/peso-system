<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['ad_id'];
  if(isset($_GET['delete']))
  {
        $id=intval($_GET['delete']);
        $adn="delete from mis_employment where employment_id=?";
        $stmt= $mysqli->prepare($adn);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	 
  
          if($stmt)
          {
            $success = "Employment Records Deleted";
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Peso Client</a></li>
                                            <li class="breadcrumb-item active">Manage Peso Client</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Manage Peso Client Details</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                      <div class="row">
                            <div class="col-12">
                                 <div class="card-box">
                                    <h4 class="header-title"></h4>
                                         <div class="mb-2">                
                                            <!-- <div class="col-12 text-sm-center form-inline" > -->
                                                 <form action="" method="GET">
                                                     <div class="form-row">
                                                            <div class="input-group mb-3">       
                                                                <input id="demo-foo-search" type="text" class="form-control" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" name="search"  placeholder="Search" autocomplete="on">
                                                                <button type="Submit" class= "btn btn-primary">Search</button> 
                                                                </div>
                                                                      <div class="form-group col-md-2">
                                                                          <input type="date" name="date_joined"  value="<?= isset($_GET['date_joined']) == true ? $_GET['date_joined'] :'' ?>" class="form-control"> 
                                                                       </div>
                                                                              <div class="form-group col-md-2">
                                                                                        <select name="employment_status" required="required" class="form-control">
                                                                                               <option value="Employed" <?= isset($_GET['employment_status']) == true ? ($_GET['employment_status'] == 'Employed' ? 'selected':'') :'' ?>>Employed</option>
                                                                                                <option value="Unemployed" <?= isset($_GET['employment_status']) == true ? ($_GET['employment_status'] == 'Unemployed' ? 'selected':''):'' ?>>Unemployed</option>
                                                                                          </select>
                                                                                    </div>
                                                                                    <div class="form-group col-md-2">
                                                                                        <button type="Submit" class="btn btn-primary">Filter</button>
                                                                                        <a href="mis_admin_manage_employment.php" class="btn btn-danger">Reset</a>
                                                                                    </div>
                                                         </div>
                                                    </form>
                                              </div>
                                          <!-- </div>   -->
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="10">
                                            <thead>
                                              <tr>
                                                <th>id</th>
                                                <th>Full Name</th>
                                                <th>Date of Birth</th>
                                                <th>Sex</th>
                                                <th>Civil Status</th>
                                                <th>Contact</th>
                                                <th>Employment Status</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                            <?php
                                            /*
                                                *get details of alljobseeker
                                                *
                                            */
                                                $ret="SELECT * FROM  mis_employment ORDER BY employment_id "; 
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
                                                                            <td><?php echo $row->employment_id;?></td>
                                                                            <td><?php echo $row->firstname;?> <?php echo $row->middlename;?> <?php echo $row->surname;?></td>
                                                                            <td><?php echo $row->date_of_birth;?></td>
                                                                            <td><?php echo $row->sex;?></td>
                                                                            <td><?php echo $row->civil_status;?></td>
                                                                            <td><?php echo $row->contact_number;?></td>
                                                                            <td><?php echo $row->employment_status;?></td>
                                                                            <td><?php echo $row->date_joined;?></td>                                        
                                                            <td>
                                                            <a href="mis_admin_manage_employment.php?delete=<?php echo $row->employment_id;?>" class="badge badge-danger"><i class=" mdi mdi-trash-can-outline "></i> Delete</a>
                                                            <a href="mis_admin_view_single_employment.php?employment_id=<?php echo $row->employment_id;?>&&surname=<?php echo $row->surname;?> " class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                            <a href="mis_admin_update_single_employment.php?employment_id=<?php echo $row->employment_id;?>" class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i> Update</a>
                                                            </td>
                                                        </tr>
                                                      </tbody>
                                                <?php  $cnt = $cnt +1 ; } ?>
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















<?php
if(isset($_GET['search']))
                                                    {
                                                       $connection = mysqli_connect("localhost","root","", "mfpesodb");
                                                       $filtervalue = $_GET['search'];
                                                       $filterdata = "SELECT * FROM mis_employment WHERE CONCAT(employment_id,firstname,middlename,surname,date_of_birth,sex,civil_status,contact_number,employment_status,date_joined) LIKE '%$filtervalue%'";
                                                       $filterdata_run = mysqli_query($connection, $filterdata);

                                                       if(mysqli_num_rows($filterdata_run) > 0)
                                                       {
                                                         foreach($filterdata_run as $row)
                                                               {  
                                                                 ?>
                                                                    <tbody>
                                                                       <tr>
                                                                            <td><?php echo $row['employment_id']; ?></td>
                                                                            <td><?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['surname']; ?> </td>                                      
                                                                            <td><?php echo $row['date_of_birth']; ?></td>
                                                                            <td><?php echo $row['sex']; ?></td>
                                                                            <td><?php echo $row['civil_status']; ?></td>
                                                                            <td><?php echo $row['contact_number']; ?></td>
                                                                            <td><?php echo $row['employment_status']; ?></td>
                                                                            <td><?php echo $row['date_joined']; ?></td>
                                                                            <td>
                                                                                 <a href="mis_admin_manage_employment.php?delete=<?php echo $row['employment_id']; ?>" class="badge badge-danger"><i class=" mdi mdi-trash-can-outline "></i> Delete</a>
                                                                                 <a href="mis_admin_view_single_employment.php?employment_id=<?php echo $row['employment_id']; ?>&&surname=<?php echo $row['surname']; ?> " class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                                                 <a href="mis_admin_update_single_employment.php?employment_id=<?php echo $row['employment_id']; ?>" class="badge badge-primary"><i class="mdi mdi-check-box-outline "></i> Update</a>
                                                                             </td>
                                                                       </tr>
                                                                   </tbody>
                                                                 <?php
                                                                }
                                                        }
                                                       else
                                                       {
                                                         ?>
                                                         <tr>
                                                            <td colspan="10"> No record found</td>
                                                         </tr>
                                                        <?php
                                                       }
                                                    }