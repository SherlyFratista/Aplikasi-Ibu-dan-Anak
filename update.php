<?php
 include("koneksi.php");

 if (isset($_POST['simpan']) {
     $username = $_POST['username'];
     $pass = $_POST['password'];
     $email = $_POST['email'];
     $name = $_POST['name'];
     $sql = "SELECT * FROM users WHERE username = '$username'";
     $query = "UPDATE "
 })