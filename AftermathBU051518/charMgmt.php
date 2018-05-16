<?php
    include("inc/config.php");
    session_start();

    if (isset($_SESSION['id']) == false){
        header("Location: login.php");
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
  </head>
<body>

<div class="row" id="skillChoiceModal">
    <div class="small-6 columns" id="expPool">EXP POOL:</div>
    <div class="small-6 columns"><input type="text" id="remEXP" value="<?php echo $remEXP ?>" readonly /><br></div>
</div>

<?php include('header.php'); ?>

<!--form-->
<div class="row metal">
<div class="large-12 columns">
<form id="charsheet" action="inc/updateChar.php" method="post">

<table>

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
  <td><input type="text" id="ethnicity" name="ethnicity" value="<?php echo $ethnicity ?>" readonly /></td>
  <td>SEX:</td>
  <td><input type="text" id="sex" name="sex" value="<?php echo $sex ?>" readonly /></td>
  <td>AGE:</td> 
  <td><input type="text" id="age" name="age" value="<?php echo $age ?>" readonly /></td>
</tr>

<tr>
  <td colspan="6" class="header">COMBAT PROFICIENCIES</td>
  <td colspan="4" class="header">PHYSICAL TRAITS</td>
</tr>

<tr>
  <td><button onclick="incUnarm();" class="button" type="button" id="unarmTrnBtn">UNARM</button></td>
  <td><input type="text" id="unarm" name="unarm" value="<?php echo $UNARMED; ?>" readonly /></td>
  <td><button onclick="incThrow();" class="button" type="button" id="thrownTrnBtn">THROW</button></td>
  <td><input type="text" id="thrown" name="thrown" value="<?php echo $THROWN; ?>" readonly /></td>
  <td style="font-weight: bold;">ACT:</td>
  <td><input type="text" id="act" name="act" value="<?php echo $ACTIONS; ?>" readonly /></td>
  <td><button onclick="incMem();" class="button" type="button" id="memTrnBtn">MEM</button></td>
  <td><input type="text" id="mem" name="mem" value="<?php echo $MEM; ?>" readonly /></td>
  <td><button onclick="incStr();" class="button" type="button" id="strTrnBtn">STR</button></td>
  <td><input type="text" id="str" name="str" value="<?php echo $STR; ?>" readonly /></td>
</tr>

<tr>
  <td><button onclick="incGrap();" class="button" type="button" id="grapTrnBtn">GRAP</button></td>
  <td><input type="text" id="grap" name="grap" value="<?php echo $GRAPPLE; ?>" readonly /></td>
  <td><button onclick="incArch();" class="button" type="button" id="archTrnBtn">ARCH</button></td>
  <td><input type="text" id="arch" name="arch" value="<?php echo $ARCH; ?>" readonly /></td>
  <td style="font-weight: bold;">SEQ:</td>
  <td><input type="text" id="seq" name="seq" value="<?php echo $SEQ; ?>" readonly /></td>
  <td><button onclick="incLog();" class="button" type="button" id="logTrnBtn">LOG</button></td>
  <td><input type="text" id="log" name="log" value="<?php echo $LOG; ?>" readonly /></td>
  <td><button onclick="incEnd();" class="button" type="button" id="endTrnBtn">END</button></td>
  <td><input type="text" id="end" name="end" value="<?php echo $END; ?>" readonly /></td>
</tr>

<tr>
  <td><button onclick="incOff();" class="button" type="button" id="offTrnBtn">OFF</button></td>
  <td><input type="text" id="off" name="off" value="<?php echo $OFF; ?>" readonly /></td>
  <td><button onclick="incOHG();" class="button" type="button" id="pistolsTrnBtn">PISTOL</button></td>
  <td><input type="text" id="pistols" name="pistols" value="<?php echo $PISTOLS; ?>" readonly /></td>
  <td><button onclick="incBlock();" class="button" type="button" id="blockTrnBtn">BLOCK</button></td>
  <td><input type="text" id="block" name="block" value="<?php echo $BLOCK; ?>" readonly /></td>
  <td><button onclick="incPer();" class="button" type="button" id="perTrnBtn">PER</button></td></td>
  <td><input type="text" id="per" name="per" value="<?php echo $PER; ?>" readonly /></td>
  <td><button onclick="incDex();" class="button" type="button" id="dexTrnBtn">DEX</button></td></td>
  <td><input type="text" id="dex" name="dex" value="<?php echo $DEX; ?>" readonly /></td>
</tr>

<tr>
  <td><button onclick="incShort();" class="button" type="button" id="shortWTrnBtn">SHORT</button></td>
  <td><input type="text" id="shortW" name="shortW" value="<?php echo $SHORT; ?>" readonly /></td>
  <td><button onclick="incTHG();" class="button" type="button" id="riflesTrnBtn">RIFLE</button></td>
  <td><input type="text" id="rifles" name="rifles" value="<?php echo $RIFLES; ?>" readonly /></td>
  <td><button onclick="incDodge();" class="button" type="button" id="dodgeTrnBtn">DODGE</button></td>
  <td><input type="text" id="dodge" name="dodge" value="<?php echo $DODGE; ?>" readonly /></td>
  <td><button onclick="incWill();" class="button" type="button" id="willTrnBtn">WILL</button></td></td>
  <td><input type="text" id="will" name="will" value="<?php echo $WILL; ?>" readonly /></td>
  <td><button onclick="incSpd();" class="button" type="button" id="spdTrnBtn">SPD</button></td></td>
  <td><input type="text" id="spd" name="spd" value="<?php echo $SPD; ?>" readonly /></td>
</tr>

<tr>
  <td><button onclick="incLong();" class="button" type="button" id="longWTrnBtn">LONG</button></td>
  <td><input type="text" id="longW" name="longW" value="<?php echo $LONG; ?>" readonly /></td>
  <td><button onclick="incBurst();" class="button" type="button" id="burstTrnBtn">BURST</button></td>
  <td><input type="text" id="burst" name="burst" value="<?php echo $BURST; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td><button onclick="incCha();" class="button" type="button" id="chaTrnBtn">CHA</button></td>
  <td><input type="text" id="cha" name="cha" value="<?php echo $CHA; ?>" readonly /></td>
  <td style="font-weight: bold;">BTY:</td>
  <td><input type="text" id="bty" name="bty" value="<?php echo $BTY; ?>" readonly /></td>
</tr>

<tr>
  <td><button onclick="incTHW();" class="button" type="button" id="twoHTrnBtn">2 HAND</button></td>
  <td><input type="text" id="twoHW" name="twoHW" value="<?php echo $THM; ?>" readonly /></td>
  <td><button onclick="incSpec();" class="button" type="button" id="specialTrnBtn">SPECIAL</button></td>
  <td><input type="text" id="special" name="special" value="<?php echo $SPECIAL; ?>" readonly /></td>
  <td colspan="6" class="header">SURVIVAL</td>
</tr>

<tr>
  <td><button onclick="incChain();" class="button" type="button" id="chainTrnBtn">CHAIN</button></td>
  <td><input type="text" id="chain" name="chain" value="<?php echo $CHAIN; ?>" readonly /></td>
  <td><button onclick="incWsys();" class="button" type="button" id="wsysTrnBtn">W SYS</button></td>
  <td><input type="text" id="wsys" name="wsys" value="<?php echo $WSYS; ?>" readonly /></td>
  <td><button onclick="incSurv();" class="button" type="button" id="envAwareTrnBtn">ENV AWR</button></td>
  <td><input type="text" id="survival" name="survival" value="<?php echo $envAware; ?>" readonly /></td>
  <td><button onclick="incFirstAid();" class="button" type="button" id="firstAidTrnBtn">1ST AID</button></td>
  <td><input type="text" id="firstAid" name="firstAid" value="<?php echo $firstAid; ?>" readonly /></td>
  <td><button onclick="incNav();" class="button" type="button" id="navigTrnBtn">NAVIG</button></td>
  <td><input type="text" id="navig" name="navig" value="<?php echo $navigation; ?>" readonly /></td>
</tr>

<tr>
  <td colspan="4" class="header">TRANSPORTATION</td>
  <td><button onclick="incTrack();" class="button" type="button" id="trackTrnBtn">TRACK</button></td>
  <td><input type="text" id="tracking" name="tracking" value="<?php echo $tracking; ?>" readonly /></td>
  <td><button onclick="incTrap();" class="button" type="button" id="trapTrnBtn">TRAP</button></td>
  <td><input type="text" id="trapping" name="trapping" value="<?php echo $trapping; ?>" readonly /></td>
  <td><button onclick="incFish();" class="button" type="button" id="fishTrnBtn">FISH</button></td>
  <td><input type="text" id="fishing" name="fishing" value="<?php echo $fishing; ?>" readonly /></td>
</tr>

<tr>
  <td><button onclick="incSkate();" class="button" type="button" id="skateTrnBtn">SKATE</button></td>
  <td><input type="text" id="skateboard" name="skateboard" value="<?php echo $skateboard; ?>" readonly /></td>
  <td><button onclick="incBike();" class="button" type="button" id="bikeTrnBtn">BIKE</button></td>
  <td><input type="text" id="bicycle" name="bicycle" value="<?php echo $bicycle; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td style="font-weight: bold;">GAMBLE</td>
  <td><input type="text" id="gambling" name="gambling" value="<?php echo $GAMBLING; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
</tr>

<tr>
  <td><button onclick="incHorse();" class="button" type="button" id="horseTrnBtn">HORSE</button></td>
  <td><input type="text" id="horsemanship" name="horsemanship" value="<?php echo $horsemanship; ?>" readonly /></td>
  <td><button onclick="incAuto();" class="button" type="button" id="autoTrnBtn">AUTO</button></td>
  <td><input type="text" id="automobile" name="automobile" value="<?php echo $automobile; ?>" readonly /></td>
  <td colspan="6" class="header">ESPIONAGE</td>
</tr>

<tr>
  <td><button onclick="incMotorcycle();" class="button" type="button" id="motorcycleTrnBtn">MOTOR X</button></td>
  <td><input type="text" id="motorcycle" name="motorcycle" value="<?php echo $motorcycle; ?>" readonly /></td>
  <td><button onclick="incJetSki();" class="button" type="button" id="jetSkiTrnBtn">JET SKI</button></td>
  <td><input type="text" id="jetSki" name="jetSki" value="<?php echo $jetSki; ?>" readonly /></td>
  <td><button onclick="incStealth();" class="button" type="button" id="stealthTrnBtn">STLTH</button></td>
  <td><input type="text" id="stealth" name="stealth" value="<?php echo $stealth; ?>" readonly /></td>
  <td><button onclick="incSurvey();" class="button" type="button" id="stealthTrnBtn">SURVEY</button></td>
  <td><input type="text" id="surveillance" name="surveillance" value="<?php echo $surveillance; ?>" readonly /></td>
  <td><button onclick="incForen();" class="button" type="button" id="forenTrnBtn">FOREN</button></td>
  <td><input type="text" id="forensics" name="forensics" value="<?php echo $forensics; ?>" readonly /></td>
</tr>

<tr>
  <td><button onclick="incSail();" class="button" type="button" id="sailTrnBtn">SAIL</button></td>
  <td><input type="text" id="sailing" name="sailing" value="<?php echo $sailing; ?>" readonly /></td>
  <td><button onclick="incBoat();" class="button" type="button" id="boatTrnBtn">BOAT</button></td>
  <td><input type="text" id="boating" name="boating" value="<?php echo $boating; ?>" readonly /></td>
  <td><button onclick="incPick();" class="button" type="button" id="pickTrnBtn">PICK</button></td>
  <td><input type="text" id="pickpocket" name="pickpocket" value="<?php echo $pickpocket; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td><button onclick="incLock();" class="button" type="button" id="lockTrnBtn">LOCK</button></td>
  <td><input type="text" id="lockpick" name="lockpick" value="<?php echo $lockpick; ?>" readonly /></td>
</tr>

<tr>
  <td><button onclick="incMGV();" class="button" type="button" id="MGVTrnBtn">MULTI GEAR</button></td>
  <td><input type="text" id="MGV" name="MGV" value="<?php echo $MGV; ?>" readonly /></td>
  <td><button onclick="incHvyEquip();" class="button" type="button" id="hvyEquipTrnBtn">HVY EQUIP</button></td>
  <td><input type="text" id="hvyEquip" name="hvyEquip" value="<?php echo $hvyEquip; ?>" readonly /></td>
  <td colspan="6" class="header">TECHNOLOGY</td>
</tr>

<tr>
  <td><button onclick="incHeli();" class="button" type="button" id="heliTrnBtn">HELI</button></td>
  <td><input type="text" id="helicopters" name="helicopters" value="<?php echo $helicopters; ?>" readonly /></td>
  <td><button onclick="incPlane();" class="button" type="button" id="planeTrnBtn">PLANE</button></td>
  <td><input type="text" id="airplanes" name="airplanes" value="<?php echo $airplanes; ?>" readonly /></td>
  <td><button onclick="incCraft();" class="button" type="button" id="pickTrnBtn">CRAFT</button></td>
  <td><input type="text" id="craft" name="craft" value="<?php echo $crafting; ?>" readonly /></td>
  <td><button onclick="incComp();" class="button" type="button" id="compTrnBtn">COMP</button></td>
  <td><input type="text" id="computers" name="computers" value="<?php echo $computers; ?>" readonly /></td>
  <td><button onclick="incProgram();" class="button" type="button" id="programTrnBtn" disabled="true">PROG</button></td>
  <td><input type="text" id="programming" name="programming" value="<?php echo $programming; ?>" readonly /></td>
</tr>

<tr>
  <td colspan="4" class="header">SCIENCES</td>
  <td><button onclick="incMech();" class="button" type="button" id="mechTrnBtn">MECH</button></td>
  <td><input type="text" id="mechanics" name="mechanics" value="<?php echo $mechanics; ?>" readonly /></td>
  <td><button onclick="incElect();" class="button" type="button" id="electTrnBtn">ELECT</button></td>
  <td><input type="text" id="electrical" name="electrical" value="<?php echo $electrical; ?>" readonly /></td>
  <td><button onclick="incRadio();" class="button" type="button" id="radioTrnBtn">RADIO</button></td>
  <td><input type="text" id="radioSys" name="radioSys" value="<?php echo $radioSys; ?>" readonly /></td>
</tr>

<tr>
  <td><button onclick="incLiteracy();" class="button" type="button" id="litTrnBtn">LIT</button></td>
  <td><input type="text" id="literacy" name="literacy" value="<?php echo $literacy; ?>" readonly /></td>
  <td><button onclick="incHistory();" class="button" type="button" id="historyTrnBtn">HIST</button></td>
  <td><input type="text" id="history" name="history" value="<?php echo $history; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td><button onclick="incConstruct();" class="button" type="button" id="constructTrnBtn">CONST</button></td>
  <td><input type="text" id="construction" name="construction" value="<?php echo $construction; ?>" readonly /></td>
  <td colspan="2">&nbsp;</td>
</tr>

<tr>
  <td><button onclick="incMath();" class="button" type="button" id="mathTrnBtn">MATH</button></td>
  <td><input type="text" id="math" name="math" value="<?php echo $math; ?>" readonly /></td>
  <td><button onclick="incPhysics();" class="button" type="button" id="physicsTrnBtn">PHYSIC</button></td>
  <td><input type="text" id="physics" name="physics" value="<?php echo $physics; ?>" readonly /></td>
  <td colspan="6" class="header">SOFT SKILLS & LANGUAGES</td>
</tr>

<tr>
  <td><button onclick="incBio();" class="button" type="button" id="bioTrnBtn">BIO</button></td>
  <td><input type="text" id="biology" name="biology" value="<?php echo $biology; ?>" readonly /></td>
  <td><button onclick="incBot();" class="button" type="button" id="botTrnBtn">BOT</button></td>
  <td><input type="text" id="botany" name="botany" value="<?php echo $botany; ?>" readonly /></td>
  <td></td>
  <td><button onclick="incNegot();" class="button" type="button" id="negotTrnBtn">NEGOT</button></td>
  <td><input type="text" id="negot" name="negot" value="<?php echo $negotiation; ?>" readonly /></td>
  <td><button onclick="incLaw();" class="button" type="button" id="lawTrnBtn">LAW</button></td>
  <td><input type="text" id="law" name="law" value="<?php echo $law; ?>" readonly /></td>
  <td></td>
</tr>

<tr>
  <td><button onclick="incChem();" class="button" type="button" id="chemTrnBtn">CHEM</button></td>
  <td><input type="text" id="chemistry" name="chemistry" value="<?php echo $chemistry; ?>" readonly /></td>
  <td><button onclick="incToxic();" class="button" type="button" id="toxicTrnBtn" disabled="true">TOXIC</button></td>
  <td><input type="text" id="toxicology" name="toxicology" value="<?php echo $toxicology; ?>" readonly /></td>
  <td colspan="3" style="font-style: italic;">LANGUAGES</td>
  <td colspan="3" style="font-style: italic;">LITERACIES</td>
</tr>

<tr>
  <td><button onclick="incPharma();" class="button" type="button" id="pharmaTrnBtn" disabled="true">PHARM</button></td>
  <td><input type="text" id="pharmacology" name="pharmacology" value="<?php echo $pharmacology; ?>" readonly /></td>
  <td><button onclick="incDoctor();" class="button" type="button" id="doctorTrnBtn" disabled="true">DOC</button></td>
  <td><input type="text" id="doctor" name="doctor" value="<?php echo $doctor; ?>" readonly /></td>
  <td id="langBtn1"><button onclick="n = 1; langModal.style.display='block';" class="button" type="button" id="langBtn1">LEARN</button></td>
  <td><input type="text" id="lang1" name="lang1" value="<?php echo $lang1; ?>" readonly /></td>
  <td><input type="text" id="langRate1" name="langRate1" value="<?php echo $langRate1; ?>" readonly /></td>
  <td><input type="text" id="lit1" name="lit1" value="<?php echo $lit1; ?>" readonly /></td>
  <td><input type="text" id="litRate1" name="litRate1" value="<?php echo $litRate1; ?>" readonly /></td>
  <td id="litBtn1"><button onclick="m = 1; litModal.style.display='block';" class="button" type="button" id="litBtn1">LEARN</button></td>
</tr>

<tr>
  <td colspan="2">EXP POOL:</td>
  <td colspan="2"><input type="text" id="EXPpool" name="EXPpool" value="<?php echo $remEXP; ?>" class="exp" readonly /></td>
  <td id="langBtn2"><button onclick="n = 2; langModal.style.display='block';" class="button" type="button">LEARN</button></td>
  <td><input type="text" id="lang2" name="lang2" value="<?php echo $lang2; ?>" readonly /></td>
  <td><input type="text" id="langRate2" name="langRate2" value="<?php echo $langRate2; ?>" readonly /></td>
  <td><input type="text" id="lit2" name="lit2" value="<?php echo $lit2; ?>" readonly /></td>
  <td><input type="text" id="litRate2" name="litRate2" value="<?php echo $litRate2; ?>" readonly /></td>
  <td id="litBtn2"><button onclick="m = 2; litModal.style.display='block';" class="button" type="button">LEARN</button></td>
</tr>
  

<tr>
  <td colspan="2">TOTAL EXP:</td>
  <td colspan="2"><input type="text" id="totalEXP" name="totalEXP" value="<?php echo $totalEXP; ?>" class="exp" readonly /></td>  
  <td id="langBtn3"><button onclick="n = 3; langModal.style.display='block';" class="button" type="button">LEARN</button></td>
  <td><input type="text" id="lang3" name="lang3" value="<?php echo $lang3; ?>" readonly /></td>
  <td><input type="text" id="langRate3" name="langRate3" value="<?php echo $langRate3; ?>" readonly /></td>
  <td><input type="text" id="lit3" name="lit3" value="<?php echo $lit3; ?>" readonly /></td>
  <td><input type="text" id="litRate3" name="litRate3" value="<?php echo $litRate3; ?>" readonly /></td>
  <td id="litBtn3"><button onclick="m = 3; litModal.style.display='block';" class="button" type="button">LEARN</button></td>
</tr>

<tr>
  <td colspan="3">&nbsp;</td>
  <td colspan="4">
    <button class="navbutton" type="button" onclick="document.getElementById('abilityModal').style.display = 'block';">ADD NEW ABILITY</button></td>
  <td colspan="3">&nbsp;</td>
</tr>

<tr>
  <td colspan="10" class="header">ABILITIES</td>
</tr>

<tr>
  <td colspan="2"><input type="text" id="ability1" name="ability1" value="<?php echo $ABILITY1 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability2" name="ability2" value="<?php echo $ABILITY2 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability3" name="ability3" value="<?php echo $ABILITY3 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability4" name="ability4" value="<?php echo $ABILITY4 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability5" name="ability5" value="<?php echo $ABILITY5 ?>" class="full" readonly /></td>
</tr>

<tr>   <td colspan="2"><input type="text" id="ability6" name="ability6" value="<?php echo $ABILITY6 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability7" name="ability7" value="<?php echo $ABILITY7 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability8" name="ability8" value="<?php echo $ABILITY8 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability9" name="ability9" value="<?php echo $ABILITY9 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability10" name="ability10" value="<?php echo $ABILITY10 ?>" class="full" readonly /></td>
</tr>

<tr>
  <td colspan="2"><input type="text" id="ability11" name="ability11" value="<?php echo $ABILITY11 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability12" name="ability12" value="<?php echo $ABILITY12 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability13" name="ability13" value="<?php echo $ABILITY13 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability14" name="ability14" value="<?php echo $ABILITY14 ?>" class="full" readonly /></td>
  <td colspan="2"><input type="text" id="ability15" name="ability15" value="<?php echo $ABILITY15 ?>" class="full" readonly /></td>
</tr>

<tr>
  <td colspan="3">&nbsp;</td>
  <td colspan="4">
    <button class="navbutton" type="button" id="idMarksBtn" onclick="document.getElementById('idMarksModal').style.display = 'block';">VIEW ID MARKS</button></td>
  <td colspan="3">&nbsp;</td>
</tr> 
<!--SUBMIT-->
  <tr>
    <td colspan="3">&nbsp;</td>
    <td colspan="4"><input type="submit" name="submit" value="CONFIRM & UPLOAD" class="navbutton" /></td>
    <td colspan="3">&nbsp;</td>
  </tr>

</table>
</form>
</div>

<!--MODALS-->
<!--idMarksModal-->
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

<!--LANGUAGE MODAL-->
    <div id="langModal" class="modal">
        <p style="font-weight: bold;">PLEASE SELECT A LANGUAGE</p>
        <div style="width: 50%; float: left; color: white;">
        <ul>
          <li><button type="button" onclick="language = 'SPANISH'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">SPANISH</button></li>
          <li><button type="button" onclick="language = 'FRENCH'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">FRENCH</button></li>
          <li><button type="button" onclick="language = 'ITALIAN'; addLang(); langModal.style.display = 'none'; this.disabled = true;;" class="button">ITALIAN</button></li>
          <li><button type="button" onclick="language = 'GERMAN'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">GERMAN</button></li>
          <li><button type="button" onclick="language = 'ARABIC'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">ARABIC</button></li>
          <li><button type="button" onclick="language = 'YIDDISH'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">YIDDISH</button></li>
          <li><button type="button" onclick="language = 'RUSSIAN'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">RUSSIAN</button></li>
          <li><button type="button" onclick="language = 'POLISH'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">POLISH</button></li>
          <li><button type="button" onclick="language = 'US_SIGN'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">US SIGN</button></li>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="language = 'MANDARIN'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">MANDARIN</button></li>
          <li><button type="button" onclick="language = 'CANTONESE'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">CANTONESE</button></li>
          <li><button type="button" onclick="language = 'JAPANESE'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">JAPANESE</button></li>
          <li><button type="button" onclick="language = 'HINDI'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">HINDI</button></li>
          <li><button type="button" onclick="language = 'VIETNAMESE'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">VIETNAMESE</button></li>
          <li><button type="button" onclick="language = 'FINNISH'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">FINNISH</button></li>
          <li><button type="button" onclick="language = 'SWEDISH'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">SWEDISH</button></li>
          <li><button type="button" onclick="language = 'WELSH'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">WELSH</button></li>
        </ul>
        </div>
    <button type="button" onclick="langModal.style.display = 'none';" class="button">CANCEL</button>
  </div>  
<!--LITERACY MODAL-->
    <div id="litModal" class="modal">
        <p style="font-weight: bold;">PLEASE SELECT A LANGUAGE</p>
        <div style="width: 50%; float: left; color: white;">
        <ul>
          <li><button type="button" onclick="lit = 'SPANISH'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">SPANISH</button></li>
          <li><button type="button" onclick="lit = 'FRENCH'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">FRENCH</button></li>
          <li><button type="button" onclick="lit = 'ITALIAN'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">ITALIAN</button></li>
          <li><button type="button" onclick="lit = 'GERMAN'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">GERMAN</button></li>
          <li><button type="button" onclick="lit = 'ARABIC'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">ARABIC</button></li>
          <li><button type="button" onclick="lit = 'YIDDISH'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">YIDDISH</button></li>
          <li><button type="button" onclick="lit = 'RUSSIAN'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">RUSSIAN</button></li>
          <li><button type="button" onclick="lit = 'POLISH'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">POLISH</button></li>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="lit = 'MANDARIN'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">MANDARIN</button></li>
          <li><button type="button" onclick="lit = 'CANTONESE'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">CANTONESE</button></li>
          <li><button type="button" onclick="lit = 'JAPANESE'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">JAPANESE</button></li>
          <li><button type="button" onclick="lit = 'HINDI'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">HINDI</button></li>
          <li><button type="button" onclick="lit = 'VIETNAMESE'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">VIETNAMESE</button></li>
          <li><button type="button" onclick="lit = 'FINNISH'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">FINNISH</button></li>
          <li><button type="button" onclick="lit = 'SWEDISH'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">SWEDISH</button></li>
          <li><button type="button" onclick="lit = 'WELSH'; addLit(); litModal.style.display = 'none'; this.disabled = true;" class="button">WELSH</button></li>
        </ul>
        </div>
      <button type="button" onclick="litModal.style.display = 'none';" class="button">CANCEL</button>
    </div>

<!--ABILITY MODAL-->
<div id="abilityModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">PRE-REQUISITES LISTED IN GRAY</td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="3"><button type="button" onclick="addTake(); document.getElementById('abilityModal').style.display='none';" class="button">TAKEDOWN</button></td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('sweepModal').style.display='block';" class="button">SWEEP-ATTACK</button></td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('disarmModal').style.display='block';" class="button">DISARM</button></td>
    <td colspan="3"><button type="button" onclick="addStun(); document.getElementById('abilityModal').style.display='none';" class="button">STUN</button></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="3" style="background-color: darkgray;">5,000 EXP</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">STR >= 8<br>10,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="3"><button type="button" onclick="addCripple(); document.getElementById('abilityModal').style.display='none';" class="button">CRIPPLE</button>
      </td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('parryModal').style.display='block';" class="button">PARRY</button></td>
    <td colspan="3"><button type="button" onclick="addDodge(); document.getElementById('abilityModal').style.display='none';" class="button">AUTO-DODGE</button>
      </td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('counterModal').style.display='block';" class="button">COUNTER-ATTACK</button></td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="3" style="background-color: darkgray;">STR >= 10<br>15,000 EXP</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">SPD >= 14<br>DEX >= 12<br>50,000 EXP</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
  </tr>

<!--3RD ROW-->  
  <tr>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('drawModal').style.display='block';" class="button">QUICKDRAW</button></td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('loadModal').style.display='block';" class="button">SPEEDLOAD</button></td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('volleyModal').style.display='block';" class="button">VOLLEY</button></td>
    <td colspan="3"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';
      document.getElementById('blindModal').style.display='block';" class="button">BLINDFIRE</button></td>
  </tr>
<!--3RD ROW REQS-->
  <tr>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
    <td colspan="3" style="background-color: darkgray;">VARIES</td>
  </tr> 

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('abilityModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--SWEEP MODAL-->
<div id="sweepModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">SWEEP ATTACK</td>
  </tr>

  <tr>
    <td colspan="12" class="box"><p>
    A SWEEP ATTACK IS USED TO STRIKE MULTIPLE TARGETS WITHIN RANGE OF THE CHARACTER.  IN THE CASE OF MELEE ATTACKS IT COSTS 2 ACTIONS, ONE TO SWING AND ANOTHER TO REGAIN THEIR BALANCE.  
    IN THE CASE OF A BURST FIRE SWEEP ATTACK IT IS SIMPLY PUTTING FIRE OVER A WIDER TARGET AREA THAN THE STANDARD 6FT CONE.  IN THE EVENT OF A SUCCESSFUL SWEEP ATTACK EACH TARGET RECIEVES 
    ONE HIT DETERMINED BY THE RANDOM HIT CHART WITH STANDARD COVER RULES AND COMMON SENSE IN PLAY.
    </p></td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addUnSwp(); document.getElementById('sweepModal').style.display='none';" class="button">UNARMED</button></td>
    <td colspan="4"><button type="button" onclick="addShortSwp(); document.getElementById('sweepModal').style.display='none';" class="button">SHORT</button></td>
    <td colspan="4"><button type="button" onclick="addLongSwp(); document.getElementById('sweepModal').style.display='none';" class="button">LONG</button></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">STR >= 14<br>UNARMED >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 14<br>SHORT >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 10<br>LONG >= 100<br>7,500 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addTHWSwp(); document.getElementById('sweepModal').style.display='none';" class="button">TWO-HANDED</button>
      </td>
    <td colspan="4"><button type="button" onclick="addChainSwp(); document.getElementById('sweepModal').style.display='none';" class="button">CHAIN</button></td>
    <td colspan="4"><button type="button" onclick="addBurstSwp(); document.getElementById('sweepModal').style.display='none';" class="button">BURST-FIRE</button>
      </td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">STR >= 10<br>TWO HANDED >= 75<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 8<br>BURST >= 75<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">CHAIN >= 75<br>5,000 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('sweepModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--SWEEP MODAL-->
<div id="sweepModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">SWEEP ATTACK</td>
  </tr>

  <tr>
    <td colspan="12" class="box"><p>
    A SWEEP ATTACK IS USED TO STRIKE MULTIPLE TARGETS WITHIN RANGE OF THE CHARACTER.  IN THE CASE OF MELEE ATTACKS IT COSTS 2 ACTIONS, ONE TO SWING AND ANOTHER TO REGAIN THEIR BALANCE.  
    IN THE CASE OF A BURST FIRE SWEEP ATTACK IT IS SIMPLY PUTTING FIRE OVER A WIDER TARGET AREA THAN THE STANDARD 6FT CONE.  IN THE EVENT OF A SUCCESSFUL SWEEP ATTACK EACH TARGET RECIEVES 
    ONE HIT DETERMINED BY THE RANDOM HIT CHART WITH STANDARD COVER RULES AND COMMON SENSE IN PLAY.
    </p></td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addUnSwp(); document.getElementById('sweepModal').style.display='none';" class="button">UNARMED</button></td>
    <td colspan="4"><button type="button" onclick="addShortSwp(); document.getElementById('sweepModal').style.display='none';" class="button">SHORT</button></td>
    <td colspan="4"><button type="button" onclick="addLongSwp(); document.getElementById('sweepModal').style.display='none';" class="button">LONG</button></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">STR >= 14<br>UNARMED >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 14<br>SHORT >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 10<br>LONG >= 100<br>7,500 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addTHWSwp(); document.getElementById('sweepModal').style.display='none';" class="button">TWO-HANDED</button>
      </td>
    <td colspan="4"><button type="button" onclick="addChainSwp(); document.getElementById('sweepModal').style.display='none';" class="button">CHAIN</button></td>
    <td colspan="4"><button type="button" onclick="addBurstSwp(); document.getElementById('sweepModal').style.display='none';" class="button">BURST-FIRE</button>
      </td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">STR >= 10<br>TWO HANDED >= 75<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">STR >= 8<br>BURST >= 75<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">CHAIN >= 75<br>5,000 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('sweepModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--DISARM MODAL-->
<div id="disarmModal" class="editModal">
<div>
<table>

  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">DISARM ATTACK</td>
  </tr>

  <tr>
    <td colspan="12" class="box"><p>
      A DISARM ATTACK IS USED TO STRIP THE WEAPON FROM AN OPPONENTS HAND WITHOUT ACTUALLY INFLICTING ANY SERIOUS DAMAGE UPON THE TARGET.  EACH WEAPON TYPE REPRESENTS TRAINING 
      IN THE TOOLS NECESSARY TO ACCOMPLISH THE EFFECT QUICKLY, IE: UNARMED IS THE STRIKE THAT FORCES TARGET TO LOSE HIS GRIP, GRAPPLE IS WRESTLING THE WEAPON AWAY; SHORT, LONG, AND 
      TWO HANDED USE THE WEAPONS LEVERAGE AGAINST GRIP STRENGTH; AND CHAINS TEND TO ENSNARE THE WEAPON.
    </p></td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addUnDis(); document.getElementById('disarmModal').style.display='none';" class="button">UNARMED</button></td>
    <td colspan="4"><button type="button" onclick="addGrapDis(); document.getElementById('disarmdisarmModal').style.display='none';" class="button">GRAPPLE
    </button></td>
    <td colspan="4"><button type="button" onclick="addShortDis(); document.getElementById('disarmModal').style.display='none';" class="button">SHORT</button></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">UNARMED >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">GRAPPLE >= 75<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">SHORT >= 100<br>10,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addLongDis(); document.getElementById('disarmModal').style.display='none';" class="button">LONG</button>
      </td>
    <td colspan="4"><button type="button" onclick="addTHWDis(); document.getElementById('disarmModal').style.display='none';" class="button">TWO-HANDED</button>
      </td>
    <td colspan="4"><button type="button" onclick="addChainDis(); document.getElementById('disarmModal').style.display='none';" class="button">CHAIN</button></td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">LONG >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">TWO-HANDED >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">CHAIN >= 75<br>7,500 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('disarmModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--PARRY MODAL-->
<div id="parryModal" class="editModal">
<div>
<table>
  
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">PARRY</td>
  </tr>
  <tr>
    <td colspan="12" class="box"><p>
    A PARRY ATTACK IS ESSENTIALLY AN AUTOMATIC BLOCK, MEANING THAT IF THE CHARACTER HAS THIS ABILITY THEY NO LONGER NEED TO SAVE AN ACTION TO BLOCK AS LONG AS THEY HAVE THE 
    WEAPON OR EQUIPMENT IN HAND.  BLOCK RULES APPLY AS NORMAL, THOUGH THE WEAPON SKILL PREREQUISITES ARE WHATS NEEDED TO MAKE THE OPTION AVAILABLE.  THE SHIELD WAS DESIGNED FOR THIS, 
    AND AS SUCH IS SIGNIFICANTLY EASIER TO USE!
    </p></td>
  </tr>

<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addUnBlk(); document.getElementById('parryModal').style.display='none';" class="button">UNARMED</button></td>
    <td colspan="4"><button type="button" onclick="addShieldBlk(); document.getElementById('parryModal').style.display='none';" class="button">SHIELD</button>
    </td>
    <td colspan="4"><button type="button" onclick="addShortBlk(); document.getElementById('parryModal').style.display='none';" class="button">SHORT</button></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">UNARMED >= 100<br>SPD >= 10<br>20,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">UNARMED >= 75<br>SPD >= 8<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">SHORT >= 100<br>SPD >= 10<br>20,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addLongBlk(); document.getElementById('parryModal').style.display='none';" class="button">LONG</button>
      </td>
    <td colspan="4"><button type="button" onclick="addTHWBlk(); document.getElementById('parryModal').style.display='none';" class="button">TWO-HANDED</button>
      </td>
    <td colspan="4"><button type="button" onclick="addChainBlk(); document.getElementById('parryModal').style.display='none';" class="button">CHAIN</button></td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">LONG >= 100<br>SPD >= 10<br>20,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">TWO-HANDED >= 100<br>SPD >= 10<br>20,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">CHAIN >= 100<br>SPD >= 10<br>7,500 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('parryModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--COUNTER-ATTACK MODAL-->
<div id="counterModal" class="editModal">
<div>
<table>

  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">COUNTER-ATTACK</td>
  </tr>
    <tr>
    <td colspan="12" class="box"><p>
    THE COUNTER ATTACK ALLOWS THE CHARACTER TO PERFORM A FREE ATTACK WITH THE SELECTED WEAPON AT NO ACTION COST WHENEVER THEY SUCCESSFULLY BLOCK.  IF THEY STRIKE THEIR OPPONENT THEN 
    THE TARGET RECIEVES DAMAGE TO A LOCATION DETERMINED BY THE RANDOM HIT CHART WITH STANDARD COVER RULES AND COMMON SENSE IN PLAY  
    </p></td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addUnCA(); document.getElementById('counterModal').style.display='none';" class="button">UNARMED</button></td>
    <td colspan="4"><button type="button" onclick="addShortCA(); document.getElementById('counterModal').style.display='none';" class="button">SHORT</button></td>
    <td colspan="4"><button type="button" onclick="addLongCA(); document.getElementById('counterModal').style.display='none';" class="button">LONG</button>
      </td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">UNARMED >= 100<br>SPD >= 10<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">SHORT >= 100<br>SPD >= 10<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">LONG >= 100<br>SPD >= 12<br>10,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addTHWCA(); document.getElementById('counterModal').style.display='none';" class="button">TWO-HANDED</button>
      </td>
    <td colspan="4"><button type="button" onclick="addChainCA(); document.getElementById('counterModal').style.display='none';" class="button">CHAIN</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">TWO-HANDED >= 100<br>SPD >= 12<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">CHAIN >= 100<br>SPD >= 10<br>10,000 EXP</td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('counterModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--QUICKDRAW MODAL-->
<div id="drawModal" class="editModal">
<div>
<table>

  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">QUICKDRAW</td>
  </tr>
    <tr>
    <td colspan="12" class="box"><p>
    LIFE ON EDGE HAS LEAD THE CHARACTER TO ALWAYS HAVE A WEAPON OR ITEM AT THE READY.  EACH LOCATION REPRESENTS AN AREA OF THE BODY WHERE THE CHARACTER CAN SPEND ZERO ACTION POINTS 
    IN ORDER TO DRAW A PIECE OF EQUIPMENT.  THIS IS NOT ONLY HIGHLY USEFUL FOR WEAPONS THEMSELVES BUT ALSO MUNITIONS, MAGAZINES, THROWN WEAPONS, ETC.  IN THE CASE OF THE SHOULDER LISTING, 
    IT REFERS TO THE AREA UNDER THE ARMPIT, DEFINED BY ITS REQUIRED SHOULDER HARNESS.  AS FOR THE REAR, THIS REFERS TO THE BACK OF THE BELT. IT SHOULD BE NOTED HOWEVER, THAT THIS ONLY 
    COVERS THE EQUIPMENT EASILY ACCESSIBLE TO THE DOMINANT HAND UNLESS THE CHARACTERS OFF-HAND HAS REACHED 0 AND AMBIDEXTERITY IS ACHIEVED
    </p></td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addHipDraw(); document.getElementById('drawModal').style.display='none';" class="button">HIP</button></td>
    <td colspan="4"><button type="button" onclick="addBackDraw(); document.getElementById('drawModal').style.display='none';" class="button">BACK</button></td>
    <td colspan="4"><button type="button" onclick="addShouldDraw(); document.getElementById('drawModal').style.display='none';" class="button">SHOULDER</button>
      </td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">DEX >= 10<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 12<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">5,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addRearDraw(); document.getElementById('drawModal').style.display='none';" class="button">REAR</button>
      </td>
    <td colspan="4"><button type="button" onclick="addThighDraw(); document.getElementById('drawModal').style.display='none';" class="button">THIGH</button></td>
    <td colspan="4"><button type="button" onclick="addBootDraw(); document.getElementById('drawModal').style.display='none';" class="button">BOOT</td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">DEX >= 10<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 14<br>2,500 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('drawModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--SPEED LOAD MODAL-->
<div id="loadModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">SPEEDLOAD</td>
  </tr>
    <tr>
    <td colspan="12" class="box"><p>
    SPEED LOADING IS TRAINING IN RELOADING A PARTICULAR TYPE OF WEAPON.  FOR BOWS, CROSSBOWS, AND REVOLVERS THIS IS SIGNIFICANTLY MORE COMPLICATED THAN SIMPLY EJECTING AND RELOADING 
    A MAGAZINE THEN HITTING A SLIDE RELEASE.  THE IDEA IS TRAINING YOUR CHARACTER TO RETURN TO OR NEVER STOP AIMING AT THEIR TARGET WHILE SPEEDING UP THE PROCESS OF RELOADING THEIR WEAPON
    <br>  
    <br>FOR THE ARCHERY WEAPONS, IT MEANS THAT THE ACT OF NOTCHING, DRAWING, AND AIMING ARE COMBINED INTO ONE FLUID MOTION REMOVING THEM AS A REQUIREMENT FOR THE CHARACTER.  SO RATHER 
    THAN THE SEQUENCE BEING 1-GRAB ARROW/BOLT, 2-NOTCH, 3-DRAW, 4-AIM, 5-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>IT BECOMES: 1-GRAB ARROW/BOLT, 2-SPEEDLOAD, 3-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>FOR REVOLVERS ITS HAND TRAINING REDUCING THE CHAMBER TIME FOR THE WEAPON.  RATHER THAN 1-OPEN & DUMP EMPTIES, 2-GRAB ROUNDS IN LEFT HAND, 3 THRU 8 FACING AND CHAMBERING ROUNDS 
    (DEX CHECK), 9-CLOSE, 10-AIM, 11-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>IT BECOMES: 1-OPEN & DUMP WHILE GRABBING ROUNDS, FINGER ROLLS LEADING TO 2 THRU 4 CHAMBERING AS A SPEED LOAD, 5-CLOSE AND AIM, 6-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>FOR RIFLES AND PISTOLS RATHER THAN 1-EJECT MAG, 2-GRAB MAG, 3-LOAD MAG, 4-RELEASE SLIDE, 5-AIM, 6-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>IT BECOMES: 1-EJECT & GRAB MAG, 2-LOAD & RELEASE SLIDE WHILE BRINGING UP AIM, 3-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>AND FINALLY FOR MAGAZINE TUBE WEAPONS (PUMP ACTION SHOTGUNS OR LEVER ACTION RIFLES) ITS ANOTHER FINGER ROLL EXERCISE SO RATHER THAN 1-GRAB ROUNDS, 2 THRU 8 ON PUMP ACTION SHOTGUN 
    (HOWEVER MANY ROUNDS THE WEAPON HOLDS, IN THIS CASE 7) FACING & CHAMBERING (DEX CHECK), 9-SLIDE RELEASE, 10-AIM, 11-FIRE (+1 FOR TARGETED STRIKES)<br>
    <br>IT BECOMES: 1-GRAB & FACE ROUNDS, 2 THRU 5 (HOWEVER MANY ROUNDS / 2) CHAMBERING, 6-SLIDE & AIM, 7-FIRE (+1 FOR TARGETED STRIKES)
    </p></td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addQBow(); document.getElementById('loadModal').style.display='none';" class="button">BOW & ARROW</button></td>
    <td colspan="4"><button type="button" onclick="addQCross(); document.getElementById('loadModal').style.display='none';" class="button">CROSSBOW</button></td>
    <td colspan="4"><button type="button" onclick="addQRev(); document.getElementById('loadModal').style.display='none';" class="button">REVOLVER</button>
      </td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">DEX >= 14<br>12,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 12<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 14<br>15,000 EXP</td>
  </tr>

<!--2ND ROW-->  
  <tr>
    <td colspan="4"><button type="button" onclick="addQPistol(); document.getElementById('loadModal').style.display='none';" class="button">PISTOL</button></td>
    <td colspan="4"><button type="button" onclick="addQRifle(); document.getElementById('loadModal').style.display='none';" class="button">RIFLE</button></td>
    <td colspan="4"><button type="button" onclick="addQTube(); document.getElementById('loadModal').style.display='none';" class="button">MAGAZINE TUBE</td>
  </tr>
<!--2ND ROW REQS-->
  <tr>
    <td colspan="4" style="background-color: darkgray;">DEX >= 10<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 10<br>7,500 EXP</td>
    <td colspan="4" style="background-color: darkgray;">DEX >= 12<br>10,000 EXP</td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('loadModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--VOLLEY MODAL-->
<div id="volleyModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">VOLLEY ATTACK</td>
  </tr>
    <tr>
    <td colspan="12" class="box"><p>
    A VOLLEY ATTACK ESSENTIALLY TREATS A SEMI AUTOMATIC WEAPON AS IF IT WERE FULLY AUTOMATIC IN THE ABILITY TO FIRE OFF A BURST FIRE ATTACK USING THE APPROPRIATE WEAPON SKILL.  
    THE DETERMINATION OF NUMBER OF SUCCESSFUL HITS FOLLOWS THE SAME RULES AS THE BURST FIRE ATTACK ON THE APPROPRIATE SKILL TYPE, AND THE AMMUNITION SPENT IS THE SAME AS A BURST ATTACK 
    AS WELL (5 ROUNDS EXCEPT IN THE CASE OF USING A REVOLVER IN WHICH ALL 6 ARE USED).  ACTION POINT USE IS TYPICALLY 1-AIM, 2 THRU 6 FIRE.
    </p></td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="addVP(); document.getElementById('volleyModal').style.display='none';" class="button">PISTOL</button></td>
    <td colspan="4"><button type="button" onclick="addVR(); document.getElementById('volleyModal').style.display='none';" class="button">RIFLE</button></td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4" style="background-color: darkgray;">ONE HAND GUNS >= 100<br>5,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">TWO HAND GUNS >= 100<br>5,000 EXP</td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('volleyModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

<!--BLINDFIRE MODAL-->
<div id="blindModal" class="editModal">
<div>
<table>
  <tr>
    <td colspan="12" style="background-color: lightblue; font-weight: bold;">BLINDFIRE ATTACK</td>
  </tr>
    <tr>
    <td colspan="12" class="box"><p>
    THE CHARACTER HAS BECOME SO FAMILIAR WITH THEIR WEAPON THAT THEY HAVE LEARNED TO FIRE IT AT A SIGNIFICANT PENALTY WITHOUT TAKING AN ACTION TO ACTUALLY AIM.  NEGATIVE SHOULD BE 
    CONSIDERABLE AND DETERMINED BY WHOEVER IS HOSTING THE GAME, BUT USE OF THIS ATTACK SAVES THE CHARACTER ONE ACTION POINT IN USING THEIR WEAPON.
    </p></td>
  </tr>
<!--1ST ROW-->  
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="addBThrow(); document.getElementById('blindModal').style.display='none';" class="button">THROWN</button></td>
    <td colspan="4"><button type="button" onclick="addBArch(); document.getElementById('blindModal').style.display='none';" class="button">BOW & ARROW</button>
    </td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4" style="background-color: darkgray;">THROW >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">ARCHERY >= 100<br>10,000 EXP</td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>

<!--1ST ROW-->  
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="addBPistol(); document.getElementById('blindModal').style.display='none';" class="button">PISTOL</button></td>
    <td colspan="4"><button type="button" onclick="addBRifle(); document.getElementById('blindModal').style.display='none';" class="button">RIFLE</button></td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>
<!--1ST ROW REQS-->
  <tr>
    <td colspan="2" style="background-color: black;"></td>
    <td colspan="4" style="background-color: darkgray;">ONE HAND GUNS >= 100<br>10,000 EXP</td>
    <td colspan="4" style="background-color: darkgray;">TWO HAND GUNS >= 100<br>10,000 EXP</td>
    <td colspan="2" style="background-color: black;"></td>
  </tr>

  <tr>
    <td colspan="4" style="background-color: black;"></td>
    <td colspan="4"><button type="button" onclick="document.getElementById('blindModal').style.display='none';" class="button">CANCEL</button></td>
    <td colspan="4" style="background-color: black;"></td>
  </tr>

  </table>
</div>
</div>

</div>

<?php include('footer.php'); ?>

  <script src="js/charEdit.js" type="text/javascript"></script>
	<script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
</body>
</html>