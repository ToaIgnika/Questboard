<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output


$mail->setFrom( $_POST['emailAddress'], $_POST['firstname']." ".$_POST['lastname']);
$mail->addAddress('eugene.my88@gmail.com');

$file = '/path/to/file/file.zip';
$mail->isHTML(true);                                  // Set email format to HTML
$file_tmp  = $_FILES['image']['tmp_name'];
$file_name = $_FILES['image']['name'];

move_uploaded_file($file_tmp,"uploads/".$file_name); //The folder where you would like your file to be saved
$mail->addAttachment("uploads/".$file_name);


$mail->Subject = 'Deck suggestion';
$mail->Body    = $_POST['comments'];




if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
