<?php 
    // What will be the output


    $x = "10"; // string value
    $y = 10; // int value
    echo ($x === $y) ? "Equlal" : "Not Equlal\n";

   echo PHP_EOL;


    // 2. Fix the syntax error

    $x = 5;
    if ($x > 3) { //eror were if $x > 3 {}
        echo "Greater than 3\n";
    }

    echo PHP_EOL;

    // 3. What will be the output?

    $a = 5;
    $b = &$a;
    $b = 10;

    echo "$a";


    // 4. Predict the output

    $val = "PHP";
    echo "I love $val!\n";
    echo 'I love $val!'; //variable will treat as an normal text;

    echo PHP_EOL;

    // 5. What will this loop output?

    for ($i = 0; $i < 3; $i++); { //There's a semicolon after for ($i = 0; $i < 3; $i++);, which makes the loop do nothing.
        echo $i; //012
    }
    echo PHP_EOL;

    // 6. What is the output?

    function test(){
        static $count = 0;
        $count++;
        echo $count;
    }

    test();
    test();
    test();

    // 7. What will be printed?

    function checkNumber($num) {
        return ($num % 2 == 0) ? "Even" : "Odd";
    }
    
    echo checkNumber(7);

    // 8. Predict the output

    define ("MESSAGE", "Hello World!");
    echo MESSAGE;
    define("MESSAGE", "New Message");
    echo MESSAGE; // Constant MESSAGE already defined 
    
    echo PHP_EOL;

    // 9. What will be printed?
    $arr = [1, 2, 3, "4"];
    echo array_sum($arr);

    echo PHP_EOL;

    // 10. What is the output?

    $colors = ["red", "green", "blue"];

    foreach($colors as $color) {
        if ($color == "green") continue;
        echo $color;
    }

    echo PHP_EOL;   

    // 1. What will be the output?

    $var = 0;
    $var = $var ?: "Hello";
    echo $var; //Hello


    echo PHP_EOL;

    // 2. What will this function return?

    function example(&$x) {
        $x += 5;
        return $x;
    }

    $val = 10;
    echo example($val);
    echo $val;

    echo PHP_EOL;

    // 3. Predict the output:

    $array = ["a" => 1, "b" => 2, "c" => 3];

    foreach($array as $key => &$value) {}
    foreach($array as $key => $value) {}
    echo $array["a"];

    echo PHP_EOL;

    // 4. What is the output?

    $str1 = "Hello";
    $str2 = "hello";
    echo strcmp($str1, $str2);

    
    echo PHP_EOL;


    // 5. What will be printed?

    $x = "5";
    $y = 5;

    echo ($x == $y) ? "Equal" : "Not Equal";
    echo ($x === $y) ? "Equal" : "Not Equal";

    echo PHP_EOL;

    // What will be the output?

    $a1 = "10";
    $b1 = 10;

    echo ($a1 == $b1) ? "Same" : "Different";
    echo ($a1 === $b1) ? "Same" : "Different";

    echo PHP_EOL;

    $num = 5;
    function multiply() {
        global $num;
        $num *= 2;
    }

    multiply();
    echo $num;

    echo PHP_EOL;

    $x = 5;
    $y = &$x;
    $y = 10;
    $x = 20;

    echo $y;


    echo PHP_EOL;

    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) continue;
        echo $i;
    }

    echo PHP_EOL;

    function test1(&$var) {
        $var += 2;
        return $var;
    }

    $num = 3;
    echo test1($num);
    echo $num;


    echo PHP_EOL;



    // 1. What will be the output?


    function mystery($x, $y) {
        return $x() + $y;
    }
    echo mystery(fn() => 5, 10);

    echo PHP_EOL;

    // 2. What will this code print?

    $a = 5;
    $b = &$a;
    $b = 10;
    unset($b);
    echo $a;

    echo PHP_EOL;

    // 3. What will be the output?

    $array1 = [1, 2, 3];
    foreach ($array1 as &$value1) {}
    gc_enable(); // Force garbage collection
    foreach ($array1 as $value1) {}
    echo $array1[0];

    echo PHP_EOL;

    // 4. What will be printed?

    $x = "5";
    $y = 5;

    echo ($x <=> $y);

    echo PHP_EOL;

    // 5. What will this print?

    $nums = [1, 2, 3, 4];
    $num = array_reduce($nums, fn($carry, $item) => $carry + $item, 0);
    echo $num;


    echo PHP_EOL;    
    echo PHP_EOL;

    echo PHP_VERSION;

    echo PHP_EOL;    
    echo PHP_EOL; 
    echo PHP_EOL;    
    echo PHP_EOL; 
    echo PHP_EOL;    
    echo PHP_EOL;

    $array = ["a" => 1, "b" => 2, "c" => 3];

    foreach ($array as &$value) {} 
    foreach ($array as $value) {} 

    print_r($array);

    echo PHP_EOL;    
    echo PHP_EOL;


// Multiply All Numbers

    $nums = [1, 2, 3, 4];
    $product = 1;


    foreach ($nums as $item) {
        $product *= $item;
    }

    echo $product; // Expected output: 24


    echo PHP_EOL;    
    echo PHP_EOL;

    $nums = [1, 2, 3, 4];
    $maxValue = max($nums);

    echo $maxValue; // Expected output: 4

    echo PHP_EOL;    
    echo PHP_EOL;

    $nums = [1, 2, 3, 4];
    $evenCount = 0;

    foreach ($nums as $item) {
        if ($item % 2 === 0) {
            $evenCount++;
        }
    }

    echo $evenCount; // Expected output: 2;


    echo PHP_EOL;    
    echo PHP_EOL;

    // Reverse the Array

    function reverseArray($arr) {
        $reversed = []; // Create a new array to store the reversed elements
        $length = count($arr);

        // Loop through the array from the end to the beginning

        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed[] = $arr[$i];
        }

        return $reversed;

        
    }
    $nums = [1, 2, 3, 4];
    $reverseArray = reverseArray($nums);

    print_r($reverseArray); // Expected output: [4, 3, 2, 1]

    
    echo PHP_EOL;    
    echo PHP_EOL;



// Find the Second Largest Number


    function secondLargest($arr) {
        // Sort the array in descending order
        rsort($arr);

        // Return the second element
        return $arr[1];
    }

    // Example usage

    $num = [1, 2, 3, 4];
    echo secondLargest($num); // Expected output: 3

    echo PHP_EOL;    
    echo PHP_EOL;

    // Remove Duplicates
    
    function removeDuplicates($arr) {
        return array_unique($arr);
    }

    // Examples usage

    $nums = [1, 2, 2, 3, 4, 4];
    $uniqueArray = removeDuplicates($nums);
    print_r($uniqueArray);



    echo PHP_EOL;    
    echo PHP_EOL;

    function sumOfOddNumbers($arr) {
        $sum = 0; //Initialize the sum to 0


        foreach ($arr as $num) {
            // Check if the number is odd
            if ($num % 2 != 0) {
                $sum += $num; // Add the number to the sum
            }
        }

        return $sum;


    }

    $nums = [1, 2, 3, 4, 5];
    echo sumOfOddNumbers($nums);


    echo PHP_EOL;    
    echo PHP_EOL;


    function filterNumbersGreaterThanThree($arr) {
        $filteredArray = []; // Initialize an empty array to store the filtered numbers


        foreach ($arr as $num) {
            // Check if the number is greater than 3
            if ($num > 3) {
                $filteredArray[] = $num; // Add the number to the filtered array
            }
        }
        return $filteredArray;
    }

    $nums = [1,2,3,4,5,6];
    $filteredArray = filterNumbersGreaterThanThree($nums);
    print_r($filteredArray);

    echo PHP_EOL;    
    echo PHP_EOL;

    // Swap Two Variables Without a Temporary Variable

     function swap(&$a, &$b) {
        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;
     }
     
     $a = 5;
     $b = 10;

     swap($a, $b);


     echo "$a, $b"; //Expected output: 10, 5


    echo PHP_EOL;    
    echo PHP_EOL;




    //  Find the Factorial of a Number


     $day = 1;

     switch ($day) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        default:
            echo "Other Day";
            break;        
     };

     echo PHP_EOL;    
     echo PHP_EOL;

    // Write a foreach loop that prints each value of an indexed array ['apple', 'banana', 'cherry'].

    $fruits = ['apple', 'banana', 'cherry'];

    foreach($fruits as $fruit){
        echo $fruit . "\n";
    }
     
//     Create an array called $colors with these values: "Red", "Green", "Blue". Now, add "Yellow" to the array using a PHP function. 

    $colors = ["Red", "Green", "Blue"];
    array_push($colors, "Yellow");

    echo PHP_EOL;    
    echo PHP_EOL;

    // Write a line of PHP code to convert this string to lowercase: $title = "HELLO PHP WORLD";
    $title = "HELLO PHP WORLD";
    $title = strtolower($title);

    print_r($title);

    echo PHP_EOL;    
    echo PHP_EOL;


    // How do you display the current time in H:i:s format (hours:minutes:seconds)?

    // "h": Represents the hour in 12-hour format (01 to 12).
    // "A": Displays "AM" or "PM".

    echo "Current time: " . date("H:i:s");

    echo PHP_EOL;    
    echo PHP_EOL;

    // Rewrite this if/else block using a ternary operator:

    $age = 20;    
    $status = ($age >= 18)? "Adult" : "Minor";
    
    echo $status;

    echo PHP_EOL;    
    echo PHP_EOL;

    // How do you get the current script's filename using a $_SERVER variable?

    echo "Current script: " . $_SERVER['PHP_SELF'];

    echo PHP_EOL;    
    echo PHP_EOL;

    // Write PHP code to check if a form field called email was submitted and is not empty.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(isset($_POST["email"]) && !empty($_POST["email"])) {
            echo "Email Submitted: " . htmlspecialchars($_POST["email"]);
        } else {
            echo "The email field is missing or empty.";
        } 
    } else {
        echo "Form is not submitted.";
    }

    echo PHP_EOL;    
    echo PHP_EOL;

    // Create a function called greet() that takes 1 parameter ($name), but if no name is passed, it should default to "Guest".

   function greet($name = "Guest") {
    echo "Hello, $name!";
   }


   greet("Sujon");
   echo "\n";
   greet();

    echo PHP_EOL;    
    echo PHP_EOL;

//    Create a 2D array $products with 2 products, each having a name and price.


   $products = [
        [
            "name" => "Laptop",
            "price" => 999.99
        ],
        [
            "name" => "smartphone",
            "price" => 151.99
        ]
    ];

    echo PHP_EOL;    
    echo PHP_EOL;

    // What is the output of this code?

    $name = "John";

    echo "Welcome " . $name . "!"; // Welcome John!

    echo PHP_EOL;    
    echo PHP_EOL;

    // Write a for loop that prints numbers from 1 to 20, but for multiples of 5, print "Buzz" instead of the number.


    for ($i = 1; $i <=20; $i++) {
        if ($i % 5 === 0){
            echo "Buzz\n";
        }else {
            echo "$i\n";
        }
    }

    echo PHP_EOL;    
    echo PHP_EOL;

    // using a ternary operator

    for($x=1;$x<=20;$x++){
        echo ($x % 5 === 0) ? "Buzz\n" : "$x\n";
    }


    echo PHP_EOL;    
    echo PHP_EOL;

    // Create two arrays: Combine them into an associative array using a PHP function.


    // Define two indexed arrays: one for keys and one for values
    $keys = ["name", "age", "city"];
    $values = ["Sujon", 25, "Dhaka"];

    
    // Combine the arrays into an associative array
    $associativeArray = array_combine($keys, $values);
    
    // Output the resulting associative array
    print_r($associativeArray);

    echo PHP_EOL;    
    echo PHP_EOL;

    // Replace all occurrences of "PHP" with "Laravel" in this string:

    $text = "I love PHP because PHP is awesome!";

    $updateText = str_replace("PHP", "Laravel", $text);

    echo $updateText;


    echo PHP_EOL;    
    echo PHP_EOL;

    // Write PHP code to calculate how many days are left until next New Year's Day (January 1, 2026).

   $targetDay = strtotime('2026-01-01');
   $currentTimestamp = time();

   $diffInSecond = $targetDay - $currentTimestamp;

   $daysLeft = floor($diffInSecond / (60 * 60 * 24));

   echo "There are $daysLeft days left until New Year's Day (January 1, 2026).";


   echo PHP_EOL;    
   echo PHP_EOL;

//    Sort it in descending order using a PHP function.


$numbers = [45, 2, 87, 32, 56];

rsort($numbers);

print_r($numbers);

echo PHP_EOL;    
echo PHP_EOL;

// Check if the value "banana" exists in this array: Print "Found" if it exists, otherwise "Not Found"

$fruits = ["apple", "orange", "grape"];

if (in_array("banana", $fruits)) {
    echo "Found";
} else {
    echo "Not Found";
}

echo PHP_EOL;    
echo PHP_EOL;

// Using ternary operator

echo (in_array("banana", $fruits)) ? "Found" : "Not Found";

echo PHP_EOL;    
echo PHP_EOL;


// Using foreach loops


// Initialize a flag variable
$found = false;

foreach ($fruits as $fruit) {
    if ($fruit === "apple") {
        $found = true;
        break;
    }
}

echo $found ? "Found" : "Not Found";


echo PHP_EOL;    
echo PHP_EOL;

// Write PHP code to include a file called config.php.
// If the file is missing, display "Config file not found" without crashing the script.


if(file_exists('config.php')){
    include 'config.php';
} else {
    echo "Config file not found";
}
echo PHP_EOL;    
echo PHP_EOL;

// Create a function calculateArea() that takes two parameters ($length and $width) and returns the area (not echo).




function calculateArea($length = 10, $width = 5){
    $area = $length * $width;

    return $area;
}

$result = calculateArea();

echo "The area is: " . $result;


echo PHP_EOL;    
echo PHP_EOL;

// Another method


function calculateAreas($length = 50, $width = 25) {
    $area = $length * $width;
    if (!is_numeric($length) || !is_numeric($width)){
        return "Invalid input";
    }
    if ($length < 0 || $width < 0) {
        return "Length and Width must be non-negative";
    }
    return $area;
}

$result = calculateAreas();

echo "The area is: " . $result;




echo PHP_EOL;    
echo PHP_EOL;


// Write a for loop that prints numbers 1 to 10, but skips number 5 using continue

for ($i = 1; $i <= 10; $i++){
    if ($i === 5) {
        continue;
    }

    echo $i . "\n";
}

echo PHP_EOL;
echo PHP_EOL;


// What will this print?


echo $_SERVER['REQUEST_URI']; // Undefined array key "REQUEST_URI"


echo PHP_EOL;
echo PHP_EOL;


$person = [
    "name" => "Sujon",
    "age" => 25,
    "city" => "Dhaka"
];

foreach ($person as $key => $value) {
    echo "$key: $value\n";
}





echo PHP_EOL;
echo PHP_EOL;










    













































?>