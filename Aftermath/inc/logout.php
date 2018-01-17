<?php
include('config.php');
session_start();
$username = $_SESSION['username'];

$query = mysqli_query($conn, "UPDATE users
          SET user_status = '0'
          WHERE username = '$username';");

$query = mysqli_query($conn, "UPDATE campaigns
          SET player_status = '0'
          WHERE player = '$username';");

session_destroy();

header("Location: ../index.php");
exit();
?>