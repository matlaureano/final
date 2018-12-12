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
<center><b> SISTEMA DE CADASTRO  </b></center><br>
</font>
<center><img src = "Fotos/bola.png" height="200" width="300"/></center>
<br>
<font size= "3" face="Arial" color= "white">

<?php 

$connect = mysqli_connect("127.0.0.1", "root", "", "chute");

/*include('conexão.php');
mysqli_select_db ($connect, "chute");*/

$nome =  $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];


  if ($nome == null or $login == null or $email == null or $senha == null) 
  {
   echo "<h>Preencha os campos vazios por gentileza.<h><br>";
   echo "<a href ='TelaCadastro.html'>Voltar </a> ";
   die();
  }

 $selectdados = "SELECT login FROM usuarios WHERE login = '$login' OR email = '$email'";
 $select = mysqli_query($connect, $selectdados);
 $inserirdados = mysqli_num_rows($select);

 if ($inserirdados >= 1)
 {
	 echo "Dados já utilizados por outra conta por favor insira outro login ou e-mail.<br>";
	 echo "<a href ='TelaCadastro.html'>Voltar </a> ";
 }
 
 if ($inserirdados == 0)
 {
	$cadastro = "INSERT INTO usuarios (nome, login, email, senha, nivel, data_cadastro) 
						 VALUES ('$nome', '$login', '$email', '$senha', '1', NOW())";
								
			$InserirCadastro = mysqli_query($connect, $cadastro);

			if($InserirCadastro)
			{
			 echo "<h> Cadastro realizado com sucesso.<br><h>";
			  echo "<a href ='index.html'>Logar </a> ";
								  
			}
			else
			{
			echo "<h> O cadastro não foi realizado tente novamente.<br><h>";
		    echo "<a href ='TelaCadastro.html'>Voltar </a> ";		
			
		    } 
 }
?>

</font>
</body>
</html>
