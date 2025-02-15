<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo isset($_POST['color']) ? htmlspecialchars($_POST['color']) : '#ffffff'; ?>">
    
    <form method="post">
        <label for="color">Select a background color:</label>
        <input type="color" id="color" name="color" value ="<?php echo isset($_POST['color']) ? htmlspecialchars($_POST['color']) : '#ffffff'; ?>">
        <button type="submit">Apply</button>
    </form>
</body>
</html>