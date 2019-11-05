<?php
$DBhost = "localhost";
$DBuser = "root";
$DBname = "Ibu_hamil";
$DBpass = "";

$conn = mysqli_connect($DBhost, $DBuser, $DBpass, $DBname);

if(!$conn) {
  die("Connection failed " .mysqli_connect_error());
} 
?>



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
<form action="feedback.php" 
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
  <img src="img/gizi.png" class="card-img" alt="gizi">
  <div class="card-img-overlay">
    <h1 class="card-title" style="color: black"><strong>Kumpulan Informasi Kehamilan</strong></h1>
    
  </div>
</div>
</center>
 
 <br>
 <br>

 <div class="card mb-3" style="max-width: 1300px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/hamilmuda.jpg" class="card-img" alt="baby">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Informasi Kesehatan Hamil Muda</h5>
        <p class="card-text">Makanan sehat untuk ibu hamil harus mengandung berbagai macam nutrisi untuk mendukung kehamilan. Selain itu makanan bisa mengatasi berbagai macam gangguan penyakit yang disebabkan karena kekurangan nutrisi tertentu seperti asam folat, kalsium, zat besi, magnesium, vitamin B6, omega 3 dan protein. Semua makanan yang mengandung zat ini sangat penting untuk kesehatan ibu hamil dan calon bayi yang akan dilahirkan.</p>
        <button type="button" onclick="location.href='readmoreArticle1.php'" class="btn btn-outline-primary">Read More</button>
      </div>
    </div>
  </div>
</div>

 <br>

 <div class="card mb-3" style="max-width: 1300px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/yoga.jpg" class="card-img" alt="kids">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">olah Raga Ibu Hamil</h5>
        <p class="card-text"></p>
        <button type="button" href = "#" class="btn btn-outline-primary">Read More</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>