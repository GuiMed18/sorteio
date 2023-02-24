<?php

$sorteados = [];

for($cont = 0; $cont <= 5; $cont++){
	$numeros = rand(1,60);
	if(in_array($numeros,$sorteados)){
		continue;
	}else{
	$sorteados[] = $numeros;
	}
}

echo "Os números sorteados foram: ";
foreach($sorteados as $sorteio){
 echo $sorteio." ";
}