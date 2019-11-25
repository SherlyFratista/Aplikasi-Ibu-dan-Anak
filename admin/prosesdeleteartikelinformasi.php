<?php
$id = $_POST['id'];
require_once("../koneksi.php");
       $data = "DELETE FROM artikel_informasi WHERE id = '$id'";
       $delete = $db->query($data);
       header('location:lihatartikelinformasi.php');
   
?>