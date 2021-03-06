<?php

include "koneksi.php";
session_start();
$username = $_SESSION['username'];
$name = $_SESSION['name'];
$birthday = $_SESSION['birthday'];
$biday = new DateTime($birthday);
$today = new DateTime();
$diff = $today->diff($biday);
$birthplace = $_SESSION['tempat_lahir'];
$photo = $_SESSION['photo'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <style>
        /* body {

            background-image: url('img/momy.jpg');
           
        }

        .section-one {
            height: 750px;
            width: 100%;
            background: url('img/momy.jpg');

        } */

        .one {
            background-image: url('img/momy.jpg');
            ackground-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

        }

        .header {
            width: 100%;
            height: 200px;
            margin-bottom: 20px;
        }

        .container {
            background-color: #6fd9d6;
        }

        .navbar-default {
            background: rgba(0, 0, 0, 0);

        }

        .header-paragraph {
            padding-top: 50px;
        }

        .tinggi {
            height: 250px;
            align margin-right: auto;
        }

        .profile {
            border-radius: ;
        }

        h2 {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
    <title>Home Page Ibu dan Anak</title>
</head>

<body>
<div class="one">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="#">
            <img src="img/IBU.png " alt="logIbuAnak" width="200" height="200">
        </div>
        <ul class="nav justify-content-end ml-auto">
            <li class="nav-item">
                <a class="nav-link active" href="Home.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#help">BANTUAN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="Feedback.php">FEEDBACK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">LOGOUT</a>
            </li>
        </ul>

    </nav>
    <div class="col-sm-12">
    <a href="personalInfo.php"><img src="img/photo/<?php echo $username; ?>/<?php echo $photo; ?>" class="rounded mx-auto d-block rounded-circle"
                                        style="width: 300px;" height="300px;" alt="logoIbuAnak"></a>
        <h2><?php echo $name; ?></h2>
        <h2><?php echo "Umur " . $diff->y . " Tahun"; ?></h2>
        <h2><?php echo $birthplace; ?></h2>
    </div>

    <div class="header">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-4 ">
                    <a href="infoAnak.php"><img src="img/abc.jpg" alt="logoABC" style="width:100%; height: 63%;"></a>
                </div>
                <div class="col-sm-4">
                    <a href="Informasi.php"><img src="img/book.jpg" alt="logoBook" style="width: 100%; height: 63%;"></a>
                </div>
                <div class="col-sm-4">
                    <a href="Darurat.php"><img src="img/darurat.jpg" alt="logoDarurat"
                                                style="width: 100%; height: 63%;"></a>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>
    <div class="card-footer text-muted">
        <center>
            © 2019 All Rights Reserved by Ibu & Anak
        </center>
    </div>
    <!-- Modal 1 -->
    <div class="modal fade" id="help" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bantuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <img src="img/abc.jpg" alt="logoead" width="110px" height="110px">
                                </div>
                                <div class="col">
                                    <h6>Tumbuh Kembang Anak</h6>
                                    <p>Fitur Tumbuh Kembang Anak, memberikan informasi mengenai pentingnya menjaga gizi
                                        kepada anak saat masa pertumbuhan</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img src="img/book.jpg" alt="logoead" width="110px" height="110px">
                                    </div>
                                    <div class="col">
                                        <h6>Kumpulan Informasi</h6>
                                        <p>Fitur Kumpulan Informasi, merupakan kumpulan dari informasi-informasi yang
                                            tentunya sangat membantu sang ibu mengatasi permasalahan pada anak maupun
                                            kandungan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <img src="img/darurat.jpg" alt="logoead" width="110px" height="110px">
                                        </div>
                                        <div class="col">
                                            <h6>Darurat</h6>
                                            <p>Panik? Cari Rumah Sakit terdekat? Gunakan fitur Darurat yang memberikan
                                                lokasi RS terdekat anda</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Mengerti</button>
                        </div>
                    </div>
                </div>
            </div>

</body>

</html>