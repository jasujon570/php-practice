<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Validity Checker</title>
</head>
<body>
    <h2>Check if Three Numbers Can Form a Triangle</h2>
    <form action="" method="POST">
        <label>Enter side 1</label>
        <input type="number" name="side1" step="any" required><br><br>

        <label>Enter side 2</label>
        <input type="number" name="side2" step="any" required><br><br>

        <label for="">Enter side 3</label>
        <input type="number" name="side3" step="any" required><br><br>

        <button type="submit" name="check">Check Triangle</button>

    </form>
    <?php
        // Function to check if three sides can form a valid triangle{ A triangle is valid if the sum of any two sides is greater than the third side}

        function isValidTriangle($a, $b, $c){
            return($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a);
        }

        //process to submission form

        if(isset($_POST["check"])){
            $side1 = floatval($_POST["side1"]);
            $side2 = floatval($_POST["side2"]);
            $side3 = floatval($_POST["side3"]);



            //validate input
            if($side1 <=0 || $side2 <=0 || $side3 <=0){
                echo "<h3 stye='color:red';>Please enter valid positive number</h3>";
            } else{
                if(isValidTriangle($side1, $side2, $side3)) {
                    echo "<h3 style='color:green';>The give sides $side1,$side2,$side3 form a valid triangle ✅</h3>";
                }else {
                    echo "<h3 stye='color:red';>The give sides $side1, $side2, $side3 CANNOT form a valid triangle ❌</h3>";
                }
            }
        }
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>