<?php
    include "../data/config.php";
    $id = $_POST['id'];
    $user = $_POST['user_name'];
    $email = $_POST['email'];
    $level = $_POST['user_level'];

$query  = "UPDATE `users` SET 
`email`='$email',
`user_level`='$level' WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil disimpan. Mohon diingat nomer plat Anda');window.location='hapusakun';</script>";
    }