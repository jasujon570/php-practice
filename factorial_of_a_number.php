<?php 

function factorial($n){
    if($n < 0) {
        return "Factorial is not defined for negative numbers";
    }

    $fact = 1;
    for ($i = 1; $i <= $n; $i++){
        $fact *= $i;
    }
    return $fact;
}

echo factorial(3);

echo "\n";

    echo PHP_EOL;
    echo PHP_EOL;

    function factorialRecursive($n) {
        if($n < 0) {
            return "Factorial is not defined for negative numbers";
        }
        if($n == 0 || $n == 1) {
            return 1;
        }
        return $n * factorialRecursive($n - 1);
    }


    echo factorialRecursive(7);



?>