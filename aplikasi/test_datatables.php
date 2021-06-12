<?php
  //include("layout/header.php");
  //include "data/config.php";
?>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="assets/js/jquery.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>
<body>
<div class="container-fluid"><br/><br/><br/><br/><br/>
    <div class="row">
        <div class="col">
            <table class="table table-hover table-striped table-bordered datatab" style="width: 75%;">
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
                $host = "localhost"; 
                $user = "root";
                $pass = "";
                $nama_db = "simpadu"; //nama database
                $koneksi = mysqli_connect($host,$user,$pass,$nama_db);
                $query = mysqli_query($koneksi,"SELECT * FROM tbl_master_komoditas ORDER BY id ASC");
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) 
                {
            ?>
                <tr>
                    <td class="text-center"><?php echo $data['id']; ?></td>
                    <td class="text-center text-uppercase"><?php echo $data['nama_komoditas']; ?></td>
                    <td class="text-center text-uppercase"><?php echo $data['sektor']; ?></td>
                    <td class="text-center text-uppercase"><?php echo $data['sub_sektor']; ?></td>
                    <td class="text-center text-uppercase"><?php echo $data['satuan']; ?></td>
                    <td><a href="edit_master_komoditas.php?id=<?php echo $data['id'];?>"><i class="fas fa-edit fa-2x"></i></a></td>
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
        </div>
    
    </div>   
                
  </div><br/><br/><br/><br/> 
</body>
  <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/ext"
<?php
    //include "layout/footer.php";
?>