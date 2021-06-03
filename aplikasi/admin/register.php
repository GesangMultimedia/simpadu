<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    //if($saved) header("Location: login.php");
}

?>

<body>
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form action="" method="POST" class="box">
                        <h1>Register User</h1>
                        <p class="text-muted">Isikan Detail dibawah ini</p>
                        <input class="form-control" type="text" name="name" placeholder="Nama kamu" />
                        <input class="form-control" type="text" name="username" placeholder="Username" />
                        <input class="form-control" type="text" name="email" placeholder="Alamat Email" />
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                        <input type="submit" name="register" value="Daftar" />
                    </form>
                </div>
            </div>
        </div>
    </div>
