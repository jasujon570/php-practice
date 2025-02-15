<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Voter</title>
</head>
<body>
    <h2>Age Verification For:</h2>

    <form method="post">
        <label name="age">Enter your age:</label>
        <input type="number" name = "age" required>
        <button type="submit">Check</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            //get form data
            $age = floatval($_POST["age"]);

            if($age >= 18){
                echo "<p style='color:green;'>You are eligible to vote!</p>";
            }else {
                echo "<p style='color:red';>Sorry, your are not eligible!</p>";
            }
        }
    ?>
</body>
</html>