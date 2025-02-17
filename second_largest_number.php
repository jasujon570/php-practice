<?php 

    function secondLargest($arr) {

        $arr = array_unique($arr);
        rsort($arr);

        if(count($arr) < 2) {
            return "There is no second largest number";
        }
        return $arr[1];
    }

    $array = [14, 15, 25, 27, 84, 21];
    echo "The second largest number is: " . secondLargest($array); 


?>