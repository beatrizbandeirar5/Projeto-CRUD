<html>
	<head>
		<meta charset="UTF-8">
		<title> Beatsus Cursos/Usuarios </title>
	</head>
	<body>
	<style>
	h3  {
   font: 11px 'Open Sans', Helvetica, Arial, sans-serif;
   font-size:20px;
   margin:22px 50px;
   
   }
	
	img{
	width: 50px;
	height: 35px;
	}
    a img { 
    border: none;
	}
	table{
		border-color: #ccc;
		background-color: #fff;
	}
	body {
    font: 14px "Questrial",sans-serif;
    color: #191919;
	line-height: 1;
    position: absolute;
    top: 0; bottom: 0; left: 0; right: 0;
    height: 100%;
    }
    body:before {
    content: "";
    position: absolute;
    background: url("back.jpg");
    background-size: cover;
    z-index: -1; 
    height: 20%; 
	width: 20%;
    transform: scale(5);
    transform-origin: top left;
    filter: blur(2px);
    }
	</style>
	<center>
		<h3> Lista de Usuarios</h3>
	<?php
		include_once "conexao.php";
$sql = 'select * from usuario';
$result = mysql_query($sql,$b);
?>

	<table border="1">
	<tr>
		<td> ID </td>
		<td> NOME </td>
		<td> LOGIN </td>
		<td> SENHA </td>
		<td> EMAIL</td>
		<td> SEXO </td>
		<td> EXCLUIR </td>
	</tr>
	<?php 
	while ($linha = mysql_fetch_array($result)){ ?>
	<tr>
		<td> <?php  echo $linha['id']; ?> </td>
		<td> <?php  echo $linha['nome']; ?> </td>
		<td> <?php  echo $linha['login']; ?> </td>
		<td> <?php  echo $linha['senha']; ?> </td>
		<td> <?php  echo $linha['email']; ?> </td>
		<td> <?php  echo $linha['sexo']; ?> </td>
		<td> <?php  echo "<a href=acaousuario.php?deletar=".$linha['id']."><img src='delete.png'/></a>"; ?> </td>
	</tr>
	<?php 
	}
	?>
	</table>
	</center>
</body>

</html>