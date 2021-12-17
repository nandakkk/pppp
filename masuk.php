<?php
include("navbar.php");
?>
            <div id="layoutSidenav_content">
                <main>
<br>
  
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Surat Masuk
                            </div>
                           <br>
   <div class="container-fluid" style="overflow-x:auto;">
    <div class="table-responsive" style="border-radius:5px;">
<table class="table" style="font-size:15pt; margin-top:-1pt;">
<thead class="bg-success text-white">
<tr>
	<th class="align-middle">No</th>
	<th class="align-middle">Nomor Surat</th>
	<th class="align-middle">Tanggal Surat</th>
	<th class="align-middle">Instansi</th>
	<th class="align-middle">Tujuan</th>
	<th class="align-middle">Perihal</th>
	<th class="align-middle">Sifat</th>
	<th class="align-middle">isi</th>
	<th class="align-middle">Opsi</th>
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
      <td>
	  <div class="d-flex justify-content-center">
      	<a class="btn btn-secondary" href="edit_masuk.php?id=<?php echo $d['idsuratmasuk']; ?>"><i class="fas fa-edit"></i></a>
	  </div>
	  <div class="d-flex justify-content">
	 	<a class="btn btn-danger" href="hapus_masuk.php?id=<?php echo $d['idsuratmasuk']; ?>"><i class="fas fa-trash"></i></a>
	  </div>
     </td>
    </tr>
    <?php } ?>
</table>
	<div class="col-sm d-flex justify-content-end"><a class="btn btn-success" href="inputmasuk.php"> + Tambah </a></div>
                           
<?php
include("footer.php");
?>
</div>
</div>
</body>
</html>
