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























































?>