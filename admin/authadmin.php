<?php
session_start();
if(!isset($_SESSION['name']))      // if there is no valid session
{
    header("Location:../login.php");
}
if ($_SESSION['type_user'] == 'member'){
    header('location:../index.php');   
}
?>