<?php

include("navbar.php");
?>
  <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"></h1>
                        
						<div class="col-sm d-flex justify-content-end mb-4"><a class="btn btn-danger" href="input_department.php"> + Tambah Data</a></div>
</div>
                           
                <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Departement
                            </div>
                           <br>
						   <div class="container-fluid" style="overflow-x:auto;">
    <div class="table-responsive" style="border-radius:5px;">
<table class="table" style="font-size:15pt; margin-top:-1pt;">
<thead class="bg-success text-white">
<tr>
	<th class="align-middle">No</th>
	<th class="align-middle">Nama Departement</th>
	<th class="align-middle">Opsi</th>
</tr>
</thead>
    <?php
    include 'koneksi.php';
    $nomor=1;
    $data = mysqli_query($koneksi,"select * from departement");
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
		<td><?php echo $d ['Username']; ?> </td>
      <td>
	  <div class="d-flex justify-content-center">
      	<a class="btn btn-secondary" href="edit_department.php?id=<?php echo $d['iddepartement']; ?>"><i class="fas fa-edit"></i></a>
	  </div><br>
	  <div class="d-flex justify-content-center">
	 	<a class="btn btn-danger" href="hapus_departement.php?id=<?php echo $d['iddepartement']; ?>"><i class="fas fa-trash"></i></a>
	  </div>
     </td>
    </tr>
    <?php } ?>
</table>
</div>
</div>
</body>
</html>