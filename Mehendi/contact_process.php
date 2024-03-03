<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root";
$password = "";
$dbname = "mehendi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // File upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["designImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["designImage"]["tmp_name"]);
    if($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["designImage"]["size"] > 500000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if file was uploaded successfully
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["designImage"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars(basename($_FILES["designImage"]["name"])). " has been uploaded.";

            // Prepare and bind SQL statement
            $stmt = $conn->prepare("INSERT INTO contact_form (name, email, subject, message, design_image) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $email, $subject, $message, $target_file);

            // Execute SQL statement
            if ($stmt->execute()) {
                // Redirect to feedback page
                header("Location: feedback.php");
                exit(); // Make sure to exit after redirection
            } else {
                echo "Sorry, something went wrong. Please try again later.";
            }

            $stmt->close(); // Close statement
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $conn->close(); // Close connection
}
?>
