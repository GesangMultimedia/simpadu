<?php
    include "admin/auth.php";
    include "template/sidebar.php";
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
                <img src="img/logosimpadu.png" alt="logo" style="width: 150px; height: 150px">

                </div>
            </div>
            <hr class="style2">
            <div class="card card-4">
                <div class="card-body">                          
                    <form method="POST" action="data/simpan_master_luas.php" enctype="multipart/form-data" id="usrform">
                    <?php
                        $query = "SELECT * FROM `tbl_jenis_lahan` ORDER BY id DESC LIMIT 1";
                        $result = mysqli_query($koneksi, $query);                                
                        $data = mysqli_fetch_assoc($result);
                    ?>
                        <section class="base">
                            <h2 class="title text-center text-uppercase">form master jenis lahan</h2>
                            <hr class="style2">
                            <div class="row">
                                <div class="col-6">                           
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-4 col-form-label text-dark">No ID</label>
                                        <div class="col-sm-8">
                                            <input type="number" value="<?php echo $data['id']+1; ?>" readonly/>
                                            <input type="hidden" name="id" value="<?php echo $data['id']+1; ?>" readonly/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-4 col-form-label text-dark">Nama Lahan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="text-uppercase" name="nama_lahan" value="" required=""/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="id" class="col-sm-4 col-form-label text-dark">Satuan Luas</label>
                                        <div class="col-sm-8">
                                        <select name="satuan_luas" class="custom-select" required="">
                                            <option disabled selected>Pilih Satuan Luas ...</option>
                                            <option>Hektar</option>
                                            <option>Acre</option>
                                            <option>Ubin</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <button class="btn btn-danger" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        <hr class="style2">
                        <div class="col">
                            <table class="table table-hover table-striped table-bordered datatab" style="width: 75%;">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center bg-success">No ID</th>
                                <th scope="col" class="text-center bg-success">Nama Lahan</th>
                                <th scope="col" class="text-center bg-success">Satuan Luas</th>
                                <th scope="col" class="text-center bg-success">Edit</th>
                            </tr>
                            </thead>  
                            <tbody>
                            <?php 
                                $query = mysqli_query($koneksi,"SELECT * FROM tbl_jenis_lahan ORDER BY id ASC");
                                $no = 1;
                                while ($data = mysqli_fetch_assoc($query)) 
                                {
                            ?>
                                <tr>
                                <td class="text-center"><?php echo $data['id']; ?></td>
                                    <td class="text-center text-uppercase"><?php echo $data['nama_lahan']; ?></td>
                                    <td class="text-center text-uppercase"><?php echo $data['satuan_luas']; ?></td>
                                    <td><a href="edit_master_lahan.php?id=<?php echo $data['id'];?>"><i class="fas fa-edit fa-2x"></i></a></td>
                                </tr>
                                <?php               
                                } 
                                ?>
                                </tbody>
                                <script>
                                $(document).ready(function() {
                                    $('.datatab').DataTable();
                                } );
                                </script>
                            </table>
                        </section>
                    </form>
                </div>
            </div>       
        </div>
    </main>
</body>

<?php
    include "template/footer.php";
?>