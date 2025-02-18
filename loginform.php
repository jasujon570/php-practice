<?php
session_start();

// Hardcoded users
$users = [
    "admin" => "1234",
    "user" => "abcd"
];

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";
    
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION["user"] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <?php if ($error): ?>
        <p style="color: red;"> <?= htmlspecialchars($error) ?> </p>
    <?php endif; ?>
    <form metho="post">
        <label>username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>


</body>
</html>