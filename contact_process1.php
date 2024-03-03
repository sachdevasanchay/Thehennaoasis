<?php
// Assuming you have a MySQL database set up with appropriate credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mehendi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    // Insert data into database
    $sql = "INSERT INTO contact_forms (name, email, number) VALUES ('$name', '$email', '$number')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
