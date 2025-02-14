<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius to Fahrenheit Converter</title>
</head>
<body>
    <h2>Celsius to Fahrenheit Converter</h2>

    <form method="post">
        <label>Enter temparature in Celsius:</label>
        <input type="number" name="celsius" required>
        <button type="submit" name="convert">Convert</button>
    </form>
    <?php
        //function to convert Celsius to Fahrenheit

        function celsiusToFahrenheit($celsius) {
            return ($celsius * 9/5) + 32;
        }

        //process form submission

        if(isset($_POST["convert"])) {
            $celsius = $_POST["celsius"];
            $fahrenheit = celsiusToFahrenheit($celsius);

            echo "<h3>$celsius °C is equal to <strong>$fahrenheit °F</strong></h3>";
        }
    
    
    
    
    
    
    
    
    ?>



</body>
</html>