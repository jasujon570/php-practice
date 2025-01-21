<?php
    echo "---- PHP Operators ----";


    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

    echo "In PHP, operators are symbols or keywords used to perform operations on variables and values. PhP provides a variety of operators categorized based on their functionality.";

    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";



    echo "---- Arithmetic Operators ----";

   /*

    +	Addition	$x + $y	Sum of $x and $y	
    -	Subtraction	$x - $y	Difference of $x and $y	
    *	Multiplication	$x * $y	Product of $x and $y	
    /	Division	$x / $y	Quotient of $x and $y	
    %	Modulus	$x % $y	Remainder of $x divided by $y	

    */
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";



    $number = 20;
    $number += 10;
    echo $number;

    echo "\n";
    echo "\n";

    $number1 = 15;
    $number3 = 16;
    $number2 = $number1+$number3;
    echo $number2;


    echo "\n";
    echo "\n";

    $a = 5;
    $b = 10;
    $sum = $a + $b;
    $difference = $a - $b;

    echo $sum;
    echo "\n";
    echo $difference;
    echo "\n";



    $x = 18;
    $y = 13;


    $multiplication = $x * $y;

    $quotient = $x / $y;

    echo $multiplication;
    echo "\n";
    echo $quotient;

    echo "\n";
    echo "multiplication: $multiplication";
    echo "\n";
    echo "quotient: $quotient";
    echo "\n";



    $n = 10;
    $m = 2;

    $modulus = $n % $m;
    echo $modulus;
    echo "\n";

    $num = 10;
    $num1 = 15;
    $num2 = 20;


    $res = ($num + $num1) * $num2 / 2 - $num1;
    echo "Result: $res\n";

    echo "\n";

    echo "---- PHP Assignment Operators ----";

    echo "\n";



    $numb = 100;
    $numb -= 25;
    echo $numb;

    echo "\n";

    $str = "PHP ";
    $str .= "is awesome!";
    echo $str;

    echo "\n";

    $arr = ["a" => 5, "b" => 10];
    $arr["a"]+=3;
    $arr["b"] .= "0";
    echo $arr["b"];
    echo "\n";
    echo $arr["a"];

    echo "\n";
    $opp = 2;
    $opp **= 4;
    echo $opp;

    echo "\n";

    $mod = 100;
    $mod %= 2;
    echo $mod;
    echo "\n";

    echo "---- PHP Comparison Operators ----";

    echo "\n";
    echo "\n";


    echo "The PHP comparison operators are used to compare two values (number or string):";

    $a = 5;
    $b = "6";
    echo "\n";
    echo "\n";

    //loose comparison (==)
    if ($a == $b) {
        echo "Equal (==): true\n";
    }
    if ($a != $b){

        echo "Not Equal (!=): true\n";
    }
    echo "\n";
    echo "\n";
    // Strict comparison (===)

    if ($a === $b){
        echo "Identical (===): true\n";
    } else {
        echo "Identical (===): false\n";
    }
    echo "\n";
    echo "\n";
    //Not Equal 

    if ($a != 10) {
        echo "Not Equal (!=): true\n";
    }
    echo "\n";
    echo "\n";
    if ($a !== $b) {
        echo "Not Identical (!===): true\n";
    }else {
        echo "Not Identical (!===): false\n";
    }

    $x = 7;
    $y = 8;

    if ($x > $y) {
        echo "Greater than (>): true\n";
    }else {
        echo "Greater than (>): flase\n";
    }

    echo "\n";
    echo "\n";

    if ($x < $y) {
        echo "Less than (<): true\n";
    }else {
        echo "Less than (<): false\n";
    }

    if ($x >= $y) {
        echo "Greater than or equal to (>=): true\n";
    }else{
        echo "Greater than or equal to (>=): false\n";
    }

    if ($x <= $y){
        echo "Less than or equal to (<=): true\n";
    }else{
        echo "Less than or equal to (<=): false\n";
    }

    echo "\n";
    echo "\n";

    echo "---- PHP Increment / Decrement Operators ----";

    echo "\n";
    echo "\n";

    echo "In PHP, increment (++) and decrement (--) operators are used to increase or decrease a variable's value by one. These operators can be applied in both pre and post forms, affecting when the increment or decrement takes place relative to the variable's use";
    echo "\n";
    echo "\n";



    echo "----  Increment Operator (++) ----";

    echo "\n";
    echo "\n";

    $xNumber = 10;
    $yNumber = 6;

    //pre-increment

    echo ++$xNumber;
    echo "\n";
    echo $xNumber;


    echo "\n";

    echo $yNumber++;
    echo "\n";
    echo $yNumber;


    echo "\n";
    echo "---- Decrement Operator (--) ----";
    echo "\n";

    //pre-decrement

    echo --$yNumber;
    echo "\n";
    echo $yNumber;
    echo "\n";
    echo ++$yNumber;
    echo "\n";
    echo $yNumber;


    echo "\n";
    echo "\n";
    echo "\n";


    echo "---- PHP Logical Operators ----";

    echo "\n";
    echo "\n";
    echo "\n";

    echo "logical operators are used to combine conditional statements and evaluate whether they are true or false. They return a Boolean value (true or false) based on the given conditions";

    echo "\n";
    echo "\n";
    echo "\n";

    $a = true;
    $b = false;

    if ($a && $b) { //Returns true if both conditions are true.
        echo "Both are ture";
    } else {
        echo "At least one is false \n";
    } 

    if ($a || $b) { //Returns true if at least one condition is true.
        echo "At least one is true \n";
    }


    $c = false; //Reverses the value of a condition (negation).
    if (!$c) { 
        echo "Condition is false, now true \n";
    }
    
    $st = true;
    $yt = false;

    if ($st xor $yt) {
        echo "Only one is true \n";
    }


    //precedence of operators

    $a = true;
    $b = false;
    $c = true;

    if ($a || $b && $c) {
        echo "This works due to precedence\n";
    }


    $age = 19;
    $hasLicense = true;

    if ($age >= 18 && $hasLicense) {
        echo "You can drive. \n";
    } else {
        echo "You cannot drive.\n";
    }

    $loggedIn = false;

    if (!$loggedIn){
        echo "Plese log in. \n";
    }

    $age = 13;
    $teenAger = true;

    if ($age <= 20 && $teenAger) {
        echo "He is an teenager.\n";
    } else {
        echo "He is an Adult.\n";
    }



    echo "\n";
    echo "\n";
    echo "\n";


    echo "---- PHP String Operators ----";

    echo "\n";
    echo "\n";

    echo "String operators are used to manipulate and concatenate strings";

    echo "\n";
    echo "\n";

    //Concatenation Operator (.) 
    $firstName = "kazi";
    $lastName = "Sujon";

    $fullName = $firstName . " " . $lastName;

    echo $fullName;

    //Concatenation Assignment Operator (.=)
    echo "\n";
    echo "\n";

    $message = "Hello,";
    $message .= " Kazi Sujon!";
    echo $message;

    echo "\n";
    echo "\n";

    $greeting = "Welcome, ";
    $userName = "Sujon";
    $Age = 30;

    $result = $greeting. $userName. "! You are ". $Age. " years old.";
    echo $result;

    echo "\n";
    echo "\n";

    echo "---- PHP Conditional Assignment Operators ----";
    
    echo "\n";
    echo "\n";

    echo "The PHP conditional assignment operators are used to set a value depending on conditions";

    echo "\n";
    echo "\n";

  // syntax :  $variable = (condtion) ? value_if_true : value_if_false;

    // Ternary Operator (?:)
    $age = 10;
    $status = ($age >= 18) ?  'Adult' : 'Minor';
    echo $status;
    
    echo "\n";

    $section = "Science";
    $class = ($section === "Science") ? 'You can choose subject Physics' : 'General';
    echo $class;

    echo "\n";
    echo "\n";

    //Null Coalescing Operator (??)
     echo "The null coalescing operator checks if a variable is set and not null. If it is set, it returns the value; otherwise, it returns the fallback value.";

     echo "\n";
     echo "\n";

     $username = $_GET['user'] ?? 'Guest';
     echo "$username";


















?>