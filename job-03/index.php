<?php
function my_is_multiple($div, $multi){
    if(($div % $multi) == 0){
        echo $div . " est un multiple de " . $multi;
    }
    else {
        echo $div . " n'est pas un multiple de " . $multi; 
    }
}

my_is_multiple(8, 4);