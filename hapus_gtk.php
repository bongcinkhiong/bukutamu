<?php
require 'function.php';

$id = $_GET["id"];

if(hapusgtk($id) > 0){
    echo"
    <script type='text/javascript'>
        alert('Data gtk berhasil dihapus')
        window.location ='gtk.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Data gtk gagal dihapus')
        window.location ='gtk.php';
    </script>
    ";
}
?>