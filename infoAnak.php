<?php
require'koneksi.php';

$artikel_TumbuhKembangAnak = query("SELECT * FROM artikel_TumbuhKembangAnak");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>

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
  <center>
  <div class="card bg-dark text-white">
  <img src="img/breakfast.jpg" class="card-img" alt="breakfast">
  <div class="card-img-overlay">
    <h1 class="card-title" style="color: black">Tumbuh Kembang Anak</h1>
    
  </div>
</div>
</center>
	
	<br>
	<br>

  <?php foreach ($artikel_TumbuhKembangAnak as $anak) { 
  ?>

	<div class="card mb-3" style="max-width: 1300px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/baby.jpg" class="card-img" alt="baby">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> <?= $anak['judul']; ?> </h5>
        <p class="card-text"> <?= $anak['isi_clickbait']; ?> </p>
        <button type="button"  onclick="location.href='readmore.php'" class="btn btn-outline-primary">Read More</button>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<?php
}
?>

</body>
</html>