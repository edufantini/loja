<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = false;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "edufantinicod@gmail.com";
$mail->Password = "Easy4Java2MakeGoogle";

$mail->setFrom("edufantinicod@gmail.com", "Edu Fantini");
$mail->addAddress("edufantinicod@gmail.com");
$mail->Subject = "Email de contato da loja";
$mail->msgHTML("<html>De: {$nome}<br/>Email: {$email}<br/>Mensagem: {$mensagem}</html>");
$mail->AltBody = "De: {$nome}\nEmail: {$email}\nMensagem: {$mensagem}";

if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso!";
    header("Location: index.php");
}else{
    $_SESSION["danger"] = "Erro ao enviar mensagem: " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();