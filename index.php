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

















    
    
?>