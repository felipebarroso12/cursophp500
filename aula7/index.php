<?php
session_start();
if(!isset($_SESSION['sessao'])){
	header('Location: login.php');
	exit;
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
	<h1>Site em PHP!</h1>
	<h2>Área restrita</h2>	
	<?php echo 'bem vindo ' . $_SESSION['sessao']['email']; ?>
</body>
</html>