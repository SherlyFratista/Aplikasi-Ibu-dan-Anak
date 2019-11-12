<?php
$id = $_POST['id'];
require_once("../koneksi.php");

  
       $data = "DELETE FROM users WHERE id = '$id'";
       $delete = $db->query($data);
       if($delete) {
         echo "<div align='center'>Delete Sukses</div>";
         header('location:lihatadmin.php');
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
         header('location:lihatadmin.php');
       }
     
   
?>