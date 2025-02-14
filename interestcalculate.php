<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple interest calculator</title>
</head>
<body>
    <h2>simple interest calculator</h2>

    <form action="" method="post">
        <label>Principal Amount ($):</label>
        <input type="number" name = "principal" step="any" required> <br><br>

        <label>Inerest Rate (% per year):</label>
        <input type="number" name="rate" step="any" required><br><br>

        <label>Time (years): </label>
        <input type="number" name="time" step="any" required> <br><br>

        <button type="submit" name="calculate">Calculate</button>

    </form>
    <?php
       function simpleinterest($p, $r, $t){
        return ($p * $r* $t)/100;
       }

       if(isset($_POST["calculate"])){
        $principal = $_POST["principal"];
        $rate = $_POST["rate"];
        $time = $_POST["time"];

        //validate input
            if($principal <=0 || $rate <=0 || $time <=0){
                echo "Plese enter valid positive values";
            } else {
                $interest = simpleinterest($principal, $rate, $time);
                $totalAmount = $principal + $interest;

                echo "<h3>Simple interest is: $$interest</h3>";
                echo "<h3>Total Amount is: $$totalAmount</h3>";
            }
       }
    ?>
</body>
</html>