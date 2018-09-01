<?php 
//  for(DECLARACAO; COMPARACAO; INCREMENTO){}
// for($i = 0; $i < 10; $i++){
// 	echo $i . PHP_EOL;
// }


//


// $nomes = ['Gandalf', 'Lêmure', 'Saitama', 'Frodo'];
// $nomes[] = 'Hector';
// $nomes[] = 'Cristina';
// for($i = 0; $i < count($nomes); $i++){
// 	echo $nomes[$i] . PHP_EOL;
// }


//

// $data = ['id' => '1', 'nome' => 'Felipe', 'email' => 'email@email.com.br'];
// foreach ($data as $key => $value) {
// 	echo "$key : $value" . PHP_EOL;
// }


//

$meuArray = [[0,'Felipe','email@email.com'],[0,'Felipe2','email@email.com'],[0,'Felipe3','email@email.com']];

for($i = 0; $i < count($meuArray) ; $i++ ){
	// for($i2 = 0; $i2 < 1 ; $i2++ ){
		echo $meuArray[$i][1] . PHP_EOL;
	// }
}
?>
