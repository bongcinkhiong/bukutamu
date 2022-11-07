<?php 
session_start();
require 'function.php';

$id = $_GET["id"];
$resepsionis = query("SELECT * FROM resepsionis WHERE id_resepsionis = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editData($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data resepsionis berhasil diedit');
        window.location = 'resepsionis.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data resepsionis gagal diedit');
            window.location = 'resepsionis.php';
            </script>
        ";
    }
}

?>
    <h3>Edit Resepsionis</h3>
   <form action="" method="POST">
    <input type="hidden" name="id_resepsionis" value="<?= $resepsionis["id_resepsionis"]; ?>"> 

    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $resepsionis["nama_lengkap"]; ?>"> <br />

    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $resepsionis["kelas"]; ?>"> <br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" value="<?= $resepsionis["password"]; ?>"> <br>

    <label for="roles">Roles</label>
    <select name="roles" id="roles" class="form-control" value="<?= $resepsionis["roles"]; ?>">
        <option value="<?= $resepsionis["roles"]; ?>"><?= $resepsionis["roles"]; ?> </option>
        <option value="Admin">Admin</option>
        <option value="Customer">Customer</option>
    </select>
    <button type="submit" name="kirim">Edit</button>
    </form>
    </div>
</div>