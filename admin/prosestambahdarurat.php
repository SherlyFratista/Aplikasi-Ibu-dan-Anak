<?php
session_start();
require_once("../koneksi.php");
$nama_rs = $_POST['nama_rs'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$kab = $_POST['kab'];
$url = $_POST['url'];
$gambar = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
move_uploaded_file($file_tmp, '../img/darurat/' . $gambar);
$data = "INSERT INTO darurat(id,nama_rs,alamat,telepon,kabkot,url,gambar) VALUES (NULL, '$nama_rs', '$alamat','$telepon', '$kab' , '$url','$gambar')";
$simpan = $db->query($data);
if ($simpan) {
  echo "<div align='center'>Posting Sukses</div>";
  ?>
  <META HTTP-EQUIV="refresh" CONTENT="3;URL=../darurat.php"> <?php
                                                                } else {
                                                                  echo "$nama_rs <br> $alamat <br> $telepon <br> $kab <br> $url <br> $gambar";
                                                                  ?>
 <?php
                                                                                }
                                                                                ?>