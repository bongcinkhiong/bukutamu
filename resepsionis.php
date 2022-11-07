<?php 
session_start();
require 'function.php';

$resepsionis = query("SELECT * FROM resepsionis");

?>
    <style>
        body{
            background: lightblue;
        }
    </style>
<?php require 'sidebar.php'?>
    <h3>Data Resepsionis</h3>
    <a href="tambah_resepsionis.php" class="tambah">Tambah Resepsionis</a>
    <table border=1 >
        <tr>
            <th>No.</th>
            <th>Nama lengkap</th>
            <th>Kelas</th>
            <th>Roles</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($resepsionis as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["kelas"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td>
                    <a href="edit_resepsionis.php?id=<?= $data ["id_resepsionis"]; ?>" class="edit">Edit</a>
                    <a href="hapus_resepsionis.php?id=<?= $data["id_resepsionis"]; ?>" onclick="return confirm('Anda Yakin ingin menghapus data ini?');" class="hapus">hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
    </table>
</div>