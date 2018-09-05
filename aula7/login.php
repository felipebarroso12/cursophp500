<?php
$config = parse_ini_file('config.ini');
session_start();
$isTrue = false;
if(isset($_POST['enviar'])){
	if($_POST['email'] == $config['email'] 
	&& $_POST['senha'] == $config['senha']){
		echo 'Login efetuado com sucesso';
		$_SESSION['sessao'] = ['email' => $_POST['email']];
		header('Location: index.php');
		exit;
	}else{
		header('Location: login.php?erro=Usuário ou senha inválidos');
		exit;
		// $isTrue = true;
	}
}

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
	</h1>
		<?php 
		if(isset($_GET['erro'])){
		 echo "<p style='color:red'>Usuário ou senha inválido </p>"; }	
		?>
	<form action="" method="post">
		<label>E-mail: <input type="text" name="email" value="" /></label>
		<label>Senha: <input type="password" name="senha" value="" /></label>
		<input type="submit" name="enviar" value="Enviar" />
	</form>	
	<ul>
	</ul>	
</body>
</html>