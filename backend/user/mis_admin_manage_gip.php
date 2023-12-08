<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['user_id'];
if(isset($_GET['delete']))
{
      $id=intval($_GET['delete']);
      $adn="DELETE from gip where gip_id=?";
      $stmt= $mysqli->prepare($adn);
      $stmt->bind_param('i',$id);
      $stmt->execute();
      $stmt->close();	 

        if($stmt)
        {
          $success = "GIP Records Deleted";
        }
          else
          {
              $err = "Try Again Later";
          }
  } 

// Function to retrieve employment records based on search and filter criteria
function getprofessionsRecords($mysqli, $search, $dateJoined, $typeprofessions)
{
    $query = "SELECT * FROM  gip WHERE 1";

    if (!empty($search)) {
        $query .= " AND CONCAT(gip_id LIKE '%$search%' OR firstname LIKE '%$search%' OR middlename LIKE '%$search%' OR surname LIKE '%$search%' OR date_of_birth LIKE '%$search%' OR sex LIKE '%$search%' OR civil_status LIKE '%$search%' OR contact_number LIKE '%$search%' OR employment_status LIKE '%$search%' OR date_joined LIKE '%$search%')";
    }

    if (!empty($dateJoined)) {
        $query .= " AND date_joined = '$dateJoined'";
    }

    if (!empty($typeprofessions)) {
        $query .= " AND type_of_application = '$typeprofessions'";
    }

    $result = $mysqli->query($query);

    return $result;
}

// Initial query to retrieve all employment records
$ProfessionsRecords = getprofessionsRecords($mysqli, '', '', '');

if (isset($_GET['search']) || isset($_GET['date_joined']) || isset($_GET['type_of_application'])) {
    // If search or filter parameters are provided in the URL, re-query the database
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $dateJoined = isset($_GET['date_joined']) ? $_GET['date_joined'] : '';
    $typeprofessions = isset($_GET['type_of_application']) ? $_GET['type_of_application'] : '';

    $ProfessionsRecords = getprofessionsRecords($mysqli, $search, $dateJoined, $typeprofessions);
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">GIP</a></li>
                                        <li class="breadcrumb-item active">Manage GIP</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Manage GIP Details</h4>
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
                                                <select name="type_of_application" class="form-control">
                                                    <option value="-select-">-select-</option>
                                                    <option value="For College" <?= isset($_GET['type_of_application']) == true ? ($_GET['type_of_application'] == 'For College' ? 'selected' : '') : '' ?>>For College</option>
                                                    <option value="For Senior High School" <?= isset($_GET['type_of_application']) == true ? ($_GET['type_of_application'] == 'For Senior High School' ? 'selected' : '') : '' ?>>For Senior High School</option>
                                                </select>
                                                <button type="Submit" class="btn btn-primary">Filter</button>
                                                <a href="mis_admin_manage_gip.php" class="btn btn-danger">Reset</a>
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
                                                <th>applicant no</th>
                                                <th>Full Name</th>           
                                                <th>Contact</th>
                                                <th>Address</th>
                                                <th>Sex</th>
                                                <th>Types of Professions</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($ProfessionsRecords->num_rows > 0) {
                                                while ($row = $ProfessionsRecords->fetch_assoc()) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['gip_id']; ?></td>
                                                        <td><?php echo $row['applicant_no']; ?></td>
                                                        <td><?php echo $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['surname']; ?></td>
                                                        <td><?php echo $row['contact']; ?></td>
                                                        <td><?php echo $row['app_barangay'] . ' ' . $row['app_municipality'] . ' ' . $row['app_province']; ?></td>
                                                        <td><?php echo $row['sex']; ?></td>     
                                                        <td><?php echo $row['type_of_application']; ?></td>
                                                        <td><?php echo $row['date_joined']; ?></td>
                                                        <td>
                                                            <a href="mis_admin_manage_gip.php?delete=<?php echo $row['gip_id']; ?>" class="badge badge-danger"><i class="mdi mdi-trash-can-outline"></i> Delete</a>
                                                            <a href="mis_admin_view_single_gip.php?gip_id=<?php echo $row['gip_id']; ?>&&surname=<?php echo $row['surname']; ?> " class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                            <a href="mis_admin_update_single_gip.php?gip_id=<?php echo $row['gip_id']; ?>" class="badge badge-primary"><i class="mdi mdi-check-box-outline"></i> Update</a>
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
