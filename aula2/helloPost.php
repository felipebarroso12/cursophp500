<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$dia = isset($_POST['dia']) ? $_POST['dia'] : '';
$mes = isset($_POST['mes']) ? $_POST['mes'] : '';
$ano = isset($_POST['ano']) ? $_POST['ano'] : '';
?>
<form action="helloPost.php" method="post">
	<label>Nome</label><input type="text" name="nome">
	<label>Dia</label><input type="numer" name="dia">
	<label>Mês</label><input type="numer" name="mes">
	<label>Ano</label><input type="numer" name="ano">
	<button type="submit">Enviar</button>
</form>

<?= $nome ?>
<br />
<?= $dia ?>
<br />
<?= $mes ?>
<br />
<?= $ano ?>