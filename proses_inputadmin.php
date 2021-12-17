<?php
include 'koneksi.php';

$id = $_POST['id_admin'];
$Username=$_POST['Username'];
$password = $_POST['password'];

mysqli_query($koneksi,"insert into admin values('$id_admin','$Username','$password')");
header("location:admin.php");

?>
