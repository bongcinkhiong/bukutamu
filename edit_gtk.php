<?php 
session_start();
require 'function.php';

$id = $_GET["id"];
$gtk = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editgtk($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data gtk berhasil diedit');
        window.location = 'gtk.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gtk gagal diedit');
            window.location = 'gtk.php';
            </script>
        ";
    }
}

?>
    <h3>Edit GTK</h3>
   <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_gtk" value="<?= $gtk["id_gtk"]; ?>"> 

    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $gtk["nama_lengkap"]; ?>"> <br />

    <label for="job">Job</label>
    <input type="text" name="job" id="job" class="form-control" value="<?= $gtk["job"]; ?>"> <br>

    <label for="roles">Roles</label>
    <select name="roles" id="roles" class="form-control" value="<?= $gtk["roles"]; ?>">
        <option value="<?= $gtk["roles"]; ?>"><?= $gtk["roles"]; ?> </option>
        <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
        <option value="Guru">Guru</option>
    </select> <br>

    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto" class="form-control" value="<?= $gtk["foto"]; ?>">

    <button type="submit" name="kirim">Edit</button>
    </form>
    </div>
</div>