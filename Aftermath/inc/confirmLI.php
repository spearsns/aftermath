<?php
include('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
		$_SESSION['id'] = $row['id'];
		SESSION_START();
		header("Location: ../index.php?logged");
} else {
	header("Location: ../login.php?error=fail");
}
?>
