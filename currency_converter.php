<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
</head>
<body>
    <h2>Currency Converter</h2>

    <form method="post">
        Enter amount in USD: <input type="number" name="amount" step="0.01" required>
        <select name="currency">
            <option value="EUR">Euro (EUR)</option>
            <option value="GBP">British Pound (GBP)</option>
            <option value="INR">Indian Rupee (INR)</option>
        </select>
        <input type="submit" name="convert" value="Convert">
    </form>
    <?php
        if(isset($_POST["convert"])) {
            $amount = $_POST["amount"];
            $currency = $_POST["currency"];


            $rates = [
                "EUR" => 0.96,
                "GBP" => 0.79,
                "INR" => 86.77
            ];

            if(array_key_exists($currency, $rates)) {
                $converted_amount = $amount * $rates[$currency];
                echo "<p>Converted Amount: <strong>" . number_format($converted_amount, 2) . " $currency</strong></p>"; 
            }else{
                echo "<p style='color:red';>Invalid currency selection</p>";
            }
        }

    ?>
</body>
</html>