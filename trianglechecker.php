<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Triangle</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="side1" required>
        <input type="number" name="side2" required>
        <input type="number" name="side3" required>
        <button type="submit">Check Triangle</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $side1 = floatval($_POST["side1"]);
            $side2 = floatval($_POST["side2"]);
            $side3 = floatval($_POST["side3"]);

            if(($side1 + $side2 > $side3) && ($side1 + $side3 > $side2) && ($side2 + $side3 > $side1)){
                echo "Valid Triangle";
            }else{
                echo "Invalid Triangle";
            }
        }
    
    ?>
</body>
</html>