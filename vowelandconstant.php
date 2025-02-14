<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel and Constant Checker</title>
</head>
<body>
    <h2>Vowel and Constant Checker</h2>
    <form method="POST">
        <labe>Enter a letter</label>
        <input type="text" name="letter" maxlength="1" required>
        <button type="submit" name="check">Check</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //get the user input
            $letter = strtolower($_POST["letter"]);

            // check if input is a single alphabet letter
            if(!ctype_alpha($letter)){
                echo "<p style='color:red';>Please enter a valid letter.</p>";
            } else {
                //Define vowels
                $vowels = ['a', 'e', 'i', 'o', 'u'];

                //check if it's a vowel or constant

                if(in_array($letter, $vowels)){
                    echo "<p style='color:green';>The letter <b>$letter</b> is a vowel.</p>";
                }else {
                    echo "<p style='color: blue';>The letter <b>$letter</b> is a constant.</p>";
                }
            }
        }
    
    
    
    
    ?>
</body>
</html>