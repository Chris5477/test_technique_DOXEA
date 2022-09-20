<?php
    $initNb = rand(1,10);
    $copyInitNb = $initNb;
    $nbRomain = "";

    while($copyInitNb > 0){

    switch($copyInitNb != 0){
        case $copyInitNb >= 10 : 
            $nbRomain=$nbRomain."X";
            $copyInitNb= $copyInitNb - 10;
        break;

        case $copyInitNb >= 9 : 
            $nbRomain=$nbRomain."IX";
            $copyInitNb = $copyInitNb - 9;
        break;

        case $copyInitNb >= 5 : 
            $nbRomain=$nbRomain."V";
            $copyInitNb = $copyInitNb - 5;
        break;

        case $copyInitNb >= 4 : 
            $nbRomain=$nbRomain."IV";
            $copyInitNb = $copyInitNb - 4;
        break;

        case $copyInitNb >= 1 : 
            $nbRomain=$nbRomain."I";
            $copyInitNb = $copyInitNb - 1;
        break;

        default : return $nb;
        
    }
}
    echo  "Nombre arabe : $initNb " . PHP_EOL . "Equivalent nombre romain : $nbRomain ";

?>
