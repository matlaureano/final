<html>
<head>
<title> PAGINA DO USUÁRIO</title>
<link rel="stylesheet" type="text/css" href="Style/Style.css" />
</head>

<style>
body {
    background-image: url("Fotos/1.jpg");
}
</style>

<body>
<center>

<font size= "5" face="Arial" color= "white">
<b> PAGINA DO ADMINISTRADOR </b><br>
</font>
<img src="Fotos/Bola.png" height="200" width="300"/>
<br><br>
<font size= "3" face="Arial" color= "white">
<?php
$opcao = $_GET['bloquear'];
$rodada = $_GET['enviar'];

$connect = mysqli_connect("127.0.0.1", "root", "", "chute");

if($opcao == 1)
{

 $mudar = "UPDATE usuarios
		   SET ativo_rodada$rodada = '$rodada'";
 $ligou = mysqli_query($connect, $mudar);

 if($ligou)
 {
 echo "Rodada foi aberta com sucesso<br>";
 echo "<a href='PaginaADM.html'>Voltar </a>";
 exit;
 }
 else
 {
	 echo "Deu erro.<br>";
	 echo "<a href='PaginaADM.html'>Voltar </a>";
 }
}

if($opcao == 2 && $rodada == 1)
{
 $mudar = "UPDATE usuarios
		   SET ativo_rodada$rodada = '$opcao'";
           mysqli_query($connect, $mudar);
	
 $rod1 ="SELECT email FROM usuarios";
 $rod2 = mysqli_query($connect, $rod1);
	 while ($resultado = mysqli_fetch_array($rod2))
	 {
	    $arrayresultado[]= $resultado['email'];
     }
	 
	 $pontos = mysqli_num_rows($rod2);
	 
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
		if(!$mail->Send()) 
		{
			$error = 'Mail error: '.$mail->ErrorInfo; 
			return false;
		} else 
		{
			$error = 'Mensagem enviada!';
			return true;
		}
    }
	
	 
	 for ($i=0; $i<$pontos; $i++)
	 {
		 $email = $arrayresultado[$i];
		 
		 $Mensagem = "Rank por Pontos = http://localhost/Projeto%20Final/Rank1.php \n..Rank por modulo = http://localhost/Projeto%20Final/RankModulo1.php \n..";

		 $Vai = "E-mail: $email\n \nMensagem: $Mensagem\n";

	 
// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

	  if (smtpmailer($email, 'tiodobrunogay@gmail.com', 'Rank da rodada', 'Rank', $Vai)) 
	 {
       echo "Email: $email<br>";
	 }
	}
	echo "Enviado com sucesso<br>";
	echo "<a href='PaginaADM.html'>Voltar </a>";
}

if($opcao == 2 && $rodada == 2)
{
 $mudar = "UPDATE usuarios
		   SET ativo_rodada$rodada = '$opcao'";
           mysqli_query($connect, $mudar);
	
 $rod1 ="SELECT email FROM usuarios";
 $rod2 = mysqli_query($connect, $rod1);
	 while ($resultado = mysqli_fetch_array($rod2))
	 {
	    $arrayresultado[]= $resultado['email'];
     }
	 
	 $pontos = mysqli_num_rows($rod2);
	 
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
		if(!$mail->Send()) 
		{
			$error = 'Mail error: '.$mail->ErrorInfo; 
			return false;
		} else 
		{
			$error = 'Mensagem enviada!';
			return true;
		}
    }
	
	 
	 for ($i=0; $i<$pontos; $i++)
	 {
		 $email = $arrayresultado[$i];
		 
		 $Mensagem = "Rank por Pontos = http://localhost/Projeto%20Final/Rank2.php \n..Rank por modulo = http://localhost/Projeto%20Final/RankModulo2.php \n..";

		 $Vai = "E-mail: $email\n \nMensagem: $Mensagem\n";

	 
// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

	 if (smtpmailer($email, 'tiodobrunogay@gmail.com', 'Rank da rodada', 'Rank', $Vai)) 
	 {
       echo "Email: $email<br>";
	 }
	}
	echo "Enviado com sucesso<br>";
	echo "<a href='PaginaADM.html'>Voltar </a>";
}

if($opcao == 2 && $rodada == 3)
{
 $mudar = "UPDATE usuarios
		   SET ativo_rodada$rodada = '$opcao'";
           mysqli_query($connect, $mudar);
	
 $rod1 ="SELECT email FROM usuarios";
 $rod2 = mysqli_query($connect, $rod1);
	 while ($resultado = mysqli_fetch_array($rod2))
	 {
	    $arrayresultado[]= $resultado['email'];
     }
	 
	 $pontos = mysqli_num_rows($rod2);
	 
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
		if(!$mail->Send()) 
		{
			$error = 'Mail error: '.$mail->ErrorInfo; 
			return false;
		} else 
		{
			$error = 'Mensagem enviada!';
			return true;
		}
    }
	
	 
	 for ($i=0; $i<$pontos; $i++)
	 {
		 $email = $arrayresultado[$i];
		 
		 $Mensagem = "Rank por Pontos = http://localhost/Projeto%20Final/Rank3.php \n..Rank por modulo = http://localhost/Projeto%20Final/RankModulo3.php \n..";

		 $Vai = "E-mail: $email\n \nMensagem: $Mensagem\n";

	 
// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

	  if (smtpmailer($email, 'tiodobrunogay@gmail.com', 'Rank da rodada', 'Rank', $Vai)) 
	 {
       echo "Email: $email<br>";
	 }
	}
	echo "Enviado com sucesso<br>";
	echo "<a href='PaginaADM.html'>Voltar </a>";
}

if($opcao == 2 && $rodada == 4)
{
 $mudar = "UPDATE usuarios
		   SET ativo_rodada$rodada = '$opcao'";
           mysqli_query($connect, $mudar);
	
 $rod1 ="SELECT email FROM usuarios";
 $rod2 = mysqli_query($connect, $rod1);
	 while ($resultado = mysqli_fetch_array($rod2))
	 {
	    $arrayresultado[]= $resultado['email'];
     }
	 
	 $pontos = mysqli_num_rows($rod2);
	 
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
		if(!$mail->Send()) 
		{
			$error = 'Mail error: '.$mail->ErrorInfo; 
			return false;
		} else 
		{
			$error = 'Mensagem enviada!';
			return true;
		}
    }
	
	 
	 for ($i=0; $i<$pontos; $i++)
	 {
		 $email = $arrayresultado[$i];
		 
		 $Mensagem = "Rank por Pontos = http://localhost/Projeto%20Final/Rank4.php \n..Rank por modulo = http://localhost/Projeto%20Final/RankModulo4.php \n..";

		 $Vai = "E-mail: $email\n \nMensagem: $Mensagem\n";

	 
// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

	 if (smtpmailer($email, 'tiodobrunogay@gmail.com', 'Rank da rodada', 'Rank', $Vai)) 
	 {
       echo "Email: $email<br>";
	 }
	}
	echo "<br><br><b>Enviado com sucesso<br><br>";
	echo "<a href='PaginaADM.html'>Voltar </b></a>";
}


?>
</font>
</center>
</body>
</html>