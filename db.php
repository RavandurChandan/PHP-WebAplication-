<?php
$conn = new mysqli("localhost", "root", "", "todo_list");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
