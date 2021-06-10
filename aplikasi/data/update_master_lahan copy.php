<?php
    include "config.php";
    $id = $_POST['id'];
    $sektor   = $_POST['sektor'];
    $sub_sektor     = $_POST['sub_sektor'];
    $komoditas = $_POST['nama_komoditas'];

$query  = "UPDATE `tbl_master_komoditas` SET 
`nama_komoditas`='$komoditas',
`sektor`='$sektor',
`sub_sektor`='$sub_sektor' WHERE id = '$id'";
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