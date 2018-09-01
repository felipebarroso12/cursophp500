<?php
// NO PHP A FUNÇÃO NÃO BUSCA FORA DO PRÓPIO SCOPO, PARA ISTO É NECESSÁRIO ADICIONAR O CÓDIGO "global"
// NO PHP UTILIZA define('','') PARA DECLARAR CONSTANTES
// ASPAS DUPLAS "" INTERPRETA VÁRIAVEIS E CÓDIGOS COMO \N, JÁ ASPAS SIMPLES NÃO E POR ISTO ASPAS SIMPLES
// É MAIS ÁGIL JÁ QUE O INTERPRETADOR ENTENDE QUE TEM APENAS TEXTO DENTRO
define ('XLS_PATH', '/home/planilhas');

$xls = 'telefones.';

function duas_vezes(){

	global $xls; 

	echo $xls . PHP_EOL;
	echo XLS_PATH . PHP_EOL;
	echo 'Um' . PHP_EOL;
	echo 'Dois' . PHP_EOL;
}



// echo XLS_PATH . "/{$xls}xls\n";
duas_vezes();
?>	