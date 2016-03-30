<html>
	<head>
		<title>conexao</title>
	</head>
	<body>
		<?php
			$a = @mysql_pconnect('localhost','root','');
			if($a){
  
			mysql_select_db("sistema",$a);

	}
		?>  
	</body>
</html>