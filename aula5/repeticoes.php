<?php 
$meuArray = [
	[1,'Felipe','email@email.com'],
	[2,'Felipe2','email@email.com'],
	[3,'Felipe3','email@email.com']
];
// echo "ID\t\tNOME\t\tEMAIL" . PHP_EOL;
// $length = count($meuArray);
// $zlength = count($meuArray[$i]);
// for($i = 0; $i < count($meuArray) ; $i++ ){
// 	for($i2 = 0; $i2 < count($meuArray[$i]) ; $i2++ ){
// 		echo $meuArray[$i][$i2] ."\t\t";
// 	}
// 	echo PHP_EOL;
// }

//

echo "ID\t\tNOME\t\tEMAIL" . PHP_EOL;
foreach ($meuArray as $value) {
	foreach ($value as $value) {
		echo  $value . "\t\t";
	}
	echo PHP_EOL;
}
?>