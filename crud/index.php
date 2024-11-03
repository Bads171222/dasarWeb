<?php
session_start();


if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
}

$data = $_SESSION['data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD Application</title>
</head>
<body>
    <div class="container">
        <h1>Task Management</h1>
        <div class="button-container">
            <a href="create.php" class="btn-green">Create Task</a>
            <a href="read.php" class="btn blue">View Tasks</a>
        </div>
    </div>
</body>
</html>