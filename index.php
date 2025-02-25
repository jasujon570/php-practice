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


?>