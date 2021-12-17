<?php 
include 'koneksi.php';

$id = $_GET['id'];


mysqli_query($koneksi,"delete from masuk where idsuratmasuk='$id'");

header("location:masuk.php");

?>