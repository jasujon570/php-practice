<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
</head>
<body>
    <h2>Contact Us!</h2>

    <form method="POST" action="">
        Name: <input type = "text" name = "name"> <br><br>
        Email: <input type = "text" name = "email"> <br><br>
        Subject: <input type = "text" name = "subject"> <br><br>
        Message: <textarea name = "message"></textarea> <br><br>
        <input type= "submit" name = "submit" value = "Send">
    </form>
    
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //initialize variables
        $name = $email = $subject = $message = "";
        $nameErr = $emailErr = $subjectErr = $messageErr = "";

        //validate name

        if(empty($_POST["name"])){
            $nameErr = "Name is required";
        } else {
            $name = cleanInput($_POST["name"]);

            if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
            $nameErr = "Only letters and spaces are allowed";
        }


        // validate email 

        if(empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = cleanInput($_POST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }  
        }

        // validate subject


        if(empty($_POST["subject"])) {
            $subjectErr = "Subject is required";
        }else {
            $subject = cleanInput($_POST["subject"]);
        }


        // validate message


        if(empty($_POST["message"])){
            $messageErr = "Message is required";
        } else {
            $message = cleanInput($_POST["message"]);
        }


        // if no errors, process the form

        if(empty($nameErr) && empty($emailErr) && empty($subjectErr) && empty($messageErr)){
            echo "<h3>Form successfully submitted</h3>";
            echo "<p><strong>Name: </strong> $name</p>";
            echo "<p><strong>Email: </strong> $email</p>";
            echo "<p><strong>Subject: </strong> $subject</p>";
            echo "<p><strong>Message: </strong> $message</p>";
        } else {
            echo "<h3>Fix the following errors</h3>";
            echo "<p>$nameErr</p>";
            echo "<p>$emailErr</p>";
            echo "<p>$subjectErr</p>";
            echo "<p>$messageErr</p>";
        }
    }

    
    function cleanInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


?>

</body>
</html>