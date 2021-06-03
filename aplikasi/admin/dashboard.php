<?php require_once("auth.php"); ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>SAR ADMIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/image/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/image/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/image/icon/favicon-16x16.png">
    <link rel="manifest" href="../assets/image/icon/site.webmanifest">
    <link rel="mask-icon" href="../assets/image/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/492bc103f3.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" aria-label="sidebar">
				<div class="p-4 pt-5">
		  		<a href="../index.php" class="img logo rounded-circle mb-5" style="background-image: url(../assets/image/brand.png);"></a>
	        <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="dashboard.php"><i class="fas fa-house-user"></i> Beranda</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-print"></i> Laporan</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="dashboard.php?page=laporanharian"><i class="fas fa-phone-volume"></i> Telepon Darurat</a>
                        </li>
                        <li>
                            <a href="dashboard.php?page=kasus"><i class="fas fa-user-injured"></i> Laporan Kasus</a>
                        </li>
                        <li>
                            <a href="dashboard.php?page=user"><<i class="fas fa-user-tie"></i> Laporan Data User</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-laptop-code"></i> Server OTP</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu2">
                        <li>
                            <a href="http://192.168.1.24:8080/serverotp/" target="blank"><i class="fas fa-laptop-code"></i> Server OTP</a>
                        </li>
                        <li>
                            <a href="https://fonnte.com" target="blank"><i class="fas fa-laptop-code"></i> FONNTE</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-toolbox"></i> Data Master</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu3">
                        <li>
                            <a href="dashboard.php?page=tambahpolsek"><i class="fas fa-building"></i> Tambah Polsek</a>
                        </li>
                        <li>
                            <a href="dashboard.php?page=register"><<i class="fas fa-user-plus"></i> Registrasi Akun Baru</a>
                        </li>
                        <li>
                            <a href="dashboard.php?page=hapusakun"><i class="fas fa-user-slash"></i> Edit & Hapus Akun</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="../index.php"><i class="far fa-compass"></i> Ke Menu Utama</a>
                    </li>
            </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website created <i class="icon-heart" aria-hidden="true"></i> by <a href="https://gesangmultimedia.co.id" target="_blank">gesangmultimedia.co.id</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-danger" aria-label="navbar">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
              <span class="navbar-text text-white">
                    Selamat datang <?php echo $_SESSION["user"]["email"] ?>
                </span>
              </ul>
            </div>
          </div>
        </nav>

        <?php 
            if(isset($_GET['page'])){
                $page = $_GET['page'];
        
                switch ($page) {
                    case 'register':
                        include "register.php";
                        break;
                    case 'edit':
                        include "edit.php";
                        break;
                    case 'hapus':
                        include "hapus.php";
                        break;
                    case 'laporanharian':
                        include "../laporan/laporanharian.php";
                        break;
                    case 'laporanmingguan':
                        include "laporanmingguan.php";
                        break;
                    case 'laporanbulanan':
                        include "laporanbulanan.php";
                        break;
                    case 'laporantahunan':
                        include "laporantahunan.php";
                        break;	
                    case "tambahpolsek":
                        include "tambahpolsek.php";
                        break;
                    case "kasus":
                        include "../laporan/laporankasus.php";
                        break;	
                    case "logout":
                        include "logout.php";
                        break;
                    case "hapusakun":
                        include "hapusakun.php";
                        break;
                    case "user":
                        include "../laporan/laporanuser.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            }else{
                include "isi.php";
            }
            if(isset($_GET['tanggal'])){
                $tanggal = $_GET['tanggal'];
                include "../laporan/laporanharian.php?tanggal='%$tanggal%'";
            }
        ?>
      </div>
		</div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
  </body>
</html>