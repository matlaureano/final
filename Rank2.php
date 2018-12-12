<html>
<head>
<title> PAGINA DO USUARIO</title>
<link rel="stylesheet" type="text/css" href="Style/Style1.css" />
<link rel="stylesheet" type="text/css" href="Style/Style.css" />
</head>

<style>
body {
    background-image: url("Fotos/1.jpg");
	
}
</style>

<font size= "5" face="Arial" color= "black"> 
<body>
<center>
<table class="greenTable">
          <thead>
		     <th>RANK</th>
			<th>PONTOS</th>
			<th>RODADA</th>
			<th>USUARIO</th>
			</tr>
           </thead>
<?php
$connect = mysqli_connect("127.0.0.1", "root", "", "chute");

$mostrarrank = "SELECT * FROM pontos WHERE rodada = '2' ORDER BY pontos DESC";
$rank = mysqli_query($connect, $mostrarrank);
$i=0;

while($inserirrank = mysqli_fetch_assoc($rank)){?>
			
			
			<tbody>
			<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $inserirrank['pontos'];?></td>
			<td><?php echo $inserirrank['rodada'];?></td>
			<td><?php echo $inserirrank['login'];?></td>
			</tr>
			</tbody>
				<?php $i++;} ?>
			
</table>
</font>
<br><a href="PaginaUsuario.html" "><Button type="button" class="botao01">Voltar </button></a><br>
</center>
</body>
</html>