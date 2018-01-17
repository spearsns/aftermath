<?php
include('config.php');
$username = $_POST['username'];
$charName = $_POST['charName'];
//EXPERIENCE
$EXP = $_POST['EXP'];

$sql = "UPDATE characters 
            SET totalEXP =  totalEXP + '$EXP', 
                remEXP =    remEXP + '$EXP'

            WHERE charName = '$charName';
        ";

if ($conn->query($sql) === TRUE) {
	header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error updating record: " . $conn->error;
}