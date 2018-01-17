<?php
session_start();
include('config.php');

$FATE = 			htmlentities(strip_tags($_POST['FATE']));
$FATE_PW = 			htmlentities(strip_tags($_POST['password']));
$passwordConfirm = 	htmlentities(strip_tags($_POST['passwordConfirm']));
$campaignName =		htmlentities(strip_tags($_POST['campaignName']));
$description =		htmlentities(strip_tags($_POST['description']));

$play_tmp_file = 	"play.php";
$play_tmp_path = 	"../templates/";
$lead_tmp_file =	"lead.php";
$lead_tmp_path = 	"../templates/";
$campaign_path = 	"../campaigns/";
$txt_file =			$campaignName. ".txt";
$txt_path =			"../campaigns/chatlogs/";

$play_tmp = 		file_get_contents($play_tmp_path.$play_tmp_file);
$lead_tmp = 		file_get_contents($lead_tmp_path.$lead_tmp_file);

$new_play_file = str_replace('', '', $play_tmp);
$new_lead_file = str_replace('', '', $lead_tmp);
$new_txt_file =	str_replace('', '', 'NEW CAMPAIGN');

$camp_play_file =	$campaignName. "_play.php";
$camp_lead_file =	$campaignName. "_lead.php";
$camp_txt_file =	$campaignName. ".txt";

$_SESSION["textFile"] = $txt_path . $camp_txt_file;

 if (empty($FATE_PW)){
	header("Location: ../newcampaign.php?error=empty");
	exit();
} if (empty($passwordConfirm)){
	header("Location: ../newcampaign.php?error=empty");
	exit();
} if (empty($campaignName)){
	header("Location: ../newcampaign.php?error=empty");
	exit();
} if (empty($description)){
	header("Location: ../newcampaign.php?error=empty");
	exit();
} else {
	$sql = "SELECT campaignName FROM campaigns WHERE campaignName ='$campaignName'";
	$result = $conn->query($sql);
	$namecheck = mysqli_num_rows($result);
	if ($namecheck > 0){
		header("Location: ../newcampaign.php?error=name");
		exit();
	} if ($FATE_PW != $passwordConfirm){
		header("Location: ../newcampaign.php?error=password");
		exit();
	} else {
		$sql = "INSERT INTO campaigns (campaignName, description, txtFile, FATE, FATE_PW) 
		VALUES ('$campaignName', '$description', '$camp_txt_file', '$FATE', '$FATE_PW')";
		$result = $conn->query($sql);

		$play = fopen($campaign_path.$camp_play_file, "w");
			fwrite($play, $new_play_file);
			fclose($play); 
		$lead = fopen($campaign_path.$camp_lead_file, "w");
			fwrite($lead, $new_lead_file);
			fclose($lead);
		$text = fopen($txt_path.$camp_txt_file, "w");
			fwrite($text, $new_txt_file);
			fclose($text);
		} 
		header("Location: ../success.php");		
	}

?>
