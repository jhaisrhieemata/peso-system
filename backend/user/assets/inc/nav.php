<?php
    $user_id = $_SESSION['user_id'];
    $user_email = $_SESSION['user_email'];
    $ret="SELECT * FROM  user_staff WHERE user_id = ? AND user_email = ?";
    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param('is',$user_id, $user_email);
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    //$cnt=1;
    while($row=$res->fetch_object())
    {
?>
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <!-- <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form> -->
            </li>

            
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/<?php echo $row->user_dpic;?>" alt="dpic" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        <?php echo $row->user_fname;?> <?php echo $row->user_lname;?> <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <!-- <a href="mis_user_account.php" class="dropdown-item notify-item">
                        <i class="fas fa-user"></i>
                        <span>My Account</span>
                    </a> -->

                    <!-- <a href="mis_user_update-account.php" class="dropdown-item notify-item">
                        <i class="fas fa-user-tag"></i>
                        <span>Update Account</span>
                    </a> -->
                    <!-- <a href="mis_user_update-account.php" class="dropdown-item notify-item">
                        <i class="fas fa-user-tag"></i>
                        <span>My Account</span>
                    </a> -->


                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="mis_user_logout_partial.php" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>

           

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="mis_user_dashboard.php" class="logo text-center">
                <span class="logo-lg">
                    <img src="assets/images/Peso_logo.png" alt="" height="50">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-sm">
                    <!-- <span class="logo-sm-text-dark">U</span> -->
                    <img src="assets/images/Peso_logo.png" alt="" height="30">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li class="dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Create New
                    <i class="mdi mdi-chevron-down"></i> 
                </a>
                <div class="dropdown-menu">

                    <!-- item-->
                    <a href="mis_admin_register_employment.php" class="dropdown-item">
                        <i class="far fa-user-circle"></i>
                        <span>Employment</span>
                    </a> 
                    <a href="mis_admin_register_scholarship.php" class="dropdown-item">
                        <i class="fa fa-graduation-cap"></i>
                        <span>Scholarship</span>
                    </a>
                    
                    <a href="mis_admin_register_scholarship.php" class="dropdown-item">
                        <i class="fas fa-user-edit"></i>
                        <span>SPES</span>
                    </a> 
                    <a href="mis_admin_register_scholarship.php" class="dropdown-item">
                        <i class="fas fa-user-edit"></i>
                        <span>GIP</span>
                    </a>
                    <a href="mis_admin_add_clearance.php" class="dropdown-item">
                        <i class="fa fa-address-card "></i>
                        <span>Peso Clearance</span>
                    </a>
                    <a href="mis_admin_register_joboffer.php" class="dropdown-item">
                        <i class="fa fa-newspaper"></i>
                        <span>Job Opening</span>
                    </a>  
                    <a href="mis_admin_add_agency.php" class="dropdown-item">
                        <i class="fas fa-ellipsis-h"></i>
                        <span>Agency</span>
                    </a> 
                    <a href="mis_admin_register_tesdatraining.php" class="dropdown-item">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Tesda Training</span>
                    </a>
                    <!-- <a href="mis_admin_register_assessment.php" class="dropdown-item">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Assessment</span>
                    </a> -->
                              
                     <div class="dropdown-divider"></div>

                    
                </div>
            </li>

        </ul>
    </div>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php }?>