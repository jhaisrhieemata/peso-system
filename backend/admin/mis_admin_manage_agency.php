<<<<<<< HEAD
<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];
if(isset($_GET['delete']))
{
      $id=intval($_GET['delete']);
      $adn="DELETE from mis_agency where agency_id=?";
      $stmt= $mysqli->prepare($adn);
      $stmt->bind_param('i',$id);
      $stmt->execute();
      $stmt->close();	 

        if($stmt)
        {
          $success = "Agency Records Deleted";
        }
          else
          {
              $err = "Try Again Later";
          }
  } 

// Function to retrieve employment records based on search and filter criteria
function getagencyRecords($mysqli, $search, $dateposted, $typeagency)
{
    $query = "SELECT * FROM  mis_agency WHERE 1";

    if (!empty($search)) {
        $query .= " AND CONCAT(agency_id LIKE '%$search%' OR firstname LIKE '%$search%' OR middlename LIKE '%$search%' OR surname LIKE '%$search%' OR date_of_birth LIKE '%$search%' OR sex LIKE '%$search%' OR civil_status LIKE '%$search%' OR contact_number LIKE '%$search%' OR employment_status LIKE '%$search%' OR date_created LIKE '%$search%')";
    }

    if (!empty($dateposted)) {
        $query .= " AND date_created = '$dateposted'";
    }

    if (!empty($typeagency)) {
        $query .= " AND agency_name = '$typeagency'";
    }

    $result = $mysqli->query($query);

    return $result;
}

// Initial query to retrieve all employment records
$agencyRecords = getagencyRecords($mysqli, '', '', '');

if (isset($_GET['search']) || isset($_GET['date_created']) || isset($_GET['agency_name'])) {
    // If search or filter parameters are provided in the URL, re-query the database
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $dateposted = isset($_GET['date_created']) ? $_GET['date_created'] : '';
    $typeagency = isset($_GET['agency_name']) ? $_GET['agency_name'] : '';

    $agencyRecords = getagencyRecords($mysqli, $search, $dateposted, $typeagency);
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
                                                <input type="date" name="date_created" value="<?= isset($_GET['date_created']) == true ? $_GET['date_created'] : '' ?>" class="form-control">
                                                <select name="agency_name" class="form-control">
                                                    <option value="-select-">-select-</option>
                                                    <option value="General Services Cooperative" <?= isset($_GET['agency_name']) == true ? ($_GET['agency_name'] == 'General Services Cooperative' ? 'selected' : '') : '' ?>>General Services Cooperative</option>
                                                    <option value="Asiapro Cooperative" <?= isset($_GET['agency_name']) == true ? ($_GET['agency_name'] == 'Asiapro Cooperative' ? 'selected' : '') : '' ?>>Asiapro Cooperative</option>
                                                </select>
                                                <button type="Submit" class="btn btn-primary">Filter</button>
                                                <a href="mis_admin_manage_agency.php" class="btn btn-danger">Reset</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive">
                                    <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Company Name</th>         
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($agencyRecords->num_rows > 0) {
                                                while ($row = $agencyRecords->fetch_assoc()) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['agency_id']; ?></td>
                                                        <td><?php echo $row['agency_name']; ?></td>
                                                        <td><?php echo $row['address']; ?></td>
                                                        <td><?php echo $row['contact']; ?></td>     
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['date_created']; ?></td>
                                                        <td>
                                                            <a href="mis_admin_manage_agency.php?delete=<?php echo $row['agency_id']; ?>" class="badge badge-danger"><i class="mdi mdi-trash-can-outline"></i> Delete</a>
                                                            <a href="mis_admin_view_single_agency.php?agency_id=<?php echo $row['agency_id']; ?>&&agency_name=<?php echo $row['agency_name']; ?> " class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                            <a href="mis_admin_update_single_agency.php?agency_id=<?php echo $row['agency_id']; ?>" class="badge badge-primary"><i class="mdi mdi-check-box-outline"></i> Update</a>
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
=======
<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];
if(isset($_GET['delete']))
{
      $id=intval($_GET['delete']);
      $adn="DELETE from mis_agency where agency_id=?";
      $stmt= $mysqli->prepare($adn);
      $stmt->bind_param('i',$id);
      $stmt->execute();
      $stmt->close();	 

        if($stmt)
        {
          $success = "Agency Records Deleted";
        }
          else
          {
              $err = "Try Again Later";
          }
  } 

// Function to retrieve employment records based on search and filter criteria
function getagencyRecords($mysqli, $search, $dateposted, $typeagency)
{
    $query = "SELECT * FROM  mis_agency WHERE 1";

    if (!empty($search)) {
        $query .= " AND CONCAT(agency_id LIKE '%$search%' OR firstname LIKE '%$search%' OR middlename LIKE '%$search%' OR surname LIKE '%$search%' OR date_of_birth LIKE '%$search%' OR sex LIKE '%$search%' OR civil_status LIKE '%$search%' OR contact_number LIKE '%$search%' OR employment_status LIKE '%$search%' OR date_created LIKE '%$search%')";
    }

    if (!empty($dateposted)) {
        $query .= " AND date_created = '$dateposted'";
    }

    if (!empty($typeagency)) {
        $query .= " AND agency_name = '$typeagency'";
    }

    $result = $mysqli->query($query);

    return $result;
}

// Initial query to retrieve all employment records
$agencyRecords = getagencyRecords($mysqli, '', '', '');

if (isset($_GET['search']) || isset($_GET['date_created']) || isset($_GET['agency_name'])) {
    // If search or filter parameters are provided in the URL, re-query the database
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $dateposted = isset($_GET['date_created']) ? $_GET['date_created'] : '';
    $typeagency = isset($_GET['agency_name']) ? $_GET['agency_name'] : '';

    $agencyRecords = getagencyRecords($mysqli, $search, $dateposted, $typeagency);
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
                                                <input type="date" name="date_created" value="<?= isset($_GET['date_created']) == true ? $_GET['date_created'] : '' ?>" class="form-control">
                                                <select name="agency_name" class="form-control">
                                                    <option value="-select-">-select-</option>
                                                    <option value="General Services Cooperative" <?= isset($_GET['agency_name']) == true ? ($_GET['agency_name'] == 'General Services Cooperative' ? 'selected' : '') : '' ?>>General Services Cooperative</option>
                                                    <option value="Asiapro Cooperative" <?= isset($_GET['agency_name']) == true ? ($_GET['agency_name'] == 'Asiapro Cooperative' ? 'selected' : '') : '' ?>>Asiapro Cooperative</option>
                                                </select>
                                                <button type="Submit" class="btn btn-primary">Filter</button>
                                                <a href="mis_admin_manage_agency.php" class="btn btn-danger">Reset</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive">
                                    <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Company Name</th>         
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($agencyRecords->num_rows > 0) {
                                                while ($row = $agencyRecords->fetch_assoc()) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['agency_id']; ?></td>
                                                        <td><?php echo $row['agency_name']; ?></td>
                                                        <td><?php echo $row['address']; ?></td>
                                                        <td><?php echo $row['contact']; ?></td>     
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['date_created']; ?></td>
                                                        <td>
                                                            <a href="mis_admin_manage_agency.php?delete=<?php echo $row['agency_id']; ?>" class="badge badge-danger"><i class="mdi mdi-trash-can-outline"></i> Delete</a>
                                                            <a href="mis_admin_view_single_agency.php?agency_id=<?php echo $row['agency_id']; ?>&&agency_name=<?php echo $row['agency_name']; ?> " class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                            <a href="mis_admin_update_single_agency.php?agency_id=<?php echo $row['agency_id']; ?>" class="badge badge-primary"><i class="mdi mdi-check-box-outline"></i> Update</a>
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
>>>>>>> cdda0926029c946a9693c6f4b5377de5d890ae5e
