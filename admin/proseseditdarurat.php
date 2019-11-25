<?php
session_start();
require_once("../koneksi.php");
$id= $_POST['id'];
$nama_rs = $_POST['nama_rs'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$kab = $_POST['kab'];
$url = $_POST['url'];
$gambar = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
move_uploaded_file($file_tmp, '../img/darurat/' . $gambar);
$data = "UPDATE darurat SET nama_rs='$nama_rs',alamat='$alamat',kabkot='$kab',url='$url',gambar='$gambar' WHERE id='$id'";
$simpan = $db->query($data);
if ($simpan) {
  header('location:lihatdarurat.php');
} else {
  echo "gagal pokoknya";
}
