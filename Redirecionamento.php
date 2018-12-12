<html>
<head>
<title> SISTEMA DE LOGIN </title>
<meta charset = "UTF-8">
</head>

<style>
body {
    background-image: url("Fotos/1.jpg");
}
</style>

<body>
<font size= "5" face="Arial" color= "white">
<center> SISTEMA DE LOGIN </center><br>
</font>

<center><img src="Fotos/Bola.png" height="200" width="300"/></center>
<center>
<font size= "4" face="Arial" color= "white">

<?php 
SESSION_START();

$connect = mysqli_connect("127.0.0.1", "root", "", "chute");

/*include('conexão.php');
mysqli_select_db ($connect, "chute");*/

$nick = $_SESSION['login'];
$nivel = $_SESSION['nivel'];	
	
	if($nick && $nivel == '2')
	{
      echo "<br><h>Bem-Vindo, $nick <br>
	        Você sera redirecionado a pagina de ADM.<h>";
			header("location: PaginaADM.html");

    }
	
	if ($nick && $nivel == '1')
	{
      echo "<br><h>Bem-Vindo, $nick <br>
	        Você sera redirecionado a pagina de usuário.<h>";
			header("location: PaginaUsuario.html");
 
    }
	
	
	else
	{
		echo "Você não tem permissão para acessar esse conteudo logue ou cadastre-se caso não tenha uma conta.";
	}

?>
</font>
</center>
</body>
</html>
