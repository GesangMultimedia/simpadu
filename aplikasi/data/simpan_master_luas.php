<?php
include "config.php";
    $id = $_POST['id'];
    $nama_lahan   = $_POST['nama_lahan'];
    $satuan_luas     = $_POST['satuan_luas'];

$query  = "INSERT INTO `tbl_jenis_lahan`(`nama_lahan`, `satuan_luas`) VALUES 
('$nama_lahan','$satuan_luas')";
    $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan. Mohon diingat nomer plat Anda');window.location='../master_lahan.php';</script>";
    }