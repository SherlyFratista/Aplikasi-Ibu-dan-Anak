<?php
require'koneksi.php';
$isi = query("SELECT * FROM artikel_TumbuhKembangAnak");
?>




<?php foreach ($isi as $anak) { 
?>
<div class="card mb-3" style="max-width: 1300px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/kenali-nutrisi-otak-yang-mendukung-kehebatan-anak_1166_shutterstock_568555759__1568268610_52695.jpg" class="card-img" alt="baby">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title"><?= $anak['judul']; ?></h2>
        <p class="card-text"><?=  $anak['isi']; ?></p>
            <?php  }
            ?>