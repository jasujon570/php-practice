<?php
    /* An array is a special variable that can hold many values under a single name, and you can access the values by reffering to an index number or name

    3 types of array are available

    - Indexed arrays: Arrays with a numeric index;
    - Associative arrays: Arrays with named keys;
    - Multidimensional arrays: Arrays containing one or more arrays;

*/
    // $myArr = array("volvo", 15, ["apples", "bananas"], myFunction);
    
    $cars = array("volvo", "BMW", "Toyota");
    echo count($cars);
    echo "\n";
    echo $cars[0];
    echo "\n";
    echo $cars[2];
    $cars[2] = "ford";
    echo "\n";
    echo $cars[2];
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";


    echo ' ---- PHP Indexed Arrays ----';
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

    //PHP Indexed Arrays

    // loop

    foreach ($cars as $x) {
        echo "$x \n";
    }

    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

    $color[0] = "Oranage";
    $color[1] = "Blue";
    $color[2] = "White";

    array_push($color, "Green");
    var_dump($color);


    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";



    $name[5] = "sujon";
    $name[8] = "hira";
    $name[15] = "atik";

    array_push($name, "arif");
    var_dump($name);

    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

    // Practing from CHATGPT
/*
    Question-1: What will be the correct syntax to change the third value from 'Elephant' to 'Lion'?

    Question-2: What will be the correct syntax to remove the value 'Green' from the array?

    Question-3: What will be the correct syntax to replace the value 30 with 99?

    Question-4: What will be the correct syntax to add a new student, 'Mike', at the end of the array?

    Question-5: Challenge: Write a script to:
                Add "Purple" at the end.
                Remove the first element.
                Modify "Green" to "Orange"

    Question-6: Calculate the number of elements in this array visually.            


*/



    $animals = array('Cat', 'Dog', 'Elephant');

    $animals[2] = "Lion";
    var_dump($animals);

    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

    $colors = array('Red', 'Blue', 'Green', 'Yellow');
    unset($color[2]);
    $colors = array_diff($colors, array('Green'));
    var_dump($colors);

    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

    $numbers = array(10, 20, 30, 40, 50);
    $numbers[2] = 99;
    var_dump($numbers);
    
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

    $students = array('John', 'Jane', 'Sam', 'Sara');
    array_push($students, 'Mike');
    var_dump($students);


    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";



    $colors = ["Red", "Blue", "Green", "Yellow"];
    array_push($colors, "purple");
    unset($colors[0]);
    $colors= array_diff($colors, array("Red"));
    var_dump($colors);
    $colors[2] = "Orange";
    var_dump($colors);


    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";


    $data = [10, "apple", 15.6, true, "hello"];
    echo count($data);


    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

    echo '---- PHP Associative Arrays ----';
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

    /*  .....PHP Associative Arrays.....

    Associative arrays are arrays that use named keys that you assign to them.
    
    
    */

    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    var_dump($car);
    echo $car["model"]; //Access Associative Arrays
    echo "\n";
    echo $car["year"]; // Access Associative Arrays


    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";


    $car["year"] = 2024; //Change value of Year key
    var_dump($car);


    $car["brand"] = "Suzuki"; ////Change value of brand key
    var_dump($car);


    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    //Loop Through an Associative Array
    foreach ($car as $x => $y) { 
      echo "$x: $y \n";
    }

    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

    foreach ($car as $x => $y) { 
        echo $x. " = " . $y. "\n";
    }




    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    
    
/*
    Practice from CHATGPT

    Task1: Creating an Associative Array
    Create an associative array to store the following details of a person:

    Name: John Doe
    Age: 30
    Country: USA
    Occupation: Developer


    Print the array.

*/
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

    $person = array("name" => "John Doe", "age" => 30, "country" => "USA", "occupation" => "developer");
    var_dump($person);
    $person["salary"] = 75000;
    print_r($person);
    $person["age"] = 31;
    print_r($person);
    unset($person["country"]);
    print_r($person);

    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";


    echo "Name: {$person["name"]} \n";
    echo "Occupation: {$person["occupation"]}";



    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";




    $person = array("name" => "John Doe", "age" => 30, "country" => "USA", "occupation" => "developer");
         
    foreach ($person as $key => $value) {
        echo "$key: $value\n";
    }



    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "---- PHP Multidimensional Arrays ----";
    echo "\n";
    echo "\n";

/* ...... PHP Multidimensional Arrays .....

    A multidimensional array is an array containing one or more arrays.



*/

    $foods = [
        'vegetables' => explode(', ', 'brinjal, brocolin, carrot, capsicam'),
        'fruits' => explode(', ', 'orange, banana, apple'),
        'drinks' => explode(', ', 'water, milk'),
    ];

    print_r($foods);

    array_push($foods['drinks'], 'oranage juice');
    print_r($foods);
    echo "\n";
    echo "\n";
    echo $foods['vegetables'][2];
    echo "\n";
    echo "\n";
    echo $foods['fruits'][1];
    echo "\n";
    echo "\n";
    echo $foods['drinks'][0];


    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";



    $book = [
        'scienceBook' =>[
            'physics' =>[
                'physics-I',
                'physics-II',
                'physics-III',
                'physics-IV'
            ]
        ],
    ];

    print_r($book);

    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";


    echo $book['scienceBook']['physics'][2];
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";

$test = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,4444,[5,6,7]]
];

print_r($test);
echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo $test[3][4][2];

unset($test[3][3]);

echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";
print_r($test);

echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";

echo $test[3][4][2];
echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";
echo "\n";

echo count($test[3]);



















?>