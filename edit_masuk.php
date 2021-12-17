<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body style="background-image:url('bg.jpeg'); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size:cover;">

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

<div class="container">
<div class="container" style="background-color:#ffffff; width:750px;">
<h3 style="padding-top:20px"> Edit Data Surat Masuk</h3>

<?php 
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from masuk where idsuratmasuk ='$id'");
while($d = mysqli_fetch_array($data)){
 ?>
<form method="post" action="proses_editmasuk.php" enctype="multipart/form-data">

	<table>
		<tr>
			<td><input type="hidden" class="form-control" name="idsuratmasuk" value ="<?php echo $d['idsuratmasuk'];?>"></td>
		</tr>
        <tr>
			<td>Nomor Surat</td>
			<td><Input type="text" class="form-control" name="no_surat" value="<?php echo $d['no_surat'] ?>"></td>
		</tr>
		 <tr>
			<td>Tanggal</td>
			<td><Input type="date" class="form-control" name="tanggal" value="<?php echo $d['tanggal'] ?>"></td>
		</tr>
		<tr>
			<td>Asal Surat</td>
			<td><select id="id_instansi" name="nma_instansi">
			<option>----------Pilih Asal Surat-------</option>
			<?php
			$selected = $d['nma_instansi'];
			$sql = mysqli_query($koneksi,"SELECT * FROM instansi ");
			while($data2 = mysqli_fetch_array($sql)):
			?>
			<option <?php if($selected=$data2['nma_instansi']){echo "selected";};?> value="<?=$data2['nma_instansi'];?>"><?= $data2['nma_instansi'];?>
			</option>
			<?php endwhile; 
			?></td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td><select id="id_instansi" name="Username">
			<option>----------Tujuan-------</option>
			<?php
			$selected = $d['Username'];
			$sql = mysqli_query($koneksi,"SELECT * FROM departement ");
			while($data2 = mysqli_fetch_array($sql)):
			?>
			<option <?php if($selected=$data2['Username']){echo "selected";};?> value="<?=$data2['Username'];?>"><?= $data2['Username'];?>
			</option>
			<?php endwhile; 
			?></td>
		</tr>
		<tr>
			<td>Perihal</td>
			<td><Input type="text" class="form-control" name="Perihal" value="<?php echo $d['Perihal'] ?>"></td>
		</tr>
	<tr>
	 <tr>
			<td>Sifat</td>
			<td>
    		<select class="form-control" size=4 name='sifat'>
        			<option <?php if($d['sifat']=='Sifat 1'){echo "selected";};?> value='Sifat 1'>Sifat 1</option>
        			<option <?php if($d['sifat']=='Sifat 2'){echo "selected";};?> value='Sifat 2'>Sifat 2</option>
        			<option <?php if($d['sifat']=='Sifat 3'){echo "selected";};?> value='Sifat 3'>Sifat 3</option>
        			<option <?php if($d['sifat']=='Sifat 4'){echo "selected";};?> value='Sifat 4'>Sifat 4</option>
        			<option <?php if($d['sifat']=='Sifat 5'){echo "selected";};?> value='Sifat 5'>Sifat 5</option>
				</select>
			</td>
		</tr>
			<td>Isi</td>
			<td><?php echo $d['Isi'] ?></td>
			<td><input type='file' name="Isi" accept='img/*' value='<?php echo $d['Isi'] ?>'></input></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="btn btn-success" type="submit" value="Simpan"></td>
		</tr>
	</table>
</form>



<br>
<a class="btn btn-success" href="instansii.php"> Kembali ke halaman utama</a>
</br>
<?php

}
?>

</body>
</html>