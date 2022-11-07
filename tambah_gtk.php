<?php 
session_start();
require 'function.php';

if(isset($_POST["kirim"])){
    if(tambahgtk($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data gtk berhasil ditambahkan');
        window.location = 'gtk.php';
    </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data gtk gagal ditambahkan');
            window.location = 'gtk.php';
            </script>
        ";
    }
}

?>

    <h3>Tambah GTK</h3>

   <form action="" method="POST" enctype="multipart/form-data">
    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"> <br />

    <label for="job">Job</label>
    <input type="text" name="job" id="job" class="form-control">  <br>

    <label for="roles">Roles</label>
    <select name="roles" id="roles" class="form-control" cols="30" rows="8">
    <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
        <option value="Guru">Guru</option>
    </select> <br>

    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto" class="form-control" ?>">

    <button type="submit" name="kirim">tambah</button>
    </form>
    </div>
</div>