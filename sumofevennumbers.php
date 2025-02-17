<?php
//Create a PHP program that finds the sum of all even numbers between 1 and 100 using a loop

$sum = 0;

//loop through numbers from 1 to 100

for($i = 2; $i <= 100; $i += 2) {
    $sum += $i;
}

echo "<p>The sum of all even numbers between 1 and 100 is: <b>$sum</b></p>";

?>