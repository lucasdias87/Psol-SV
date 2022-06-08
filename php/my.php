<?php

$nome = (!empty($_GET['nome'])) ? $_GET['nome'] : false;
$email = (!empty($_GET['email'])) ? $_GET['email'] : false;
$mensagem = (!empty($_GET['ASSUNTO '])) ? $_GET['ASSUNTO '] : false;

if (!empty($_GET['enviar'])) {
	
	$email_destino = 'psolsv@gmail.com';

	$email_assunto = "Mensagem de {$nome}";

	$email_mensagem = 'Mensagem via php' . "<br>";
	$email_mensagem .= 'NOME: ' . $nome . "<br>";
	$email_mensagem .= 'EMAIL: ' . $email . "<br>"; 
	$email_mensagem .= 'ASSUNTO ' . $mensagem . "<br>";
	$email_mensagem .= "<br><br><br>";

	// headers de configuração 
	$email_headers = 'From: "'.$nome.'" <'.$email.'>' . "\r";
	$email_headers .= 'Subject: '.$email_assunto.'' . "\r";

	// função mail que envia para destinatário 
	$envio = mail($email_destino, $email_assunto, $email_mensagem, $email_headers);
}
	if ($envio) {
		echo "ENVIADO";
	}else{

		echo "FALHA AO ENVIAR";
		
			alert("FALHA AO ENVIAR");
		
	}		

?>