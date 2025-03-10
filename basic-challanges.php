<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form Processing (POST)</title>
</head>
<body>
    <form action="" method="POST">
    Enter your Name: <input type="text" name="name" placeholder = "Enter your name" required>
    Enter your Email: <input type="email" name="email" placeholder="Enter your email" required>
    <input type="submit" value="Submit">
    </form>
</body>
</html>


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


 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize inputs
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : "";
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : "";
    
    // Check if both fields are provided

    if(!empty($name) && !empty($email)) {

          // Add Email Validation
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format!";
            exit; // Stop further processing if email is invalid
        }
        // If everything is fine, show data
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    } else {
        echo "Please fill in both fields";
    }

} else {
    echo "Please submit the form";
}


    echo "\n";
    echo "\n";


function greet($name = "Guest") {
    return "Hello, $name!";
 }   

echo greet();
echo "\n";
echo greet("Alice");

echo "\n";
echo "\n";


// Check how many characters are in this string:

$text = "Hello, PHP!";

$length = strlen($text);
echo "The string contains $length characters.";


echo "\n";
echo "\n";

// Write a while loop to print numbers from 5 to 1.

$number = 5;

while ($number >= 1) {
    echo $number . "\n";
    $number--; 
}

// Explode and Implode

$fruits = "apple, banana, cherry";

$fruitsArray = explode(",", $fruits);
$fruitsString = implode("|", $fruitsArray);
print_r($fruitsArray);
echo "\n";
echo $fruitsString;


echo "\n";
echo "\n";

// Write a function isEven() that returns true if a number is even, false if not.


function isEven($number) {
    return $number % 2 === 0;
}

var_dump(isEven(4)); // True;
var_dump(isEven(7)); // False;

echo "\n";
echo "\n";

function isEven1($number1) {
    if ($number1 % 2 === 0) {
        return true;
    } else {
        return false;
    }
}
var_dump(isEven1(8)); // True;
var_dump(isEven1(9)); // False;



echo "\n";
echo "\n";


echo date ('l, F j, Y');

/**
 * Explanation:
l = Full day name (e.g., Tuesday)
F = Full month name (e.g., February)
j = Day of the month without leading zeros (e.g., 27)
Y = Full year (e.g., 2025)
**/


echo "\n";
echo "\n";


$sentence = "php is amazing!";
$sentence = ucfirst($sentence);
echo $sentence;


echo "\n";
echo "\n";

// Calculate and print the sum of all numbers.

$numbers = [10, 20, 30, 40];

echo "\n";
echo "\n";


$sum = array_sum($numbers);
echo $sum;


echo "\n";
echo "\n";

// String Manipulation

echo strtoupper("hello world");

echo "\n";
echo "\n";

$str = "hello world";
$newStr = str_replace("world", "PHP", $str);

echo $newStr;

echo "\n";
echo "\n";

$anArray = ['PHP', 'C', 'C++'];

array_push($anArray, 'Javascript');

print_r($anArray);


// Alternative

$languages = ["PHP", "Python", "Javascript"];

$languages[] = "Java";

print_r($languages);

// Write a for loop that prints numbers from 10 to 1 in reverse order.



for($i= 10; $i >= 1; $i--){
    echo $i. "\n";
}

echo "\n";
echo "\n";

// Use a while loop to print even numbers from 2 to 10.

$num = 2;

while($num <= 10){
    echo $num. "\n";
    $num += 2;
}

echo "\n";
echo "\n";

// Alternative

$numbers = 1;

while ($numbers <= 10){
    if ($numbers % 2 == 0){
        echo $numbers. "\n";
    }
    $numbers++;
}

echo "\n";
echo "\n";

// Write a function that multiplies two numbers and returns the result.

function multiply($a, $b){
    return $a * $b;
}

$result = multiply(5, 6);
echo "The result is: " . $result;

echo "\n";
echo "\n";

// Create a function that takes a number as input and returns "Even" if it’s even, otherwise "Odd".

function isEvenNumber($n){
    if($n % 2 == 0){
        return "The number is Even";
    }else {
        return "The number is Odd";
    }
}

$n = 11;
echo isEvenNumber($n);

echo "\n";
echo "\n";

// Alternative

function evenNumber($n){
    return ($n % 2 == 0) ? "The nunbner is Even" : "The number is Odd";

}

echo evenNumber(15);

echo "\n";
echo "\n";


// Create an associative array representing a car with keys: "brand", "model", and "year".


$cars = [
    "brand" => "Toyota",
    "model" => "Corolla",
    "year" => 2025
];

print_r($cars);

echo "\n";

// Print only the "model" value.

echo $cars["model"];

echo "\n";
echo "\n";

// Generate a random number between 1 and 100

$randomNumbers = rand(1, 100);
echo $randomNumbers;

echo "\n";

// Round the number 4.7 to the nearest integer.

$roundNumber = round(4.7);

echo $roundNumber;