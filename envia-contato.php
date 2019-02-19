<?php
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

require_once("PHPMailerAutoload.php");
$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "edicarlosx2@gmail.com";
$mail->Password = '@748596@';

$mail->setFrom("edi_csilva@hotmail.com", "Alura Curso PHP e mySql");

$mail->addAddress("edicarlosx2@gmail.com");

$mail->subject = "Email de contato da loja.";

$mail->msgHTML("<html>de: {$nome}<br>email: {$email}<br>mensagem: {$mensagem}</html>");

$mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if($mail->send()) {
    $_SESSION['success'] = 'Mensagem enviada com sucesso.';
    header("location: index.php");
} else {
    $_SESSION['danger'] = "Erro ao envair mensagem " . $mail->ErrorInfo;
    header("location: contato.php");
}
die();
