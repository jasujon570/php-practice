<?php
    echo '---- PHP Constants ----';

    echo "\n";
    echo "\n";

    echo 'Constants are like variables, except that once they are defined they cannot be changed or undefined.
    
        - A constant is an identifier (name) for a simple value. The value cannot be changed during the script.


            - Use the define() function or const keyword to create constants.
            - Constants are case-sensitive by default unless specified otherwise
            - Constant names should start with a letter or underscore _.
            - Names can contain letters, numbers, and underscores.   
            - Constants are global, meaning they can be accessed anywhere in the script, inside or outside functions
            - Once a constant is set, its value cannot be changed or undefined

            Constants can only store scalar values such as:
                - Strings
                - Integers
                - Floats
                - Booleans
                - Arrays


                const vs. define()

                    const cannot be created inside another block scope, like inside a function or inside an if statement.

                    define can be created inside another block scope.
    ';


    define('GREETING', 'Welcome to w3schools.com');
    echo GREETING;

    echo "\n";
    echo "\n"; 

    const MYNAME = 'Sujon';
    echo MYNAME;

    echo "\n";
    echo "\n"; 



    define("cars", [
        "alfa Romeo",
        "BMW",
        "Toyota"
    ]);

    echo cars[1];

    echo "\n";
    echo "\n"; 

//Constants are automatically global and can be used across the entire script.


define("SUJON", "I love you!");

function myTest() {
    echo SUJON;
}

myTest();








?>