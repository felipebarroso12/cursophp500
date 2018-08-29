<?php
$nome = isset($_GET['nome']) ? $_GET['nome'] : '';
?>
<form action="helloGet.php">
	<label>
		<input type="text" name="nome" placeholder="Ex: Felipe">
	</label>
	<button type="submit" value="enviar">Enviar</button>	
</form>
<p>
	Olá, <strong><?= $nome; ?></strong>.<br />
	Seja muito bem vindo ao nosso sitema
</p>