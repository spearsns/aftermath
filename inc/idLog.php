<?php
include('config.php');
$username =     htmlentities(strip_tags($_POST['username']));
$charName =     htmlentities(strip_tags($_POST['charName']));

//IDMARKS
$head =         htmlentities(strip_tags($_POST['head']));
$face =         htmlentities(strip_tags($_POST['face']));
$neck =         htmlentities(strip_tags($_POST['neck']));
$LShoulder =    htmlentities(strip_tags($_POST['LShoulder']));
$RShoulder =    htmlentities(strip_tags($_POST['RShoulder']));
$LRibs =        htmlentities(strip_tags($_POST['LRibs']));
$RRibs =        htmlentities(strip_tags($_POST['RRibs']));
$LUpperArm =    htmlentities(strip_tags($_POST['LUpperArm']));
$RUpperArm =    htmlentities(strip_tags($_POST['RUpperArm']));
$stomach =      htmlentities(strip_tags($_POST['stomach']));
$lowerBack =    htmlentities(strip_tags($_POST['lowerBack']));
$LForearm =     htmlentities(strip_tags($_POST['LForearm']));
$RForearm =     htmlentities(strip_tags($_POST['RForearm']));
$rear =         htmlentities(strip_tags($_POST['rear']));
$groin =        htmlentities(strip_tags($_POST['groin']));
$LHand =        htmlentities(strip_tags($_POST['LHand']));
$RHand =        htmlentities(strip_tags($_POST['RHand']));
$LThigh =       htmlentities(strip_tags($_POST['LThigh']));
$RThigh =       htmlentities(strip_tags($_POST['RThigh']));
$LCalf =        htmlentities(strip_tags($_POST['LCalf']));
$RCalf =        htmlentities(strip_tags($_POST['RCalf']));
$LFoot =        htmlentities(strip_tags($_POST['LFoot']));
$Rfoot =        htmlentities(strip_tags($_POST['Rfoot']));

$sql = "UPDATE idmarks 
            SET face = '$face',
            	head =  '$head', 
                neck = '$neck', 
                LShoulder = '$LShoulder', 
                RShoulder = '$RShoulder', 
                LRibs = '$LRibs', 
                RRibs = '$RRibs', 
                LUpperArm = '$LUpperArm', 
                RUpperArm = '$RUpperArm', 
                stomach = '$stomach', 
                lowerBack = '$lowerBack', 
                LForearm = '$LForearm', 
                RForearm = '$RForearm', 
                rear = '$rear', 
                groin = '$groin', 
                LHand = '$LHand', 
                RHand = '$RHand', 
                LThigh = '$LThigh', 
                RThigh = '$RThigh', 
                LCalf = '$LCalf', 
                RCalf = '$RCalf', 
                LFoot = '$LFoot', 
                RFoot = '$RFoot'

            WHERE charName = '$charName';
        ";

if ($conn->query($sql) === TRUE) {
	header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
	echo "Error updating record: " . $conn->error;
    
}