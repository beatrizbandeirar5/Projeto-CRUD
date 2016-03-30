<html>
	<head>
	    <meta charset="UTF-8">
		<title> Cadastros </title>
	</head>
	<body>		
		</br>
			<h1>Cadastro Funcionario</h1> 
		<form  action="acao.php?cadastrar=true"  method="post">
		     <fieldset>
				<input name="nome_funcionario" placeholder="Nome do Funcionario" required/>
				<br/>
                 <button id="button" type="submit" name="botao">Adicionar</button>   
		     </fieldset>
			 </br>
			 </form>
			 <h1>Cadastro Cliente</h1> 
		<form  action="acao.php?cadastrar1=true"  method="post">
			 <fieldset>
				<input name="nome_cliente" placeholder="Nome do Cliente" required/>
				<br/>
				<input name="email_cliente" placeholder="Email do Cliente" required/>
				</br>
				<input name="telefone_cliente" placeholder="Telefone_cliente" required/>
				</br>
                 <button id="button" type="submit" name="botao">Adicionar</button>   
				 
				 </fieldset>
		</form>
				 
				 </br>
				 <h1>Cadastro Franquia</h1> 
		<form  action="acao.php?cadastrar2=true"  method="post">
			 <fieldset>
				<input name="nome_franquia" placeholder="Nome da Franquia" required/>
				<br/>
				<input name="cnpj_franquia" placeholder="CNPJ Franquia" required/>
				</br>
                 <button id="button" type="submit" name="botao">Adicionar</button>   
				 
				 </fieldset>
		</form>
	</body>
</html>
