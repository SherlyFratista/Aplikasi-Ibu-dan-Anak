
<!DOCTYPE html>
<html>
<head>
<title>hamil</title>


<link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="#">Kumpulan Informasi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Tumbuh Kembang Anak</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Jangan Panik Yuk</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Logout</a>
  </li>
</ul>



<?php
$id = $_POST['id'];
require'koneksi.php';
$isi = query("SELECT * FROM artikel_ibuhamil where id = '$id' " );
echo"$id" ?>




<?php foreach ($isi as $hamils) { ?>
   

      <img src="img/hamilmuda.jpg" class="card-img" alt="baby" style="width:500px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $hamils['judul']; ?></h5>
        <p class="card-text"><?=  $hamils['isi']; ?></p>
            <?php  } ?>
</body>
</html>