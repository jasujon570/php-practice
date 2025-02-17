<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
</head>
<body>
    <h2>Checking Leap Year</h2>
    <form method="post">
        Enter a Year: <input type="number" name="year" required>
        <button type="submit" name="check">Check</button>
    </form>
    <?php
        function isLeapYear($year){
            return ($year % 4 == 0 && $year % 100 != 0 || ($year % 400 ==0));
        }

        if(isset($_POST["check"])){
            $year = $_POST["year"];

            if(is_numeric($year) && $year > 0){
                if(isLeapYear($year)) {
                    echo "<h3><b>$year</b> is a leap year</h3>";
                } else {
                    echo "<h3><b>$year</b> is not a leap year</h3>";
                }
            } else {
                echo "<h3 style='color:red;'>Please enter a valid year.</h3>";
            }
        }
    
    
    
    ?>
</body>
</html>