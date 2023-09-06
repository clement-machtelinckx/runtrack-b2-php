<?php

function my_is_prime($number){
    $racineNB = ($number * $number) ;

    if ($number <= 1){
        echo "le nombre" . $number . " n'est pas premier";
        return;
    }
    for ($i = 2; $i < $number; $i++){
        if (($number % $i) == 0){
            echo "le nombre " . $number . " n'est pas premier.";
            break;
        }
        else {
            echo "le nombre " . $number . " est premier";
            break;
        }
    }
}

my_is_prime(14);