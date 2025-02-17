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
        <select name="conversion_type">
            <option value="celsius">Celsius &deg;C</option>
            <option value="fahrenheit">Fahrenheit &deg;F</option>
            <option value="km_to_mi">Kilometers to Miles</option>
            <option value="mil_to_km">Miles to Kilometers</option>
            <option value="kg_to_lb">Kilogram to Pounds</option>
            <option value="lb_to_kg">Pounds to Kilogram</option>
            <option value="cm_to_m">Centimeters to Meters</option>
            <option value="m_to_cm">Meters to Centimeters</option>
            <option value="cm_to_mi">Centimeter to Millimeters</option>
            <option value="mi_to_cm">Millimeters to Centimeters</option>
        </select>
        <button type="submit" name="convert">Convert</button>
    </form>
    <?php
        function fahrenheitToCelsius($fahrenheit){return ($fahrenheit - 32) * 5/9;}
        function celsiusToFahrenheit($celsius){return ($celsius*9/5)+32;}
        function kmToMiles($km) {return ($km * 0.621371);}
        function milesToKm($miles) {return($miles / 1.60934);}        
        function kgToPounds ($kg) {return($kg * 2.20462);}
        function poundsToKg($lb) {return($lb * 0.453592);}
        function centimetersToMeters($cm) {return($cm / 100);}
        function metersToCentimeters($m) {return($m * 100);}
        function centimetersToMillimeters ($cmm) {return($cmm * 10);}
        function millimetersToCentimeters ($mm) {return($mm / 10);}

        if(isset($_POST["convert"])){
            $tempdata = $_POST["tempdata"];
            $conversion_type = $_POST["conversion_type"];


            if($conversion_type == "celsius"){
                $converted = round(fahrenheitToCelsius($tempdata), 2);
                echo "<h3>$tempdata &deg;F is equal to $converted &deg;C</h3>";
            } elseif($conversion_type == "fahrenheit") {
                $converted = round(celsiusToFahrenheit($tempdata), 2);
                echo "<h3>$tempdata &deg;C is equal to $converted &deg;F</h3>";
            }elseif($conversion_type == "km_to_mi") {
                $converted = round(kmToMiles($tempdata), 2);
                echo "<h3>$tempdata Kilometers is equal to $converted Miles</h3>";
            }elseif($conversion_type == "mil_to_km") {
                $converted = round(milesToKm($tempdata), 2);
                echo "<h3>$tempdata Miles is equal to $converted Kilometers</h3>";
            }elseif($conversion_type == "kg_to_lb") {
                $converted = round(kgToPounds($tempdata), 2);
                echo "<h3>$tempdata Kg is equal to $converted Ponds</h3>";
            }elseif($conversion_type == "lb_to_kg") {
                $converted = round(poundsToKg($tempdata), 2);
                echo "<h3>$tempdata Ponds is equal to $converted Kg</h3>";
            }elseif($conversion_type == "cm_to_m") {
                $converted = round (centimetersToMeters($tempdata), 2);
                echo "<h3>$tempdata Centimeters is equal to $converted Meters</h3>";
            }elseif($conversion_type == "m_to_cm") {
                $converted = round (metersToCentimeters($tempdata), 2);
                echo "<h3>$tempdata Meters is equal to $converted Centimeters</h3>";
            }elseif($conversion_type == "cm_to_mi") {
                $converted = round (centimetersToMillimeters ($tempdata), 2);
                echo "<h3>$tempdata Centimeters is equal to $converted Millimeters</h3>";
            }else{
                $converted = round (millimetersToCentimeters ($tempdata), 2);
                echo "<h3>$tempdata Millimeters is equal to $converted Centimeters</h3>";
            }
        }    
    
    ?>
</body>
</html>