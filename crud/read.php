<?php
session_start();

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
}

$data = $_SESSION['data'];

// Handle delete
if (isset($_GET['delete'])) {
    unset($data[$_GET['delete']]);
    $_SESSION['data'] = array_values($data);
    header("Location: read.php");
    exit;
}
//
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View Tasks</title>
</head>
<body>
    <div class="container">
        <h1>View Tasks</h1>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Deadline</th>
                    <th>Time Remaining</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $index => $item): ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $item['task'] ?></td>
                    <td><?= $item['description'] ?></td>
                    <td><?= $item['deadline'] ?></td>
                    <td>
                        <?php
                        $now = time();
                        $deadline = strtotime($item['deadline']);
                        $remaining = $deadline - $now;

                        if ($remaining > 0) {
                            $days = floor($remaining / (60 * 60 * 24));
                            echo $days . " days left";
                        } else {
                            echo "Deadline passed";
                        }
                        ?>
                    </td>
                    <td>
                        <a href="update.php?index=<?= $index ?>">Edit</a>
                        <a href="?delete=<?= $index ?>" onclick="return confirm('Are you sure?')">Delete</a>
 </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php">Back</a>
    </div>
</body>
</html>