<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];

if (isset($_POST['delete'])) {
    $id = intval($_POST['delete']);
    
    // Backup the deleted record to the backup table
    $backupQuery = "INSERT INTO mis_employment_backup SELECT * FROM mis_employment WHERE employment_id = ?";
    $backupStmt = $mysqli->prepare($backupQuery);
    $backupStmt->bind_param('i', $id);
    $backupStmt->execute();
    $backupStmt->close();

    // Delete the record from the original table
    $deleteQuery = "DELETE FROM mis_employment WHERE employment_id = ?";
    $deleteStmt = $mysqli->prepare($deleteQuery);
    $deleteStmt->bind_param('i', $id);
    $deleteStmt->execute();
    $deleteStmt->close();

    if ($backupStmt && $deleteStmt) {
        $success = "Employment Record Deleted and Backed Up";
    } else {
        $err = "Try Again Later";
    }
}

// Function to retrieve employment records based on search and filter criteria
function getEmploymentRecords($mysqli, $search, $dateJoined, $employmentStatus)
{
    $query = "SELECT * FROM mis_employment WHERE 1";

    if (!empty($search)) {
        $query .= " AND CONCAT(employment_id LIKE '%$search%' OR firstname LIKE '%$search%' OR middlename LIKE '%$search%' OR surname LIKE '%$search%' OR date_of_birth LIKE '%$search%' OR sex LIKE '%$search%' OR civil_status LIKE '%$search%' OR contact_number LIKE '%$search%' OR employment_status LIKE '%$search%' OR date_joined LIKE '%$search%')";
    }

    if (!empty($dateJoined)) {
        $query .= " AND date_joined = '$dateJoined'";
    }

    if (!empty($employmentStatus)) {
        $query .= " AND employment_status = '$employmentStatus'";
    }

    $result = $mysqli->query($query);

    return $result;
}

// Initial query to retrieve all employment records
$employmentRecords = getEmploymentRecords($mysqli, '', '', '');

if (isset($_GET['search']) || isset($_GET['date_joined']) || isset($_GET['employment_status'])) {
    // If search or filter parameters are provided in the URL, re-query the database
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $dateJoined = isset($_GET['date_joined']) ? $_GET['date_joined'] : '';
    $employmentStatus = isset($_GET['employment_status']) ? $_GET['employment_status'] : '';

    $employmentRecords = getEmploymentRecords($mysqli, $search, $dateJoined, $employmentStatus);
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Employment</a></li>
                                        <li class="breadcrumb-item active">Manage Employment</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Manage Employment Details</h4>
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
                                                <input type="date" name="date_joined" value="<?= isset($_GET['date_joined']) == true ? $_GET['date_joined'] : '' ?>" class="form-control">
                                                <select name="employment_status" class="form-control">
                                                    <option value="-select-">-select-</option>
                                                    <option value="Employed" <?= isset($_GET['employment_status']) == true ? ($_GET['employment_status'] == 'Employed' ? 'selected' : '') : '' ?>>Employed</option>
                                                    <option value="Unemployed" <?= isset($_GET['employment_status']) == true ? ($_GET['employment_status'] == 'Unemployed' ? 'selected' : '') : '' ?>>Unemployed</option>
                                                </select>
                                                <button type="Submit" class="btn btn-primary">Filter</button>
                                                <a href="mis_admin_manage_employment.php" class="btn btn-danger">Reset</a>
                                                <a href="mis_admin_export_employment.php" class="btn btn-success" title="Click to export">Export</a>

                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                                        <tbody>
                                            <?php
                                            if ($employmentRecords->num_rows > 0) {
                                                while ($row = $employmentRecords->fetch_assoc()) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['employment_id']; ?></td>
                                                        <td><?php echo $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['surname']; ?></td>
                                                        <td><?php echo $row['date_of_birth']; ?></td>
                                                        <td><?php echo $row['sex']; ?></td>
                                                        <td><?php echo $row['civil_status']; ?></td>
                                                        <td><?php echo $row['contact_number']; ?></td>
                                                        <td><?php echo $row['employment_status']; ?></td>
                                                        <td><?php echo $row['date_joined']; ?></td>
                                                        <td>
                                                        <form action="mis_admin_manage_employment.php" method="POST" style="display: inline;">
                                                            <input type="hidden" name="delete" value="<?php echo $row['employment_id']; ?>">
                                                            <button type="submit" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete this record?')">
                                                                <i class="mdi mdi-trash-can-outline"></i> Delete
                                                            </button>
                                                        </form>
                                                            <a href="mis_admin_view_single_employment.php?employment_id=<?php echo $row['employment_id']; ?>&&surname=<?php echo $row['surname']; ?> " class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                            <a href="mis_admin_update_single_employment.php?employment_id=<?php echo $row['employment_id']; ?>" class="badge badge-primary"><i class="mdi mdi-check-box-outline"></i> Update</a>
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
