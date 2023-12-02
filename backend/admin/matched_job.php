<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];
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
                                        <li class="breadcrumb-item"><a href="mis_admin_dashboard.php">Dashboard</a></li>
                                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Peso Clients</a></li> -->
                                        <li class="breadcrumb-item active">View Matched Job</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">List of Matched Job </h4>
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
                                        <div class="col-12 text-sm-center form-inline">
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

                                    <?php

                                    function determineJob($employmentStatus, $preferedOccupation, $educationLevel, $skillAcquired, $professionalLicence, $position, $specialSkill, $experience, $communication)
                                    {
                                        // Initialize matched job
                                        $matchedJob = "No matched job";

                                        switch (true) {
                                                // Case for employmentStatus
                                            case $employmentStatus === 'Yes':
                                                // Nested switch for experience
                                                switch (true) {
                                                    case $experience > 36 && $communication === 'Yes':
                                                        $matchedJob = "Software Developer";
                                                        break;
                                                    case $experience > 84 && $communication === 'Yes':
                                                        $matchedJob = "Project Manager";
                                                        break;
                                                }
                                                break;

                                                // Case for preferedOccupation
                                            case $preferedOccupation === 'Yes':
                                                // Nested switch for experience
                                                switch (true) {
                                                    case $experience > 36 && $communication === 'Yes':
                                                        $matchedJob = "Mechanical Technician";
                                                        break;
                                                    case $experience > 84 && $communication === 'Yes':
                                                        $matchedJob = "Warehouse Coordinator";
                                                        break;
                                                }
                                                break;

                                                // Add similar cases for other conditions...

                                            default:
                                                // No matched job for other cases
                                                break;
                                        }

                                        return $matchedJob;
                                    }

                                    // Example usage:
                                    $employmentStatus = 'Yes';
                                    $preferedOccupation = 'Yes';
                                    $educationLevel = 'Yes';
                                    $skillAcquired = 'Yes';
                                    $professionalLicence = 'Yes';
                                    $position = 'Yes';
                                    $specialSkill = 'Yes';
                                    $experience = 42;
                                    $communication = 'Yes';

                                    $matchedJob = determineJob($employmentStatus, $preferedOccupation, $educationLevel, $skillAcquired, $professionalLicence, $position, $specialSkill, $experience, $communication);

                                    echo "Matched Job: " . $matchedJob;
                                    ?>

                                    <?php

                                    if ($mysqli->connect_error) {
                                        die("Connection failed: " . $mysqli->connect_error);
                                    }

                                    $ret = "SELECT
          job_seeker.job_seeker_id,
          job_seeker.surname,
          job_seeker.firstname,
          job_seeker.middlename,
          job_seeker.employment_status_employed,
          job_seeker.prefered_occupation,
          job_seeker.education_level,
          job_seeker.skill_acquired,
          job_seeker.professional_licence,
          job_seeker.position,
          job_seeker.number_of_months,
          job_seeker.special_skill,
          job_posting.job_name,
          job_posting.job_posting_id
      FROM
          job_seeker
      INNER JOIN job_posting ON job_seeker.job_seeker_id = job_posting.job_posting_id
      ORDER BY
          job_seeker_id ASC";

                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute();
                                    $res = $stmt->get_result();
                                    $cnt = 1;
                                    ?>

                                    <!-- HTML Table -->
<table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="10">
    <thead>
        <tr>
            <th>#</th>
            <th data-toggle="true">Full Name</th>
            <th data-hide="phone">Skill</th>
            <th data-hide="phone">Position</th>
            <th data-hide="phone">Number Of Months</th>
            <th data-hide="phone">Other Skill</th>
            <th data-hide="phone">Match Job</th>
            <th data-hide="phone">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $cnt = 1;
        while ($row = $res->fetch_object()) {
            ?>
            <tr>
                <td><?php echo $cnt; ?></td>
                <td><?php echo $row->firstname; ?> <?php echo $row->middlename; ?> <?php echo $row->surname; ?></td>
                <td><?php echo $row->skill_acquired; ?></td>
                <td><?php echo $row->position; ?></td>
                <td><?php echo $row->number_of_months; ?></td>
                <td><?php echo $row->special_skill; ?></td>
                <td><?php echo determineJob($row->employment_status_employed, $row->prefered_occupation, $row->education_level, $row->skill_acquired, $row->professional_licence, $row->position, $row->special_skill, $row->number_of_months, 'Yes'); ?></td>
                <td><a href="mis_admin_view_single_employment.php?job_seeker_id=<?php echo $row->job_seeker_id; ?>&&middlename=<?php echo $row->middlename; ?>" class="badge badge-success"><i class="mdi mdi-eye"></i> View</a></td>
            </tr>
            <?php
            $cnt = $cnt + 1;
        }
        ?>
    </tbody>
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


                                    <?php
                                    $stmt->close();
                                    $mysqli->close();
                                    ?>


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