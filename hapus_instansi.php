<?php 
include 'koneksi.php';

$id = $_GET['id'];


mysqli_query($koneksi,"delete from instansi where id_instansi='$id'");

header("location:instansii.php");

?>