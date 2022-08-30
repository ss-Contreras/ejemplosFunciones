<?php

function get_pokemon(){

    $numero_Random = rand(1,5);

    switch($numero_Random){
        case 1:
            echo "pikachu\n";
            break;

        case 2:
            echo "Charmander\n";
            break;

        case 3:
            echo "Mewtwo\n";
            break;
        
        default:
        echo "No hay mas pokemones\n";
    }
}

get_pokemon();
get_pokemon();
get_pokemon();


echo "\n";
for($i=0; $i<20; $i++){
    get_pokemon();
} 
?>
