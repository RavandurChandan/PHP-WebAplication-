# PHPStatocWebAplication-

 

```markdown
# PHP Static Web Application with Dynamic ToDo List

This web application is a dynamic ToDo List manager built with PHP and MySQL. The application allows users to enter tasks, display them in a list, and update their status. Tasks can be marked as **done** or **deleted** using the corresponding buttons.

## Features

- **Add Task**: Input a new task and add it to the ToDo list.
- **Display Tasks**: View all tasks with their ID, task description, and current status.
- **Update Status**: Mark tasks as done.
- **Delete Task**: Remove a task from the list.

## Database Setup

The application uses a MySQL database with a single table named `todolist`. The table structure is as follows:

### Table: `todolist`

| Column Name    | Data Type | Attributes              | Description                |
|----------------|-----------|-------------------------|----------------------------|
| `Columnid`     | int       | Primary Key (PRI)       | Unique identifier for task |
| `Columnstatus` | tinyint   | Nullable                | Status of the task (e.g., 0 = pending, 1 = done) |
| `Columntask`   | varchar   |                         | Task description           |

### Creating the Table

You can create the table using the following SQL command:

```sql
CREATE TABLE todolist (
    Columnid INT AUTO_INCREMENT PRIMARY KEY,
    Columnstatus TINYINT DEFAULT 0,
    Columntask VARCHAR(255) NOT NULL
);
```

## How It Works

1. **User Input**: The web page contains an input field for the user to enter a task and an **Add** button to submit it.
2. **Task Display**: Once a task is added, it is displayed in a list with the following columns:
   - **ID**: The unique identifier (`Columnid`).
   - **Task**: The description of the task (`Columntask`).
   - **Status**: Indicates whether the task is pending or completed (`Columnstatus`).
   - **Actions**: Options to mark the task as done or delete it.
3. **Action Buttons**: The application provides buttons within the action column:
   - **Done Button**: When clicked, the task's status is updated (e.g., `Columnstatus` becomes 1).
   - **Delete Button**: Removes the task from the database.

## Installation

1. **Clone the Repository**:  
   ```bash
   git clone https://github.com/your-username/your-repository.git
   ```
2. **Configure the Database**:  
   - Create a MySQL database.
   - Run the SQL command above to create the `todolist` table.
   - Update your PHP configuration files with your database connection details.
3. **Deploy the Application**:  
   Upload the project files to your web server.

## Usage

- **Adding a Task**: Enter the task in the provided field and click **Add**.
- **Viewing Tasks**: The task list displays the ID, task, status, and available actions.
- **Marking as Done**: Click the **Done** button next to a task to update its status.
- **Deleting a Task**: Click the **Delete** button to remove a task from the list.

## License

This project is licensed under the MIT License.

 
