<?php
include 'koneksi.php';

$id=$_POST['iddepartement'];
$Username=$_POST['Username'];
mysqli_query($koneksi,"update departement set Username='$Username' where iddepartement='$id'");
header("location:department.php");

?>