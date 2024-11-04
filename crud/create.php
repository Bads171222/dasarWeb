<?php
require_once 'connection.php';
session_start();

if (isset($_POST['create'])) {
    $task = htmlspecialchars($_POST['task']);
    $description = htmlspecialchars($_POST['description']);
    $deadline = htmlspecialchars($_POST['deadline']);

   
    $stmt = $conn->prepare("INSERT INTO tasks (task, description, deadline, timeremaining) VALUES (:task, :description, :deadline, :timeremaining)");
    
    
    $timeremaining = 0;

  
    $stmt->bindParam(':task', $task);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':deadline', $deadline);
    $stmt->bindParam(':timeremaining', $timeremaining);

  
    if ($stmt->execute()) {
        header("Location: read.php");
        exit;
    } else {
        echo "Error inserting data.";
    }
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
        <a href="index.php" class="back">Back</a>
    </div>
</body>
</html>