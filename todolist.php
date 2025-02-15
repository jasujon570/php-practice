<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        body {
            font-family: arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            backgroud: $f4f4f4;
            margin: 5px auto;
            padding: 10px;
            width: 300px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
   <h2> To-Do List</h2>

   <form action="" method="post">
    <input type="text" name="task" placeholder="Enter your task..." required>
    <button type="submit" name="add">Add Task</button>
   </form>
   <?php
        session_start();

        if(!isset($_SESSION['tasks'])){
            $_SESSION['tasks'] = [];
        }

        if(isset($_POST['add'])){
            $task = trim($_POST['task']);
            if(!empty($task)){
                $_SESSION['tasks'][] = htmlspecialchars($task);
            }
        }

        if(!empty($_SESSION['tasks'])){
            echo "<h3> Your Tasks:</h3><ul>";
            foreach($_SESSION['tasks'] as $task){
                echo "<li>$task</li>";
            }
            echo "</ul>";
        }



   ?>
</body>
</html>