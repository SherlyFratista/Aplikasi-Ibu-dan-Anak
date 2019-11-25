<?php
$id = $_POST['id'];
require_once("../koneksi.php");

  
       $data = "DELETE FROM darurat WHERE id = '$id'";
       $delete = $db->query($data);
         header('location:lihatdarurat.php');
      
     
   
?>