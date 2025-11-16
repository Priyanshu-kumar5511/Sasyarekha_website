<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel - Book Pen</title>
  <style>
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 8px; }
    th { background: #eee; }
    a.button {
      display: inline-block; padding: 6px 12px; margin: 2px;
      background: #28a745; color: #fff; text-decoration: none; border-radius: 4px;
    }
    a.delete { background: #dc3545; }
    a.edit { background: #007bff; }
  </style>
</head>
<body>

<h2>📋 Book Pen Records</h2>
<a href="create.php" class="button">➕ Add New</a>
<br><br>

<table>
  <tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Location</th>
    <th>Message</th>
    <th>Created</th>
    <th>Actions</th>
  </tr>

  <?php
  $result = $conn->query("SELECT * FROM book_pen ORDER BY id DESC");
  while ($row = $result->fetch_assoc()) {
      echo "<tr>
          <td>{$row['id']}</td>
          <td>{$row['full_name']}</td>
          <td>{$row['email_address']}</td>
          <td>{$row['mobile_number']}</td>
          <td>{$row['location']}</td>
          <td>{$row['message']}</td>
          <td>{$row['created_at']}</td>
          <td>
            <a href='edit.php?id={$row['id']}' class='button edit'>✏️ Edit</a>
            <a href='delete.php?id={$row['id']}' class='button delete' onclick='return confirm(\"Delete this record?\");'>🗑️ Delete</a>
          </td>
        </tr>";
  }
  ?>
</table>

</body>
</html>
