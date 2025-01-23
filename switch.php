<?php 
    echo "---- The PHP switch Statement ----";

    echo "\n";
    echo "\n";
    
    echo "The switch statement is used to perform different actions based on different conditions.";


    echo "\n";
    echo "\n";


    //Count Odd or Even number using PHP Switch


    $number = 10;
    $result = $number % 2;

    switch ($result) {
        case 0:
            echo "{$number} is an even number \n";
            break;
        default:
            echo "{$number} is an odd number \n";    
    }


    $color = 'black';
    switch ($color) {
        case 'red':
            echo "Red is our favorite color\n";
            break;
        case 'green':
            echo "Green is our favorite color\n";
            break;
        case 'blue':
            echo "Blue is our favorite color\n";
            break;
        default:
            echo "None of our favorite color\n";            
    }


    $d = 3;

    switch ($d) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "The weeks feels so long\n";
            break;
        case 0:
        case 6:
            echo "Weekends are the best!\n";
            break;
        default:
            echo "Something went wrong\n";
    }

    echo "\n";
    echo "\n";



    echo "---- Nested Switch Case ----";


    echo "\n";
    echo "\n";


    $n = -16;
    $r = $n % 2;

    switch($r){
        case 0:
            switch($n){
                case $n>0:
                    echo "$n is a positive even number\n";
                    break;
                case $n<0:
                    echo "$n is a negative even number\n";
                    break;    
            }
            break;
        default:
            switch($n) {
                case $n>0:
                    echo "$n is a positive odd number\n";
                    break;
               case $n<0: 
                    echo "$n is a negatice odd number\n";
                    break;         
            }        

    }


    echo "\n";
    echo "\n";

    $n = 16;
    $r = $n % 2;
    switch(true){
        case (0 == $r && $n>0):
            echo "$n is a positive even number\n";
            break;
        case (1 == $r && $n>0):
            echo "$n is a positive odd number\n";    
            break;
        case (0 == $r && $n<0):
            echo "$n is a negative even number\n";
            break;
        case (1 == $r && $n<0):
            echo "$n is a negative Odd number\n";
            break;    
    }

    echo "\n";
    echo "\n";

    $num = 3;

    switch ($num) {
        case 1:
            echo "One";
            break;
        case 2:
            echo "Two";
        case 3:
            echo "Three";
            break;
        default:
            echo "None";                       
    }

    echo "\n";
    echo "\n";

    $value = "5";

    switch ($value) {
        case 5:
            echo "Number";
            break;
        case "5":
            echo "String";
            break;    
    }

    echo "\n";
    echo "\n";

    $test = 8;

    switch($test) {
        case 0:
            echo "this is print if condition is true";
            break;
        case 1:
        echo "this is print if condition is true";
        break;
        case 2:
            echo "this is print if condition is true";
            break;
        case 3:
            echo "this is print if condition is true";
            break;
        case 4:
            echo "this is print if condition is true";
            break;   
        case 8:
            echo "this is print if condition is true";
            break;                                     
    }

























?>