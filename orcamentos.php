<?php

require_once("config.php");

$nome_msg = $_POST['nome_msg'];
$email_msg = $_POST['email_msg'];
$plano_msg = $_POST['plano_msg'];
$mensagem_msg = $_POST['mensagem_msg'];

$destinatario = $email;
$assunto = 'Novo Orçamento';
$mensagem = utf8_decode('Nome: ' . $nome_msg . "/r/n" . "/r/n" . 'E-mail: ' . $email_msg . "/r/n" . "/r/n" . 'Plano: ' . $plano_msg . "/r/n" . "/r/n" . 'Mensagem: ' . $mensagem_msg);
$cabecalho = "From: " . $email;

mail($destinatario, $assunto, $mensagem, $cabecalho);

?>

<script>
alert('e-mail enviado com sucesso!!');
</script>

<meta http-equiv="refresh" content="0; url=quote.php">