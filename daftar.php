<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    .grad {
        background-image: linear-gradient(to right, rgb(54, 182, 186), rgb(255, 255, 255));
    }
</style>

<body class="grad">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <center><img src="img/IBU.png" style="width: 100%; height: 80%; padding-top: 15%; padding-left: 10%;"></center>
                                <br>
                                <p>
                                    <marquee>"Mempermudah dalam segala kondisi, dimapun dan kapanpun."</marquee>
                                </p>
                                <p>
                                    <marquee style="text-align: center;">"Informasi up-to-date, relevan dan terpercaya menurut pakar kesehatan."</marquee>
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-5">Login</h1>
                                    </div>
                                    <form class="user" action="prosesdaftar.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" placeholder="Username" required>

                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>

                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" placeholder="Email Address" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-user" placeholder="Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="date" name="tgl_lahir" class="form-control form-control-user" placeholder="Tanggal Lahir" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="tempat_lahir" class="form-control form-control-user" placeholder="Tempat Lahir" required>
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Register with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

</body>

</html>