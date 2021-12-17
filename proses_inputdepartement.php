<?php
include 'koneksi.php';

$id = $_POST['iddepartement'];
$Username=$_POST['Username'];

mysqli_query($koneksi,"insert into departement values('$iddepartement','$Username')");
header("location:department.php");

?>

