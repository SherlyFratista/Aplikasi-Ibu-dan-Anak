<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $email = $_POST['email'];
   $name = $_POST['name'];
   $tgl_lahir = $_POST['tgl_lahir'];
   $tempat_lahir = $_POST['tempat_lahir'];
   $sql = "SELECT * FROM users WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username $username Sudah Terdaftar! </div>
     ";
     ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=login.php"> <?php
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! ";
       ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=daftar.php"> <?php
     } else {
       $data =  "INSERT INTO users(id,username,password,email,name,type_user, tgl_lahir,tempat_lahir) VALUES (NULL, '$username', '$pass', '$email', '$name', 'member', '$tgl_lahir', '$tempat_lahir')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses</div>";
         ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=login.php"> <?php
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
         ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=daftar.php"> <?php
       }
     }
   }

   
?>