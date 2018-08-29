<?php
	
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Váriavel tipo string
$mensagem = "Hello World!";

// Váriaveis tipo númerica
$dia = 28;
$mes = 8;
$ano = 2018;

// Váriavel tipo boolean
$estaEnsolarado = true;
$estaChovendo = false;

// Váriavel numeros flutuantes
$dinheiroNaCarteira = 100.25;

// Atribuindo variáveis
$valorSendoTrabalhado = 10;
$valorEmBackup = $valorSendoTrabalhado;

?>
<meta charset="utf-8">
<h1>Minha situação atual</h1>
<p>Mensagem  - <?php echo $mensagem ?></p>
<p>Hoje é dia :
	<?= $dia; ?> / <?= $mes ?> / <?= $ano ?> 	
</p>
<p>Hoje está um dia ensolarado? <?= $estaEnsolarado ?> </p>
<p>Hoje está um dia chuvoso? <?= $estaChovendo ?> </p>
<p>Tenho no total R$<?= $dinheiroNaCarteira ?> na minha carteira</p>