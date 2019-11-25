<?php
session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$sql = "SELECT * FROM users WHERE username = '$username'";
$query = $db->query($sql);
$hasil = $query->fetch_assoc();
if ($query->num_rows == 0) {
    echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
} else {
    if ($pass <> $hasil['password']) {
        echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
    } else {
        $_SESSION['id'] = $hasil['id'];
        $_SESSION['username'] = $hasil['username'];
        $_SESSION['name'] = $hasil['name'];
        $_SESSION['email'] = $hasil['email'];
        $_SESSION['birthday'] = $hasil['tgl_lahir'];
        $_SESSION['tempat_lahir'] = $hasil['tempat_lahir'];
        $_SESSION['password'] = $hasil['password'];
        $_SESSION['type_user'] = $hasil['type_user'];
        if ($hasil['type_user'] == 'admin') {
            header('location:admin/lihatadmin.php');
        } else if ($hasil['type_user'] == 'member') {
            header('location:Home.php');
        }
    }
}
?>