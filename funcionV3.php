
<?php

function sumaNum($num1, $num2){
    echo "La suma de $num1 + $num2 es de: " . $num1 + $num2 . "\n";
}

$numeros = [1,2];
$numero2 = [3,4];
$numero3 = [5,6];


sumaNum(...$numeros);
sumaNum(...$numero2);
sumaNum(...$numero3);

?>