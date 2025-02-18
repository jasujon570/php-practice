<!-- index.php -->
<?php
// Start the session to store tasks in session
session_start();

// Initialize tasks if not set
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

// Add task to the list
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['task'])) {
    $task = htmlspecialchars($_POST['task']);
    $_SESSION['tasks'][] = $task;
}

// Delete a task
if (isset($_GET['delete'])) {
    $taskIndex = $_GET['delete'];
    unset($_SESSION['tasks'][$taskIndex]);
    $_SESSION['tasks'] = array_values($_SESSION['tasks']); // Re-index the array
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>

<h1>To-Do List</h1>

<!-- Form to Add Tasks -->
<form action="index.php" method="POST">
    <input type="text" name="task" placeholder="Enter a task" required>
    <button type="submit">Add Task</button>
</form>

<h2>Task List:</h2>
<ul>
    <?php
    // Display tasks
    if (count($_SESSION['tasks']) > 0) {
        foreach ($_SESSION['tasks'] as $index => $task) {
            echo "<li>" . htmlspecialchars($task) . " <a href='?delete=$index'>Delete</a></li>";
        }
    } else {
        echo "<li>No tasks added yet.</li>";
    }
    ?>
</ul>

</body>
</html>
