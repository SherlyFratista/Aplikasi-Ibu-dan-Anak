<?php
require'koneksi.php';

$artikel_ibuhamil = query("SELECT * FROM artikel_ibuhamil");?>



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
  <img src="" class="card-img" alt="gizi">
  <div class="card-img-overlay">
   
    
  </div>
</div>
</center>
 
 <br>
 <br>
<?php foreach ($artikel_ibuhamil as $hamils) { 
  $kalimat = $hamils['isi'];
  $substring = $kalimat = substr($kalimat,0,100);
  ?>
 <div class="card mb-3" style="max-width: 1300px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/hamilmuda.jpg" class="card-img" alt="baby">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $hamils['judul']; ?></h5>
        <p class="card-text"><?= substr( $hamils['isi'],0,100); ?>...</p>
        <form action='readmore.php?id="<?php echo $hamils['id']; ?>"' method="post">
        <input type="hidden" name="id" value="<?php echo $hamils['id']; ?>">
        <button type="submit" aria-label="Close"> Read More
        </button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</body>
</html>