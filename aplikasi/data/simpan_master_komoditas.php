<?php
    include "config.php";
    $id = $_POST['id'];
    $sektor   = $_POST['sektor'];
    $sub_sektor     = $_POST['sub_sektor'];
    $komoditas = $_POST['nama_komoditas'];

$query  = "INSERT INTO `tbl_master_komoditas`(`nama_komoditas`, `sektor`, `id_sektor`, `sub_sektor`, `satuan`) VALUES 
('$komoditas','$sektor','','$sub_sektor','kilogram/kg')";
    $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan. Mohon diingat nomer plat Anda');window.location='../master_komoditas.php';</script>";
    }