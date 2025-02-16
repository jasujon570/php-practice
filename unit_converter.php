<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Conversion</title>
</head>
<body>
    <h2>Unit Conversion</h2>
    <form method="post">
        <input type="number" name="tempdata" placeholder="Enter Temperature" step="0.01" required>
        <select name="unit">
            <option value="celsius">Celsius &deg;C</option>
            <option value="fahrenheit">Fahrenheit &deg;F</option>
        </select>
        <button type="submit" name="convert">Convert</button>
    </form>
    <?php
        function fahrenheitToCelsius($fahrenheit){
            return ($fahrenheit - 32) * 5/9;
        }
        function celsiusToFahrenheit($celsius){
            return ($celsius*9/5)+32;
        }
        

        if(isset($_POST["convert"])){
            $tempdata = $_POST["tempdata"];
            $unit = $_POST["unit"];


            if($unit == "celsius"){
                $converted = round(fahrenheitToCelsius($tempdata), 2);
                echo "<h3>$tempdata &deg;F is equal to $converted &deg;C</h3>";
            } else {
                $converted = round(celsiusToFahrenheit($tempdata), 2);
                echo "<h3>$tempdata &deg;C is equal to $converted &deg;F</h3>";
            }
        }
    
    ?>
</body>
</html>