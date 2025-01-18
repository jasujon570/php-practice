<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Syntax</H1>
    <p> 
        PHP - Hypertext Preprocessor </br>
        
        PHP file extension is ".php"</br>
        
        A PHP script starts with <?php
        "and ends with" 
        ?>; <!--PHP statement ends with semicolon (;)-->
    </p>

        <?php
            //echo is the PHP build in function to output the result on webpage

            echo "Hello, I am sujon, currently practicing the PHP";

            /* PHP Case Sensitivity
            In php, keywords like "(if, else, while, echo, etc)", classes, fucntions, and user defined fucntions are not case-sensitive 
            
            But all kinds of variables are case-sensitive!


            */
            
            #Example of case-sensitivity about "echo"

            Echo "This is first code</br>";
            ECHO "This is first code</br>";
            eCHO "This is first code</br>";
            

            #Example of case-sensitivity about variables

            $age = 26;


            echo "My age is " . $age . "<br>";
            echo "My age is " . $AGE . "<br>";
            echo "My age is " . $Age . "<br>";


            // Only first statement will display the value of $age, rest of are treated as different variables

        ?>;



</body>
</html>