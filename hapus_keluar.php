<?php 
include 'koneksi.php';

$id = $_GET['id'];


mysqli_query($koneksi,"delete from keluar where idsuratkeluar='$id'");

header("location:keluar.php");

?>