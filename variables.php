<?php
    // Variables are "containers" for storing information.

    # Declaring PHP Variables
    # In php, a variable starts with the $ sign, followed by the name of the variable:

    $x = 5; // $x is an integer
    $y = "Sujon"; // $y is a string
    $m = $n = $o = "fruit"; //assign the same value to  multiple variables in one line 

    echo $m. "\n";
    echo $n. "\n";
    echo $o. "\n";

    var_dump($x); // this function returns the data type and the value
    var_dump("sujon");
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);


    echo "My name is $y";
    echo "\n";
    $firstName = "Kazi";
    $lastName = "Sujon";
    $question = "How are you?";




    echo "Hello {$firstName} {$lastName}, {$question}";



    //Note: Text value of a variable should put single or double quotes. like "sujon"/ 'sujon'

    /*
        PHP Variables

        A variable can have a short name (like $x and $y) or a more descriptive name ($age, $carname, $first-name, $last_name)


        Rules for PHP variables:
            - A variable starts with the $ sign, followed by the name of the variable.
            - A variable name must start with a letter or the uderscore character
            - A variable name cannot start with a number
            - A variable name can only contain alpha-numeric charater and underscores (A-z, 0-9, and _)
            - Variable names are case-sensitive ($age and $AGE are two different variables)


        PHP Supports the following data types:
        
            - String
            - Integer
            - Float (floating points numbers - also called double)
            - Boolean
            - Array
            - Object
            - NULL
            - Resource
    */







?>