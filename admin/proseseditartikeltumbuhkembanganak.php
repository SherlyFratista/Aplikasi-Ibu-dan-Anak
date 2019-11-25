<?php
session_start();
require_once("../koneksi.php");
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$username = $_SESSION['username'];
$gambar = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
move_uploaded_file($file_tmp, '../img/artikel_TumbuhKembangAnak/' . $gambar);
$data = "UPDATE artikel_TumbuhKembangAnak SET judul='$judul',isi='$isi',tgl_post= now(),pemosting='$username',gambar='$gambar' WHERE id='$id'";
$simpan = $db->query($data);
if ($simpan) {
  header('location:lihatartikelTumbuhKembangAnak.php');
} else {
  echo "$id <br> $judul <br> $isi <br> $username <br> $gambar <br>";
}
