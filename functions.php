<?php


// simple function

function greet(){
    echo "Hello, welcome to php";
}
greet();

echo PHP_EOL;

function myMessage(){
    echo "Hello, Hira!";
}

myMessage();
echo PHP_EOL;




// Function with parameters

function sayHello($name){ //parameter
    echo "Hello, $name!";
}

sayHello("Sujon");

echo PHP_EOL;
echo PHP_EOL;

function familyName($fname) {
    echo "$fname Joe.\n";
}

familyName("jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");





//Function with return value

function addNumbers($a, $b) {
    return $a + $b;
}

$result = addNumbers(5, 10);
echo "Sum: " . $result;

echo PHP_EOL;

// Function with default parameter

function welcome($name = "Guest") {
    echo "Welcome, $name!";
}

welcome(); //Outputs: Welcome, Guest!
echo PHP_EOL;
welcome("Hiramoni"); //outputs: welcome, hiramoni

echo PHP_EOL;

function isEven($n)//parameter
{
    if($n % 2 == 0){
        return true;
    }
    return false;
}

$x = 12;

if(isEven($x)) { //argument
    echo "{$x} is and even number";
}else {
    echo "{$x} is and odd number";
}

echo PHP_EOL;



function familyNames($fname, $year){
    echo "$fname sujon. Born in $year\n";
}

familyNames("kazi", "1997");
familyNames("hira", "2002");
familyNames("sh", "1998");



function subjectName($book){
    echo "$book is the class of ten book in the science group.";
}

subjectName("Chemistry");


// Function with Default Argument Value


function setHeight($minheight = 50){
    echo "The height is : $minheight\n";
}

setHeight(350);
setHeight(); //will use the default value of 50;
setHeight(135);
setHeight(80);


echo PHP_EOL;

function serve($foodType, $numberOfItem="1 cup"){
    echo "{$numberOfItem} of {$foodType} has/have been served.";
}

$ft = "Biriani";
$n = "2 plate";

serve($ft, $n);










echo PHP_EOL;
echo PHP_EOL;

function sum($x, $y){
    $z = $x + $y;
    return $z;
}


echo "5 +10 = " . sum(5, 10) . "\n";
echo "8 +12 = " . sum(5, 10) . "\n";
echo "7 + 4 = " . sum(5, 10) . "\n";

// Passing Arguments by Reference

function add_five(&$value){
    $value +=5;
}

$num = 2;
add_five($num);
echo $num;


echo PHP_EOL;
echo PHP_EOL;


function sumMyNumbers(...$x):int{
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++){
        $n += $x[$i];
    }
    return $n;
}

$a = sumMyNumbers(5,2,3,5,8,1);
echo $a;

echo PHP_EOL;

// Function type hinting

function factorial(int $n){ //int is the type hinting of the parameter
    $result = 1;
    for ($i = $n; $i > 1; $i--){
        $result *= $i;
    }
    return $result;
}


$x = 8;

echo "Factorial of {$x} is ".factorial($x);


 
echo PHP_EOL;
echo PHP_EOL;

function doTaskA(){
    echo "Step A Done\n";
}
function doTaskB(){
    echo "Step B Done\n";
}
function doTaskC(){
    echo "Step C Done\n";
}
function doTaskD(){
    echo "Step D Done\n";
}
function doTaskE(){
    echo "Step E Done\n";
}

function doLargerTask(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();
}

doLargerTask();

































?>