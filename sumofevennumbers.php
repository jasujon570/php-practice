<?php 
$sum = 0;

for($i = 2; $i <= 100; $i += 2){
    $sum += $i;
}

echo "<h3>The sum of all even numbers between 1 and 100 is : $sum</h3>";

echo "/n";
echo "/n";
echo "/n";

// using while loop


$sum1 = 0;
$x = 2;

while($x <= 100){
    $sum1 += $x;
    $x += 2;
}

echo "<h4>The sum of all even numbers between 1 and 100 is : $sum1</h4>";

echo "/n";
echo "/n";
echo "/n";

// using array


$sum3 = array_sum(range(2, 100, 2));
echo "<h5>The sum of all even numbers between 1 and 100 is : $sum3</h5>"











?>