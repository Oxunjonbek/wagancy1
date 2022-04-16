<?php

require_once "phpmailer/PHPMailerAutoload.php";

if (isset($_POST['send'])) {
$name = $_POST['name'];
$from = $_POST['email'];
$tel = $_POST['tel'];
$Message = $_POST['messeg'];

//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "hi@wdagency.org";
$mail->FromName = $name;

//To address and name
$mail->addAddress("modern.azam@gmail.com", "Recepient Name");
  $mail->addAddress("godlikedesigner@gmail.com", "Recepient Name");
$mail->addAddress("modern.azam@gmail.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo($from, "Reply");

//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject =  'wdagency';
  if($tel) {
    $mail->Body =  "Name: {$name}  <br> Message: {$Message} <br> Phone: {$tel}";;
  } else {
    $mail->Body = "Name: {$name}  <br> Message: {$Message} <br> Mail: {$from}";
  }
$mail->CharSet = 'UTF-8';
  
if($mail->send()) 
{
   header("Location:thanks.php");
}

}
?>