<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$dia = isset($_POST['dia']) ? $_POST['dia'] : '';
$mes = isset($_POST['mes']) ? $_POST['mes'] : '';
$ano = isset($_POST['ano']) ? $_POST['ano'] : '';
?>
<style>
	form div{
		display: block;
	}
</style>
<form action="helloPost.php" method="post">
	<div>
		<label>Nome</label><input type="text" name="nome">
	</div>
	<div>		
		<label>Dia</label><input type="numer" name="dia">
	</div>
	<div>		
		<label>Mês</label><input type="numer" name="mes">
	</div>
	<div>
		<label>Ano</label><input type="numer" name="ano">
	</div>
	<div>
		<button type="submit">Enviar</button>
	</div>
</form>

<?= $nome ?>
<br />
<?= $dia ?>
<br />
<?= $mes ?>
<br />
<?= $ano ?>