<?php


function my_str_search($lettre, $phrase) {
    $count = 0;
    for ($i = 0; $i < strlen($phrase); $i++) {
        if ($phrase[$i] == $lettre){
            $count += 1 ;
            
        }
    }
    echo $phrase . " contient " . $count . " lettre " . $lettre;
}

my_str_search("o","pourquoi");

?>