<?php 
//Write a function that takes a string and counts the number of vowels (a, e, i, o, u) in it.//

function countVowels($str){
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    // Convert the string to lowercase to count both uppercase and lowercase vowels

    $str = strtolower($str);


    // Loop through each character and check if it's a vowel

    for($i=0; $i < strlen($str); $i++){
        if(in_array($str[i], $vowels)){
            $count++;
        }
    }
    return $count;

}

echo countVowels("Hello World!");






?>