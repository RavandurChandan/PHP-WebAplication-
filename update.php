<?php
include 'db.php';

if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

    $sql = "UPDATE tasks SET status = 1 WHERE id = $taskId";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
