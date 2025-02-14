<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check if a number Even or Odd</title>
</head>
<body>
    <h2>Check if the number is Even or Odd</h2>
    <form method="post">
        <label>Enter a Number:</label>
        <input type="number" name="number" required>
        <button type="submit" name="check">Check</button>
    </form>
    <?php
        //function to check if the number even or odd

        function checkEvenOrOdd($num){
            return($num % 2 == 0)?"Even":"Odd";
        }

        //Process the form submission
        if(isset($_POST["check"])) {
            $num = $_POST["number"];
            $result = checkEvenOrOdd($num);
            
            echo "<h3 style='color:blue'>The number $num is: <strong>$result</strong></h3>";
        }
    
    
    
    
    
    
    
    
    ?>
</body>
</html>