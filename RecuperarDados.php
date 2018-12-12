<html>
<head>
<title> SISTEMA DE CADASTRO </title>
<meta charset = "UTF-8">
</head>

<style>
body {
    background-image: url("Fotos/1.jpg");
}
</style>

<body>
<font size= "5" face="Arial" color= "white">
<center> SISTEMA DE CADASTRO </center><br>
</font>
<center><img src = "Fotos/bola.png" height="200" width="300"/></center>
<br>
<font size= "3" face="Arial" color= "white">

<?php 

$connect = mysqli_connect("127.0.0.1", "root", "", "chute");

/*include('conexão.php');
mysqli_select_db ($connect, "chute");*/


$email = $_POST['email'];


// Variável que junta os valores acima e monta o corpo do email
$Dados = "SELECT * FROM usuarios WHERE email= '$email'";
$inserirdados = mysqli_query($connect, $Dados);
$arraydados = mysqli_fetch_assoc($inserirdados);

$login= $arraydados['login'];
$senha= $arraydados['senha'];
  


$Mensagem = "Login = ".$login."\n..Senha = ".$senha."\n..";

$Vai = "E-mail: $email\n\nMensagem: $Mensagem\n";

require_once("C:/xampp/htdocs/Projeto Final/mail/phpmailer/class.phpmailer.php");

define('GUSER', 'tiodobrunogay@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', 'tiodobrunogay');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) 
{ 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 465;  		// A porta 465- 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

 if (smtpmailer($email, 'tiodobrunogay@gmail.com', 'Recuperacao dos dados', 'Recuperacao de dados', $Vai)) {

	echo "Enviado com sucesso<br>";
	echo "<a href='index.html'>Voltar </a>";

}

?>

</font>
</body>
</html>
