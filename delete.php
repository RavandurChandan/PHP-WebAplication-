<?php
include 'db.php';

if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

    $sql = "DELETE FROM tasks WHERE id = $taskId";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
