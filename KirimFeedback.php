<?php
require_once("../koneksi.php");

$statusFeedback = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $mysqli = ("INSERT INTO users (name,email,message) VALUES ({$id}, '{$name}', '{$email}', '{$message}'");
    $query = $db->query($mysqli);
    
    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($message) && !empty($name)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusFeedback = 'Please enter your valid email.';
            $msgClassk = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = '';
            $htmlContent = '
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Feedback/h4><p>'.$message.'</p>';
            
            // Header tambahan
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
            
            // Send email
            if(mail($toEmail,$htmlContent,$headers)){
                $statusFeedback = 'Pesan Anda sudah terkirim dengan sukses !';
                $msgClass = 'succdiv';
            }else{
                $statusFeedback = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusFeedback = 'Harap mengisi semua field data';
        $msgClass = 'errordiv';
    }
}
?>