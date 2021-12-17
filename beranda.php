<?php

include("navbar.php");
?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mb-4">
                        <h1 class="mt-3">Hi, <?php echo $_SESSION['login'] ?></h1>
						<?php
date_default_timezone_set('Asia/Jakarta');
echo date('l, d-m-Y ');
?>

                        <div class="card mb-4">
                            <div class="card-body">
                               <marquee direction='left' scrollamount='3'><font color='black' size='1'>
                        </font>BUKIT ASAM KREATIF MERUPAKAN UNIT BISNIS STRATEGIS DARI YAYASAN BUKIT ASAM</marquee>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-2">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">INSTANSI</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="instansii.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-2">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">SURAT MASUK</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="masuk.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-2">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">SURAT KELUAR</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="keluar.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                         
                     
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
          <?php

include("footer.php");
?>

            </div>
        </div>
    </body>
</html>
