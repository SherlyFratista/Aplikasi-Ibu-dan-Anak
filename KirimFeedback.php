<?php
session_start();
require_once("koneksi.php");
  $email = $_POST['email'];
  $message = $_POST['message'];
  $username = $_SESSION['username'];
  $data = "INSERT INTO feedback VALUES (NULL,'$message', '$email','$username',now())";
  $simpan = $db->query($data);
  if ($simpan) {
    echo "<div align='center'>Feedback Sukses, Terima Kasih!</div>";
    ?>
    <META HTTP-EQUIV="refresh" CONTENT="3;URL=Home.php"> <?php
 } else {
  echo "<div align='center'>Feedback Gagal!</div>";
 ?>
    <META HTTP-EQUIV="refresh" CONTENT="3;URL=Feedback.php"> <?php
 }
                                                              ?>