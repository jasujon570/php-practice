<?php

    //Loops are used to execute the same block of code again and again, as long as a certain condition is true


    /*
     
    The for loop is typically used when you know how many times you want to execute a block of code. It consists of three parts:

Initialization : This is where you initialize a counter variable.
Condition : The loop will continue to run as long as this condition is true.
Increment/Decrement : This updates the counter variable after each iteration.


Syntax:

for (initialization; condition; increment/decrement) {
    // Code to be executed

}


*/ 


    echo "----for Loop----";
    
    for ($i = 1; $i<10; $i++){
        echo PHP_EOL;
        for ($j=0; $j<$i; $j++){
            echo "*";
        }
    }
    echo PHP_EOL;

// Let's say we want to print numbers from 1 to 5


    for ($i = 1; $i <= 5; $i++){
        echo "Number: $i\n";
    }

    echo PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;


    echo "----foreach Loop----";


    

    echo PHP_EOL;
    echo PHP_EOL;

    // Example 1: Simple Array (Index Array)
    $fruits = array("Apple", "Banana", "Cherry");
    foreach ($fruits as $fruit) {
        echo "Fruit: $fruit\n";
    }

    echo PHP_EOL;
    echo PHP_EOL;

    $color = array ("red", "green", "blue", "yellow");
    foreach ($color as $x) {
        echo "My favorite color is {$x}\n";
    }

    echo PHP_EOL;
    echo PHP_EOL;


    //Example 2: Associative Array


    $ages = array("sujon" => 26, "Arif" => 25, "Hira" => 23);

    foreach($ages as $name => $age) {
        echo "$name is $age years old.\n";
    }


//Advanced Example: Nested Loops

    for ($i = 1; $i <= 5; $i++){
        for ($j  = 1; $j <= 5; $j++){
            echo "$i x $j = " . ($i * $j) . "\n";
        }
        echo PHP_EOL;
    }




































?>