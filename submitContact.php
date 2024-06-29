<?php
// Database connection
$servername = "sql300.byethost32.com";
$username = "b32_36561637";
$password = "Project123!";
$dbname = "b32_36561637_nodev";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs to prevent SQL injection
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // SQL query to insert data
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute SQL query
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Message submitted successfully!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
