<?php
require_once 'connection.php';

if (isset($_GET['delete'])) {
    $index = intval($_GET['delete']);
    
    
    $stmt = $conn->prepare("DELETE FROM tasks WHERE no = :no");
    $stmt->bindParam(':no', $index);
    
   
    if ($stmt->execute()) {
        header("Location: read.php");
        exit;
    } else {
        echo "Error deleting task.";
    }
}


$stmt = $conn->query("SELECT * FROM tasks");
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                <?php foreach ($data as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['no']) ?></td>
                    <td><?= htmlspecialchars($item['task']) ?></td>
                    <td><?= htmlspecialchars($item['description']) ?></td>
                    <td><?= htmlspecialchars($item['deadline']) ?></td>
                    <td>
                        <?php
                        $now = time();
                        $deadline = strtotime($item['deadline']);
                        $remaining = $deadline - $now;

                        if ($remaining > 0) {
                            $days = floor($remaining / (60 * 60 * 24));
                            echo $days . " days left";
                        } else {
                            echo "Tugas Anda Terlambat";
                        }
                        ?>
                    </td>
                    <td>
                        <a href="update.php?index=<?= htmlspecialchars($item['no']) ?>">Edit</a>
                        <a href="?delete=<?= htmlspecialchars($item['no']) ?>" onclick="return confirm('Apakah anda serius ingin mneghapus?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php" class="back">Back</a>
    </div>
</body>
</html>