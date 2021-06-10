<?php
    include "../data/config.php";
    $id = $_POST['id'];

$query  = "DELETE FROM `users` WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data Berhasil Dihapus');window.location='hapusakun';</script>";
    }