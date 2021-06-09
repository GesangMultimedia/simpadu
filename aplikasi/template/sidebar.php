<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Simpadu Admin</title>

    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

    <!-- using local links -->
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../node_modules/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sidebar-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/icon/android-icon-36x36.png" />
</head>

<body>
    <div class="page-wrapper chiller-theme sidebar-bg bg5 toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand text-center">
                    <a href="#">SIMPADU ADMIN</a>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name"><?php echo $_SESSION["user"]["name"] ?>
                        </span>
                        <span class="user-name"><?php echo $_SESSION["user"]["email"] ?>
                        </span>
                        <span class="user-role"><?php echo $_SESSION["user"]["user_level"] ?></span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-item sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar-menu  -->
                <div class=" sidebar-item sidebar-menu">
                    <ul>                        
                        <li>
                            <a href="Index.php">
                                <i class="fa fa-home"></i>
                                <span class="menu-text">Beranda</span>
                            </a>
                        </li>
                        <li class="header-menu">
                            <span>Data Master</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span class="menu-text">Master Data</span>
                                <span class="badge badge-pill badge-danger"> Penting</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <a href="master-lahan.php">
                                        <i class="fas fa-tractor"></i> Jenis Lahan
                                    </a>
                                </ul>
                                <ul>
                                    <a href="#"><i class="fas fa-atom"></i> Komoditas</a>
                                </ul>
                                <ul>
                                    
                                    <a href="#"><i class="fas fa-atom"></i> Jenis Subsektor</a>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                            <i class="fas fa-users"></i>
                                <span class="menu-text">Master Pengguna</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <a href="#"><i class="fas fa-user-plus"></i> Registrasi Pengguna Baru</a>
                                </ul>
                                <ul>
                                    <a href="#"><i class="fas fa-user-minus"></i> Hapus Pengguna</a>
                                </ul>
                                <ul>
                                    <a href="#"><i class="fas fa-user-shield"></i> Pengaturan Pengguna</a>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>Masukan / Tampilkan Data</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="far fa-gem"></i>
                                <span class="menu-text">Data</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-seedling"></i> Data Pertanian</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-fish"></i> Data Perikanan</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-red-river"></i> Data Luas</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-chart-line"></i>
                                <span class="menu-text">Grafik</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <a href="#"><i class="fas fa-chart-pie"></i> Pie chart</a>
                                </ul>
                                <ul>
                                    <a href="#"><i class="fas fa-chart-line"></i> Line chart</a>
                                </ul>
                                <ul>
                                    <a href="#"><i class="fas fa-chart-bar"></i> Bar chart</a>
                                </ul>
                                <ul>
                                    <a href="#"><i class="fas fa-chart-area"></i> Histogram</a>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-globe"></i>
                                <span class="menu-text">Pemetaan</span>
                                <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <a href="#"><i class="fas fa-map-marked-alt"></i> Pemetaan Per Komoditas</a>
                                </ul>
                                <ul>
                                    <a href="#"><i class="fas fa-location-arrow"></i> Pemetaan Per Kecamatan</a>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            <span>Ekstra</span>
                        </li>
                        <li>
                            <a href="#">
                            <i class="fas fa-file-alt"></i>
                                <span class="menu-text">Dokumentasi</span>
                                <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span class="menu-text">Calendar</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-folder"></i>
                                <span class="menu-text">Examples</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-footer  -->
            <div class="sidebar-footer">
                <div class="dropdown">

                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-pill badge-warning notification"><small>Fitur Update</small></span>
                    </a>
                    <div class="dropdown-menu notifications" aria-labelledby="dropdownMenuMessage">
                        <div class="notifications-header">
                            <i class="fa fa-bell"></i>
                            Notifikasi
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-check text-success border border-success"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Administrator merubah data Pertanian</div>
                                    <div class="notification-time">
                                        6 menit yang lalu
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-exclamation text-info border border-info"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Data Komoditas telah berhasil diperbaharui</div>
                                    <div class="notification-time">
                                        Hari Ini
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-exclamation-triangle text-warning border border-warning"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">IP Address 10.54.25.142 melakukan pencarian data secara acak. Mohon diperhatikan</div>
                                    <div class="notification-time">
                                        Kemarin
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="#">View all notifications</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="badge badge-pill badge-success notification"><small>Fitur Update</small></span>
                    </a>
                    <div class="dropdown-menu messages" aria-labelledby="dropdownMenuMessage">
                        <div class="messages-header">
                            <i class="fa fa-envelope"></i>
                            Pesan
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong> Administrator</strong>
                                    </div>
                                    <div class="message-detail">Akan diadakan maintenance database pada hari Sabtu, 12 Juni 2021 pukul 23.59 s/d Minggu, 13 Juni 2021 pukul 06.00</div>
                                </div>
                            </div>

                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong> Administrasi</strong>
                                    </div>
                                    <div class="message-detail">Database sudah bisa digunakan</div>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="#">View all messages</a>

                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                        <span class="badge-sonar"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                        <a class="dropdown-item" href="#">Profile Saya</a>
                        <a class="dropdown-item" href="#">Bantuan</a>
                        <a class="dropdown-item" href="#">Pengaturan</a>
                    </div>
                </div>
                <div>
                    <a id="pin-sidebar" class="btn btn-sm rounded-0" href="#">
                        <span><i class="fas fa-grip-lines"></i></span>
                    </a>
                </div>
                <div>
                    <a href="admin/logout.php">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
                <div class="pinned-footer">
                    <a href="#">
                        <i class="fas fa-ellipsis-h"></i>
                    </a>
                </div>
            </div>
        </nav>