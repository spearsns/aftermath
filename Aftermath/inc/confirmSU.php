<?php
include('config.php');

$username = $_POST['username'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];
$email = $_POST['email'];

if (empty($username)){
	header("Location: ../signup.php?error=empty");
	exit();
}
if (empty($password)){
	header("Location: ../signup.php?error=empty");
	exit();
}
if (empty($passwordConfirm)){
	header("Location: ../signup.php?error=empty");
	exit();
}
if (empty($email)){
	header("Location: ../signup.php?error=empty");
	exit();

} else {
	$sql = "SELECT username FROM users WHERE username ='$username'";
	$result = $conn->query($sql);
	$usercheck = mysqli_num_rows($result);
	if ($usercheck > 0){
		header("Location: ../signup.php?error=username");
		exit();

} elseif (!FILTER_VAR($email, FILTER_VALIDATE_EMAIL) === true){
		header("Location: ../signup.php?error=email");
		exit();

} elseif ($password !== $passwordConfirm){
		header("Location: ../signup.php?error=password");
		exit();

} else {
		$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
		$result = $conn->query($sql);

		header("Location: ../login.php");	
	}
}	

?>
