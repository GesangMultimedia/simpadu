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
                        <h2 class="title text-center text-uppercase">form pencarian berdasarkan tahun</h2>
                        <hr class="style2">
                        <!-- menampung nilai id produk yang akan di edit -->
                        <div class="row">
                            <div class="col-6">
                            <div class="form-group row">
                                <label for="lname" class="col-sm-4 col-form-label text-dark">Komoditas</label>
                                <div class="col-sm-8">
                                <select name="namadesa" class="custom-select" required="">
                                    <option disabled selected>Pilih Komoditas...</option>
                                    <option>Tanaman Pangan</option>
                                    <option>Tanaman Buah</option>
                                    <option>Tanaman Sayur</option>
                                    <option>Tanaman Biofarmaka</option>
                                    <option>Perkebunan</option>
                                    <option>Peternakan</option>
                                    <option>Perikanan</option>
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
                                <label for="lname" class="col-sm-4 col-form-label text-dark">Pilih Kecamatan</label>
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
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label for="lname" class="col-sm-6 col-form-label text-dark">Tahun</label>
                                <div class="col-sm-6">
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
                                <label for="lname" class="col-sm-6 col-form-label text-dark">Tahun</label>
                                <div class="col-sm-6">
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
                </form>
            </div>
        </div>
    </div>
  </body>
<?php
    include "layout/footer.php";
?>