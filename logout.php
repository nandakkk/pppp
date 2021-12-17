<?php
    session_start();
    if(isset($_SESSION['login'])) {
        unset($_SESSION);
        session_destroy();
        echo "<script>alert('Anda telah logout!');window.location.href='login.php';</script>";
    }
?>