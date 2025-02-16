//<?phpecho "Hello, PHP World!";?>
<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="styles.css">
	 <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>

<div class="container">
    <h2>Task Manager</h2>

    <!-- Task Input Form -->
    <form action="process.php" method="POST">
        <input type="text" name="task" placeholder="Enter a new task" required>
        
		<!-- Add Task Button -->
<button type="submit"><i class="fa fa-plus-circle"></i> Add Task</button>
		
    </form>

    <h3>Task List</h3>

    <!-- Display Tasks -->
    <table>
        <tr>
            <th>ID</th>
            <th>Task</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php
        $sql = "SELECT * FROM tasks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['task']}</td>
                        <td>" . ($row['status'] ? "✅ Completed" : "⏳ Pending") . "</td>
                        <td>
                            <a href='update.php?id={$row['id']}'> <button class='complete'><i class='fa fa-check-circle'></i> Mark Done</button></a> <br>
                            <a href='delete.php?id={$row['id']}'><button class='delete'><i class='fa fa-trash'></i> Delete</button>
</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No tasks available</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
