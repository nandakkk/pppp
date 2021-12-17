<?php 
include 'koneksi.php';

$id = $_GET['id'];


mysqli_query($koneksi,"delete from admin where idadmin='$id'");

header("location:admin.php");

?>