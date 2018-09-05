<?php
if(isset($_POST['enviar']))
	echo $_POST['nome'];
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
			// $b = $a == 1 ? $a : 2;
			echo $_GET['id'] ?? ''; // IF TERNÁRIO DO TERNÁRIO
			
		?>
	</h1>
	<form action="" method="post">
		<label>Nome: <input type="text" name="nome" value="" /></label>
		<input type="submit" name="enviar" value="Enviar" />
		<input type="submit" name="excluir" value="Excluir" />
		<button type="submit" value="Submit">Enviar2</button>
	</form>	
	<ul>
		<?php for($i=0; $i < 10; $i++):
				$oi = rand(10, 99);
				$oi2 = rand(10, 99);
				$oi3 = rand(10, 99);
			?>
			<li style='color:#<?php echo "$oi$oi2$oi3"?>;'><?= $i ?></li>
		<?php endfor; ?>
	</ul>	
</body>
</html>