<?php
require_once 'connection.php';


if (!isset($_GET['index'])) {
    header("Location: read.php");
    exit;
}

$index = $_GET['index'];


$stmt = $conn->prepare("SELECT * FROM tasks WHERE no = :no");
$stmt->bindParam(':no', $index);
$stmt->execute();
$taskData = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$taskData) {
    header("Location: read.php");
    exit;
}


$task = $taskData['task'];
$description = $taskData['description'];
$deadline = $taskData['deadline'];

if (isset($_POST['update'])) {
    $task = htmlspecialchars($_POST['task']);
    $description = htmlspecialchars($_POST['description']);
    $deadline = htmlspecialchars($_POST['deadline']);


    $stmt = $conn->prepare("UPDATE tasks SET task = :task, description = :description, deadline = :deadline WHERE no = :no");
    $stmt->bindParam(':task', $task);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':deadline', $deadline);
    $stmt->bindParam(':no', $index);


    if ($stmt->execute()) {
        header("Location: read.php");
        exit;
    } else {
        echo "Error updating data.";
    }
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
            <input type="text" name="task" placeholder="Enter Task" required value="<?= htmlspecialchars($task) ?>">
            <textarea name="description" placeholder="Enter Description" required><?= htmlspecialchars($description) ?></textarea>
            <input type="date" name="deadline" required value="<?= htmlspecialchars($deadline) ?>">
            <button type="submit" name="update">Update Task</button>
        </form>
        <a href="read.php" class="back">Back</a>
    </div>
</body>
</html>