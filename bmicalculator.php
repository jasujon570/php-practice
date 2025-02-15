<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
</head>
<body>
    <h2>Body Mass Index (BMI) Calculator</h2>

    <form method="post">
        <label">Enter Weight (kg)</label>
        <input type="number" name="weight" step="0.1" required>

        <label>Enter Height (m)</label>
        <input type="number" name="height" step="0.1"required>

        <button type="submit" name="calculate">Calculate BMI</button>
    </form>
    <?php
        if(isset($_POST["calculate"])){
            $weight = $_POST["weight"];
            $height = $_POST["height"];
            

            if ($height > 0) {
                $bmi = $weight / ($height*$height); // BMI formula
                $bmi = number_format($bmi, 2); // Format to 2 decimal places

                // Determine BMI category

                if ($bmi < 18.5) {
                    $category = "Underweight";
                    $color = "blue";
                }elseif ($bmi >= 18.5 && $bmi < 24.9) {
                    $category = "Normal Weight";
                    $color = "green";
                }elseif ($bmi >= 25 && $bmi < 29.9){
                    $category = "Overweight";
                    $color = "oranage";
                }else {
                    $category = "Ovese";
                    $color = "red";
                }

                //Display result
                
                echo "<p>Your BMI: <strong style='color:$color';>$bmi</strong></p>";
                echo "<p>Category: <strong style='color:$color';>$category</strong></p>";
            }else {
                echo "<p style='color:red';>Height must be greater than zero!</p>";
            }
        } 
    ?>


</body>
</html>