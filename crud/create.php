<?php
session_start();

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
}

// Handle create
if (isset($_POST['create'])) {
    $task = htmlspecialchars($_POST['task']);
    $description = htmlspecialchars($_POST['description']);
    $deadline = htmlspecialchars($_POST['deadline']);
    $_SESSION['data'][] = ['task' => $task, 'description' => $description, 'deadline' => $deadline];
    header("Location: read.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create Task</title>
</head>
<body>
    <div class="container">
        <h1>Create Task</h1>
        <form action="create.php" method="POST">
            <input type="text" name="task" placeholder="Enter Task" required>
            <textarea name="description" placeholder="Enter Description" required></textarea>
            <input type="date" name="deadline" required>
            <button type="submit" name="create">Add Task</button>
        </form>
        <a href="index.php">Back</a>
    </div>
</body>
</html>