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
            <option value="modulus">Modulus (%)</option>
        </select>

        <button name="calculate" value="submit">Calculate</button>
    </form>

    <?php
        function calculate($num1, $num2, $operation){

            if($num1 < 0 || $num2 < 0) {
                return "Error! Only positive numbers are allowed";
            }
            if($operation == "Add"){
                return $num1+$num2;
            }elseif($operation == "Substraction"){
                return $num1-$num2;
            }elseif($operation == "Multiply"){
                return $num1*$num2;
            }elseif ($operation == "Divide") {
                return ($num2 == 0) ? "Error! Division by zero": $num1 / $num2;
            }elseif ($operation == "modulus") {
                return ($num2 == 0) ? "Error! Modulus by zero" : $num1 % $num2;
            }
            else {
                return "Invalid operation";
            }
        }    
        //processing the form submission

        if(isset($_POST["calculate"])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            //call the function and display the result
            $result = calculate($num1, $num2, $operation);
            echo "<h3> Result: $result</h3>";
        }
    ?>    
</body>
</html>