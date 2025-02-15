<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form with Validation</title>
</head>
<body>
    <h2>User Registration Form with Validation</h2>
        <form action="" method="POST">
        <lable>Name: </label>
        <input type="text" name="name" required><br><br>

        <label for="">Email: </label>
        <input type="text" name="email" required><br><br>

        <label for="">Password: </label>
        <input type="text" name="password" minlenth="6" required><br><br>
        <label for="">Confirm Password:</label>
        <input type="text" name="confirm_password" required><br><br>
        <button type="submit">Register</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            ///get from data
            $name = trim($_POST["name"]);
            $email = trim($_POST["email"]);
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];

            if(empty($name)|| empty($email) || empty($password) || empty($confirm_password)) {
                echo "<p style='color:red';>All field are required </p>";
            }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p style='color:red';>Invalid email format</p>";
            }elseif(strlen($password)<0){
                echo "<p style='color:red';>Password must be at least 6 characters</p>";
            }elseif ($confirm_password !== $password){
                echo "<p style='color:red';>Password do not matach!</p>";
            }else {
                echo "<p style='color:green';>Registration successful!</p>";
            }



        }
    ?>
</body>
</html>