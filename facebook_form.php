<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="Your Name" required><br><br>
        <textarea name="feedback" placeholder="Your Feedback" required></textarea>
        <button type="submit">Submit Feedback</button>
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // get form data

            $name = trim($_POST["name"]);
            $feedback = trim($_POST["feedback"]);

            if(empty($name) || empty($feedback)) {
                echo "<p style='color:red;'>All fields are required ❌</p>";
            }else {
                echo "<p style='color:green;'>Thank you, $name, for your feedback! ✅</p>";
            }
        }
    
    
    ?>
</body>
</html>