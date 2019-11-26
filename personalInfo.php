<?php
require 'koneksi.php';
session_start();
$name = $_SESSION['name'];
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$birthday = $_SESSION['birthday'];
$birthplace = $_SESSION['tempat_lahir'];
$password = $_SESSION['password'];
$photo = $_SESSION['photo'];
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
<style>
    .grad {
        background-image: linear-gradient(to right, rgb(54, 182, 186), rgb(255, 255, 255));
    }
</style>

<body class="grad">

    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- edit form column -->
            <div class="col-md-12 personal-info">
                <h3>Personal info</h3>
                <form class="form-horizontal" action="prosesupdate.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-group">
                    <label class="col-lg-3 control-label">Profile Image:</label>
                    <div class="text-center">
                        <div class="col-lg-8">
                            <?php if ($photo != null) { ?>
                                <img src="img/photo/<?php echo $username; ?>/<?php echo $photo; ?>" class="rounded mx-auto d-block rounded-circle" style="width: 200px;" height="200px;" alt="avatar">
                            <?php } else { ?>
                                <img src="//placehold.it/100" class="rounded mx-auto d-block rounded-circle" style="width: 200px;" height="200px;" alt="avatar">
                            <?php } ?>
                            <h6>Upload a different photo...</h6>
                            <input class="form-control" name="photo" type="file">
                        </div>
                    </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Username:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="username" type="text" value="<?php echo $username; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="email" name="email" value="<?php echo $email; ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Tanggal Lahir:</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="date" name="tgl_lahir" value="<?php echo $birthday; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tempat Lahir:</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="tempat_lahir" value="<?php echo $birthplace; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password:</label>
                            <div class="col-md-8">
                                <input class="form-control" type="password" value="<?php echo $password; ?>" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                                <span></span>
                                <input type="reset" class="btn btn-default" value="Cancel" onclick="location.href='home.php';">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <hr>

</body>

</html>