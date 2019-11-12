<?php

include "koneksi.php";
session_start();

?>

<!DOCTYPE html>
<html>
     <head>
        <script>
        alert ("Feedback Anda Sangat Berharga Bagi Kami");
        </script>

        <title> Feedback </title>
        <link rel="stylesheet" type="text/css" href="StyleFeedback.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </head>

<body">
      <div class="section-one">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="#" style="background-color:white;">
                <img src="img/IBU.jpg " alt="FeedbackIbuAnak" width="50" height="50">
            </div>
            <ul class="nav justify-content-end ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#help">BANTUAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" action="Feedback/Feedback.php">FEEDBACK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LOGOUT</a>
                </li>
            </ul>
        </nav>
    
  <nav>
  <div  Style ="color : rgb(112, 128, 145); font-size: 20px;">
  <h1><b><center  Style ="background-color : rgb(100, 149, 237)"><br>
  Feedback
  <b></h1></center>
  </div>
  </nav>
  
  <div  Style ="color : rgb(112, 128, 145); font-size: 20px;"

  <br><br><br>

  <center>
       <form action="config.php" method="GET" class="section-one">  
            <?php if(!empty($statusFeedback)){ 
            ?>
            <p class="statusMsg 
            <?php echo !empty($msgClass)?$msgClass:''; 
            ?>">
            <?php echo $statusMsg; 
            ?></p>
            <?php } 
            ?>  
        <main role="main" class="container">
        <div class="jumbotron">
        <b><h5>Berikan Feedback Untuk Kami</h5></b><br>
        <tr>
        <td>Name
        <input type="text" name="name" placeholder="Nama Anda" required=""></td>
        <td>Email
        <input type="email" name="email" placeholder="email@example.com" required=""><td><br>
        <td><i><p id=content-s style ="color : black; font-size:13px;">*Masukkan Feedback</i></p>
        <textarea cols="80" rows="10" Style ="padding : 1px;"placeholder="Silahkan isi Komentar Anda" required="" name="message"></textarea></td><br>
        <input type="submit" name="submit" value="Submit">
        <div class="clear"> </div>
        </div>
        </form>
        </main>

       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
       
           <footer class="footer mt-auto py-3">
           <div class="container">
           <center>
           <span class="text-muted" style="font-size:13px;"> © 2019 All Rights Reserved by Ibu & Anak </span>
           </div>
           <center>
           </footer>
           <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
           <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
       </html>
