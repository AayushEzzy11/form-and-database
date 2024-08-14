

<!DOCTYPE html>
<html>
<head>
<title>Create User</title>
</head>
<body>
<h2>Create User</h2>
<form method="post" action="db.php">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
<input type="submit" value="Submit">
</form>
</body>
</html>
<?php
include 'insert.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$email = $_POST['email'];
$sql = "INSERT INTO `students`(`Name`, `Email`) VALUES ('$name','$email')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>