<?php
$email = $_POST['email'];

$file = fopen("./data/registroEmails.txt", "a+");

fwrite($file, $email."\n");
fclose($file);

header("Location: ../index.php");

$emailRemetente = "nicolasdefreitas@impostoderendanfreitas.000webhostapp.com";
$mensagem = "Nosso ebook está em manutenção devido a alguns erros, assim que estiver pronto lhe enviaremos.";
$assunto = "E-Book O gênio do marketing digital";

$headers  = "From:$emailRemetente \n";
$headers .= "Subject: $mensagem \n";
$headers .= "X-Priority: 3\n";
$headers .= "Return-Path: $emailRemetente\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset= UTF-8\n";

mail($email, $assunto, $mensagem, $headers);

?>
