<?php
    session_start();
    unset($_SESSION['ad_id']);
    session_destroy();

    header("Location: mis_admin_logout.php");
    exit;
?>