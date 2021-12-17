<?php
include 'koneksi.php';

$no_surat=$_POST['no_surat'];
$tanggal=$_POST['tanggal'];
$nma_instansi=$_POST['nma_instansi'];
$Tujuan=$_POST['Username'];
$Perihal=$_POST['Perihal'];
$sifat=$_POST['sifat'];
if(isset($_FILES['Isi'])){
	$errors= array();
	$file_name = $_FILES['Isi']['name'];
	$file_tmp =$_FILES['Isi']['tmp_name'];
	$file_type=$_FILES['Isi']['type'];
      
	if(empty($errors)==true){
		move_uploaded_file($file_tmp,"File/Isi/".$file_name);
		$namafileisi = $file_name;
	}else{
		print_r($errors);
	}
}


mysqli_query($koneksi,"insert into keluar values(NULL,'$no_surat','$tanggal','$nma_instansi','$Tujuan','$Perihal','$sifat','$namafileisi')");
echo mysqli_error($koneksi);
header("location:keluar.php");
?>