<?php
error_reporting(E_ALL);
require("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
$mail->SMTPDebug  = 2; 
$mail->From = "fandu139@gmail.com"; //email pengirim
$mail->FromName = "Fandu"; // nama pengirim
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure= "ssl"; // ini jika menggunakan SSL tapi bisa juga menggunakan TLS
$mail->Port = 465; // ini port google..... kalau untuk untad nanti sesuaikan saja
$mail->SMTPAuth = true;
$mail->Username = "fandu139@gmail.com"; // user email
$mail->Password = "input your password"; // password email
$mail->AddAddress("fandupratama@gmail.com", "Fandu"); // email akan di kirim
$mail->AddReplyTo("fandu139@gmail.com", "Fandu"); // email pengirim
$mail->WordWrap = 50; // set word wrap

$mail->IsHTML(true); // set email format to HTML
$mail->Subject = 'test'; // judulnya
$mail->Body = 'test'; // isi pesannya

if($mail->Send()) {echo "Send mail successfully";}
else {echo "Send mail fail";} 
?>
