<?php

$nome = (!empty($_POST['nome'])) ? $_POST['nome'] : false;
$email = (!empty($_POST['email'])) ? $_POST['email'] : false;
$mensagem = (!empty($_POST['ASSUNTO '])) ? $_POST['ASSUNTO '] : false;

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
		$mgm = "E-MAIL ENVIADO COM SUCESSO!";
		echo " <meta http-equiv='refresh' content='10;URL=index.html'>";
		alert("E-MAIL ENVIADO COM SUCESSO!");
	}else{

		echo "FALHA AO ENVIAR";
		
			alert("FALHA AO ENVIAR");
		
	}		

?>