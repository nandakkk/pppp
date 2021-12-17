<!DOCTYPE html>
<html>
<head>
<title>Laporan Surat Masuk</title>
	<thead class="bg-success text-white">
<div class="container-fluid" style="overflow-x:auto;">
    <div class="table-responsive" style="border-radius:5px;">
<table border="1" style="width:100%">
<thead class="bg-success text-white">
<tr>
	<th width="1%">No</th>
	<th>Nomor Surat</th>
	<th>Tanggal Surat</th>
	<th>Instansi</th>
	<th>Tujuan</th>
	<th>Perihal</th>
	<th>Sifat</th>
	<th>isi</th>
	
</tr>
</thead>
    <?php
    include 'koneksi.php';
    $nomor=1;
    $data = mysqli_query($koneksi,"select * from masuk");
		while($d = mysqli_fetch_array($data)){
	?>
	<tr
	<?php
	if ($nomor%2) {
		echo "class='bg-white'";
	} else {
		echo "class='bg-light'";
	};
	?>
	>
		<td class="text-center"><?php echo $nomor++; ?></td>
		<td><?php echo $d ['no_surat']; ?> </td>
		<td><?php echo $d ['tanggal']; ?> </td>
		<td><?php echo $d ['nma_instansi']; ?> </td>
		<td><?php echo $d ['Username']; ?> </td>
		<td><?php echo $d ['Perihal']; ?> </td>
		<td><?php echo $d ['sifat']; ?> </td>
		<td><?php echo $d ['Isi']; ?><br><a href="File/Isi/<?php echo $d['Isi']; ?>">Open File</a>
			</td>
    </tr>
    <?php } ?>
</table>

			<script>
			window.print();
			</script>
