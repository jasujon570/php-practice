<?php

echo "PHP Casting";
echo "\n";
echo "\n";
echo "\n";
echo "\n";




echo 'Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type. This can be done with casting.';

echo "\n";
echo "\n";
echo "\n";
echo "\n";

echo 'Change Data Type';
echo "\n";
echo "\n";
echo '
    Casting in PHP is done with these statements:

        (string) - Converts to data type String
        (int) - Converts to data type Integer
        (float) - Converts to data type Float
        (bool) - Converts to data type Boolean
        (array) - Converts to data type Array
        (object) - Converts to data type Object
        (unset) - Converts to data type NULL';


echo "\n";
echo "\n";

echo '---- Cast to String ----';

echo "\n";
echo "\n";


$a = 5;      //Integer
$b = 5.34;   //float
$c = '25 kilometer';//string
$d = true;   //boolean
$e = NULL;   //NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

echo "\n";
echo "\n";

echo '---- Cast to Integer ----';

echo "\n";
echo "\n";

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

echo "\n";
echo "\n";

echo '---- Cast to Float ----';

echo "\n";
echo "\n";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;


var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);

echo "\n";
echo "\n";

echo '---- Cast to Boolean ----';

echo "\n";
echo "\n";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
var_dump($h);
var_dump($i);


echo "\n";
echo "\n";

echo '---- Cast to Array ----';

echo "\n";
echo "\n";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;


var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

echo "\n";
echo "\n";

echo '---- Cast to Object ----';

echo "\n";
echo "\n";

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;


var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);


echo "\n";
echo "\n";


$a = array("Volvo", "BMW", "Toyota"); //indexed array
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //associative array

$a = (object) $a;
$b = (object) $b;

var_dump($a);
var_dump($b);



echo "\n";



$x = "10.5";
$y = (int)$x;
echo $y;

echo "\n";
echo "\n";

$value = (bool)'0'; //If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. Even -1 converts to true.
var_dump($value);

echo "\n";
echo "\n";

$a = (float) '123abc'; //If a string starts with numbers, PHP will extract and convert them to an integer, ignoring the remaining characters.
echo $a;
echo "\n";
echo "\n";

echo 'PHP starts reading the string from left to right.
If the string begins with a valid numeric value (including decimals), it converts it to a float.
Any non-numeric characters after the numeric portion are ignored.';

echo "\n";
echo "\n";

$c = '50 apples';
$c = (float) $c;
echo $c;

echo "\n";
echo "\n";

$str = "false"; // the value of variable $str is string, if the value is not 0 then bool always showing tre in casting.
$boolValue = (bool)$str;
var_dump($boolValue);

echo "\n";
echo "\n";


$num = (string)(float)"45.67";
echo $num;



?>