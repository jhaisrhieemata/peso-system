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
                                            <?php
                                           $ret = "SELECT e.user_id, e.user_fname, e.user_lname, e.regtype, em.employment_id, em.firstname, s.scholarship_id, s.firstname, sp.spes_id, sp.firstname, g.gip_id, g.firstname, t.tesdatraining_id, t.firstname 
                                           FROM mis_user e
                                           LEFT JOIN mis_employment em ON e.user_id = em.employment_id 
                                           LEFT JOIN mis_scholarship s ON e.user_id = s.user_id
                                           LEFT JOIN mis_spes sp ON e.user_id = sp.user_id
                                           LEFT JOIN mis_gip g ON e.user_id = g.user_id
                                           LEFT JOIN mis_tesdatraining t ON e.user_id = t.user_id 
                                           ORDER BY em.employment_id, s.scholarship_id, sp.spes_id, g.gip_id, t.tesdatraining_id";
                                           
                                    
                                               // Prepare and execute the query
                                         $stmt = $mysqli->prepare($ret);
                                         $stmt->execute();
                                        $res = $stmt->get_result();
                                        // $cnt=1;

                                        while ($row = $res->fetch_object()) {
                                            ?>
                                            
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


                    <!-- <a href="mis_user_update_single_<?php echo $regtype; ?>.php?tesdatraining_id=<?php echo $row->tesdatraining_id;?>" class="dropdown-item notify-item">
                        <i class="fas fa-user-tag"></i>
                        <span>Profile</span>
                    </a> -->
                    <?php
// Assuming $regtype and $row->tesdatraining_id are available

// Set the condition for $regtype
if ($regtype === 'Employment') {
    $url = "mis_user_update_single_employment.php?employment_id={$row->employment_id}";
} elseif ($regtype === 'Scholarship') {
    $url = "mis_user_update_single_scholarship.php?scholarship_id={$row->scholarship_id}";
} elseif ($regtype === 'SPES') {
    $url = "mis_user_update_single_spes.php?spes_id={$row->spes_id}";
} elseif ($regtype === 'GIP') {
    $url = "mis_user_update_single_gip.php?gip_id={$row->gip_id}";
} else {
    $url = "mis_user_update_single_tesdatraining.php?tesdatraining_id={$row->tesdatraining_id}";

}
?>

<a href="<?php echo $url; ?>" class="dropdown-item notify-item">
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
        <?php }?>
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