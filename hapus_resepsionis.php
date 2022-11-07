<?php
require 'function.php';

$id = $_GET["id"];

if(hapusData($id) > 0){
    echo"
    <script type='text/javascript'>
        alert('Data resepsionis berhasil dihapus')
        window.location ='resepsionis.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Data resepsionis gagal dihapus')
        window.location ='resepsionis.php';
    </script>
    ";
}
?>