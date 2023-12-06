<!--Server side code to handle  Jobseeker Registration Form-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['update_job_posting']))
		{
			$job_posting_id=$_GET['job_posting_id'];
          
            $job_name=$_POST['job_name'];
            $job_seeker_id=$_POST['job_seeker_id']; // this is fk
            $job_description=$_POST['job_description'];
			$com_name=$_POST['com_name'];
            $address=$_POST['address'];
            $contact=$_POST['contact'];
            $email=$_POST['email'];
            $date_posted=$_POST['date_posted'];
            
            //sql to insert captured values
			$updateQuery="UPDATE job_posting SET job_name=?, job_seeker_id=?, job_description=?, com_name=?, address=?, contact=?, email=?, date_posted=? WHERE job_posting_id =?";
			$stmtUpdate = $mysqli->prepare($updateQuery);
			$stmtUpdate->bind_param('ssssssssi', $job_name, $job_seeker_id, $job_description, $com_name, $address, $contact, $email, $date_posted, $job_posting_id);
			$stmtUpdate->execute();
            $stmtUpdate->close();
             
            
			// INSERT query into another table
            $insertQuery = "INSERT INTO matched_job (job_posting_id, job_name ) VALUES (?,?)";
            $stmtInsert = $mysqli->prepare($insertQuery);
            $stmtInsert->bind_param('ss', $job_posting_id, $job_name);
            $stmtInsert->execute();
            $stmtInsert->close();
       
            if ($updateQuery && $insertQuery) {
               $success = "Successfully Updated and Inserted";
           } else {
               $err = "Try Again Later";
           }
			
			
		}
?>
<!--End Server Side-->
<!--End Patient Registration-->
<!DOCTYPE html>
<html lang="en">
    
    <!--Head-->
    <?php include('assets/inc/head.php');?>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include("assets/inc/nav.php");?>
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Job Opening</a></li>
                                            <li class="breadcrumb-item active">Update Job Opening </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Update Manage Job Opening </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <?php
                            $job_posting_id=$_GET['job_posting_id'];
                            $ret="SELECT
                            job_seeker.job_seeker_id,
                           job_posting.job_posting_id,
                           job_posting.job_name,
                           job_posting.job_description,
                           job_posting.com_name,
                           job_posting.address,
                           job_posting.contact,
                           job_posting.email,
                           job_posting.date_posted
                       FROM
                           job_posting
                       LEFT JOIN job_seeker ON job_posting.job_posting_id = job_seeker.job_seeker_id
                       WHERE job_posting.job_posting_id=?";
                            $stmt= $mysqli->prepare($ret) ;
                            $stmt->bind_param('i',$job_posting_id);
                            $stmt->execute() ;//ok
                            $res=$stmt->get_result();
                            //$cnt=1;
                            while($row=$res->fetch_object())
                            {
                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">JOB OPENING INFORMATION</h4>
                                        <!--Add Jobseeker Form-->
                                        <form method="post">
                                         <div class="form-group">
                                           <div class="form-row">
                                             <div class="form-group col-md-6">
                                                  <label for="inputjobname" class="col-form-label">Job Name</label>
                                                  <input required="required" type="text" class="form-control" value="<?php echo $row->job_name;?>" name="job_name" id="inputjobname" placeholder="Job Name">
                                                </div>
                                                <div class="form-group col-md-6" style="display: none;">
                                                  <label for="inputrfp" class="col-form-label">Requires for Position</label>
                                                  <input required="required" type="text" class="form-control" value="<?php echo $row->job_seeker_id;?>" name="job_seeker_id" id="inputrfp" placeholder="Requires for position">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                                    <label for="inputjobdescription" class="col-form-label">Job Description</label>
                                                    <input type="text" required="required" value="<?php echo $row->job_description;?>"  name="job_description" class="form-control" id="inputjobdescription" placeholder="Job Description">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputcompanyname" class="col-form-label">Company Name</label>
                                                    <input type="text" required="required" value="<?php echo $row->com_name;?>" name="com_name" class="form-control" id="inputcompanyname" placeholder="Company Name">
                                                </div>
                                                
                                            </div>

                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                                    <label for="inputaddress" class="col-form-label">Address</label>
                                                    <input required="required" type="text" value="<?php echo $row->address;?>" name="address" class="form-control"  id="inputaddress" placeholder="Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputcontact" class="col-form-label">Contact</label>
                                                    <input type="text" required="required" value="<?php echo $row->contact;?>" name="contact" class="form-control" id="inputcontact" placeholder="Contact">
                                                </div>
                                                
                                            </div>
                                        

                                            <div class="form-row">
                                            <div class="form-group col-md-6">
                                                    <label for="inputemail" class="col-form-label">Email</label>
                                                    <input type="email" required="required" value="<?php echo $row->email;?>" name="email" class="form-control" id="inputemail" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputdateposted" class="col-form-label">Date Posted</label>
                                                    <input type="date" required="required" value="<?php echo $row->date_posted;?>" name="date_posted" class="form-control" id="inputdateposted">
                                                </div>
                                            </div>

                    

                                            

                                           <button type="submit" name="update_job_posting" class="ladda-button btn btn-primary" data-style="expand-right">Add Job Opening</button>
                                        </form>
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <?php  }?>

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

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>

        <!-- Loading buttons js -->
        <script src="assets/libs/ladda/spin.js"></script>
        <script src="assets/libs/ladda/ladda.js"></script>

        <!-- Buttons init js-->
        <script src="assets/js/pages/loading-btn.init.js"></script>
        
    </body>

</html>