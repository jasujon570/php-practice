<?php 

    function isPalindrome($num) {
        //convert number to string
        $strNum = strval($num);

        //Reverse the string
        $revNum = strrev($strNum);


        //check if the origin string and reversed string are same

        if($strNum === $revNum) {
            return "$num is a Palindrome";
        } else {
            return "$num is not a Palindrome";
        }
    }


    echo isPalindrome(121);
    echo "<br>";
    echo isPalindrome(123);
    echo "<br>";
    echo isPalindrome('madam');
    echo "<br>";
    echo isPalindrome('racecar');


?>