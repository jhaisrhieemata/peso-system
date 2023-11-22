<?php
    $user_id = $_SESSION['user_id'];
    // $user_fname=$_SESSION['user_fname'];
    // $user_lname=$_SESSION['user_lname'];
    $user_email = $_SESSION['user_email'];
    $regtype=$_SESSION['regtype'];
    $ret = "SELECT 
                                           mis_employment.employment_id,
                                           mis_employment.user_id, 
                                           mis_scholarship.scholarship_id, 
                                           mis_spes.spes_id, 
                                           mis_gip.gip_id, 
                                           mis_tesdatraining.tesdatraining_id, 
                                           mis_user.user_id,
                                           mis_user.user_email, 
                                           mis_user.user_fname, 
                                           mis_user.user_lname, 
                                           mis_user.user_dpic,
                                           mis_user.regtype 
                                       FROM mis_user
                                       LEFT JOIN mis_employment ON mis_user.user_id = mis_employment.user_id
                                       LEFT JOIN mis_scholarship ON mis_user.user_id = mis_scholarship.user_id
                                       LEFT JOIN mis_spes ON mis_user.user_id = mis_spes.user_id
                                       LEFT JOIN mis_gip ON mis_user.user_id = mis_gip.user_id
                                       LEFT JOIN mis_tesdatraining ON mis_user.user_id = mis_tesdatraining.user_id
                                       WHERE mis_user.user_id = ?";
    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param('i',$user_id);
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    //$cnt=1;
    while($row=$res->fetch_object())
    {
?>
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">


            
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <!-- <img src="assets/images/users/<?php echo $row->user_dpic;?>"  alt="pic" class="rounded-circle"> -->
                    <span><img src="assets/images/Peso_logo.png" alt="" height="50"></span>
                    <span class="pro-user-name ml-1">
                        <?php echo $row->user_fname;?> <?php echo $row->user_lname;?> <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <!-- <?php
                                           $ret = "SELECT 
                                           mis_employment.employment_id, 
                                           mis_scholarship.scholarship_id, 
                                           mis_spes.spes_id, 
                                           mis_gip.gip_id, 
                                           mis_tesdatraining.tesdatraining_id, 
                                           mis_user.user_id,
                                           mis_user.user_email, 
                                           mis_user.user_fname, 
                                           mis_user.user_lname, 
                                           mis_user.regtype 
                                       FROM mis_user
                                       LEFT JOIN mis_employment ON mis_user.user_id = mis_employment.user_id
                                       LEFT JOIN mis_scholarship ON mis_user.user_id = mis_scholarship.user_id
                                       LEFT JOIN mis_spes ON mis_user.user_id = mis_spes.user_id
                                       LEFT JOIN mis_gip ON mis_user.user_id = mis_gip.user_id
                                       LEFT JOIN mis_tesdatraining ON mis_user.user_id = mis_tesdatraining.user_id
                                       WHERE mis_user.user_id = ?"; // Assuming you want to filter by user_id, replace it with the actual column you want to filter on
                                           
                                    
                                               // Prepare and execute the query
                                         $stmt = $mysqli->prepare($ret);
                                         $stmt->bind_param("i", $user_id); 
                                         $stmt->execute();
                                        $res = $stmt->get_result();
                                        // $cnt=1;

                                        while ($row = $res->fetch_object()) {
                        ?> -->


                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="mis_user_dashboard.php" class="dropdown-item notify-item">
                        <i class="fas fa-user"></i>
                        <span>Dashboard</span>
                    </a>
                    <!-- <?php
                  
                       // Use switch statement to set the appropriate ID based on $regtype
                     switch ($regtype) {
                       case 'Employment':
                           $id = $row->employment_id;
                           break;
                       case 'Scholarship':
                           $id = $row->scholarship_id;
                           break;
                       case 'SPES':
                           $id = $row->spes_id;
                           break;
                       case 'GIP':
                           $id = $row->gip_id;
                           break;
                       case 'TesdaTraining':
                           $id = $row->tesdatraining_id;
                           break;
                      }
                          // Output the URL directly in the href attribute
                   ?>
                  <?php
                        if (!empty($id)) {
                            // $id is not empty, generate the link to update the user
                            ?>
                            <a href="#" class="dropdown-item notify-item" id="updateLink" onclick="updateRegtype('<?php echo strtolower($regtype); ?>',<?php echo $id; ?>)">
                                <i class="fas fa-user-tag"></i>
                                <span><?php echo $regtype; ?></span>
                            </a>
                            <script>
                                function updateRegtype(regtype, id) {
                                    var confirmUpdate = confirm("You are going to update?");
                                    if (confirmUpdate) {
                                        window.location.href = "mis_user_update_single_" + regtype + ".php?" + regtype + "_id=" + id;
                                        document.getElementById('updateLink').style.display = 'none';
                                    } else {
                                        // User clicked Cancel, you can handle this case accordingly
                                    }
                                }
                            </script>
                            <?php
                        } else {
                            // $id is empty, show a confirmation prompt to register first
                            ?>
                            <a href="#" class="dropdown-item notify-item" id="registerLink" onclick="registerFirst('<?php echo strtolower($regtype); ?>')">
                                <i class="fas fa-user-plus"></i>
                                <span>Register <?php echo $regtype; ?></span>
                            </a>
                            <script>
                                function registerFirst(regtype) {
                                    var confirmRegister = confirm("You are going to proceed with registration?");
                                    if (confirmRegister) {
                                        window.location.href = "mis_user_register_" + regtype + ".php";
                                        // Hide the registration link after clicking and confirming
                                        document.getElementById('registerLink').style.display = 'none';
                                    } else {
                                        // User clicked Cancel, you can handle this case accordingly
                                    }
                                }
                            </script>
                            <?php
                            // Check if registration is successful, then display the update link
                            if (!empty($id)) {
                                ?>
                                <a href="#" class="dropdown-item notify-item" id="updateLinkAfterRegister" onclick="updateRegtype('<?php echo strtolower($regtype); ?>',<?php echo $id; ?>)">
                                    <i class="fas fa-user-tag"></i>
                                    <span>Update <?php echo $regtype; ?></span>
                                </a>
                            <script>
                                function updateRegtype(regtype, id) {
                                    var confirmUpdate = confirm("You are going to update?");
                                    if (confirmUpdate) {
                                        window.location.href = "mis_user_update_single_" + regtype + ".php?" + regtype + "_id=" + id;
                                        document.getElementById('updateLinkAfterRegister').style.display = 'none';
                                    } else {
                                        // User clicked Cancel, you can handle this case accordingly
                                    }
                                }
                            </script>
                                <?php
                            }
                        }
                        ?> -->


                    <a href="mis_user_update-account.php" class="dropdown-item notify-item">
                        <i class="fas fa-user-tag"></i>
                        <span>Manage Account</span>
                    </a>


                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="mis_user_logout_partial.php" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
                <!-- <?php }?> -->
            </li>

           

        </ul>

        <!-- LOGO -->
        <!-- <div class="logo-box">
            <a href="mis_user_dashboard.php" class="logo text-center">
                <span class="logo-lg">
                    <img src="assets/images/Peso_log.png" alt="" height="50">
                    
                </span>
                <span class="logo-sm">
                   
                    <img src="assets/images/Peso_log.png" alt="" height="30">
                </span>
            </a>
        </div> -->
        <!-- <span class="logo-lg-text-light">UBold</span> -->
         <!-- <span class="logo-sm-text-dark">U</span> -->
    </div>
<?php }?>
