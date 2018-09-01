<?php 
function gandalf_o_branco($p1, $p3){
	$p = $p1 . $p3;
	return "You shall not pass $p!"  . PHP_EOL;
} 
$p3 = 'Bal';
$p1 = 'rog';
// $frodo = gandalf_o_branco('Bal', 'rog');
echo gandalf_o_branco($p3, $p1);


//


$name = readline('Qual seu nome? ' );

function firstLetter($name){
	if(strtoupper($name[0]) == 'A'){
		echo 'Não escrevo nomes com A' . PHP_EOL;
	}else{
		echo $name . PHP_EOL;
	}
}
firstLetter($name);

?>