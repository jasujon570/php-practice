<?php

function sum($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
}


$num1 = 10;
$num2 = 20;


$result = sum($num1, $num2);

echo "The sum is: " . $result;


echo "\n";
echo "\n";


function sum1($num3 = 50, $num4 = 10) {
    return $num3 + $num4;
}


echo "Sum of 10 and 20: " . sum1(10, 20) . "\n";
echo "Sum of 50 and 20: " . sum1(50, 20) . "\n";
echo "Sum of default: " . sum1() . "\n";



echo "\n";
echo "\n";

$firstName = "Sujon";
$lastName = "Ahmed";

echo "Hello, " . $firstName . " " . $lastName . "!";


echo "\n";
echo "\n";

$temperature = 30;

if ($temperature > 30){
    echo "It's hot today!";
} else {
    echo "The weather is cool.";
}

echo "\n";
echo "\n";

// Using Ternary Operator

$temp = 50;
echo ($temp > 30) ? "It's hot today!" : "The weather is cool.";

echo "\n";
echo "\n";

// Create an array $hobbies with 2 hobbies. Add a 3rd hobby using [] syntax (not array_push this time).

$hobbies = ['cricket', 'football'];

$hobbies[] = 'tennis';

print_r($hobbies);


echo "\n";
echo "\n";

$colors = ["Red", "Green", "Blue"];

foreach ($colors as $color) {
    echo $color . "\n";
}

echo "\n";
echo "\n";

// Using for loop

$colors1 = ["Red", "Green", "Blue"];

for ($i = 0; $i < count($colors1); $i++) {
    echo $colors1[$i] . "\n";
}


echo "\n";
echo "\n";

// Create an associative array for a student:


    $Student = [
        "Name" => "Sujon",
        "Age" => 25,
        "Course" => "PHP Basics"
    ];








