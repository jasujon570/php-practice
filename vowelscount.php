
<?php 

    function countMyVowelsInString($str) {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;


        $str = strtolower($str);

        for($i=0; $i < strlen($str); $i++){
            if(in_array($str[$i], $vowels)){
                $count++;
            }
        }
        return $count;
    }

    echo countMyVowelsInString("keep patient! I am learning coding");



?>