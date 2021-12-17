<?php
include 'koneksi.php';

$id=$_POST['idsuratmasuk'];
$no_surat=$_POST['no_surat'];
$tanggal=$_POST['tanggal'];
$nma_instansi=$_POST['nma_instansi'];
$Username=$_POST['Username'];
$Perihal=$_POST['Perihal'];
$sifat=$_POST['sifat'];

if(isset($_FILES['Isi'])){
	if($_FILES['Isi']['name']==''){
		$isifile='';
	}else{
		$isifile='ada';
	}
}

if($isifile!=''){
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

	$isifile = ",Isi='$namafileisi'";
}

mysqli_query($koneksi,"update masuk set no_surat='$no_surat',tanggal='$tanggal',nma_instansi='$nma_instansi',Username='$Username',Perihal='$Perihal',sifat='$sifat'$isifile where idsuratmasuk='$id'");
header("location:masuk.php");

?>