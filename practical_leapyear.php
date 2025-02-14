<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
</head>
<body>
    <h2 style='color:red';>Check if a year is a leap year</h2>
    <form action="" method="post">
        <label>Enter a year:</label>
        <input type="number" name="year" required>
        <button type="submit" name="check">check</button>
    </form>

    <?php
        //function to check if a year is a leap year 

        function checkLeapYear($y){
            return (($y % 4 ==0 && $y % 100 !=0) || ($y % 400 ==0))? "{$y} is a leap year":"{$y} is not a leap year";
        }
        //process the form submission

        if(isset($_POST["check"])){
            $y = $_POST["year"];
            $result = checkLeapYear($y);

            echo "<h3 style='color:blue';> The $result</h3>";
        }
    
    
    
    
    
    
    
    ?>
</body>
</html>