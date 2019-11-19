<style type="text/css">
    .imgArticle {
      width: 50%;
      margin-top: 60px;
    }
    .LabelHeader1 {
      color: #FF5733;
      font-size: 24px;
      margin-left: 100px;
    }
    .ContainerArticle {
      text-align: left;
      width: 1200px;
      margin-left: 100px;
      margin-top: 55px;
    }
    .LabelBy{
      color: #B6B6B6;
    }
    .LabelHeader2 {
      color: #464646;
      font-size: 36px;
    }
    .LabelHeader3 {
      color: #707070;
      font-size: 28px;
    }
  </style>

<?php
require'koneksi.php';
$isi = query("SELECT * FROM artikel_TumbuhKembangAnak");
?>




<?php foreach ($isi as $anak) { 
?>
<div class="card mb-3" style="max-width: 1300px;">
  <div class="row no-gutters">
    <div class="col-md-4" style="margin-left: 200px">
      <center>
      <img src="img/kenali-nutrisi-otak-yang-mendukung-kehebatan-anak_1166_shutterstock_568555759__1568268610_52695.jpg" class="card-img" alt="baby">
    </center>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title"><?= $anak['judul']; ?></h2>
        <p class="card-text"><?=  $anak['isi']; ?></p>
            <?php  }
            ?>