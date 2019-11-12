<?php
$id = $_POST['id'];
require'koneksi.php';
$isi = query("SELECT * FROM artikel_ibuhamil where id = '$id' " );
echo"$id" ?>




<?php foreach ($isi as $hamils) { ?>
   <?=$hamils['isi'];?>
<div class="card mb-3" style="max-width: 1300px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/hamilmuda.jpg" class="card-img" alt="baby">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $hamils['judul']; ?></h5>
        <p class="card-text"><?=  $hamils['isi']; ?></p>
            <?php  } ?>