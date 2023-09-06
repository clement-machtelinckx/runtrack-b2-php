<?php

function my_str_reverse($phrase){
    $phraseSplit = str_split($phrase);
    $reversePhrase = array_reverse($phraseSplit);
    $phraseFinal = implode("", $reversePhrase);
    echo $phraseFinal;
}

my_str_reverse("jesaispas");