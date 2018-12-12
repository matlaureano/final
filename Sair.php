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
<br>
<center>
<font size= "5" face="Arial" color= "white">
<b> PAGINA INICIAL DO USUARIO </b><br>
</font>
<img src="Fotos/Bola.png" height="200" width="300"/>
<br><br>

<font size= "3" face="Arial" color= "white">
<?php
SESSION_START();

SESSION_DESTROY();

echo "<b>Você saiu com sucesso.<br><br>
Caso queira Logar novamente  <a href='index.html'>Logar </b></a>";

?>
</font>
</center>
</font>
</body>
</html>