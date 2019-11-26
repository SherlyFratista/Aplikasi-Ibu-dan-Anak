<?php

include "koneksi.php";
require'auth.php';

?>

<!DOCTYPE html>
<html>
     <head>
        <title> Feedback </title>
        <link rel="stylesheet" type="text/css" href="StyleFeedback.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </head>

     <?php
     require'navbar.php';
     ?>
<hr>
<style>
  #warna {
    background-image: linear-gradient(to left,  rgb(100, 149, 237), rgb(255, 255, 255));
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
</style>

<body  id="warna">

        <nav>
        <div  Style ="color : white; font-size: 20px;">
        <h1><b><center  Style ="background-color : rgb(100, 149, 237)"><br>
         Feedback
        <b></h1></center>
        </div>
        </nav>
        <center>   
        <br><br>
        <form action="KirimFeedback.php" method="POST" class="section-one">  
        <main role="main" class="container">
        <div class="jumbotron">
        <b><h5 style ="color : rgb(119, 136, 153);">Berikan Feedback Untuk Kami</h5></b><br>
        <tr>
        <td > Email : <input type="email" name="email" placeholder="Masukan email..." required=""><td><br>
        <td><i><p id=content-s style ="color : rgb(119, 136, 153); font-size:13px; margin-left:109px;">*Masukkan Feedback</i></p>
        <textarea cols="110" rows="10" Style ="padding : 1px;"placeholder="Silahkan isi feedback Anda" required="" name="message"></textarea></td><br>
        <td><input class="btn btn-primary"type="submit" name="submit" value="Submit" onClick="alert('Feedback Anda Sangat Berarti :)')"></td>
        </div>
        </form>
        </main>
        </center>

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
