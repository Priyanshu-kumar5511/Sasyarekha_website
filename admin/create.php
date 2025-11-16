<?php include 'db.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $conn->prepare("INSERT INTO book_pen (full_name, email_address, mobile_number, location, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $_POST['full_name'], $_POST['email_address'], $_POST['mobile_number'], $_POST['location'], $_POST['message']);
    $stmt->execute();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Record</title></head>
<body>
<h2>➕ Add New Record</h2>
<form method="POST">
  Full Name: <input name="full_name" required><br><br>
  Email: <input name="email_address" type="email" required><br><br>
  Mobile: <input name="mobile_number" required><br><br>
  Location: <input name="location" required><br><br>
  Message: <textarea name="message" required></textarea><br><br>
  <button type="submit">Save</button>
</form>
</body>
</html>
