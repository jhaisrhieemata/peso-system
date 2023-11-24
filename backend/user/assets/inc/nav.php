<?php
    $user_id = $_SESSION['user_id'];
    // $user_fname=$_SESSION['user_fname'];
    // $user_lname=$_SESSION['user_lname'];
    $user_email = $_SESSION['user_email'];
    $ret="SELECT * FROM  mis_user WHERE user_id = ? AND user_email = ?";
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


            
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <!-- <img src="assets/images/users/<?php echo $row->user_dpic;?>"  alt="pic" class="rounded-circle"> -->
                    <span><img src="assets/images/Peso_logo.png" alt="" height="50"></span>
                    <span class="pro-user-name ml-1">
                        <?php echo $row->user_fname;?> <?php echo $row->user_lname;?> <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <!-- <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div> -->

                    <!-- item-->
                    <a href="mis_user_dashboard.php" class="dropdown-item notify-item">
                        <i class="fas fa-user"></i>
                        <span>Dashboard</span>
                    </a>

                    <!-- <a href="mis_user_update-account.php" class="dropdown-item notify-item">
                        <i class="fas fa-user-tag"></i>
                        <span>Manage Account</span>
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
        <!-- <span class="logo-lg-text-light">UBold</span>
         <span class="logo-sm-text-dark">U</span> -->
    </div>
<?php }?>
