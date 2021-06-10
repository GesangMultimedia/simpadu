<?php
    include "auth.php";
    include "sidebar.php";
    include "../data/config.php";
    if (isset($_GET['id'])) {
        // ambil nilai id dari url dan disimpan dalam variabel $id
        $id = ($_GET["id"]);
    
        // menampilkan data dari database yang mempunyai id=$id
        $query = "SELECT * FROM users WHERE id ='$id'";
        $result = mysqli_query($koneksi, $query);
        // jika data gagal diambil maka akan tampil error berikut
        if(!$result){
          die ("Query Error: ".mysqli_errno($koneksi).
             " - ".mysqli_error($koneksi));
        }
        // mengambil data dari database
        $data = mysqli_fetch_assoc($result);
          // apabila data tidak ada pada database maka akan dijalankan perintah ini
           if (!count($data)) {
              echo "<script>alert('Data tidak ditemukan pada database');window.location='databaru.php';</script>";
           }
    } else {
        // apabila tidak ada data GET id pada akan di redirect ke index.php
        echo "<script>alert('Masukkan data id.');window.location='pencarian.php';</script>";
    }         
?>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label, textarea,input {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    textarea {
    padding: 10px;
    line-height: 1.5;
    border-radius: 5px;
    border: 2px solid #ccc;
    box-shadow: 1px 1px 1px #999;
    outline-color: salmon;
    }
    input {
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: auto;
      height: auto;
      padding: 0px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    hr.new1 {
        border-top: 4px solid blueviolet;
    }


    /* Dashed red border */

    hr.new2 {
        border-top: 1px dashed blue;
    }


    /* Dotted red border */

    hr.new3 {
        border-top: 1px dotted red;
    }


    /* Thick red border */

    hr.new4 {
        border: 2px solid red;
        border-radius: 5px;
    }


    /* Large rounded green border */

    hr.new5 {
        border: 10px solid green;
        border-radius: 5px;
    }
    /* Dashed border */
    hr.dashed {
      border-top: 3px dashed #bbb;
    }

    /* Dotted border */
    hr.dotted {
      border-top: 3px dotted #bbb;
    }

    /* Solid border */
    hr.solid {
      border-top: 3px solid #bbb;
    }

    /* Rounded border */
    hr.rounded {
      border-radius: 5px;
    }
    hr.style2 {
      border-top: 4px double #8c8b8b;
    }
    </style>
<body>
    <main class="page-content pt-2">
        <div id="overlay" class="overlay"></div>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="form-group col-md-12 text-center">
                    <img src="../img/logosimpadu.png" alt="logo" style="width: 150px; height: 150px">

                </div>
            </div>
            <hr class="style2">
            <div class="card card-4">
                <div class="card-body">                          
                    <form method="POST" action="update_user.php" enctype="multipart/form-data" id="usrform">
                        <section class="base">
                            <h2 class="title text-center text-uppercase">edit user <?php echo $data['name'];?></h2>
                            <hr class="style2">
                            <div class="row">
                                <div class="col-6">                           
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-4 col-form-label text-dark">No ID</label>
                                        <div class="col-sm-8">
                                            <input type="number" value="<?php echo $data['id']; ?>" readonly/>
                                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-4 col-form-label text-dark">User Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="user_name" value="<?php echo $data['username']; ?>" readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-4 col-form-label text-dark">Email</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="email" value="<?php echo $data['email']; ?>" required=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-4 col-form-label text-dark">Level User</label>
                                        <div class="col-sm-8">
                                            <select name="user_level" class="custom-select" required="">
                                                <option disabled selected>Pilih User Level...</option>
                                                <option>Administrator</option>
                                                <option>Super User</option>
                                                <option>User</option>
                                                <option>Tamu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-8">
                                            <button class="btn btn-danger" type="submit">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <hr class="style2">                        
                    </form>
                </div>
            </div>       
        </div>
    </main>
</body>

<?php
    include "template/footer.php";
?>