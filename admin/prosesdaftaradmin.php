<?php
   require_once("../koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $email = $_POST['email'];
   $name = $_POST['name'];
   $sql = "SELECT * FROM users WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username $username Sudah Terdaftar! </div>
     ";
     ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=tambahadmin.php"> <?php
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! ";
       ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=tambahadmin.php"> <?php
     } else {
       $data = "INSERT INTO users(id,username,password,email,name,type_user) VALUES (NULL, '$username', '$pass', '$email', '$name', 'admin')";
      
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses</div>";
         ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=lihatadmin.php"> <?php
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
         ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=tambahadmin.php"> <?php
       }
     }
   }
?>