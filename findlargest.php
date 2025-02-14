<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest Number</title>
</head>
<body>
    <h2>Find Largest and Smallest Number</h2>


    <form method="post">
        <label>Enter the first number:</label>
        <input type="number" name="num1" step="any" required>

        <label>Enter the second number:</label>
        <input type="number" name="num2" step="any" required>

        <label>Enter the third number:</label>
        <input type="number" name="num3" step="any" required>

        <button type="submit" name="findlargestsmallest">Find Largest & Smallest</button>
    </form>
    
    <?php
        //Function to find the largest number

        function findlargest($num1,$num2,$num3) {
            if($num1 == $num2 && $num2 == $num3) {
                return "All numbers are equal";
            } else {
                return max($num1, $num2, $num3);
            }
        }

        //Function to find the smallest number
        function findsmallest($num1, $num2, $num3){
            return min($num1, $num2, $num3);
        }
        //Processing the form submission
        if (isset($_POST["findlargestsmallest"])) {
            if (empty($_POST["num1"]) || empty($_POST["num2"]) || empty($_POST["num3"])) {
                echo "<h3 style='color: red;'>Please enter all numbers.</h3>";
            } else {
                // Convert input to float for decimal support
                $num1 = floatval($_POST["num1"]);
                $num2 = floatval($_POST["num2"]);
                $num3 = floatval($_POST["num3"]);
        
                // Call functions and display results
                $largest = findlargest($num1, $num2, $num3);
                $smallest = findsmallest($num1, $num2, $num3);
                
                echo "<h3>The largest number is: $largest</h3>";
                echo "<h3>The smallest number is: $smallest</h3>";
            }
        }
    ?>
</body>
</html>