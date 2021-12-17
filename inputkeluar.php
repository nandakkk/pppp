<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>Data Instansi</title>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<link rel="stylesheet" type="text/css" href="style.css">
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

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body style="background-image:url('bg.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size:cover;">
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
<div class="container" style="background-color:#0062cc; width:400px;">
<h3 style="padding-top:10px">Tambah Data Keluar</h3>

<form  class="form-group-center" method="post" action="proses_inputkeluar.php" enctype="multipart/form-data">
	<table>
        <tr>
			<td>Nomor Surat</td>
			<td><Input type="text" class="form-control" name="no_surat" placeholder=""></td>
		</tr>
		 <tr>
			<td>Tanggal</td>
			<td><Input type="date" class="form-control" name="tanggal" placeholder=""></td>
		</tr>
		<tr>
			<td>Asal Surat</td>
			<td><select id="id_instansi" name="nma_instansi">
			<option>----------Pilih Asal Surat-------</option>
			<?php
			$sql = mysqli_query($koneksi,"SELECT * FROM instansi ");
			while($data = mysqli_fetch_array($sql)):
			?>
			<option value="<?=$data['nma_instansi'];?>"><?= $data['nma_instansi'];?>
			</option>
			<?php endwhile; 
			?></td>
		</tr>
		<tr>
			<td>Tujuan</td>
			<td><select id="id_instansi" name="Username">
			<option>----------Tujuan-------</option>
			<?php
			$sql = mysqli_query($koneksi,"SELECT * FROM departement ");
			while($data = mysqli_fetch_array($sql)):
			?>
			<option value="<?=$data['Username'];?>"><?= $data['Username'];?>
			</option>
			<?php endwhile; 
			?></td>
		</tr>
		<tr>
			<td>Perihal</td>
			<td><Input type="text" class="form-control" name="Perihal" placeholder=""></td>
		</tr>
	<tr>
	 <tr>
			<td>Sifat</td>
			<td>
    		<select class="form-control" size=4 name='sifat'>
        			<option value='Sifat 1'>Sifat 1</option>
        			<option value='Sifat 2'>Sifat 2</option>
        			<option value='Sifat 3'>Sifat 3</option>
        			<option value='Sifat 4'>Sifat 4</option>
        			<option value='Sifat 5'>Sifat 5</option>
				</select>
			</td>
		</tr>
			<td>Isi</td>
			<td><input type='file' name="Isi" accept='img/*'></input></td>
		</tr>
		<tr>
			<td></td>
			<td><Input class="btn btn-warning" type="submit" value="Simpan"></td>
		</tr>
	</table>
<br>
<tr/>
<td></td>
<td><a class="btn btn-warning" href="keluar.php">Kembali ke halaman Surat Keluar</a></td>
<br><br>
</div>
</div>
</form>
</body>
</html>
