<?php
    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['user_number']);
    session_destroy();

    header("Location: mis_user_logout.php");
    exit;
?>