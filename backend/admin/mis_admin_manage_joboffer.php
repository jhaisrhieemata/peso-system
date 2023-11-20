<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');

// $aid = $_SESSION['ad_id'];
if(isset($_GET['delete']))
{
      $id=intval($_GET['delete']);
      $adn="DELETE from mis_job_opening where job_opening_id=?";
      $stmt= $mysqli->prepare($adn);
      $stmt->bind_param('i',$id);
      $stmt->execute();
      $stmt->close();	 

        if($stmt)
        {
          $success = "Job Offer Records Deleted";
        }
          else
          {
              $err = "Try Again Later";
          }
  } 

// Function to retrieve employment records based on search and filter criteria
function getjobRecords($mysqli, $search, $dateposted, $typejob)
{
    $query = "SELECT * FROM  mis_job_opening WHERE 1";

    if (!empty($search)) {
        $query .= " AND CONCAT(job_opening_id LIKE '%$search%' OR firstname LIKE '%$search%' OR middlename LIKE '%$search%' OR surname LIKE '%$search%' OR date_of_birth LIKE '%$search%' OR sex LIKE '%$search%' OR civil_status LIKE '%$search%' OR contact_number LIKE '%$search%' OR employment_status LIKE '%$search%' OR date_joined LIKE '%$search%')";
    }

    if (!empty($dateposted)) {
        $query .= " AND date_posted = '$dateposted'";
    }

    if (!empty($typejob)) {
        $query .= " AND job_name = '$typejob'";
    }

    $result = $mysqli->query($query);

    return $result;
}

// Initial query to retrieve all employment records
$jobRecords = getjobRecords($mysqli, '', '', '');

if (isset($_GET['search']) || isset($_GET['date_posted']) || isset($_GET['job_name'])) {
    // If search or filter parameters are provided in the URL, re-query the database
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $dateposted = isset($_GET['date_posted']) ? $_GET['date_posted'] : '';
    $typejob = isset($_GET['job_name']) ? $_GET['job_name'] : '';

    $jobRecords = getjobRecords($mysqli, $search, $dateposted, $typejob);
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Job Opening </a></li>
                                        <li class="breadcrumb-item active">Manage Job Opening</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Manage Job Opening Details</h4>
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
                                        <div class="form-row">
                                            <div class="input-group mb-3">
                                                <!-- <input id="demo-foo-search" type="text" class="form-control" value="<?php if (isset($_GET['search'])) {
                                                                                                                            echo $_GET['search'];
                                                                                                                        } ?>" name="search" placeholder="Search" autocomplete="on"> -->
                                                                                                                        <!-- <button type="Submit" class="btn btn-primary">Search</button> -->
                                                <input type="date" name="date_posted" value="<?= isset($_GET['date_posted']) == true ? $_GET['date_posted'] : '' ?>" class="form-control">
                                                <select name="job_name" class="form-control">
                                                    <option value="-select-">-select-</option>
                                                    <option value="Mechanical Techician" <?= isset($_GET['job_name']) == true ? ($_GET['job_name'] == 'Mechanical Techician' ? 'selected' : '') : '' ?>>Mechanical Techician</option>
                                                    <option value="Warehouse Coordinator" <?= isset($_GET['job_name']) == true ? ($_GET['job_name'] == 'Warehouse Coordinator ' ? 'selected' : '') : '' ?>>Warehouse Coordinator</option>
                                                </select>
                                                <button type="Submit" class="btn btn-primary">Filter</button>
                                                <a href="mis_admin_manage_joboffer.php" class="btn btn-danger">Reset</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Search input -->
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
                                                <th>id</th>
                                                <th>Company Name</th>
                                                <th>Job Name</th>           
                                                <th>Description</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($jobRecords->num_rows > 0) {
                                                while ($row = $jobRecords->fetch_assoc()) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['job_opening_id']; ?></td>
                                                        <td><?php echo $row['com_name']; ?></td>
                                                        <td><?php echo $row['job_name']; ?></td>
                                                        <td><?php echo $row['job_description']; ?></td>
                                                        <td><?php echo $row['address']; ?></td>
                                                        <td><?php echo $row['contact']; ?></td>     
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['date_posted']; ?></td>
                                                        <td>
                                                            <a href="mis_admin_manage_joboffer.php?delete=<?php echo $row['job_opening_id']; ?>" class="badge badge-danger"><i class="mdi mdi-trash-can-outline"></i> Delete</a>
                                                            <a href="mis_admin_view_single_joboffer.php?job_opening_id=<?php echo $row['job_opening_id']; ?>&&job_name=<?php echo $row['job_name']; ?> " class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                            <a href="mis_admin_update_single_joboffer.php?job_opening_id=<?php echo $row['job_opening_id']; ?>" class="badge badge-primary"><i class="mdi mdi-check-box-outline"></i> Update</a>
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
