<?php
session_start();
require_once("koneksi.php");
if (isset($_POST)) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $password = $_POST['password'];
    $photo = $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];
    $newPhoto = $username."-".$photo;

    $path = "img/photo/".$username."/";

    if(!is_dir($path)){
        mkdir($path, 0777, true);
        $path = "img/photo/".$username."/";
    }

    $paths = $path.$newPhoto;

//     query untuk update data dari table post berdasarkan id post
    if (move_uploaded_file($tmp, $paths)) {
        $data = "UPDATE users SET username = '$username', name = '$name', tgl_lahir = '$tgl_lahir', tempat_lahir = '$tempat_lahir', password = '$password', photo = '$newPhoto' where id = '$id'";
        $result = $db->query($data);
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $query = $db->query($sql);
        $hasil = $query->fetch_assoc();

        $_SESSION['id'] = $hasil['id'];
        $_SESSION['username'] = $hasil['username'];
        $_SESSION['name'] = $hasil['name'];
        $_SESSION['email'] = $hasil['email'];
        $_SESSION['birthday'] = $hasil['tgl_lahir'];
        $_SESSION['tempat_lahir'] = $hasil['tempat_lahir'];
        $_SESSION['password'] = $hasil['password'];
        $_SESSION['type_user'] = $hasil['type_user'];
        $_SESSION['photo'] = $hasil['photo'];

        header('location:Home.php');
    }
}
?>