<?php 

    function isPrime($n) {
        if($n < 2) {
            return "$n is not a prime number";
        }
        
        for($i = 2; $i <= sqrt($n); $i++) {
            if($n % $i == 0) {
                return "$n is not a prime number";
            }
        }
        return "$n is a prime number";
    }
    echo isPrime(50);

?>