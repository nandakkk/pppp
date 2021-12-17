<?php
include("navbar.php");
?>

            <div id="layoutSidenav_content">
                <main>
<br>
 <div class="card mb-4">
 <div class="card-body">
<form method="post">
  <table>
  <tr>
  <td>Dari Tanggal</td>
  <td><input type="date" name="dari_tgl" required="required"></td>
  </tr>
  <td>Sampai Tanggal</td>
  <td><input type="date" name="sampai_tgl" required="required"></td>
  <td><input type="submit" class="btn btn-primary" name="filter" value="filter"></td>
  </tr>
  </div>
  </div>
  </table>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Laporan
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
</tr>
</thead>
    <?php
    include 'koneksi.php';
    $nomor=1;
	if(isset($_POST['filter'])) {
		$dari_tgl = mysqli_real_escape_string($koneksi,$_POST['dari_tgl']);
		$sampai_tgl = mysqli_real_escape_string($koneksi,$_POST['sampai_tgl']);
		$data = mysqli_query($koneksi,"select * from masuk where tanggal BETWEEN '$dari_tgl' AND '$sampai_tgl'");
	}else{
    $data = mysqli_query($koneksi,"select * from masuk");
	}
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
<div class="container-fluid">
<div class="row">

<div class="col-sm d-flex justify-content-end-right"><a class="btn btn-warning" href="cetakmasuk.php"><i class="fas fa-download"></i></a></div>
</div>
</div>
<?php
include("footer.php");
?>
</div>
</div>
</body>
</html>
