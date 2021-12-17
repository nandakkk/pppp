<?php
include 'koneksi.php';

$id=$_POST['idadmin'];
$Username=$_POST['Username'];
$password=$_POST['password'];
mysqli_query($koneksi,"update admin set Username='$Username',password='$password' where idadmin ='$id'");
header("location:admin.php");

?>