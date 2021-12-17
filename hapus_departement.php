<?php 
include 'koneksi.php';

$id = $_GET['id'];


mysqli_query($koneksi,"delete from departement where iddepartement='$id'");

header("location:department.php");

?>