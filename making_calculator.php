<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>
<form method="post">
    <label>Enter First Number:</label>
    <input type="number" name="num1" required>
    
    <label>Enter Second Number:</label>
    <input type="number" name="num2" required>

    <label>Select Operation:</label>
    <select name="operation">
        <option value="add">Addition (+)</option>
        <option value="subtract">Subtraction (-)</option>
        <option value="multiply">Multiplication (*)</option>
        <option value="divide">Division (/)</option>
    </select>

    <button type="submit" name="calculate">Calculate</button>
</form>

<?php
if (isset($_POST["calculate"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];
    $result = "";

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 == 0) {
                $result = "Error! Division by zero.";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "Invalid Operation";
    }

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>