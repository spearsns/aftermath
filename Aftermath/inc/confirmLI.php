<?php
include('config.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$result = $conn->query($sql);

if ($row = $result->fetch_assoc()) {
		$username = $row['username'];
		$password= $row['password'];
		$email = $row['email'];
		$id = $row['id'];

		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['email'] = $email;
		$_SESSION['id'] = $id;
		
		header("Location: ../index.php?logged");
} else {
	header("Location: ../login.php?error=fail");
}
?>
