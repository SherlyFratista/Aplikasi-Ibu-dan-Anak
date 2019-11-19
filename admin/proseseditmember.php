<?php
require_once("../koneksi.php");
  $id = $_POST['id'];
   $email = $_POST['email'];
   $name = $_POST['name'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   
    $data = "UPDATE users SET email='$email',password='$password',username='$username',name='$name' WHERE id='$id'";
    $simpan = $db->query($data);
    if($simpan) {
      echo "<div align='center'>Update Sukses</div>";
      header('location:lihatmember.php');
    } else {
      echo "<div align='center'>Proses Gagal!</div>";
      header('location:editmember.php');
    }   
?>