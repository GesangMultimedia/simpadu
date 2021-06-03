
<body>
    <div class="table-responsive">
        <h1 class="text-center text-white">Data Kasus</h1>
        <?php
            include "../database/koneksi2.php";
        ?>
        <br/>
        <table class="table table-hover text-white">
            <thread>
                <tr>
                    <th scope="col">No ID</th>
                    <th scope="col">NAMA PENGGUNA</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">HAPUS AKUN</th>
                </tr>            
            </thread>
            <?php
                $no = 1;
                $result = $db->query("SELECT * FROM `users`");
                while($data = $result->fetch_array(MYSQLI_ASSOC)){
            ?>
            <tbody>
                <tr>
                    <th scope="row" ><?php echo $no++; ?></th>
                    <td ><?php echo $data['username']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td>
                    <button class="btn btn-primary btn-xs">
                    <i class="fas fa-user-edit"></i> Edit
                    </button>
                    <button class="btn btn-primary btn-xs">
                        <i class="fas fa-trash-alt"></i> Hapus
                    </button>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>        
        </table>
    </div>
</body>