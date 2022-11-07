<?php 
session_start();
require 'function.php';

if(isset($_POST["kirim"])){
    if(tambahData($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data resepsionis berhasil ditambahkan');
        window.location = 'resepsionis.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data resepsionis gagal ditambahkan');
            window.location = 'resepsionis.php';
            </script>
        ";
    }
}

?>

    <h3>Tambah Resepsionis</h3>

   <form action="" method="POST" enctype="multipart/form-data">
    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"> <br />

    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" id="kelas" class="form-control">  <br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control"> <br>

    <label for="roles">Roles</label>
    <select name="roles" id="roles" class="form-control" cols="30" rows="8"></textarea>
        <option value="Admin">Admin</option>
        <option value="Customer">Customer</option>
    </select>
    <button type="submit" name="kirim">tambah</button>
    </form>
    </div>
</div>