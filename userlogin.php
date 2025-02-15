<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="" method="POST">
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //get user input
            $username = $_POST["username"];
            $password = $_POST["password"];
            
             // Validate input (not empty)

            if(empty($username) || empty($password)){
            echo "<p style='color:red;'>Both fields are required</p>";
            }
             //check credentials

            elseif($username === "admin" && $password === "1234"){
                echo "<p style= 'color:green;'>Login successfull</p>";
            }else {
                echo "<p style='color:blue;'>Invalid credential</p>";
            }
        }
    ?>
</body>
</html>