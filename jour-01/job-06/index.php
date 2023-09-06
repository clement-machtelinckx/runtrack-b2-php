<?php

$array = [2,5,3,15,4,35];
function my_array_sort($array, $sortingOrder){
    if ($sortingOrder == "ASC"){
        sort($array);
        return $array;
    }
    if ($sortingOrder == "DESC"){
        rsort($array);
        return $array;
    }
}

$sortedArray = my_array_sort($array, "ASC");

print_r($sortedArray);

$sortedArray2 = my_array_sort($array, "DESC");

print_r($sortedArray2);



