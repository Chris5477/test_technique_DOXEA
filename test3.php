<?php

$array = [];

function smallvalues($var){ 
    return $var < 50;
}

function bigvalues($var){
     return $var >= 50;
    }


while(count($array) < 10){
    $nb = rand(1,100);
    array_push($array, $nb);

}

sort($array, SORT_NUMERIC);

$small = array_filter($array, "smallvalues");
$big = array_filter($array, "bigvalues");

if(count($small) === 0){
    print_r("Il n'y a aucune valeur inférieur à 50" . PHP_EOL);
    print_r(($big));
}else if(count($big) === 0 ){
    print_r(($small));
    print_r("Il n'y a aucune valeur supérieur à 50");
}else{
    print_r($small);
    print_r($big);
}


?>