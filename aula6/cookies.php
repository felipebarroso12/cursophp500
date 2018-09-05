<?php

session_start();
if(!isset($_SESSION['status']))
	$_SESSION['status'] = 1;
else
	echo "<h1>Usuário {$_SESSION['status']} logado!</h1>"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Site em php</title>
</head>
<style>
	body{
		font-family: helvetica;
		font-weight: 600;
	}
	li{
		list-style-type: none;	
	}
</style>
<body>
	<h1>
		Site em PHP!
		<?php
			// COMO USAR IF TERNÁRIO 
			// $a = 1;
			// $b = $a == 1 ? $a : 2;S
			echo $_GET['id'] ?? ''; // IF TERNÁRIO DO TERNÁRIO
			
		?>
	</h1>
	<form action="" method="post">
		<label>E-mail: <input type="text" name="email" value="" /></label>
		<label>Senha: <input type="password" name="senha" value="" /></label>
		<input type="submit" name="enviar" value="Enviar" />
	</form>	
	<ul>
	</ul>	
</body>
</html>