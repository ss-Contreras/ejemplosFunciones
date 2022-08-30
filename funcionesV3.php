<?php

function sumaInfinita(...$params){

    $suma = 0;

    foreach ($params as $numero){

        $suma += $numero;
    
    }
    
    echo "la sumatoria es: $suma \n";


}

sumaInfinita(1,2);
sumaInfinita(1,2,3);
sumaInfinita(100,40,2,9,3);

?>