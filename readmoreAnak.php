<?php
require'koneksi.php';
$isi = query("SELECT * FROM artikel_TumbuhKembangAnak");
?>




<?php foreach ($isi as $anak) { 
?> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="logo" style="width: 50px;">
        </a>
        <div class="d-flex flex-row-reverse bd-highlight">
            <a class="navbar-text" href="#" style="padding: 20px;" data-toggle="moda1" data-target="#moda1Register">Logout</a>
            <a class="navbar-text" href="#" style="padding: 20px;" data-toggle="moda1" data-target="#exampleModa1Center">Feedback</a>
            <a class="navbar-text" href="#" style="padding: 20px;" data-toggle="moda1" data-target="#moda1Register">Bantuan</a>
            <a class="navbar-text" href="#" style="padding: 20px;" data-toggle="moda1" data-target="#exampleModa1Center">Home</a>
        </div>
        </div>
        </nav>

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