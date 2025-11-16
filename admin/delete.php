<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM book_pen WHERE id=$id");
header("Location: index.php");
exit;
?>

