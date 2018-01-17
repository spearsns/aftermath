<?php
include('config.php');
session_start();

$campaignName = $_POST['campaignName'];
$username = $_POST['username'];
$password = htmlentities(stripslashes($_POST['password']));

$sql = "SELECT * FROM campaigns WHERE FATE = '$username' AND FATE_PW = '$password' AND campaignName = '$campaignName'";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0){
	header("Location: ../campaigns/" .$campaignName. "_lead.php");
} else {
	header("Location: ../leadLog.php?error=fail");
}
?>
