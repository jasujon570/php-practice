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

echo factorial(5);


?>