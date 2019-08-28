<?php
// Template Name: Enviar
?>

<?
/** ANTIGO FORMATO 
// Mudar Aqui o e-mail

$email_envio = 'contatoalexgalhardo@gmail.com'; // E-mail receptor
$email_pass = 'galhardoalexBR@159'; // Senha do e-mail

$site_name = 'Galhardo Blog'; // Nome do Site
$site_url = 'http://localhost/wordpress'; // URL do Site

$host_smtp = 'smtp.gmail.com'; // HOST SMTP Ex: smtp.domain.com.br
$host_port = '587'; // Porta do Host

// Variáveis do Formulário

$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Conteúdo do Formulário

$body_content = "De: $nome \n E-mail: $email \n Telefone: $telefone \n Mensagem: $mensagem";

// Não mudar a partir daqui

if ($_POST['leaveblank'] != '' or $_POST['dontchange'] != 'http://') {

  echo "<h2
	style=\"
	font-size: 1em;
	margin-top: 20%;
	text-align: center;
	font-family: 'Helvetica', 'Arial', 'Sans-Serif';
	font-weight: normal;
	color: #1b1b1b;
	\"><center><span>Aconteceu algum erro!</span><p>Você pode tentar denovo ou enviar direto para " . $email_envio . "!</p></center><h2>";
	
	echo "<html style=\"background: #fff;\"></html>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $site_url . "'>";
}

else if (isset($_POST['nome'])){

require ('./PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

$mail->isSMTP();
$mail->Host = $host_smtp;
$mail->SMTPAuth = true;
$mail->Username = $email_envio;
$mail->Password = $email_pass;
$mail->Port = $host_port; 

$mail->From = $email_envio;

$mail->addAddress($email_envio);

$mail->FromName = 'Formulário de Contato';
$mail->AddReplyTo($_POST['email'], $_POST['nome']);

$mail->WordWrap = 70;

$mail->Subject = 'Formulário - ' . $site_name . ' - ' . $_POST['nome'];

$mail->Body = $body_content;

if(!$mail->send()) {
  
  echo "<h2
	style=\"
	font-size: 1.5em;
	margin-top: 20%;
	text-align: center;
	font-family: Inconsolata', 'Helvetica', 'Arial', 'sans-serif';
	font-weight: normal;
	color: #fdc64b;
	\"><center><span>Aconteceu algum erro!</span><p>Você pode tentar denovo ou enviar direto para " . $email_envio . "!</p></center><h2>";
	
	echo "<html style=\"background: #fff;\"></html>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $site_url . "'>";
  
} else {

  echo "<h2
	style=\"
	font-size: 1.5em;
	margin-top: 20%;
	text-align: center;
	font-family: 'Inconsolata', 'Helvetica', 'Arial', 'sans-serif';
	font-weight: normal;
	color: #89bb50;
	\"><center><span>Formulário Enviado</span><p>Em breve eu entro em contato com você. Abraços.</p></center><h2>";
	
	echo "<html style=\"background: #fff;\"></html>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=" . $site_url . "'>";
}
}
**/


/** NOVO FORMATO **/

// Trocar os valores abaixo
$emailenvio = 'contatoalexgalhardo@gmail.com';
$assunto = 'Contato Galhardo Blog';
$url = 'https://alexgalhardo.com';

// Mude até aqui apenas
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$body = "$mensagem\n\n---------------\n\n$email";

if ($_POST['leaveblank'] != '' or $_POST['dontchange'] != 'http://') {

  echo "Não foi possível enviar o e-mail. Tente novamente ou entre em contato com " . $emailenvio;
  echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $url . "'>";

} else if (isset($_POST['email'])) {

require ('./PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->WordWrap = 70;
$mail->addAddress($emailenvio);

$mail->From = $email;
$mail->FromName = $nome;
$mail->AddReplyTo($email, $nome);
$mail->Subject = $assunto;

$mail->Body = $body;

if(!$mail->send()) {
  echo "Não foi possível enviar o e-mail. Tente novamente ou entre em contato com " . $emailenvio;
  echo "<meta HTTP-EQUIV='Refresh' CONTENT='10;URL=" . $url . "'>";
} else {
  echo "E-mail enviado com sucesso!";
  echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=" . $url . "'>";
}

}

?>