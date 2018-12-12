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
SESSION_START();


$cont = 0;
$modulo = 0;


$connect = mysqli_connect("127.0.0.1", "root", "", "chute");

/*include('conexão.php');
mysqli_select_db ($connect, "chute");*/

$login = $_SESSION['login'];
$email = $_SESSION['email'];
$rodada = $_POST['AdicionarChute'];
$rodada1 = "rodada$rodada";

$c1 = $_POST['1'];
$c2 = $_POST['2'];
$c3 = $_POST['3'];
$c4 = $_POST['4'];
$c5 = $_POST['5'];
$c6 = $_POST['6'];
$c7 = $_POST['7'];
$c8 = $_POST['8'];
$c9 = $_POST['9'];
$c10 = $_POST['10'];
$c11 = $_POST['11'];
$c12 = $_POST['12'];
$c13 = $_POST['13'];
$c14 = $_POST['14'];
$c15 = $_POST['15'];
$c16 = $_POST['16'];
$c17 = $_POST['17'];
$c18 = $_POST['18'];
$c19 = $_POST['19'];
$c20 = $_POST['20'];


if((!$_POST) OR $c1 == null or $c2 == null or $c3 == null or $c4 == null or $c5 == null or $c6 == null or $c7 == null or $c8 == null or $c9 == null or $c10 == null or
   $c11 == null or $c12 == null or $c13 == null or $c14 == null or $c15 == null or $c16 == null or $c17 == null or $c18 == null or $c19 == null or $c20 == null)
 {
	echo "Você esqueceu de marcar uma posição por favor marque corretamente.<br>";
	echo "<a href='CadastrandoChute.html'>Voltar </a>";
	exit;
 }
 
 if($c1 == $c2 or $c3 or $c4 or $c5 or $c6 or $c7 or $c8 or $c9 or $c10 or $c11 or $c12 or $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	 echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	 echo "<a href='CadastrandoChute.html'>Voltar";
	 exit;
 }
 if ($c2 == $c3 or $c4 or $c5 or $c6 or $c7 or $c8 or $c9 or $c10 or $c11 or $c12 or $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	echo "<a href='CadastrandoChute.html'>Voltar";
	exit;	
 }
 if ($c3 == $c4 or $c5 or $c6 or $c7 or $c8 or $c9 or $c10 or $c11 or $c12 or $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	echo "<a href='CadastrandoChute.html'>Voltar"; 
	exit;
 }
 if($c4 == $c5 or $c6 or $c7 or $c8 or $c9 or $c10 or $c11 or $c12 or $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	echo "<a href='CadastrandoChute.html'>Voltar"; 
	exit;
 }
 if($c5 == $c6 or $c7 or $c8 or $c9 or $c10 or $c11 or $c12 or $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	 echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	 echo "<a href='CadastrandoChute.html'>Voltar";
	 exit;
 }
 if($c6 == $c7 or $c8 or $c9 or $c10 or $c11 or $c12 or $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	echo "<a href='CadastrandoChute.html'>Voltar"; 
	exit;
 }
 if($c7 == $c8 or $c9 or $c10 or $c11 or $c12 or $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	 echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	 echo "<a href='CadastrandoChute.html'>Voltar";
	 exit;
 }
 if($c8 == $c9 or $c10 or $c11 or $c12 or $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	 echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	 echo "<a href='CadastrandoChute.html'>Voltar";
     exit;
 }
  if($c9 == $c10 or $c11 or $c12 or $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	 echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	 echo "<a href='CadastrandoChute.html'>Voltar";
	 exit;
 }
 if($c10 == $c11 or $c12 or $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	echo "<a href='CadastrandoChute.html'>Voltar"; 
	exit;
 }
 if($c11 == $c12 or $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	echo "<a href='CadastrandoChute.html'>Voltar"; 
	exit;
 }
 if($c12 == $c13 or $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	 echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	 echo "<a href='CadastrandoChute.html'>Voltar";
	 exit;
 }
 if($c13 == $c14 or $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	 echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	 echo "<a href='CadastrandoChute.html'>Voltar";
	 exit;
 }
 if($c14 == $c15 or $c16 or $c17 or $c18 or $c19 or $c20)
 {
	 echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	 echo "<a href='CadastrandoChute.html'>Voltar";
	 exit;
 }
 if($c15 == $c16 or $c17 or $c18 or $c19 or $c20)
 {
	 echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	 echo "<a href='CadastrandoChute.html'>Voltar";
 }
 if($c16 == $c17 or $c18 or $c19 or $c20)
 {
	 echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	 echo "<a href='CadastrandoChute.html'>Voltar";
	 exit;
 }
 if($c17 == $c18 or $c19 or $c20)
 {
	 echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	 echo "<a href='CadastrandoChute.html'>Voltar";
	 exit;
 }
 if($c18 == $c19 or $c20)
 {
	echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	echo "<a href='CadastrandoChute.html'>Voltar"; 
	exit;
 }
 if($c19 == $c20)
 {
	echo "Voce repetiu um time em duas posicoes por favor mude e tente novamente.<br>";
	echo "<a href='CadastrandoChute.html'>Voltar"; 
	exit;
 }
 
$arrayusuario = array();
$arrayusuario[0] = $c1;
$arrayusuario[1] = $c2;
$arrayusuario[2] = $c3;
$arrayusuario[3] = $c4;
$arrayusuario[4] = $c5;
$arrayusuario[5] = $c6;
$arrayusuario[6] = $c7;
$arrayusuario[7] = $c8;
$arrayusuario[8] = $c9;
$arrayusuario[9] = $c10;
$arrayusuario[10] = $c11;
$arrayusuario[11] = $c12;
$arrayusuario[12] = $c13;
$arrayusuario[13] = $c14;
$arrayusuario[14] = $c15;
$arrayusuario[15] = $c16;
$arrayusuario[16] = $c17;
$arrayusuario[17] = $c18;
$arrayusuario[18] = $c19;
$arrayusuario[19] = $c20;


 $rod1 = mysqli_query($connect, "SELECT rodada$rodada FROM resultado");
	 while ($resultado = mysqli_fetch_array($rod1))
	 {
	    $arrayresultado[]= $resultado[$rodada1];
     }
   for($i=0;$i<20;$i++)
   {
		if($arrayusuario[$i] == $arrayresultado[$i])
		{
		  $cont++;		 
		}
   }
   
	$rodada1 = sqrt(pow($arrayresultado[0] - $arrayusuario[0], 2));
	$rodada2 = sqrt(pow($arrayresultado[1] - $arrayusuario[1], 2)); 
	$rodada3 = sqrt(pow($arrayresultado[2] - $arrayusuario[2], 2));
	$rodada4 = sqrt(pow($arrayresultado[3] - $arrayusuario[3], 2)); 
	$rodada5 = sqrt(pow($arrayresultado[4] - $arrayusuario[4], 2));
	$rodada6 = sqrt(pow($arrayresultado[5] - $arrayusuario[5], 2)); 
	$rodada7 = sqrt(pow($arrayresultado[6] - $arrayusuario[6], 2));
	$rodada8 = sqrt(pow($arrayresultado[7] - $arrayusuario[7], 2)); 
	$rodada9 = sqrt(pow($arrayresultado[8] - $arrayusuario[8], 2));
	$rodada10 = sqrt(pow($arrayresultado[9] - $arrayusuario[9], 2)); 
    $rodada11 = sqrt(pow($arrayresultado[10] - $arrayusuario[10], 2));
	$rodada12 = sqrt(pow($arrayresultado[11] - $arrayusuario[11], 2)); 
	$rodada13 = sqrt(pow($arrayresultado[12] - $arrayusuario[12], 2));
	$rodada14 = sqrt(pow($arrayresultado[13] - $arrayusuario[13], 2)); 
	$rodada15 = sqrt(pow($arrayresultado[14] - $arrayusuario[14], 2));
	$rodada16 = sqrt(pow($arrayresultado[15] - $arrayusuario[15], 2)); 
	$rodada17 = sqrt(pow($arrayresultado[16] - $arrayusuario[16], 2));
	$rodada18 = sqrt(pow($arrayresultado[17] - $arrayusuario[17], 2)); 
	$rodada19 = sqrt(pow($arrayresultado[18] - $arrayusuario[18], 2));
	$rodada20 = sqrt(pow($arrayresultado[19] - $arrayusuario[19], 2)); 	
 
   
   $modulo = $rodada1 + $rodada2 + $rodada3 + $rodada4 + $rodada5 + $rodada6 + $rodada7 + $rodada8 + $rodada9 +
             $rodada10 + $rodada11 + $rodada12 + $rodada13 + $rodada14 + $rodada15 + $rodada16 + $rodada17 + 
			 $rodada18 + $rodada19 + $rodada20;
   
   
	if ($rodada == "4")
	{
		$cont = $cont * 2;
		$modulo = $modulo / 2;
		
	}

	$final = "UPDATE pontos
			 SET pontos = '$cont', pontos_mod = '$modulo'
             WHERE login = '$login'";

	mysqli_query($connect, $final);
	
	
?>