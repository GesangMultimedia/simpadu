<?php
    include "auth.php";
    include "sidebar.php";
    include "../data/config.php";
?>
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
                    <section class="base">
                        <h2 class="title text-center text-uppercase">form hapus akun</h2>
                        <hr class="style2">
                        <table class="table table-hover table-striped table-bordered datatab" style="width: 75%;">
                            <thread>
                                <tr>
                                    <th scope="col">No ID</th>
                                    <th scope="col">NAMA PENGGUNA</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">HAPUS / EDIT AKUN</th>
                                </tr>            
                            </thread>
                            <?php 
                                $query = mysqli_query($koneksi,"SELECT * FROM users");
                                $no = 1;
                                while ($data = mysqli_fetch_assoc($query)) 
                                {
                            ?>
                            <tbody>
                                <tr>
                                    <th scope="row" ><?php echo $no++; ?></th>
                                    <td ><?php echo $data['username']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['name']; ?></td>
                                    <td><a href="edit_user.php?id=<?php echo $data['id'];?>"><i class="fas fa-user-edit fa-2x"></i></a>
                                    <a href="delete_user.php?id=<?php echo $data['id'];?>"><i class="fas fa-user-times fa-2x"></i></a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>        
                        </table>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    include "footer.php";
?>