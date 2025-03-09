<?php 
    // Arrays Challenges:

    // 1. Merge two arrays: Merge the arrays [1, 2, 3] and [4, 5, 6] into one array.

    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6] ;

    $newArray = array_merge($array1, $array2);

    print_r($newArray);

    echo "\n";
    echo "\n";


    // 2. Find the largest number in an array: Find the largest number in the array [1, 45, 32, 9, 67].

    $numbers = [1, 45, 32, 9, 67];

    $findTheLargestNumber = max($numbers);
    echo "The largest number is: " . $findTheLargestNumber;

    echo "\n";
    echo "\n";


    // 3. Check if an element exists in an array: Check if the number 50 exists in the array [10, 20, 30, 40].

    $numbersOfArray = [10, 20, 30, 40];

    if(in_array(50, $numbersOfArray)) {
        echo "50 is in the array";
    } else {
        echo "50 is not in the array";
    }

    echo "\n";
    echo "\n";

    // 4. Count the elements in an array: Count the number of elements in the array [1, 2, 3, 4, 5].

    $numbersArray = [1, 2, 3, 4, 5];
    $count = count($numbersArray);
    echo "The number of elements in the array is: " . $count;


    echo "\n";
    echo "\n";


    // 5. Get the first element of an array: Get the first element from the array ['apple', 'banana', 'cherry'].

    $array = ['apple', 'banana', 'cherry'];
    echo $array[0];

    echo "\n";
    echo "\n";

    // 6. Remove a specific element from an array: Remove the element "banana" from the array ['apple', 'banana', 'cherry'].


    // Find the key of 'banana' and remove it using array_splice

    $key = array_search('banana', $array); // Find the index of 'banana'
    if ($key !== false){
        array_splice($array, $key, 1);
    }
    print_r($array);

    echo "\n";
    echo "\n";

    // 7. Find the sum of elements in an array: Find the sum of the numbers in the array [10, 20, 30].

    $arrayNumbers = [10, 20, 30];

    $sumOfArray = array_sum($arrayNumbers);

    echo $sumOfArray;

    echo "\n";
    echo "\n";

    // 8. Get the unique values of an array: Get the unique values from the array [1, 2, 2, 3, 4, 4].


    $theArray = [1, 2, 2, 3, 4, 4];
    $getTheQuniqueArray = array_unique($theArray);
    print_r($getTheQuniqueArray);

    echo "\n";
    echo "\n";


    // 9. Sort an array in ascending order: Sort the array [5, 3, 8, 1, 4] in ascending order.

    $numbers1 = [5, 3, 8, 1, 4];
    sort($numbers1);
    print_r($numbers1);

    echo "\n";
    echo "\n";


    // 10. Reverse an array: Reverse the array ['a', 'b', 'c', 'd'].

    $arrayString = ['a', 'b', 'c', 'd'];
    $arrayReverse = array_reverse($arrayString);
    print_r($arrayReverse);

    echo "\n";
    echo "\n";

    // Find the smallest number in an array: Find the smallest number in the array [10, 5, 100, 2, 70]

    $inNumberArray = [10, 5, 100, 2, 70];

    $findTheSmallestNumber = min($inNumberArray);
    print_r($findTheSmallestNumber);

    echo "\n";
    echo "\n";

    // Combine two arrays into an associative array: Combine the arrays ['name', 'age', 'city'] and ['Alice', 25, 'New York'] into an associative array where the first array provides the keys and the second one provides the values.

    $firstArray = ['name', 'age', 'city'];
    $secondArray = ['Alice', 25, 'New York'];

    $combineArray = array_combine($firstArray, $secondArray);

    print_r($combineArray);
    

    echo "\n";
    echo "\n";

    // Check if an array is empty: Check if the array [] is empty. If it is, print "Array is empty".

    $emptyArray = [];

    if(empty($emptyArray)) {
        echo "Array is empty";
    } else {
        echo "Array is not empty";
    }

    echo "\n";
    echo "\n";


    // Remove duplicate values from an array: Given the array [1, 2, 2, 3, 4, 5, 5], remove the duplicates and print the new array.

    $dupliArray = [1, 2, 2, 3, 4, 5, 5];
    $newArray = array_unique($dupliArray);
    print_r($newArray);

    echo "\n";
    echo "\n";

    // Find the average of the elements in an array: Calculate the average of the numbers in the array [10, 20, 30, 40, 50].

    $givenArray = [10, 20, 30, 40, 50];
    $averageArray = array_sum($givenArray) / count($givenArray);
    echo "The average is: " . $averageArray;

    echo "\n";
    echo "\n";

    // Filter even numbers from an array: From the array [1, 2, 3, 4, 5, 6], create a new array that contains only even numbers.

    $myArray = [1, 2, 3, 4, 5, 6];

    $evenNumbers = array_filter($myArray, function($num) {
        return $num % 2 == 0;
    });
    
    print_r($evenNumbers);



















?>