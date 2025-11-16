<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $conn->prepare("UPDATE book_pen SET full_name=?, email_address=?, mobile_number=?, location=?, message=? WHERE id=?");
    $stmt->bind_param("sssssi", $_POST['full_name'], $_POST['email_address'], $_POST['mobile_number'], $_POST['location'], $_POST['message'], $id);
    $stmt->execute();
    header("Location: index.php");
    exit;
}

$result = $conn->query("SELECT * FROM book_pen WHERE id=$id");
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Edit Record</title></head>
<body>
<h2>✏️ Edit Record #<?php echo $id; ?></h2>
<form method="POST">
  Full Name: <input name="full_name" value="<?php echo $data['full_name']; ?>" required><br><br>
  Email: <input name="email_address" type="email" value="<?php echo $data['email_address']; ?>" required><br><br>
  Mobile: <input name="mobile_number" value="<?php echo $data['mobile_number']; ?>" required><br><br>
  Location: <input name="location" value="<?php echo $data['location']; ?>" required><br><br>
  Message: <textarea name="message" required><?php echo $data['message']; ?></textarea><br><br>
  <button type="submit">Update</button>
</form>
</body>
</html>
