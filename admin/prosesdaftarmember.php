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
     ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=tambahmember.php"> <?php
   } else {
    $data = "INSERT INTO users(id,username,password,email,name,type_user) VALUES (NULL, '$username', '$pass', '$email', '$name', 'member')";
       $simpan = $db->query($data); 
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses</div>";
         ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=lihatmember.php"> <?php
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
         ?> <META HTTP-EQUIV="refresh" CONTENT="3;URL=tambahmember.php"> <?php
       }
     
   }
?>