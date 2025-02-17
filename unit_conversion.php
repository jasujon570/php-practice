<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unir Conversion</title>
</head>
<body>
    <h2>Unit Conversion</h2>
    <form method="post">
        <input type="number" name="value" placeholder="Enter your value" step="0.01" required>
        <select name="Conversion_type">
            <option value="c_to_f">Celsius (&deg;C)</option>
            <option value="f_to_c">Fahrenheit (&deg;F)</option>
            <option value="f_to_inch">Feet to Inch</option>
            <option value="inch_to_f">Inch to Feet</option>
            <option value="cm_to_meter">Centimeter to Meter</option>
        </select>
        <button type="submit" name="conversion">Convert</button>
    </form>
    <?php
        function celsiusToFahrenheit($celsius){return($celsius * 9/5)+32;}
        function fahrenheitToCelsius($fahrenheit){return($fahrenheit - 32) * 5/9;}
        function feetToInch($feet){return($feet *12);}
        function inchToFeet($inch){return($inch / 12);}
        function centimeterToMeter($cm){return($cm / 100);}


        if(isset($_POST["conversion"])){
            $value = $_POST["value"];
            $Conversion_type = $_POST["Conversion_type"];


            if(is_numeric($value)){
                switch ($Conversion_type){
                    case "c_to_f": $converted = round(celsiusToFahrenheit($value), 2); $unit = "&deg;F"; break;
                    case "f_to_c": $converted = round (fahrenheitToCelsius($value), 2); $unit = "&deg;C"; break;
                    case "f_to_inch": $converted = round (feetToInch($value), 4); $unit = "inch"; break;
                    case "inch_to_f": $converted = round (inchToFeet($value), 4); $unit = "feet"; break;
                    case "cm_to_meter": $converted = round (centimeterToMeter($value), 2);$unit = "meter"; break;
                    default: $converted = "Invalid Conversion"; $unit = "";
                }
                echo "<h3>Result: $converted $unit</h3>";
            }else {
                echo "<h3 style='color:red;'>Please enter a valid number.</h3>";
            }








        }
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>