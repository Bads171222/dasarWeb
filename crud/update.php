<?php
session_start();
$data = $_SESSION['data'];

if (!isset($_GET['index']) || !isset($data[$_GET['index']])) {
    header("Location: read.php");
    exit;
}

$index = $_GET['index'];
$task = $data[$index]['task'];
$description = $data[$index]['description'];
$deadline = $data[$index]['deadline'];

// Handle update
if (isset($_POST['update'])) {
    $task = htmlspecialchars($_POST['task']);
    $description = htmlspecialchars($_POST['description']);
    $deadline = htmlspecialchars($_POST['deadline']);
    $data[$index] = ['task' => $task, 'description' => $description, 'deadline' => $deadline];
    $_SESSION['data'] = $data;
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
    <title>Update Task</title>
</head>
<body>
    <div class="container">
        <h1>Update Task</h1>
        <form action="update.php?index=<?= $index ?>" method="POST">
            <input type="text" name="task" placeholder="Enter Task" required value="<?= $task ?>">
            <textarea name="description" placeholder="Enter Description" required><?= $description ?></textarea>
            <input type="date" name="deadline" required value="<?= $deadline ?>">
            <button type="submit" name="update">Update Task</button>
        </form>
        <a href="read.php">Back</a>
    </div>
</body>
</html>