<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>PHP Calculator</h2>

    <form method="POST">
        <label> Enter First Number:</label>
        <input type="number" name="num1" required>

        <label> Enter Second Number:</label>
        <input type="number" name="num2" required>

        <label>Select Operation:</label>
        <select name="operation">
            <option value="Add">Addition (+)</option>
            <option value="Substract">Substration (-)</option>
            <option value="Multiply">Multiplication (*)</option>
            <option value="Divide">Division (/)</option>
        </select>

        <button name="calculate" value="submit">Calculate</button>
    </form>

    <?php 
    if(isset($_POST["calculate"])) {
        //initialize variables
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $opration = $_POST["operation"];
        $result = "";

        switch($opration){
        case "Add":
        $result = $num1+$num2;
        break;
        case "Substraction":
        $result = $num1-$num2;
        break;
        case "Multiplication":
        $result = $num1*$num2;
        break;
        case "Divide":
        if ($num2 == 0){
        $result = "Error! Division by zero";
        }else {
        $result = $num1/$num2;
        }
        break;
        default:
        $result = "Invalid opreation";
        }
        echo "<h3>Result: $result</h3>";
    }    
    ?>
</body>
</html>