<?php

function my_fizz_buzz($lenght){

    for ($i = 0; $i < $lenght; $i ++){
        if ((($i % 3) == 0) & (($i % 5) == 0)) {
            echo "Fizz Buzz <br>";
        }

        else if (($i % 3) == 0){
            echo "Fizz <br>";
        }
        else if (($i % 5) == 0){
            echo "Buzz <br>";
        }
        
        else {
            echo $i . "<br>";
        }
    }
}


my_fizz_buzz(89);