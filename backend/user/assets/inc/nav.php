<?php
    $user_id = $_SESSION['user_id'];
    $user_email = $_SESSION['user_email'];
    $regtype=$_SESSION['regtype'];
    $ret="SELECT * FROM  mis_user WHERE user_id = ? AND user_email = ? AND regtype = ?";
    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param('iss',$user_id, $user_email, $regtype);
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
                    <a href="mis_user_dashboard.php" class="dropdown-item notify-item">
                        <i class="fas fa-user"></i>
                        <span>Dashboard</span>
                    </a>

                    <a href="mis_user_register_<?php echo $regtype; ?>.php" class="dropdown-item notify-item">
                        <i class="fas fa-user-tag"></i>
                        <span>Profile</span>
                    </a>
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
    </div>
<?php }?>