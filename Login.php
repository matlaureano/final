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

<font size= "3" face="Arial" color= "white">

<?php 

  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $entrar = $_POST['entrar'];
  
$connect = mysqli_connect("127.0.0.1", "root", "", "chute");

	/*include('conexão.php');
	mysqli_select_db ($connect, "chute");*/
    
	if (isset($entrar)) 
	{
         $usuario = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";	 
		 $verificalog = mysqli_query($connect, $usuario);
		
		
        
        
		if (mysqli_num_rows($verificalog) <=0)
		{
		  echo "Login ou senha incorretos.";
		   
        }
			else
			{
				 $arraynivel = mysqli_fetch_assoc($verificalog);
				 $guardanivel = $arraynivel['nivel'];
				 $email = $arraynivel['email'];
		
		
				SESSION_START();
				$_SESSION['login'] = $login;
				$_SESSION['senha'] = $senha;
				$_SESSION['nivel'] = $guardanivel;
				$_SESSION['email'] = $email;
				
				
			  header("Location:Redirecionamento.php");
			}
    }
?>
</body>
</html>


