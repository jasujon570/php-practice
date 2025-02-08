<?php
// echo $_SERVER['HTTP_USER_AGENT'];
    // echo PHP_EOL;

    // echo $_SERVER['REQUEST_METHOD'];
    // echo PHP_EOL;

    // ECHO $_SERVER['REMOTE_ADDR'];


//     if($_SERVER['REQUEST_METHOD'] == "POST") {
//         echo $_REQUEST['fname'];
//     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        <input type="submit">
        <input type = "submit" value = "Vanis!">
    </form>
    
</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Name: " . $_REQUEST['name'];
    echo "\n";
    echo "Age: " . $_REQUEST['age'];
}
?>
