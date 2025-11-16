<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pen";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("<script>alert('Database connection failed'); window.location='index.php';</script>");
}

// Get values from form
$full_name      = $_POST['full_name'] ?? '';
$email_address  = $_POST['email_address'] ?? '';
$mobile_number  = $_POST['mobile_number'] ?? '';
$location       = $_POST['location'] ?? '';
$message        = $_POST['message'] ?? '';

// Validate (optional)
if ($full_name == '' || $email_address == '' || $mobile_number == '' || $location == '' || $message == '') {
    echo "<script>alert('Please fill all fields'); window.location='index.php';</script>";
    exit;
}

// Insert into database
$stmt = $conn->prepare("INSERT INTO book_pen (full_name, email_address, mobile_number, location, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $full_name, $email_address, $mobile_number, $location, $message);

if ($stmt->execute()) {
    echo "<script>
            alert('✅ Your data has been submitted');
            window.location = 'index.php';
          </script>";
} else {
    echo "<script>
            alert('❌ Failed to save data');
            window.location = 'index.php';
          </script>";
}

$stmt->close();
$conn->close();
?>
