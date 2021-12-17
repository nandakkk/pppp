<?php

include("navbar.php");
?>
  <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"></h1>
                        
</div>
                           
                <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Galeri File Surat Masuk
                            </div>
                           <br>
						   <div class="container-fluid" style="overflow-x:auto;">
    <div class="table-responsive" style="border-radius:5px;">
<table class="table" style="font-size:15pt; margin-top:-1pt;">
<thead class="bg-success text-white">
<tr>
	<th class="align-middle">No</th>
	<th class="align-middle">Nama File</th>
	<th class="align-middle">Opsi</th>
</tr>
</thead>
    <?php
    include 'koneksi.php';
    $nomor=1;
    $data = mysqli_query($koneksi,"select idsuratmasuk,Isi from masuk");
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
		<td><?php echo $d ['Isi']; ?> </td>
      <td>
	  <div class="d-flex justify-content-center">
      	<a class="btn btn-warning" href="File/Isi/<?php echo $d['Isi'] ?>"><i class="fas fa-folder-open"></i></a>
	  </div><br>
	  <div class="d-flex justify-content-center">
      	<a class="btn btn-primary" href="File/Isi/<?php echo $d['Isi'] ?>" download><i class="fas fa-download"></i></a>
	  </div><br>
     </td>
    </tr>
    <?php } ?>
</table>
</div>
</div>
</body>
</html>