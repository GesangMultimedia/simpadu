<?php
    include "layout/header.php";
    include "data/config.php";
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
      width: 100%;
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
    <div class="container-fluid">
      <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680"><br/><br/>
          <div class="card card-4">
            <div class="card-body">                          
                <form method="POST" action="data/simpan_adipala.php" enctype="multipart/form-data" id="usrform">
                    <section class="base">
                        <h2 class="title text-center text-uppercase">sektor perikanan</h2>
                        <hr class="style2">
                        <!-- menampung nilai id produk yang akan di edit -->
                        <div class="row">
                            <div class="col-6">
                            <div class="form-group row">
                                <label for="lname" class="col-sm-4 col-form-label text-dark">Sub Sektor</label>
                                <div class="col-sm-8">
                                <select name="namadesa" class="custom-select" required="">
                                <option disabled selected>Pilih Sub Sektor...</option>
                                <?php
                                  $query = "SELECT DISTINCT(sub_sektor) FROM tbl_master_subsektor WHERE sektor = 'PERIKANAN' ORDER BY sub_sektor ASC";
                                  $result = mysqli_query($koneksi, $query);                                
                                      while(list($category) = mysqli_fetch_row($result)){
                                      $option = '<option value="'.$category.'">'.$category.'</option>';
                                      echo ($option);
                                      }
                                ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-4 col-form-label text-dark">Pilih Indikator</label>
                                <div class="col-sm-8">
                                    <select name="namadesa" class="custom-select" required="">
                                        <option disabled selected>Pilih Indikator...</option>
                                        <option>Luas Panen</option>
                                        <option>Produksi</option>
                                        <option>Produktivitas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-4 col-form-label text-dark">Pilih Komoditas 1</label>
                                <div class="col-sm-8">
                                    <select name="namadesa" class="custom-select" required="">
                                        <option disabled selected>Pilih Komoditas...</option>
                                        <option>Luas Panen</option>
                                        <option>Produksi</option>
                                        <option>Produktivitas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-4 col-form-label text-dark">Pilih Komoditas 2</label>
                                <div class="col-sm-8">
                                    <select name="namadesa" class="custom-select" required="">
                                        <option disabled selected>Pilih Komoditas...</option>
                                        <option>Luas Panen</option>
                                        <option>Produksi</option>
                                        <option>Produktivitas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-4 col-form-label text-dark">Pilih KOmoditas 3</label>
                                <div class="col-sm-8">
                                    <select name="namadesa" class="custom-select" required="">
                                        <option disabled selected>Pilih Komoditas...</option>
                                        <option>Luas Panen</option>
                                        <option>Produksi</option>
                                        <option>Produktivitas</option>
                                    </select>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                              <label for="lname" class="col-sm-4 col-form-label text-dark">Pilih Kecamatan 1</label>
                              <div class="col-sm-8">
                                <select name="namadesa" class="custom-select" required="">
                                    <option disabled selected>Pilih Kecamatan...</option>
                                    <?php
                                    $query = "SELECT DISTINCT(namakecamatan) FROM namakecamatan ORDER BY namakecamatan ASC";
                                    $result = mysqli_query($koneksi, $query);                                
                                        while(list($category) = mysqli_fetch_row($result)){
                                        $option = '<option value="'.$category.'">'.$category.'</option>';
                                        echo ($option);
                                        }
                                    ?>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="lname" class="col-sm-4 col-form-label text-dark">Pilih Kecamatan 2</label>
                              <div class="col-sm-8">
                                <select name="namadesa" class="custom-select" required="">
                                    <option disabled selected>Pilih Kecamatan...</option>
                                    <?php
                                    $query = "SELECT DISTINCT(namakecamatan) FROM namakecamatan ORDER BY namakecamatan ASC";
                                    $result = mysqli_query($koneksi, $query);                                
                                        while(list($category) = mysqli_fetch_row($result)){
                                        $option = '<option value="'.$category.'">'.$category.'</option>';
                                        echo ($option);
                                        }
                                    ?>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="lname" class="col-sm-4 col-form-label text-dark">Pilih Kecamatan 3</label>
                              <div class="col-sm-8">
                                <select name="namadesa" class="custom-select" required="">
                                    <option disabled selected>Pilih Kecamatan...</option>
                                    <?php
                                    $query = "SELECT DISTINCT(namakecamatan) FROM namakecamatan ORDER BY namakecamatan ASC";
                                    $result = mysqli_query($koneksi, $query);                                
                                        while(list($category) = mysqli_fetch_row($result)){
                                        $option = '<option value="'.$category.'">'.$category.'</option>';
                                        echo ($option);
                                        }
                                    ?>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-4 col-form-label text-dark">Tahun</label>
                                <div class="col-sm-8">
                                <select name="namadesa" class="custom-select" required="">
                                    <option disabled selected>Pilih Tahun ...</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-4 col-form-label text-dark">Tahun</label>
                                <div class="col-sm-8">
                                <select name="namadesa" class="custom-select" required="">
                                    <option disabled selected>s/d Tahun....</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group-row">
                                <button type="submit" class="btn btn-warning mb-4"><i class="fas fa-search"></i> Cari</button>
                                <button type="submit" class="btn btn-warning mb-4"><i class="far fa-file-excel"></i> Excel</button>
                            </div>
                        </div>
                    <hr class="style2">
                    </section>
                    <table class="table table-hover table-striped table-bordered datatab" style="width: 100%;">
                      <thead>
                          <tr>
                              <th scope="col" class="text-center bg-success">No ID</th>
                              <th scope="col" class="text-center bg-success">Nama Komoditas</th>
                              <th scope="col" class="text-center bg-success">Sektor</th>
                              <th scope="col" class="text-center bg-success">Sub-Sektor</th>
                              <th scope="col" class="text-center bg-success">Satuan</th>
                              <th scope="col" class="text-center bg-success">Edit</th>
                          </tr>
                      </thead>  
                      <tbody>
                        <?php 
                            $batas = 10;
                            $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                            $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
            
                            $previous = $halaman - 1;
                            $next = $halaman + 1;
                            
                            $data = mysqli_query($koneksi,"select * from tbl_master_komoditas");
                            $jumlah_data = mysqli_num_rows($data);
                            $total_halaman = ceil($jumlah_data / $batas);
            
                            $data_pegawai = mysqli_query($koneksi,"select * from tbl_master_komoditas limit $halaman_awal, $batas");
                            $nomor = $halaman_awal+1;
                            while($d = mysqli_fetch_array($data_pegawai)){
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $d['id']; ?></td>
                            <td class="text-center text-uppercase"><?php echo $d['nama_komoditas']; ?></td>
                            <td class="text-center text-uppercase"><?php echo $d['sektor']; ?></td>
                            <td class="text-center text-uppercase"><?php echo $d['sub_sektor']; ?></td>
                            <td class="text-center text-uppercase"><?php echo $d['satuan']; ?></td>
                            <td><a href="edit_master_komoditas.php?id=<?php echo $d['id'];?>"><i class="fas fa-edit fa-2x"></i></a></td>
                        </tr>
                          <?php               
                          } 
                          ?>
                      </tbody>
                    </table>
                    <nav>
                      <ul class="pagination justify-content-center">
                          <li class="page-item">
                              <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Sebelumnya</a>
                          </li>
                          <?php 
                          for($x=1;$x<=$total_halaman;$x++){
                              ?> 
                              <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                              <?php
                          }
                          ?>				
                          <li class="page-item">
                              <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Sesudahnya</a>
                          </li>
                      </ul>
                  </nav>
                </form>
            </div>
        </div>
    </div>
  </body>
<?php
    include "layout/footer.php";
?>