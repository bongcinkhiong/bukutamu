<?php 
session_start();
require 'function.php';

$gtk = query("SELECT * FROM gtk");

?>
    <style>
        body{
            background: grey;
        }
    </style>
<?php require 'sidebar.php'?>
    <h3>Data GTK</h3>
    <a href="tambah_gtk.php" class="tambah">Tambah GTK</a>
    <table border=1 >
        <tr>
            <th>No.</th>
            <th>Nama lengkap</th>
            <th>Job</th>
            <th>Roles</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($gtk as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["job"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td><img src="foto/<?= $data["foto"]; ?>" alt="" width="80px"></td>
                <td>
                    <a href="edit_gtk.php?id=<?= $data ["id_gtk"]; ?>" class="edit">Edit</a>
                    <a href="hapus_gtk.php?id=<?= $data["id_gtk"]; ?>" onclick="return confirm('Anda Yakin ingin menghapus data ini?');" class="hapus">hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
    </table>
</div>