<?php
include 'koneksi.php';

$id = $_POST['id_instansi'];
$nma_instansi=$_POST['nma_instansi'];

mysqli_query($koneksi,"insert into instansi values('$id_instansi','$nma_instansi')");
header("location:instansii.php");

?>
