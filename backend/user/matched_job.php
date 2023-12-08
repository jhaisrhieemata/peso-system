<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['user_id'];
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
                                        <li class="breadcrumb-item active">View Job Offer</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">List of Job Offer </h4>
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



                                    <!-- HTML Table -->
                                    <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-toggle="true">Full Name</th>
                                                <!-- <th data-hide="phone">Skill</th> -->
                                                <th data-hide="phone">Position</th>
                                                <th data-hide="phone">Exp of Months</th>
                                                <th data-hide="phone">Good Communication Skill</th>
                                                <th data-hide="phone">DT Result</th>
                                                <th data-hide="phone">Job Offer Avialable</th>
                                                <th data-hide="phone">Action</th>
                                            </tr>
                                        </thead>
                                        <?php


                                        if ($mysqli->connect_error) {
                                            die("Connection failed: " . $mysqli->connect_error);
                                        }

                                        $ret = "SELECT
                                        job_seeker.job_seeker_id,
                                        job_seeker.surname,
                                        job_seeker.firstname,
                                        job_seeker.middlename,
                                        job_seeker.position,
                                        job_seeker.number_of_months,
                                        job_seeker.good_communication_skill,
                                        matched_job.job_seeker_id,
                                        matched_job.matchedjob_id,
                                        matched_job.job_name
                                    FROM
                                        job_seeker
                                    JOIN matched_job ON job_seeker.job_seeker_id = matched_job.matchedjob_id
                                    ORDER BY job_seeker.job_seeker_id";
                               

                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->execute();
                                        $res = $stmt->get_result();
                                        $cnt = 1;

                                        ?>
                                        <tbody>
                                             <?php
                                             while ($row = $res->fetch_object()) {
                                                 // Initialize Job Offer
                                                 $matchedJob = $row->job_name;
                                                 $relevantskill = $row->position;
                                         
                                                 // Decision Tree Logic
                                                 if (strcasecmp($relevantskill, $row->position) == 0 || in_array(strtolower($row->position), ["NA", "na", "n/a"])) {
                                                     if ($row->number_of_months >= 36 || $row->number_of_months >= 84) {  
                                                         if ($row->good_communication_skill == "Yes") {
                                                             $matchedJob = "Job Offer";
                                                         } else {
                                                             $matchedJob = "No Job Offer (pending, wait for job posting updates)";
                                                         }
                                                     } else {
                                                         $matchedJob = "No Job Offer (pending, wait for job posting updates)";
                                                     }
                                                 } else {
                                                     $matchedJob = "No Job Offer (pending, wait for job posting updates)";
                                                 }
                                         
                                                 // If $row->position is "NA," "na," or "N/A", set a custom message
                                                 if (in_array(strtolower($row->position), ["NA", "na", "n/a"])) {
                                                     $matchedJob = "No Job Offer (pending, wait for job posting updates)";
                                                 }
                                         
                                                 // If $row->number_of_months >= 84 and $row->good_communication_skill == "Yes", set a custom message
                                                 if ($row->number_of_months >= 84 && $row->good_communication_skill == "Yes") {
                                                     $matchedJob = "Job Offer";
                                                 }
                                                 // Additional condition to determine whether to show the link
                                                 $showLink = ($matchedJob === "Job Offer" && !empty($row->matchedjob_id)) ? true : false;
                                         
                                                 // Hide the entire row if matchedjob_id is empty
                                                 if (!empty($row->matchedjob_id)) {
                                             ?>
                                                     <tr>
                                                         <td><?php echo $cnt; ?></td>
                                                         <td><?php echo $row->firstname . ' ' . $row->middlename . ' ' . $row->surname; ?></td>
                                                         <td><?php echo $row->position; ?></td>
                                                         <td><?php echo $row->number_of_months; ?></td>
                                                         <td><?php echo $row->good_communication_skill; ?></td>
                                                         <td><?php echo $matchedJob; ?></td>
                                                         <?php if ($matchedJob === "Job Offer") : ?>
                                                             <?php if (!empty($row->job_name)) : ?>
                                                                 <td><?php echo $row->job_name; ?></td>
                                                             <?php else : ?>
                                                                 <td>---</td> <!-- Empty cell if job_name is not available -->
                                                             <?php endif; ?>
                                                         <?php else : ?>
                                                             <td>---</td> <!-- Empty cell if not a Job Offer -->
                                                         <?php endif; ?>
                                         
                                                         <!-- Add an additional condition to check if $matchedJob is "No Job Offer" -->
                                                         <?php if ($matchedJob === "No Job Offer (pending, wait for job posting updates)") : ?>
                                                             <td>
                                                                 <!-- Show a message or anything else you want to display for "No Job Offer" -->
                                                                 ---
                                                             </td>
                                                         <?php else : ?>
                                                             <!-- If it's a Job Offer, show the link -->
                                                             <td>
                                                                 <?php if ($showLink) : ?>
                                                                     <a href="mis_admin_view_single_matched_job.php?matchedjob_id=<?php echo $row->matchedjob_id; ?>&&middlename=<?php echo $row->middlename; ?>" class="badge badge-success">
                                                                         <i class="mdi mdi-eye"></i> View
                                                                     </a>
                                                                 <?php endif; ?>
                                                             </td>
                                                         <?php endif; ?>
                                                     </tr>
                                             <?php
                                                     $cnt = $cnt + 1;
                                                 }
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