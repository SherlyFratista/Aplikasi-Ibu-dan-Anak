<?php
require'koneksi.php';

require'auth.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Artikel Darurat</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
  <?php
require'navbar.php';
?>
<form name=daruratfiltered action="daruratfiltered.php" method=POST>
  <p>
  <select style="float:right; width:200px; margin-right:50px;" class="form-control select2" name=kabkot onChange="daruratfiltered.submit();">
    <option SELECTED disabled>Filter
    <option value="Kota Bandung">Kota Bandung
    <option value="Kabupaten Bandung Barat">Kabupaten Bandung Barat
    <option value="Kabupaten Bandung">Kabupaten Bandung
  </select>
  </p>
<br>
</form>
<div style="margin-left:150px;">
  <?php 
$darurat = query("SELECT * FROM darurat ORDER BY id DESC");
  foreach ($darurat as $duarrr) { 
  ?>
	<div class="card mb-3" style="max-width: 1300px; background-color:aqua;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/darurat/<?= $duarrr['gambar']; ?>" class="card-img" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"> <b> <?= $duarrr['nama_rs']; ?> </b></h5> 
        <p class="card-text"> <?=  $duarrr['alamat']; ?> </p>
        <p class="card-text"> (022) <?=  $duarrr['telepon']; ?> </p>
        <p class="card-text"> <?=  $duarrr['kabkot']; ?> </p>
        <p class="card-text"> <a href="<?=  $duarrr['url']; ?>"> Link Google Maps </a>  </p>
        
    </div>
  </div>
</div>
<?php
}
?>
	</div>
</body>
</html>