<?php
   $hostname  = "sql12.freemysqlhosting.net";
   $username  = "sql12310023";
   $password  = "XTTnPXlHu7";
   $dbname  = "sql12310023";
   $db = new mysqli($hostname, $username, $password, $dbname);
   
   function query ($query){
      global $db;
      $result = mysqli_query($db,$query);
      $rows = [];
      while ( $row = mysqli_fetch_assoc($result)){
          $rows [] =$row;
      }
      return $rows;
      }
?>