<?php 
// readfile('usuarios.csv');  <- LE O ARQUIVO E ENTRE NA TELA COM ECHO
// $usuarios = file_get_contents('usuarios.csv'); <- LE O ARQUIVO E DA RETURN NOS VALORES	
$usuarios = file('usuarios.csv');
// print_r($usuarios);
$name = readline('Qual nome deseja o registro ?');
$t = false;
foreach ($usuarios as $value) {
	list($id, $nome, $email) = explode(',', trim($value));
	if(strtolower($nome) == strtolower($name)){
		echo "$id -> $email" . PHP_EOL ;
		$t = true;
		break;
	}
}
if(!$t){
	echo 'Usuário não encontrado';
}
?>