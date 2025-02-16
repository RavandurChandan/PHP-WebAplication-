<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST['task'];

    $sql = "INSERT INTO tasks (task) VALUES ('$task')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect back
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
