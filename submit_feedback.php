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

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$rating = $_POST['rating'];

// Prepare SQL statement
$sql = "INSERT INTO feedback (name, email, feedback, rating)
        VALUES ('$name', '$email', '$feedback', '$rating')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>