<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - BAKreatif</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php session_start(); ?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html"><img src="assets/img/logobakk.png"  width="90" height="50"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4-right">
                <li class="nav-item dropdown-center">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" onclick="var dropdownsamping = document.getElementById('dropdown-samping'); visibilitas=dropdownsamping.style.display; if(visibilitas=='block'){dropdownsamping.style.display = 'none';}else{dropdownsamping.style.display = 'block';};" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" id="dropdown-samping" style="margin-left:-90px;" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="admin.php">Pengguna</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="beranda.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                 Beranda
                            </a>
                           <a class="nav-link" href="department.php">
                                <div class="sb-nav-link-icon"><i class="far fa-user"></i></div>
                                 Departement
                            </a>
							<a class="nav-link" href="instansii.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                 Instansi
                            </a>
							 <div class="nav">
                            <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                                 Transaksi Surat
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="masuk.php">Surat Masuk</a>
                                    <a class="nav-link" href="keluar.php">Surat Keluar</a>
                                </nav>
                            </div>
							<div class="nav">
                            <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                                 Galeri File
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="filemasuk.php">File Surat Masuk</a>
                                    <a class="nav-link" href="filekeluar.php">File Surat Keluar</a>
                                </nav>
                            </div>
							<a class="nav-link" href="laporanmasuk.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                                 Laporan
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Login as:</div>
                        <?php echo $_SESSION['login'] ?>
                    </div>
                </nav>
            </div>
            
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>