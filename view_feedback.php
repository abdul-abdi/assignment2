<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "campaign_feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve feedback data
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Feedback Data</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Feedback</th>
            <th>Rating</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["feedback"] . "</td>";
                echo "<td>" . $row["rating"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No feedback data available.</td></tr>";
        }
        ?>
    </table>

    <?php
    $conn->close();
    ?>
</body>
</html>