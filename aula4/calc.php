
<?php 
$n1 = $argv[1];
$sinal = $argv[2];
$n2	 = $argv[3];
if( is_numeric($n1) && is_numeric($n2) ){
    // if( $sinal == '+' ){
    //     echo $n1 + $n2	;
    // }else if( $sinal == '-' ){
    //     echo $n1 - $n2	;
    // }else if( $sinal == '*' || $sinal == 'x' ){
    //     echo $n1 * $n2	;
    // }else if( $sinal == '/' ){
    //     if( $n2	 == 0 ){
    //         echo 'Impossível dividir por 0';
    //     }else{
    //         echo $n1 / $n2	;
    //     }
    // }else{
    //     echo 'Operador não foi solicitado corretamente';
    // }
    switch($sinal){
    	case '+':
    		echo $n1 + $n2;
    		break;
    	case '-':
    		echo $n1 - $n2;
    		break;
    	case '*':
    		echo $n1 * $n2;
    		break;
    	case '/':
    		if( $n2	 == 0 ){
            	echo 'Impossível dividir por 0';
       		}else{
            	echo $n1 / $n2;
        	}
    		break;
    	default:
    	echo 'Não é um operador matemático';			
    }
    // echo PHP_EOL;
}else{
    echo 'Você não digitou um número válido';
    // echo PHP_EOL;
}
?>