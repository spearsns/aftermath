<?php
    include("inc/config.php");
    session_start();

    if (isset($_SESSION['id']) == false){
        header("Location: login.php?");
    }

    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $username = $_SESSION['username'];
    $charName = parse_url($url, PHP_URL_QUERY);
    
    $sql="SELECT * FROM characters WHERE charName = '$charName'";
          $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {

    //DEMOGRAPHICS
    $ethnicity =        $row['ETHNICITY'];
    $sex =              $row['SEX'];
    $age =              $row['AGE'];
    $hairColor =        $row['HAIR_COLOR'];
    $hairStyle =        $row['HAIR_STYLE'];
    $habitat =          $row['HABITAT'];
    $background =       $row['BACKGROUND'];
    //TRAITS
    $MEM =              $row['MEM'];
    $STR =              $row['STR'];
    $LOG =              $row['LOG'];
    $END =              $row['END'];
    $PER =              $row['PER'];
    $DEX =              $row['DEX'];
    $WILL =             $row['WILL'];
    $SPD =              $row['SPD'];
    $CHA =              $row['CHA'];
    $BTY =              $row['BTY'];
    //COMBAT STATS
    $ACTIONS =          $row['ACT'];
    $SEQ =              $row['SEQ'];
    $BLOCK =            $row['BLOCK'];
    $DODGE =            $row['DODGE'];
    //COMBAT SKILLS
    $UNARMED =          $row['UNARMED'];
    $THROWN =           $row['THROW'];
    $GRAPPLE =          $row['GRAPPLE'];
    $ARCH =             $row['ARCH'];
    $OFF =              $row['OFF'];
    $PISTOLS =          $row['PISTOLS'];
    $SHORT =            $row['SHORTW'];
    $RIFLES =           $row['RIFLES'];
    $LONG =             $row['LONGW'];
    $BURST =            $row['BURST'];
    $THM =              $row['TWOHW'];
    $SPECIAL =          $row['SPECIAL'];
    $CHAIN =            $row['CHAIN'];
    $WSYS =             $row['WSYS'];

    $GAMBLING =         $row['GAMBLING'];
    //SURVIVAL    
    $envAware =         $row['ENV_AWARENESS'];
    $firstAid =         $row['FIRST_AID'];
    $navigation =       $row['NAVIGATION'];
    $tracking =         $row['TRACKING'];
    $trapping =         $row['TRAPPING'];
    $fishing =          $row['FISHING'];
    //ESPIONAGE
    $stealth =          $row['STEALTH'];
    $surveillance =     $row['SURVEILLANCE'];
    $pickpocket =       $row['PICKPOCKET'];
    $lockpick =         $row['LOCKPICK'];
    //TECHNOLOGY
    $crafting =         $row['CRAFTING'];
    $computers =        $row['COMPUTERS'];
    $mechanics =        $row['MECHANICS'];
    $electrical =       $row['ELECTRICAL'];
    $radioSys =         $row['RADIO_SYS'];
    //TRANSPORTATION
    $skateboard =       $row['SKATEBOARD'];
    $bicycle =          $row['BICYCLE'];
    $horsemanship =     $row['HORSEMANSHIP'];
    $automobile =       $row['AUTOMOBILE'];
    $sailing =          $row['SAILING'];
    $boating =          $row['BOATING'];
    $motorcycle =       $row['MOTORCYCLE'];
    $jetSki =           $row['JET_SKI'];
    //SOL
    $literacy =         $row['LITERACY'];
    $math =             $row['MATH'];
    $history =          $row['HISTORY'];
    $biology =          $row['BIOLOGY'];
    $botany =           $row['BOTANY'];
    $chemistry =        $row['CHEMISTRY'];
    //SOFT
    $negotiation =      $row['NEGOTIATION'];
    $law =              $row['FEDERAL_LAW'];
    $lang1 =            $row['LANG1'];
    $langRate1 =        $row['LANGRATE1'];
    $lit1 =             $row['LIT1'];
    $litRate1 =         $row['LITRATE1'];
    $lang2 =            $row['LANG2'];
    $langRate2 =        $row['LANGRATE2'];
    $lit2 =             $row['LIT2'];
    $litRate2 =         $row['LITRATE2'];
    $lang3 =            $row['LANG3'];
    $langRate3 =        $row['LANGRATE3'];
    $lit3 =             $row['LIT3'];
    $litRate3 =         $row['LITRATE3'];
    $lang4 =            $row['LANG4'];
    $langRate4 =        $row['LANGRATE4'];
    $lit4 =             $row['LIT4'];   
    $litRate4 =         $row['LITRATE4'];
    //ADVANCED
    $forensics =        $row['FORENSICS'];
    $physics =          $row['PHYSICS'];
    $construction =     $row['CONSTRUCTION'];
    $programming =      $row['PROGRAMMING'];
    $helicopters =      $row['HELICOPTERS'];
    $airplanes =        $row['AIRPLANES'];
    $MGV =              $row['MGV'];
    $hvyEquip =         $row['HVY_EQUIP'];
    $toxicology =       $row['TOXICOLOGY'];
    $pharmacology =     $row['PHARMACOLOGY'];
    $doctor =           $row['DOCTOR'];
    //ABILITIES
    $ABILITY1 =         $row['ABILITY1'];
    $ABILITY2 =         $row['ABILITY2'];
    $ABILITY3 =         $row['ABILITY3'];
    $ABILITY4 =         $row['ABILITY4'];
    $ABILITY5 =         $row['ABILITY5'];
    $ABILITY6 =         $row['ABILITY6'];
    $ABILITY7 =         $row['ABILITY7'];
    $ABILITY8 =         $row['ABILITY8'];
    $ABILITY9 =         $row['ABILITY9'];
    $ABILITY10 =        $row['ABILITY10'];
    $ABILITY11 =        $row['ABILITY11'];
    $ABILITY12 =        $row['ABILITY12'];
    $ABILITY13 =        $row['ABILITY13'];
    $ABILITY14 =        $row['ABILITY14'];
    $ABILITY15 =        $row['ABILITY15'];
    //EXPERIENCE
    $remEXP =           $row['remEXP'];
    $totalEXP =         $row['totalEXP'];
    } 
      } else { echo "0 results"; }

    $idmarks="SELECT * FROM idmarks WHERE charName = '$charName'";
          $results = $conn->query($idmarks);
            if ($results->num_rows > 0) {
              while($row = $results->fetch_assoc()) {

              $face =         $row['face'];
              $head =         $row['head'];
              $neck =         $row['neck'];
              $groin =        $row['groin'];
              $rear =         $row['rear'];
              $stomach =      $row['stomach'];
              $lowerBack =    $row['lowerBack'];
              $LRibs =        $row['LRibs'];
              $RRibs =        $row['RRibs'];
              $LShoulder =    $row['LShoulder'];
              $RShoulder =    $row['RShoulder'];
              $LUpperArm =    $row['LUpperArm'];
              $RUpperArm =    $row['RUpperArm'];
              $LThigh =       $row['LThigh'];
              $RThigh =       $row['RThigh'];
              $LForearm =     $row['LForearm'];
              $RForearm =     $row['RForearm'];
              $LCalf =        $row['LCalf'];
              $RCalf =        $row['RCalf'];
              $LHand =        $row['LHand'];
              $RHand =        $row['RHand'];
              $LFoot =        $row['LFoot'];
              $RFoot =        $row['RFoot']; 
              } 
                } else { echo "0 results"; }
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Aftermath</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link type="text/css" media="screen" rel="stylesheet" href="../inc/zurb-responsive-tables/responsive-tables.css" />
    <script type="text/javascript" src="../inc/zurb-responsive-tables/responsive-tables.js"></script>
  </head>
<body>

<?php include("header.php") ?>

<!--CONTENT-->
<div class="row content">
<div class="small-12 columns">
<table>

<!--PLAYER-->
<tr>
  <td colspan="4" rowspan="4"><img src="img/picSlot.png" style="margin: 0 auto;" /></td>
  <td>NAME:</td>
  <td colspan="2"><input type="text" id="charName" name="charName" value="<?php $charName = parse_url($url, PHP_URL_QUERY); echo $charName ?>" class="full" readonly /></td>
  <td>PLAYER:</td>
  <td colspan="2"><input type="text" id="username" name="username" value="<?php echo $username; ?>" class="full" readonly /></td>
</tr>

<tr>
  <td>BACK GROUND:</td>
  <td colspan="2"><input type="text" id="background" name="background" value="<?php echo $background ?>" class="full" readonly /></td>
  <td>HABITAT:</td>
  <td colspan="2"><input type="text" id="habitat" name="habitat" value="<?php echo $habitat ?>" class="full" readonly /></td>
</tr>

<tr>
  <td>HAIR COLOR:</td>
  <td colspan="2"><input type="text" id="hairColor" name="hairColor" value="<?php echo $hairColor ?>" class="full" readonly /></td>
  <td>HAIR STYLE:</td>
  <td colspan="2"><input type="text" id="hairStyle" name="hairStyle" value="<?php echo $hairStyle ?>" class="full" readonly /></td>
</tr>

<tr>
  <td>ETHNIC:</td>
  <td><input type="text" id="ethnicity" name="ethnicity" value="<?php echo $ethnicity ?>" class="full" readonly /></td>
  <td>SEX:</td>
  <td><input type="text" id="sex" name="sex" value="<?php echo $sex ?>" class="full" readonly /></td>
  <td>AGE:</td> 
  <td><input type="text" id="age" name="age" value="<?php echo $age ?>" class="full" readonly /></td>
</tr>

<tr>
  <td colspan="6">COMBAT PROFICIENCIES</td>
  <td colspan="4">PHYSICAL TRAITS</td>
</tr>

<tr>
  <td>UNARM:</td>
  <td><input type="text" id="unarm" name="unarm" value="<?php echo $UNARMED; ?>" readonly /></td>
  <td>THROW:</td>
  <td><input type="text" id="thrown" name="thrown" value="<?php echo $THROWN; ?>" readonly /></td>
  <td>ACT:</td>
  <td><input type="text" id="act" name="act" value="<?php echo $ACTIONS; ?>" readonly /></td>
  <td>MEM:</td>
  <td><input type="text" id="mem" name="mem" value="<?php echo $MEM; ?>" readonly /></td>
  <td>STR:</td>
  <td><input type="text" id="str" name="str" value="<?php echo $STR; ?>" readonly /></td>
</tr>

<tr>
  <td>GRAP:</td>
  <td><input type="text" id="grap" name="grap" value="<?php echo $GRAPPLE; ?>" readonly /></td>
  <td>ARCH:</td>
  <td><input type="text" id="arch" name="arch" value="<?php echo $ARCH; ?>" readonly /></td>
  <td>SEQ:</td>
  <td><input type="text" id="seq" name="seq" value="<?php echo $SEQ; ?>" readonly /></td>
  <td>LOG:</td>
  <td><input type="text" id="log" name="log" value="<?php echo $LOG; ?>" readonly /></td>
  <td>END:</td>
  <td><input type="text" id="end" name="end" value="<?php echo $END; ?>" readonly /></td>
</tr>

<tr>
  <td>OFF:</td>
  <td><input type="text" id="off" name="off" value="<?php echo $OFF; ?>" readonly /></td>
  <td>PISTOLS:</td>
  <td><input type="text" id="pistols" name="pistols" value="<?php echo $PISTOLS; ?>" readonly /></td>
  <td>BLOCK:</td>
  <td><input type="text" id="block" name="block" value="<?php echo $BLOCK; ?>" readonly /></td>
  <td>PER:</td></td>
  <td><input type="text" id="per" name="per" value="<?php echo $PER; ?>" readonly /></td>
  <td>DEX:</td></td>
  <td><input type="text" id="dex" name="dex" value="<?php echo $DEX; ?>" readonly /></td>
</tr>

<tr>
  <td>SHORT:</td>
  <td><input type="text" id="shortW" name="shortW" value="<?php echo $SHORT; ?>" readonly /></td>
  <td>RIFLES:</td>
  <td><input type="text" id="rifles" name="rifles" value="<?php echo $RIFLES; ?>" readonly /></td>
  <td>DODGE:</td>
  <td><input type="text" id="dodge" name="dodge" value="<?php echo $DODGE; ?>" readonly /></td>
  <td>WILL:</td></td>
  <td><input type="text" id="will" name="will" value="<?php echo $WILL; ?>" readonly /></td>
  <td>SPD:</td></td>
  <td><input type="text" id="spd" name="spd" value="<?php echo $SPD; ?>" readonly /></td>
</tr>

<tr>
  <td>LONG:</td>
  <td><input type="text" id="longW" name="longW" value="<?php echo $LONG; ?>" readonly /></td>
  <td>BURST:</td>
  <td><input type="text" id="burst" name="burst" value="<?php echo $BURST; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td>CHA:</td>
  <td><input type="text" id="cha" name="cha" value="<?php echo $CHA; ?>" readonly /></td>
  <td>BTY:</td>
  <td><input type="text" id="bty" name="bty" value="<?php echo $BTY; ?>" readonly /></td>
</tr>

<tr>
  <td>2 HAND:</td>
  <td><input type="text" id="twoHW" name="twoHW" value="<?php echo $THM; ?>" readonly /></td>
  <td>SPECIAL:</td>
  <td><input type="text" id="special" name="special" value="<?php echo $SPECIAL; ?>" readonly /></td>
  <td colspan="6">SURVIVAL SKILLS</td>
</tr>

<tr>
  <td>CHAIN:</td>
  <td><input type="text" id="chain" name="chain" value="<?php echo $CHAIN; ?>" readonly /></td>
  <td>W SYS:</td>
  <td><input type="text" id="wsys" name="wsys" value="<?php echo $WSYS; ?>" readonly /></td>
  <td>ENV AWR:</td>
  <td><input type="text" id="survival" name="survival" value="<?php echo $envAware; ?>" readonly /></td>
  <td>1ST AID:</td>
  <td><input type="text" id="firstAid" name="firstAid" value="<?php echo $firstAid; ?>" readonly /></td>
  <td>NAVIG:</td>
  <td><input type="text" id="navig" name="navig" value="<?php echo $navigation; ?>" readonly /></td>
</tr>

<tr>
  <td colspan="4">TRANSPORTATION SKILLS</td>
  <td>TRACK:</td>
  <td><input type="text" id="tracking" name="tracking" value="<?php echo $tracking; ?>" readonly /></td>
  <td>TRAP:</td>
  <td><input type="text" id="trapping" name="trapping" value="<?php echo $trapping; ?>" readonly /></td>
  <td>FISH:</td>
  <td><input type="text" id="fishing" name="fishing" value="<?php echo $fishing; ?>" readonly /></td>
</tr>

<tr>
  <td>SKATE:</td>
  <td><input type="text" id="skateboard" name="skateboard" value="<?php echo $skateboard; ?>" readonly /></td>
  <td>BIKE:</td>
  <td><input type="text" id="bicycle" name="bicycle" value="<?php echo $bicycle; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td style="font-weight: bolder;">GAMBLE:</td>
  <td><input type="text" id="gambling" name="gambling" value="<?php echo $GAMBLING; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
</tr>

<tr>
  <td>HORSE:</td>
  <td><input type="text" id="horsemanship" name="horsemanship" value="<?php echo $horsemanship; ?>" readonly /></td>
  <td>AUTO:</td>
  <td><input type="text" id="automobile" name="automobile" value="<?php echo $automobile; ?>" readonly /></td>
  <td colspan="6">ESPIONAGE SKILLS</td>
</tr>

<tr>
  <td>MOTOR X:</td>
  <td><input type="text" id="motorcycle" name="motorcycle" value="<?php echo $motorcycle; ?>" readonly /></td>
  <td>JET SKI:</td>
  <td><input type="text" id="jetSki" name="jetSki" value="<?php echo $jetSki; ?>" readonly /></td>
  <td>STEALTH:</td>
  <td><input type="text" id="stealth" name="stealth" value="<?php echo $stealth; ?>" readonly /></td>
  <td>SURVEIL:</td>
  <td><input type="text" id="surveillance" name="surveillance" value="<?php echo $surveillance; ?>" readonly /></td>
  <td>FOREN:</td>
  <td><input type="text" id="forensics" name="forensics" value="<?php echo $forensics; ?>" readonly /></td>
</tr>

<tr>
  <td>SAIL:</td>
  <td><input type="text" id="sailing" name="sailing" value="<?php echo $sailing; ?>" readonly /></td>
  <td>BOAT:</td>
  <td><input type="text" id="boating" name="boating" value="<?php echo $boating; ?>" readonly /></td>
  <td>PICK:</td>
  <td><input type="text" id="pickpocket" name="pickpocket" value="<?php echo $pickpocket; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td>LOCK:</td>
  <td><input type="text" id="lockpick" name="lockpick" value="<?php echo $lockpick; ?>" readonly /></td>
</tr>

<tr>
  <td>MULTI GEAR:</td>
  <td><input type="text" id="MGV" name="MGV" value="<?php echo $MGV; ?>" class="full" readonly /></td>
  <td>HVY EQUIP:</td>
  <td><input type="text" id="hvyEquip" name="hvyEquip" value="<?php echo $hvyEquip; ?>" class="full" readonly /></td>
  <td colspan="6">TECHNOLOGY SKILLS</td>
</tr>

<tr>
  <td>HELI:</td>
  <td><input type="text" id="helicopters" name="helicopters" value="<?php echo $helicopters; ?>" readonly /></td>
  <td>PLANE:</td>
  <td><input type="text" id="airplanes" name="airplanes" value="<?php echo $airplanes; ?>" readonly /></td>
  <td>CRAFT:</td>
  <td><input type="text" id="craft" name="craft" value="<?php echo $crafting; ?>" readonly /></td>
  <td>COMP:</td>
  <td><input type="text" id="computers" name="computers" value="<?php echo $computers; ?>" readonly /></td>
  <td>PROGRAM:</td>
  <td><input type="text" id="programming" name="programming" value="<?php echo $programming; ?>" readonly /></td>
</tr>

<tr>
  <td colspan="4">SCIENCES</td>
  <td>MECHS:</td>
  <td><input type="text" id="mechanics" name="mechanics" value="<?php echo $mechanics; ?>" readonly /></td>
  <td>ELECT:</td>
  <td><input type="text" id="electrical" name="electrical" value="<?php echo $electrical; ?>" readonly /></td>
  <td>RADIO SYS:</td>
  <td><input type="text" id="radioSys" name="radioSys" value="<?php echo $radioSys; ?>" readonly /></td>
</tr>

<tr>
  <td>LIT:</td>
  <td><input type="text" id="literacy" name="literacy" value="<?php echo $literacy; ?>" readonly /></td>
  <td>HISTORY:</td>
  <td><input type="text" id="history" name="history" value="<?php echo $history; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td>CONSTR:</td>
  <td><input type="text" id="construction" name="construction" value="<?php echo $construction; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
</tr>

<tr>
  <td>MATH:</td>
  <td><input type="text" id="math" name="math" value="<?php echo $math; ?>" readonly /></td>
  <td>PHYSIC:</td>
  <td><input type="text" id="physics" name="physics" value="<?php echo $physics; ?>" readonly /></td>
  <td colspan="6">SOFT SKILLS & LANGUAGES</td>
</tr>

<tr>
  <td>BIO:</td>
  <td><input type="text" id="biology" name="biology" value="<?php echo $biology; ?>" readonly /></td>
  <td>BOT:</td>
  <td><input type="text" id="botany" name="botany" value="<?php echo $botany; ?>" readonly /></td>
  <td></td>
  <td>NEGOT:</td>
  <td><input type="text" id="negot" name="negot" value="<?php echo $negotiation; ?>" readonly /></td>
  <td>LAW:</td>
  <td><input type="text" id="law" name="law" value="<?php echo $law; ?>" readonly /></td>
  <td></td>
</tr>

<tr>
  <td>CHEM:</td>
  <td><input type="text" id="chemistry" name="chemistry" value="<?php echo $chemistry; ?>" readonly /></td>
  <td>TOXIC:</td>
  <td><input type="text" id="toxicology" name="toxicology" value="<?php echo $toxicology; ?>" readonly /></td>
  <td colspan="3" style="font-style: italic;">LANGUAGES</td>
  <td colspan="3" style="font-style: italic;">LITERACIES</td>
</tr>

<tr>
  <td>PHARMA:</td>
  <td><input type="text" id="pharmacology" name="pharmacology" value="<?php echo $pharmacology; ?>" readonly /></td>
  <td>DOCTOR:</td>
  <td><input type="text" id="doctor" name="doctor" value="<?php echo $doctor; ?>" readonly /></td>
  <td>&nbsp;</td>
  <td><input type="text" id="lang1" name="lang1" value="<?php echo $lang1; ?>" readonly /></td>
  <td><input type="text" id="langRate1" name="langRate1" value="<?php echo $langRate1; ?>" readonly /></td>
  <td><input type="text" id="lit1" name="lit1" value="<?php echo $lit1; ?>" readonly /></td>
  <td><input type="text" id="litRate1" name="litRate1" value="<?php echo $litRate1; ?>" readonly /></td>
  <td>&nbsp;</td>
</tr>

<tr>
  <td colspan="2">EXP POOL:</td>
  <td colspan="2"><input type="text" id="" name="" value="<?php echo $remEXP; ?>" readonly /></td>
  <td>&nbsp;</td>
  <td><input type="text" id="lang2" name="lang2" value="<?php echo $lang2; ?>" readonly /></td>
  <td><input type="text" id="langRate2" name="langRate2" value="<?php echo $langRate2; ?>" readonly /></td>
  <td><input type="text" id="lit2" name="lit2" value="<?php echo $lit2; ?>" readonly /></td>
  <td><input type="text" id="litRate2" name="litRate2" value="<?php echo $litRate2; ?>" readonly /></td>
  <td>&nbsp;</td>
</tr>

<tr>
  <td colspan="2">TOTAL EXP:</td>
  <td colspan="2"><input type="text" id="totalExp" name="totalExp" value="<?php echo $totalEXP; ?>" readonly /></td>  
  <td>&nbsp;</td>
  <td><input type="text" id="lang3" name="lang3" value="<?php echo $lang3; ?>" readonly /></td>
  <td><input type="text" id="langRate3" name="langRate3" value="<?php echo $langRate3; ?>" readonly /></td>
  <td><input type="text" id="lit3" name="lit3" value="<?php echo $lit3; ?>" readonly /></td>
  <td><input type="text" id="litRate3" name="litRate3" value="<?php echo $litRate3; ?>" readonly /></td>
  <td>&nbsp;</td>
</tr>

<tr>
  <td colspan="10">ABILITIES</td>
</tr>

<tr>
  <td colspan="2"><input type="text" id="ability1" name="ability1" value="<?php echo $ABILITY1 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability2" name="ability2" value="<?php echo $ABILITY2 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability3" name="ability3" value="<?php echo $ABILITY3 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability4" name="ability4" value="<?php echo $ABILITY4 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability5" name="ability5" value="<?php echo $ABILITY5 ?>" readonly /></td>
</tr>

<tr>
  <td colspan="2"><input type="text" id="ability6" name="ability6" value="<?php echo $ABILITY6 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability7" name="ability7" value="<?php echo $ABILITY7 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability8" name="ability8" value="<?php echo $ABILITY8 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability9" name="ability9" value="<?php echo $ABILITY9 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability10" name="ability10" value="<?php echo $ABILITY10 ?>" readonly /></td>
</tr>

<tr>
  <td colspan="2"><input type="text" id="ability11" name="ability11" value="<?php echo $ABILITY11 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability12" name="ability12" value="<?php echo $ABILITY12 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability13" name="ability13" value="<?php echo $ABILITY13 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability14" name="ability14" value="<?php echo $ABILITY14 ?>" readonly /></td>
  <td colspan="2"><input type="text" id="ability15" name="ability15" value="<?php echo $ABILITY15 ?>" readonly /></td>
</tr>

<tr>
  <td colspan="10">
    <button class="button" style="max-width: 50%;" type="button" id="idMarksBtn" onclick="document.getElementById('idMarksModal').style.display = 'block';">VIEW ID MARKS</button>
  </td>
</tr> 

</table>
</div>

<!--idMarksModal-->
<div id="idMarksModal" class="editModal">
<div style="float: left; width: 25%;">
      <p style="color: white; text-align: center;">HEAD</p>
      <input type="text" id="head" name="head" value="<?php echo $head; ?>" readonly />

      <p style="color: white; text-align: center;">NECK</p>
      <input type="text" id="neck" name="neck" value="<?php echo $neck; ?>" readonly />

      <p style="color: white; text-align: center;">L SHOULD</p>
      <input type="text" id="LShoulder" name="LShoulder" value="<?php echo $LShoulder; ?>" readonly />

      <p style="color: white; text-align: center;">L RIBS</p>          
      <input type="text" id="LRibs" name="LRibs" value="<?php echo $LRibs; ?>" readonly />

      <p style="color: white; text-align: center;">L BICEP</p>         
      <input type="text" id="LUpperArm" name="LUpperArm" value="<?php echo $LUpperArm; ?>" readonly />

      <p style="color: white; text-align: center;">STOMACH</p>         
      <input type="text" id="stomach" name="stomach" value="<?php echo $stomach; ?>" readonly />

      <p style="color: white; text-align: center;">L FORE</p>
      <input type="text" id="LForearm" name="LForearm" value="<?php echo $LForearm; ?>" readonly />

      <p style="color: white; text-align: center;">REAR</p>
      <input type="text" id="rear" name="rear" value="<?php echo $rear; ?>" readonly />

      <p style="color: white; text-align: center;">L HAND</p>
      <input type="text" id="LHand" name="LHand" value="<?php echo $LHand; ?>" readonly />

      <p style="color: white; text-align: center;">L THIGH</p>
      <input type="text" id="LThigh" name="LThigh" value="<?php echo $LThigh; ?>" readonly />

      <p style="color: white; text-align: center;">L CALF</p>
      <input type="text" id="LCalf" name="LCalf" value="<?php echo $LCalf; ?>" readonly />

      <p style="color: white; text-align: center;">L FOOT</p>
      <input type="text" id="LFoot" name="LFoot" value="<?php echo $LFoot; ?>" readonly />
</div>

<div style="float: left; width: 50%;">
<img src="img/virtruvian/sketchyvirtruvian.jpg" style="padding: 1vw; width: 100%; height: 105vh;" />
<button type="button" onclick="document.getElementById('idMarksModal').style.display='none';" class="navbutton">CLOSE</button>
</div>

<div style="float: left; width: 25%;">
      <p style="color: white; text-align: center;">FACE</p>
      <input type="text" id="face" name="face" value="<?php echo $face; ?>" readonly />

      <p>&nbsp;</p>
      <input type="text" value="" style="visibility: hidden;" readonly />

      <p style="color: white; text-align: center;">R SHOULD</p>
      <input type="text" id="RShoulder" name="RShoulder" value="<?php echo $RShoulder; ?>" readonly />
      
      <p style="color: white; text-align: center;">R RIBS</p>
      <input type="text" id="RRibs" name="RRibs" value="<?php echo $RRibs; ?>" readonly />

      <p style="color: white; text-align: center;">R BICEP</p>
      <input type="text" id="RUpperArm" name="RUpperArm" value="<?php echo $RUpperArm; ?>" readonly />

      <p style="color: white; text-align: center;">L BACK</p>
      <input type="text" id="lowerBack" name="lowerBack" value="<?php echo $lowerBack; ?>" readonly />

      <p style="color: white; text-align: center;">R FORE</p>
      <input type="text" id="RForearm" name="RForearm" value="<?php echo $RForearm; ?>" readonly />

      <p style="color: white; text-align: center;">GROIN</p>        
      <input type="text" id="groin" name="groin" value="<?php echo $groin; ?>" readonly />

      <p style="color: white; text-align: center;">R HAND</p>
      <input type="text" id="RHand" name="RHand" value="<?php echo $RHand; ?>" readonly />

      <p style="color: white; text-align: center;">R THIGH</p>
      <input type="text" id="RThigh" name="RThigh" value="<?php echo $RThigh; ?>" readonly />

      <p style="color: white; text-align: center;">R CALF</p>        
      <input type="text" id="RCalf" name="RCalf" value="<?php echo $RCalf; ?>" readonly />

      <p style="color: white; text-align: center;">R FOOT</p>
      <input type="text" id="RFoot" name="RFoot" value="<?php echo $RFoot; ?>" readonly />
  </div>

</div>
</div>
</div>

	<script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
</body>
</html>