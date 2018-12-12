<html>
<head>
<title> PAGINA DO USUARIO </title>
<link rel="stylesheet" type="text/css" href="Style/Style.css" />
<meta charset = "UTF-8">
</head>
<style>
body {
    background-image: url("Fotos/1.jpg");
}
</style>

<body>
<form method="POST" action="CadastrandoChute.php">
<br>

<center>
<font size= "5" face="Arial" color= "white">
<b> PAGINA DE APOSTAS DO USUARIO </b><br>
</font>

<img src="Fotos/Bola.png" height="200" width="300"/>

<font size= "4" face="Arial" color= "white">
<?php
SESSION_START();
$login = $_SESSION['login'];

$connect = mysqli_connect("127.0.0.1", "root", "", "chute");

$selectdados = "SELECT rodada3,ativo_rodada3 FROM usuarios WHERE login ='$login'";
$select = mysqli_query($connect, $selectdados);
$verificadados = mysqli_fetch_array($select);
$rodada = $verificadados['rodada3'];
$ativo_rodada = $verificadados['ativo_rodada3'];

if ($ativo_rodada == 0)
{
	echo "A rodada nao esta aberta no momento volte mais tarde.<br>";
	echo "<a href='PaginaUsuario.html'>Voltar </a>";
	exit;
}


if($rodada == 1)
{
	echo "Você já fez o seu palpite por favor volte a pagina de usuario.<br>";
	echo "<a href='PaginaUsuario.html'>Voltar </a>";
	exit;
}

if($ativo_rodada ==1 && $rodada == 0)
{ 
	echo "<br><br><b>Faça sua aposta.</b>";
	for ($i=1; $i<=20; $i++)
	{
	echo "<b>Selecione o ".  $i  ." colocado<br><br>";
	echo "<input type='radio' name=$i value='1'/>Palmeiras";
	echo "<input type='radio' name=$i value='2'/>Flamengo";
	echo "<input type='radio' name=$i value='3'/>São Paulo";
	echo "<input type='radio' name=$i value='4'/>Internacional"; 
	echo "<input type='radio' name=$i value='5'/>Gremio";
	echo "<input type='radio' name=$i value='6'/>Atlético Mineiro";
	echo "<input type='radio' name=$i value='7'/>Cruzeiro";
	echo "<input type='radio' name=$i value='8'/>Botafogo";
	echo "<input type='radio' name=$i value='9'/>Santos";
	echo "<input type='radio' name=$i value='10'/>Bahia<br>";
	echo "<input type='radio' name=$i value='11'/>Corithinas";
	echo "<input type='radio' name=$i value='12'/>Ceará";
	echo "<input type='radio' name=$i value='13'/>Fluminense";
	echo "<input type='radio' name=$i value='14'/>Vasco";
	echo "<input type='radio' name=$i value='15'/>Chapecoense"; 
	echo "<input type='radio' name=$i value='16'/>Vitoria";
	echo "<input type='radio' name=$i value='17'/>Paraná";
	echo "<input type='radio' name=$i value='18'/>Sport Récife";
	echo "<input type='radio' name=$i value='19'/>América-MG";
	echo "<input type='radio' name=$i value='20'/>Fortaleza<br></b>";
	echo "<br><br>";
	}
	echo "<button type='submit' class='botao01'  value='3' name='AdicionarChute'>Adicionar Chute </button>";
}
if ($ativo_rodada == 2)
{
	echo "A rodada esta bloqueada por favor tente mais tarde.<br>";
	echo "<a href='PaginaUsuario.html'>Voltar </a>";
	exit;
}
?>
</font>
</form>
</center>
</body>
</html>