<?php

require 'koneksi.php';

function query($query){
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambahData($data){
    global $conn;
    $nama_lengkap =htmlspecialchars ($data["nama_lengkap"]);
    $kelas =htmlspecialchars ($data["kelas"]);
    $password =htmlspecialchars ($data["pasword"]);
    $roles =htmlspecialchars ($data["roles"]);
    $query = "INSERT INTO resepsionis VALUES(NULL, '$nama_lengkap','$kelas' ,'$password', '$roles')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
} 

function hapusData($id){

    global $conn;    
    mysqli_query($conn, "DELETE FROM resepsionis WHERE id_resepsionis = '$id'");
    return mysqli_affected_rows($conn);
}

function editData($data) {
    global $conn;

    $id =htmlspecialchars ($data["id_resepsionis"]);
    $nama_lengkap =htmlspecialchars ($data["nama_lengkap"]);
    $kelas =htmlspecialchars ($data["kelas"]);
    $password =htmlspecialchars ($data["password"]);
    $roles =htmlspecialchars ($data["roles"]);

    $query = "UPDATE resepsionis SET
    nama_lengkap = '$nama_lengkap',
    kelas = '$kelas',
    password = '$password',
    roles = '$roles' WHERE id_resepsionis = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function tambahgtk($data){
    global $conn;

    $id = htmlspecialchars ($data["id_gtk"]);
    $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
    $job = htmlspecialchars ($data["job"]);
    $roles = htmlspecialchars ($data["roles"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $query = "INSERT INTO gtk VALUES(NULL, '$nama_lengkap','$job' ,'$roles','$foto')";
    move_uploaded_file($files, "foto/".$foto);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusgtk($id){

    global $conn;    
    mysqli_query($conn, "DELETE FROM gtk WHERE id_gtk = '$id'");
    return mysqli_affected_rows($conn);
}

function editgtk($data) {
    global $conn;

    $id =htmlspecialchars ($data["id_gtk"]);
    $nama_lengkap =htmlspecialchars ($data["nama_lengkap"]);
    $job =htmlspecialchars ($data["job"]);
    $roles =htmlspecialchars ($data["roles"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];

if(empty($foto)){
    $query = "UPDATE gtk SET
    nama_lengkap = '$nama_lengkap',
    job = '$job',
    roles = '$roles' WHERE id_gtk = '$id'
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}else{
    $query = "UPDATE gtk SET
    nama_lengkap = '$nama_lengkap',
    job = '$job',
    roles = '$roles',
    foto ='$foto' WHERE id_gtk = '$id'";
    move_uploaded_file($files, "foto/".$foto);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    }

}
?>