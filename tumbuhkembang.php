<?php
require'koneksi.php';
require'auth.php';
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

<?php
require'navbar.php';
?>
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
      <img src="img/artikel_tumbuhkembanganak/<?= $anak['gambar']; ?>" class="card-img" alt="baby">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> <b> <?= $anak['judul']; ?> </b></h5> 
        <p class="card-text"> <?= substr( $anak['isi'],0,300); ?>... </p>
        <button type="button"  onclick="location.href='readmore_tumbuhkembanganak.php?id=<?= $anak['id']; ?>'" class="btn btn-outline-primary">Read More</button>
      </div>
    </div>
  </div>
</div>

<?php
}
?>

</body>
</html>