<?php
   require_once("koneksi.php");
   if(isset($_POST['submit'])){
   $email = $_POST['email'];
   $message = $_POST['message'];
   $sql = "SELECT * FROM users WHERE email = '$email'";
   $query = $db->query($sql);
   if(!$email || !$message) {
    echo "<div align='center'>Masih ada data yang kosong! ";
    ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=Feedback.php"> <?php
  } else {
       $data = "INSERT INTO users VALUES (NULL,'$message','$email')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Feedback Sukses, Terima Kasih!</div>";
         ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=Home.php"> <?php
       } else {
         echo "<div align='center'>Feedback Gagal!</div>";
         ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=Feedback.php"> <?php
       }
     }
    }
 ?>