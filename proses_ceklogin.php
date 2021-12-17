<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    session_start();
    
    $query = "SELECT * FROM admin WHERE Username='$username' AND Password='$password'";
    $login = mysqli_query($koneksi, $query);
    $cocok = mysqli_num_rows($login);
    $d = mysqli_fetch_array($login);
    if($login){
        login($cocok,$d);
    };

    function login($cocok,$d) {
        if ($cocok > 0) {
            echo "sukses";
            $_SESSION['login']=$d['Username'];
            $_SESSION['nomor_id']=$d['idadmin'];
            header("Location: beranda.php");
        } else {
            echo "<script>alert('Login gagal. Harap periksa kembali e-mail dan password saat login');window.location.href='login.php';</script>";
        }
    }
?>