<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];
if(isset($_GET['delete']))
{
      $id=intval($_GET['delete']);
      $adn="delete from job_seeker where job_seeker_id=?";
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

// Function to retrieve employment records based on search and filter criteria
function getEmploymentRecords($mysqli, $search)
{
    $query = "SELECT * FROM job_seeker WHERE 1";

    if (!empty($search)) {
        $query .= " AND CONCAT(job_seeker_id LIKE '%$search%' OR firstname LIKE '%$search%' OR middlename LIKE '%$search%' OR surname LIKE '%$search%' OR date_of_birth LIKE '%$search%' OR sex LIKE '%$search%' OR civil_status LIKE '%$search%' OR contact_number LIKE '%$search%' OR employment_status LIKE '%$search%' OR date_joined LIKE '%$search%')";
    }

    $result = $mysqli->query($query);

    return $result;
}

// Initial query to retrieve all employment records
$employmentRecords = getEmploymentRecords($mysqli, '');

if (isset($_GET['search'])) {

    $search = isset($_GET['search']) ? $_GET['search'] : '';

    $employmentRecords = getEmploymentRecords($mysqli, $search,);
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('assets/inc/head.php'); ?>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <?php include('assets/inc/nav.php'); ?>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <?php include("assets/inc/sidebar.php"); ?>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Clearance</a></li>
                                        <li class="breadcrumb-item active">Manage Clearance</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Manage Employment Clearance</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title"></h4>
                                <div class="mb-2">
                                    <form action="" method="GET">
                                        <!-- <div class="form-row">
                                            <div class="input-group mb-3">
                                                <input id="demo-foo-search" type="text" class="form-control" value="<?php if (isset($_GET['search'])) {
                                                                                                                            echo $_GET['search'];
                                                                                                                        } ?>" name="search" placeholder="Search" autocomplete="on">
                                                                                                                        <button type="Submit" class="btn btn-primary">Search</button>
                                                                                                                        <a href="mis_admin_manage_claimclearance.php" class="btn btn-danger">Reset</a>
                                            </div>
                                        </div>
                                    </form> -->
                                    <div class="row">
                                            <div class="col-12 text-sm-center form-inline" >
                                                <div class="form-group mr-2" style="display:none">
                                                    <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                        <option value="">Show all</option>
                                                        <!-- <option value="Discharged">Discharged</option>
                                                        <option value="OutPatients">OutPatients</option>
                                                        <option value="InPatients">InPatients</option> -->
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
                                                <th>id</th>
                                                <th>Full Name</th>
                                                <th>Address</th>
                                                <th>Sex</th>
                                                <th>OR NO</th>
                                                <th>Date Issued</th>
                                                <!-- <th>Contact</th> -->
                                                <th>Agency</th>
                                                <!-- <th>Email</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                
                                        <tbody>
                                            <?php
                                            if ($employmentRecords->num_rows > 0) {
                                                while ($row = $employmentRecords->fetch_assoc()) {
                                                    ?>
                                                    <!-- <tr>
                                                    <td><?php echo $job_seeker_id;?></td>
                                                    <td><?php echo $row->firstname;?> <?php echo $row->middlename;?> <?php echo $row->surname;?></td>
                                                    <td><?php echo $row->barangay;?> <?php echo $row->municipality;?> <?php echo $row->province;?> </td>
                                                    <td><?php echo $row->sex;?></td>
                                                    <td><?php echo $row->or_no;?></td>
                                                    <td><?php echo $row->date_joined;?></td>
                                                    <td><?php echo $row->contact_number;?></td>
                                                    <td><?php echo $row->agency_name;?></td>
                                                    
                                                    <td> -->
                                                    <tr>
                                                        <td><?php echo $row['job_seeker_id']; ?></td>
                                                        <td><?php echo $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['surname']; ?></td>
                                                        <td><?php echo $row['barangay'] . ' ' . $row['municipality'] . ' ' . $row['province']; ?></td>
                                                        <td><?php echo $row['sex']; ?></td>
                                                        <td><?php echo $row['or_no']; ?></td>
                                                        <td><?php echo $row['date_issued']; ?></td>
                                                        <!-- <td><?php echo $row['contact_number']; ?></td> -->
                                                        <td><?php echo $row['agency_name']; ?></td>                           
                                                        <td>
                                                            <a href="mis_admin_manage_claimclearance.php?delete=<?php echo $row['job_seeker_id']; ?>" class="badge badge-danger"><i class="mdi mdi-trash-can-outline"></i> Delete</a>
                                                            <!-- <a href="mis_admin_view_single_employment.php?job_seeker_id=<?php echo $row['job_seeker_id']; ?>&&surname=<?php echo $row['surname']; ?> " class="badge badge-success"><i class="mdi mdi-eye"></i> View</a> -->
                                                            <a href="mis_admin_update_single_claimclerance.php?job_seeker_id=<?php echo $row['job_seeker_id']; ?>" class="badge badge-primary"><i class="mdi mdi-check-box-outline"></i> Update</a>
                                                            <a href="mis_admin_print_clearance.php?job_seeker_id=<?php echo $row['job_seeker_id']; ?>" class="badge badge-warning"><i class="fas fa-print"></i> Print</a>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan="9">No records found</td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        

                                        </tbody>
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
            <?php include('assets/inc/footer.php'); ?>
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
