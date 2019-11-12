<?php

include "koneksi.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        body {

            /* background: url('img/IBU.jpg'); */
        }

        .section-one {
            height: 750px;
            width: 100%;
            background: url('img/IBU.jpg');

        }

        .header {
            margin-left: 13%;
            width: 72%;
            height: 200px;
            background-color: #C2E8CE;
            margin-bottom: 20px;
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
    <div class="section-one">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="#">
                <img src="img/IBU.jpg " alt="logIbuAnak" width="200" height="200">
            </div>
            <ul class="nav justify-content-end ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="Home.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#help">BANTUAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Feedback/Feedback.php">FEEDBACK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LOGOUT</a>
                </li>
            </ul>

        </nav>
        <img src="img/Miyong.jpg" class="rounded mx-auto d-block rounded-circle" style="width: 300px;" alt="logoIbuAnak">
        <h2>Hallo Ibu Annastasia</h2>
        <h2>Umur 27 Tahun</h2>
        <h2>Bandung</h2>

        <div class="header">
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/1.PNG" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/2.PNG" alt="Second slide">
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
        <div class="modal fade" id="help" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <img src="img/IBU.jpg " alt="logoead" width="110" height="40">
                                    </div>
                                    <div class="col">
                                        <p>Fitur tentang perkembangan sang anak fitruajbsdjkabj uahx jhsjwhduhajdbjas bjdwbdsjbadbx jbdjwbdsabb</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <img src="img/IBU.jpg " alt="logoead" width="110" height="40">
                                        </div>
                                        <div class="col">
                                            <p>Fitur tentang perkembangan sang anak</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img src="img/IBU.jpg " alt="logoead" width="110" height="40">
                                    </div>
                                    <div class="col">
                                        <p>Fitur tentang perkembangan sang anak</p>
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