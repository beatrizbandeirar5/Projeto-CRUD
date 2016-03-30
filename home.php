<html>
	<head>
		<meta charset="UTF-8">
		<title> Relação de Cadastros</title>
	</head>

<center>
		<h3> Lista de Cadastros</h3>
	<?php
		include_once "conexao.php";
$sql = 'select * from funcionario';
$result = mysql_query($sql,$a);
?>
	<?php
		include_once "conexao.php";
$sql = 'select * from cliente';
$result = mysql_query($sql,$a);
?>
	<?php
		include_once "conexao.php";
$sql = 'select * from franquia';
$result = mysql_query($sql,$a);
?>

	<table border="1">
	<tr>
		<td> NOME DO CLIENTE </td>
		<td> EMAIL DO CLIENTE </td>
		<td> TELEFONE DO CLIENTE</td>
		<td> NOME DO FUNCIONÁRIO </td>
		<td> NOME DA FRANQUIA</td>
		<td> CNPJ FRANQUIA  </td>
		
	</tr>
	<?php 
	while ($linha = mysql_fetch_array($result)){ ?>
	<tr>
		<td> <?php  echo $linha['nome_cliente']; ?> </td>
		<td> <?php  echo $linha['email_cliente']; ?> </td>
		<td> <?php  echo $linha['telefone_cliente']; ?> </td>
		<td> <?php  echo $linha['nome_funcionario']; ?> </td>
		<td> <?php  echo $linha['nome_franquia']; ?> </td>
		<td> <?php  echo $linha['cnpj_franquia']; ?> </td>
		<td> <?php  echo "<a href=acao.php?deletar=".$linha['id']."><img src='delete.png'/></a>"; ?> </td>
	</tr>
	<?php 
	}
	?>
	</table>
	</center>
</body>

</html>