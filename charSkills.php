<?php
    include("inc/config.php");
    session_start();

    if (isset($_SESSION['id']) == false){
        header("Location: login.php?charCreate");
    }
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
    <link type="text/css" media="screen" rel="stylesheet" href="inc/zurb-responsive-tables/responsive-tables.css" />
    <script type="text/javascript" src="inc/zurb-responsive-tables/responsive-tables.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/charSkills.js" type="text/javascript"></script>
  </head>
<body>

<div class="row" id="skillChoiceModal">
    <div class="small-6 columns skillChoice">SKILL CHOICES:</div>
    <div class="small-6 columns"><input type="text" id="skillChoice" value="" readonly />
      <script>document.getElementById("skillChoice").setAttribute("value", skillChoice);</script>
    </div>
</div>

<?php include('header.php'); ?>

<!--form-->
<div class="row metal">
<div class="large-12 columns"><p class='alert'>RED BUTTONS INDICATE 2 SKILL CHOICES</p></div>
<div class="large-12 columns"><p class='alert'>PROGRAMMING REQUIRES COMPUTERS</p></div>
<div class="large-12 columns"><p class='alert'>TOXIC/PHARMACOLOGY REQUIRES BIOLOGY & CHEMISTRY</p></div>
<div class="large-12 columns"><p class='alert'>DOCTOR REQUIRES BIOLOGY & FIRST AID >= 75</p></div>
<form id="charsheet" action="inc/uploadchar.php" method="post">

<table>

<tr>
  <td colspan="4" rowspan="4"><img src="img/picSlot.png" style="margin: 0 auto;" /></td>
  <td>NAME:</td>
  <td colspan="2"><input type="text" id="charName" name="charName" placeholder="Character Name" onBlur="checkAvail();" class="full" required/>
    <span id="charName_avail"></span>
  </td>

        <script>
            function checkAvail() {
            jQuery.ajax({
            url: "inc/charName.php",
            data:'charName='+$("#charName").val(),
            type: "POST",
            success:function(data){
            $("#charName_avail").html(data);
            },
            error:function (){}
          });
        }
        </script>

  <td>PLAYER:</td>
  <td colspan="2"><input type="text" id="username" name="username" value="<?php echo $username; ?>" class="full" readonly /></td>
</tr>    

<tr>
  <td>BACK GROUND:</td>
  <td colspan="2"><input type="text" id="background" name="background" value="" class="full" readonly /></td>
  <script>document.getElementById("background").setAttribute('value', String(sessionStorage.getItem('background')));</script>

  <td>HABITAT:</td>
  <td colspan="2"><input type="text" id="habitat" name="habitat" value="" class="full" required /></td>
</tr>

<tr>
  <td>HAIR COLOR:</td>
  <td colspan="2"><input type="text" id="hairColor" name="hairColor" value="" class="full" required /></td>
  <td>HAIR STYLE:</td>
  <td colspan="2"><input type="text" id="hairStyle" name="hairStyle" value="" class="full" required /></td>
</tr>

<tr>
  <td>ETHNIC:</td>
  <td><input type="text" id="ethnicity" name="ethnicity" value="" required /></td>
  <td>SEX:</td>
  <td><input type="text" id="sex" name="sex" value="" required /></td>
  <td>AGE:</td> 
  <td><input type="text" id="age" name="age" value="" required /></td>
</tr>

<tr>
  <td colspan="6" class="header">COMBAT PROFICIENCIES</td>
  <td colspan="4" class="header">PHYSICAL TRAITS</td>
</tr>

<tr>
  <td><button onclick="trainunarm();" class="button" type="button" id="unarmTrnBtn">UNARM</button></td>
  <td><input type="text" id="unarmed" name="unarmed" value="" readonly /></td>
  <td><button onclick="trainthrown();" class="button" type="button" id="thrownTrnBtn">THROW</button></td>
  <td><input type="text" id="thrown" name="thrown" value="" readonly /></td>
  <td>ACT:</td>
  <td><input type="text" id="actions" name="actions" value="" readonly /></td>
  <td>MEM:</td>
  <td><input type="text" id="mem" name="mem" value="" readonly /></td>
  <td>STR:</td>
  <td><input type="text" id="str" name="str" value="" readonly /></td>
</tr>

<tr>
  <td><button onclick="traingrap();" class="button" type="button" id="grapTrnBtn">GRAP</button></td>
  <td><input type="text" id="grappling" name="grappling" value="" readonly /></td>
  <td><button onclick="trainarch();" class="button" type="button" id="archTrnBtn">ARCH</button></td>
  <td><input type="text" id="archery" name="archery" value="" readonly /></td>
  <td>SEQ:</td>
  <td><input type="text" id="sequence" name="sequence" value="" readonly /></td>
  <td>LOG:</td>
  <td><input type="text" id="log" name="log" value="" readonly /></td>
  <td>END:</td>
  <td><input type="text" id="end" name="end" value="" readonly /></td>
</tr>

<tr>
  <td><button onclick="trainoff();" class="button" style="background-color: red;" type="button" id="offTrnBtn">OFF</button></td>
  <td><input type="text" id="off" name="off" value="" readonly /></td>
  <td><button onclick="trainpistols();" class="button" type="button" id="pistolsTrnBtn">PISTOLS</button></td>
  <td><input type="text" id="pistols" name="pistols" value="" readonly /></td>
  <td><button onclick="trainblock();" class="button" type="button" id="blockTrnBtn">BLOCK</button></td>
  <td><input type="text" id="block" name="block" value="" readonly /></td>
  <td>PER:</td>
  <td><input type="text" id="per" name="per" value="" readonly /></td>
  <td>DEX:</td>
  <td><input type="text" id="dex" name="dex" value="" readonly /></td>
</tr>

<tr>
  <td><button onclick="trainshortW();" class="button" type="button" id="shortWTrnBtn">SHORT</button></td>
  <td><input type="text" id="short" name="short" value="" readonly /></td>
  <td><button onclick="trainrifles();" class="button" type="button" id="riflesTrnBtn">RIFLES</button></td>
  <td><input type="text" id="rifles" name="rifles" value="" readonly /></td>
  <td><button onclick="traindodge();" class="button" style="background-color: red;" type="button" id="dodgeTrnBtn">DODGE</button></td>
  <td><input type="text" id="dodge" name="dodge" value="" readonly /></td>
  <td>WILL:</td>
  <td><input type="text" id="will" name="will" value="" readonly /></td>
  <td>SPD:</td>
  <td><input type="text" id="spd" name="spd" value="" readonly /></td>
</tr>

<tr>
  <td><button onclick="trainlongW();" class="button" type="button" id="longWTrnBtn">LONG</button></td>
  <td><input type="text" id="long" name="long" value="" readonly /></td>
  <td><button onclick="trainburst();" class="button" style="background-color: red;" type="button" id="burstTrnBtn">BURST</button></td>
  <td><input type="text" id="burst" name="burst" value="" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td>CHA:</td>
  <td><input type="text" id="cha" name="cha" value="" readonly /></td>
  <td>BTY:</td>
  <td><input type="text" id="bty" name="bty" value="" readonly /></td>
</tr>

<tr>
  <td><button onclick="traintwoH();" class="button" type="button" id="twoHTrnBtn">2 HAND</button></td>
  <td><input type="text" id="THM" name="THM" value="" readonly /></td>
  <td><button onclick="trainspecial();" class="button" style="background-color: red;" type="button" id="specialTrnBtn">SPECIAL</button></td>
  <td><input type="text" id="special" name="special" value="" readonly /></td>
  <td colspan="6" class="header">SURVIVAL SKILLS</td>
</tr>

<tr>
  <td><button onclick="trainchain();" class="button" type="button" id="chainTrnBtn">CHAIN</button></td>
  <td><input type="text" id="chain" name="chain" value="" readonly /></td>
  <td><button onclick="trainwsys();" class="button" style="background-color: red;" type="button" id="wsysTrnBtn">W SYS</button></td>
  <td><input type="text" id="weaponSys" name="weaponSys" value="" readonly /></td>
  <td><button onclick="trainEnvAware();" class="button" type="button" id="envAwareTrnBtn">ENV AWR</button></td>
  <td><input type="text" id="envAware" name="envAware" value="" readonly /></td>
  <td><button onclick="trainFirstAid();" class="button" style="background-color: red;" type="button" id="firstAidTrnBtn">1ST AID</button></td>
  <td><input type="text" id="firstAid" name="firstAid" value="" readonly /></td>
  <td><button onclick="trainnavig();" class="button" type="button" id="navigTrnBtn">NAVIG</button></td>
  <td><input type="text" id="navigation" name="navigation" value="" readonly /></td>
</tr>

<tr>
  <td colspan="4" class="header">TRANSPORTATION SKILLS</td>
  <td><button onclick="trainTrack();" class="button" type="button" id="trackTrnBtn">TRACK</button></td>
  <td><input type="text" id="tracking" name="tracking" value="" readonly /></td>
  <td><button onclick="trainTrap();" class="button" type="button" id="trapTrnBtn">TRAP</button></td>
  <td><input type="text" id="trapping" name="trapping" value="" readonly /></td>
  <td><button onclick="trainFish();" class="button" type="button" id="fishTrnBtn">FISH</button></td>
  <td><input type="text" id="fishing" name="fishing" value="" readonly /></td>
</tr>

<tr>
  <td><button onclick="trainSkate();" class="button" type="button" id="skateTrnBtn">SKATE</button></td>
  <td><input type="text" id="skateboard" name="skateboard" value="" readonly /></td>
  <td><button onclick="trainBicycle();" class="button" type="button" id="bicycleTrnBtn">BIKE</button></td>
  <td><input type="text" id="bicycle" name="bicycle" value="" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td style="font-weight: bolder;">GAMBLE:</td>
  <td><input type="text" id="gambling" name="gambling" value="" readonly /></td>
  <td colspan="2">&nbsp;</td>
</tr>

<tr>
  <td><button onclick="trainHorse();" class="button" type="button" id="horseTrnBtn">HORSE</button></td>
  <td><input type="text" id="horsemanship" name="horsemanship" value="" readonly /></td>
  <td><button onclick="trainAuto();" class="button" type="button" id="autoTrnBtn">AUTO</button></td>
  <td><input type="text" id="automobile" name="automobile" value="" readonly /></td>
  <td colspan="6" class="header">ESPIONAGE SKILLS</td>
</tr>

<tr>
  <td><button onclick="trainMotorcycle();" class="button" type="button" id="motorcycleTrnBtn">MOTOR X</button></td>
  <td><input type="text" id="motorcycle" name="motorcycle" value="" readonly /></td>
  <td><button onclick="trainJetSki();" class="button" type="button" id="jetSkiTrnBtn">JET SKI</button></td>
  <td><input type="text" id="jetSki" name="jetSki" value="" readonly /></td>
  <td><button onclick="trainstealth();" class="button" type="button" id="stealthTrnBtn">STEALTH</button></td>
  <td><input type="text" id="stealth" name="stealth" value="" readonly /></td>
  <td><button onclick="trainSurvey();" class="button" type="button" id="survTrnBtn">SURVEIL</button></td>
  <td><input type="text" id="surveillance" name="surveillance" value="" readonly /></td>
  <td><button onclick="trainForen();" class="button" style="background-color: red;" type="button" id="forensicsTrnBtn">FOREN</button></td>
  <td><input type="text" id="forensics" name="forensics" value="" readonly /></td>
</tr>

<tr>
  <td><button onclick="trainSail();" class="button" type="button" id="sailTrnBtn">SAIL</button></td>
  <td><input type="text" id="sailing" name="sailing" value="" readonly /></td>
  <td><button onclick="trainBoat();" class="button" type="button" id="boatTrnBtn">BOAT</button></td>
  <td><input type="text" id="boating" name="boating" value="" readonly /></td>
  <td><button onclick="trainPick();" class="button" type="button" id="pickTrnBtn">PICK</button></td>
  <td><input type="text" id="pickpocket" name="pickpocket" value="" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td><button onclick="trainLock();" class="button" type="button" id="lockTrnBtn">LOCK</button></td>
  <td><input type="text" id="lockpick" name="lockpick" value="" readonly /></td>
</tr>

<tr>
  <td><button onclick="trainMGV();" class="button" style="background-color: red;" type="button" id="MGVTrnBtn">MULTI GEAR</button></td>
  <td><input type="text" id="MGV" name="MGV" value="" readonly /></td>
  <td><button onclick="trainHvyEquip();" class="button" style="background-color: red;" type="button" id="hvyEquipTrnBtn">HVY EQUIP</button></td>
  <td><input type="text" id="hvyEquip" name="hvyEquip" value="" readonly /></td>
  <td colspan="6" class="header">TECHNOLOGY SKILLS</td>
</tr>

<tr>
  <td><button onclick="trainHeli();" class="button" style="background-color: red;" type="button" id="heliTrnBtn">HELI</button></td>
  <td><input type="text" id="helicopters" name="helicopters" value="" readonly /></td>
  <td><button onclick="trainPlane();" class="button" style="background-color: red;" type="button" id="planeTrnBtn">PLANE</button></td>
  <td><input type="text" id="airplanes" name="airplanes" value="" readonly /></td>
  <td><button onclick="traincraft();" class="button" type="button" id="craftTrnBtn">CRAFT</button></td>
  <td><input type="text" id="crafting" name="crafting" value="" readonly /></td>
  <td><button onclick="trainComp();" class="button" type="button" id="compTrnBtn">COMP</button></td>
  <td><input type="text" id="computers" name="computers" value="" readonly /></td>
  <td><button onclick="trainProgram();" class="button" style="background-color: red;" type="button" id="programTrnBtn" disabled="true" >PROGRAM</button></td>
  <td><input type="text" id="programming" name="programming" value="" readonly /></td>
</tr>

<tr>
  <td colspan="4" class="header">SCIENCES</td>
  <td><button onclick="trainMech();" class="button" type="button" id="mechTrnBtn">MECH</button></td>
  <td><input type="text" id="mechanics" name="mechanics" value="" readonly /></td>
  <td><button onclick="trainElect();" class="button" type="button" id="electricalTrnBtn">ELECT</button></td>
  <td><input type="text" id="electrical" name="electrical" value="" readonly /></td>
  <td><button onclick="trainRadio();" class="button" type="button" id="radioTrnBtn">RADIO SYS</button></td>
  <td><input type="text" id="radioSys" name="radioSys" value="" readonly /></td>
</tr>

<tr>
  <td><button onclick="trainLiteracy();" class="button" type="button" id="litTrnBtn">LIT</button></td>
  <td><input type="text" id="literacy" name="literacy" value="" readonly /></td>
  <td><button onclick="trainHistory();" class="button" type="button" id="historyTrnBtn">HISTORY</button></td>
  <td><input type="text" id="history" name="history" value="" readonly /></td>
  <td colspan="2">&nbsp;</td>
  <td><button onclick="trainConstruct();" class="button" style="background-color: red;" type="button" id="constructTrnBtn">CONST</button></td>
  <td><input type="text" id="construction" name="construction" value="" readonly /></td>
  <td colspan="2">&nbsp;</td>
</tr>

<tr>
  <td><button onclick="trainMath();" class="button" type="button" id="mathTrnBtn">MATH</button></td>
  <td><input type="text" id="math" name="math" value="" readonly /></td>
  <td><button onclick="trainPhysics();" class="button" style="background-color: red;" type="button" id="physicsTrnBtn">PHYSICS</button></td>
  <td><input type="text" id="physics" name="physics" value="" readonly /></td>
  <td colspan="6" class="header">SOFT SKILLS & LANGUAGES</td>
</tr>

<tr>
  <td><button onclick="trainBio();" class="button" type="button" id="bioTrnBtn">BIO</button></td>
  <td><input type="text" id="biology" name="biology" value="" readonly /></td>
  <td><button onclick="trainBot();" class="button" type="button" id="botTrnBtn">BOT</button></td>
  <td><input type="text" id="botany" name="botany" value="" readonly /></td>
  <td>&nbsp;</td>
  <td><button onclick="trainnegot();" class="button" type="button" id="negotTrnBtn">NEGOT</button></td>
  <td><input type="text" id="negotiation" name="negotiation" value="" readonly /></td>
  <td><button onclick="trainLaw();" class="button" style="background-color: red;" type="button" id="lawTrnBtn">LAW</button></td>
  <td><input type="text" id="law" name="law" value="" readonly /></td>
  <td>&nbsp;</td>
</tr>

<tr>
  <td><button onclick="trainChem();" class="button" type="button" id="chemTrnBtn">CHEM</button></td>
  <td><input type="text" id="chemistry" name="chemistry" value="" readonly /></td>
  <td><button onclick="trainToxic();" class="button" style="background-color: red;" type="button" id="toxicTrnBtn" disabled="true">TOXIC</button></td>
  <td><input type="text" id="toxicology" name="toxicology" value="" readonly /></td>
  <td colspan="3" style="font-style: italic;">LANGUAGES</td>
  <td colspan="3" style="font-style: italic;">LITERACIES</td>
</tr>

<tr>
  <td><button onclick="trainPharma();" class="button" style="background-color: red;" type="button" id="pharmaTrnBtn" disabled="true">PHARMA</button></td>
  <td><input type="text" id="pharmacology" name="pharmacology" value="" readonly /></td>
  <td><button onclick="trainDoc();" class="button" style="background-color: red;" type="button" id="doctorTrnBtn" disabled="true">DOCTOR</button></td>
  <td><input type="text" id="doctor" name="doctor" value="" readonly /></td>
  <td><button onclick="n = 1; langModal.style.display='block';" class="button" type="button" id="langBtn1">LEARN</button></td>
  <td><input type="text" id="lang1" name="lang1" value="" readonly /></td>
  <td><input type="text" id="langRate1" name="langRate1" value="" readonly /></td>
  <td><input type="text" id="lit1" name="lit1" value="" readonly /></td>
  <td><input type="text" id="litRate1" name="litRate1" value="" readonly /></td>
  <td><button onclick="m = 1; litModal.style.display='block';" class="button" type="button" id="litBtn1">LEARN</button></td>
</tr>

<tr>
  <td colspan="4">&nbsp;</td>
  <td><button onclick="n = 2; langModal.style.display='block';" class="button" type="button" id="langBtn2">LEARN</button></td>
  <td><input type="text" id="lang2" name="lang2" value="" readonly /></td>
  <td><input type="text" id="langRate2" name="langRate2" value="" readonly /></td>
  <td><input type="text" id="lit2" name="lit2" value="" readonly /></td>
  <td><input type="text" id="litRate2" name="litRate2" value="" readonly /></td>
  <td><button onclick="m = 2; litModal.style.display='block';" class="button" type="button" id="litBtn2">LEARN</button></td>
</tr>

<tr>
  <td colspan="4">&nbsp;</td>
  <td><button onclick="n = 3; langModal.style.display='block';" class="button" type="button" id="langBtn3">LEARN</button></td>
  <td><input type="text" id="lang3" name="lang3" value="" readonly /></td>
  <td><input type="text" id="langRate3" name="langRate3" value="" readonly /></td>
  <td><input type="text" id="lit3" name="lit3" value="" readonly /></td>
  <td><input type="text" id="litRate3" name="litRate3" value="" readonly /></td>
  <td><button onclick="m = 3; litModal.style.display='block';" class="button" type="button" id="litBtn3">LEARN</button></td>
</tr>

<!--SUBMIT-->
    <tr>
      <td colspan="3">&nbsp;</td>
      <td colspan="4"><input id="upload" type="submit" name="submit" value="CONFIRM & UPLOAD" class="button" /></td>
      <td colspan="3">&nbsp;</td>

    <script>
      document.getElementById("upload").addEventListener("click", function(event){
        if (skillChoice > 0){
        alert('YOU MUST SPEND ALL SKILL POINTS AVAILABLE');
        event.preventDefault()
      }
        if (document.getElementById('outdoorsmanModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      }
        if (document.getElementById('thiefModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
        if (document.getElementById('militiaModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
        if (document.getElementById('banditModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
        if (document.getElementById('gangModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
        if (document.getElementById('securityModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
        if (document.getElementById('marinerModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
        if (document.getElementById('mechanicModal').style.display == 'block'){
        alert('PLEASE SELECT YOUR BACKGROUND SKILLS');
        event.preventDefault()
      } 
});
    </script>

    </tr><br>
</table>

<!--MODALS-->
<!--LANGUAGE MODAL-->
    <div id="langModal" class="modal">
        <p style="font-weight: bold; color: white;">PLEASE SELECT A LANGUAGE</p>
        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="language = 'SPANISH'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">SPANISH</button></li>
          <li><button type="button" onclick="language = 'FRENCH'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">FRENCH</button></li>
          <li><button type="button" onclick="language = 'ITALIAN'; addLang(); langModal.style.display = 'none' this.disabled = true;;" class="button">ITALIAN</button></li>
          <li><button type="button" onclick="language = 'GERMAN'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">GERMAN</button></li>
          <li><button type="button" onclick="language = 'ARABIC'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">ARABIC</button></li>
          <li><button type="button" onclick="language = 'YIDDISH'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">YIDDISH</button></li>
          <li><button type="button" onclick="language = 'RUSSIAN'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">RUSSIAN</button></li>
          <li><button type="button" onclick="language = 'POLISH'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">POLISH</button></li>
          <li><button type="button" onclick="language = 'US_SIGN'; addLang(); langModal.style.display = 'none'; this.disabled = true;" class="button">US SIGN</button></li>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
          <p>&nbsp;</p>
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
        <br>
        
        <button type="navbutton" onclick="langModal.style.display = 'none';" class="button">CANCEL</button>
  </div>  
<!--LITERACY MODAL-->
    <div id="litModal" class="modal">
        <p style="font-weight: bold; color: white;">PLEASE SELECT A LANGUAGE</p>
        <div style="width: 50%; float: left;">
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

<!--OUTDOORSMAN MODAL-->
<div id="outdoorsmanModal" class="modal">
        <p style="font-weight: bold; color: white;">PLEASE SELECT A COMBAT PROFICIENCY</p>
        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="document.getElementById('archery').setAttribute('value', arch += roll(2,20)); outdoorsmanModal.style.display = 'none';" class="button">
            ARCHERY</button></li>
          <li><button type="button" onclick="document.getElementById('thrown').setAttribute('value', thrown += roll(2,20)); outdoorsmanModal.style.display = 'none';" class="button">
            THROWN</button></li>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="document.getElementById('rifles').setAttribute('value', rifles += roll(2,20)); outdoorsmanModal.style.display = 'none';" class="button">
            RIFLES</button></li>
        </ul>
        </div>

</div>

<!--THIEF MODAL-->
<div id="thiefModal" class="modal">
        <p style="font-weight: bold; color: white;">PLEASE SELECT A SKILL</p>
        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="document.getElementById('lockpick').setAttribute('value', LOCKPICK); thiefModal.style.display = 'none'; 
            document.getElementById('lockTrnBtn').disabled = true;" class="button">LOCKPICK</button></li>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="document.getElementById('pickpocket').setAttribute('value', PICKPOCKET); thiefModal.style.display = 'none'; 
            document.getElementById('pickTrnBtn').disabled = true;" class="button">PICKPOCKET</button></li>
        </ul>
        </div>

</div>

<!--MILITIA MODAL-->
<div id="militiaModal" class="modal">
        <p style="font-weight: bold; color: white;">PLEASE SELECT A COMBAT PROFICIENCY</p>
        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="document.getElementById('short').setAttribute('value', shortW += roll(2,20)); militiaModal.style.display = 'none';" 
            class="button">SHORT MELEE</button></li>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="document.getElementById('long').setAttribute('value', longW += roll(2,20)); militiaModal.style.display = 'none';" 
            class="button">LONG MELEE</button></li>
        </ul>
        </div>

</div>

<!--BANDIT MODAL-->
<div id="banditModal" class="modal">
        <p style="font-weight: bold; color: white;">PLEASE SELECT A COMBAT PROFICIENCY FROM EACH COLUMN</p>
        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="modshortW(); this.disabled = true; 
            document.getElementById('longMMod').disabled = true; document.getElementById('twoHMMod').disabled = true; document.getElementById('chainMMod').disabled = true;  
            if(modChoice == 2){ banditModal.style.display = 'none'; }" id="shortMMod" class="button">SHORT MELEE</button></li>
          <li><button type="button" onclick="modlongW(); this.disabled = true; 
            document.getElementById('shortMMod').disabled = true; document.getElementById('twoHMMod').disabled = true; document.getElementById('chainMMod').disabled = true;
            if(modChoice == 2){ banditModal.style.display = 'none'; }" id="longMMod" class="button">LONG MELEE</button></li>
          <li><button type="button" onclick="modtwoH(); this.disabled = true; 
            document.getElementById('longMMod').disabled = true; document.getElementById('shortMMod').disabled = true; document.getElementById('chainMMod').disabled = true;
            if(modChoice == 2){ banditModal.style.display = 'none'; }" id="twoHMMod" class="button">2 HAND MELEE</button></li>
          <li><button type="button" onclick="modchain(); this.disabled = true; 
            document.getElementById('longMMod').disabled = true; document.getElementById('twoHMMod').disabled = true; document.getElementById('shortMMod').disabled = true;
            if(modChoice == 2){ banditModal.style.display = 'none'; }" id="chainMMod"
            class="button">CHAIN MELEE</button>
          </li>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="modthrown(); this.disabled = true; 
            document.getElementById('archMod').disabled = true; document.getElementById('pistolMod').disabled = true; document.getElementById('rifleMod').disabled = true;
            if(modChoice == 2){ banditModal.style.display = 'none'; }" id="thrownMod" class="button">THROWN</button></li>
            <li><button type="button" onclick="modarch(); this.disabled = true; 
            document.getElementById('thrownMod').disabled = true; document.getElementById('pistolMod').disabled = true; document.getElementById('rifleMod').disabled = true;
            if(modChoice == 2){ banditModal.style.display = 'none'; }" id="archMod" class="button">ARCHERY</button></li>
          <li><button type="button" onclick="modpistols(); this.disabled = true; 
            document.getElementById('archMod').disabled = true; document.getElementById('thrownMod').disabled = true; document.getElementById('rifleMod').disabled = true; 
            if(modChoice == 2){ banditModal.style.display = 'none'; }" id="pistolMod" class="button">PISTOLS</button></li>
          <li><button type="button" onclick="modrifles(); this.disabled = true; 
            document.getElementById('archMod').disabled = true; document.getElementById('pistolMod').disabled = true; document.getElementById('thrownMod').disabled = true; 
            if(modChoice == 2){ gbanditModal.style.display = 'none'; }" id="rifleMod" class="button">RIFLES</button></li>
        </ul>
        </div>
</div>

<!--GANG MODAL-->
<div id="gangModal" class="modal">
        <p style="font-weight: bold; color: white;">PLEASE SELECT TWO COMBAT PROFICIENCIES</p>
        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="modunarm(); this.disabled = true; if(modChoice == 2){ gangModal.style.display = 'none'; }" class="button">UNARMED</button></li>
          <li><button type="button" onclick="modshortW(); this.disabled = true; if(modChoice == 2){ gangModal.style.display = 'none'; }" class="button">SHORT MELEE</button></li>
          <li><button type="button" onclick="modlongW(); this.disabled = true; if(modChoice == 2){ gangModal.style.display = 'none'; }" class="button">LONG MELEE</button></li>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="modgrap(); this.disabled = true; if(modChoice == 2){ gangModal.style.display = 'none'; }" class="button">GRAPPLING</button></li>
          <li><button type="button" onclick="modtwoH(); this.disabled = true; if(modChoice == 2){ gangModal.style.display = 'none'; }" class="button">2 HAND MELEE</button></li>
          <li><button type="button" onclick="modchain(); this.disabled = true; if(modChoice == 2){ gangModal.style.display = 'none'; }" class="button">CHAIN MELEE</button></li>
        </ul>
        </div>
</div>

<!--SECURITY MODAL-->
<div id="securityModal" class="modal">
        <p style="font-weight: bold; color: white;">PLEASE SELECT TWO COMBAT PROFICIENCIES</p>
        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="modunarm(); this.disabled = true; if(modChoice == 2){ securityModal.style.display = 'none'; }" class="button">UNARMED</button></li>
          <li><button type="button" onclick="modlongW(); if(modChoice == 2){ securityModal.style.display = 'none'; }" class="button">LONG MELEE</button></li>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="modgrap(); this.disabled = true; if(modChoice == 2){ securityModal.style.display = 'none'; }" class="button">GRAPPLING</button></li>
          <li><button type="button" onclick="modtwoH(); if(modChoice == 2){ securityModal.style.display = 'none'; }" class="button">2 HAND MELEE</button></li>
        </ul>
        </div>
</div>

<!--MARINER MODAL-->
<div id="marinerModal" class="modal">
        <p style="font-weight: bold; color: white;">PLEASE SELECT A TRANSPORTATION SKILL</p>
        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="document.getElementById('sailing').setAttribute('value', SAILING); document.getElementById('sailTrnBtn').disabled = true;
            marinerModal.style.display = 'none';" class="button">SAILING</button></li>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="document.getElementById('boating').setAttribute('value', BOATING); document.getElementById('boatTrnBtn').disabled = true; 
            marinerModal.style.display = 'none';" class="button">BOATING</button></li>
        </ul>
        </div>
</div>

<!--MECHANIC MODAL-->
<div id="mechanicModal" class="modal">
        <p style="font-weight: bold; color: white;">PLEASE SELECT A TRANSPORTATION SKILL</p>
        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="document.getElementById('motorcycle').setAttribute('value', MOTORCYCLE); document.getElementById('motorcycleTrnBtn').disabled = true;
            mechanicModal.style.display = 'none';" class="button">MOTORCYCLE</button></li>
        </ul>
        </div>

        <div style="width: 50%; float: left;">
        <ul>
          <li><button type="button" onclick="document.getElementById('automobile').setAttribute('value', AUTOMOBILE); document.getElementById('autoTrnBtn').disabled = true; 
            mechanicModal.style.display = 'none';" class="button">AUTOMOBILE</button></li>
        </ul>
        </div>
</div>

<script>
  document.getElementById("mem").setAttribute('value', Number(sessionStorage.getItem('MEM')));  
  document.getElementById("str").setAttribute('value', Number(sessionStorage.getItem('STR')));  
  document.getElementById("log").setAttribute('value', Number(sessionStorage.getItem('LOG')));  
  document.getElementById("end").setAttribute('value', Number(sessionStorage.getItem('END')));
  document.getElementById("per").setAttribute('value', Number(sessionStorage.getItem('PER')));  
  document.getElementById("dex").setAttribute('value', Number(sessionStorage.getItem('DEX')));
  document.getElementById("will").setAttribute('value', Number(sessionStorage.getItem('WILL')));  
  document.getElementById("spd").setAttribute('value', Number(sessionStorage.getItem('SPD')));
  document.getElementById("cha").setAttribute('value', Number(sessionStorage.getItem('CHA')));  
  document.getElementById("bty").setAttribute('value', Number(sessionStorage.getItem('BTY')));

  document.getElementById("actions").setAttribute('value', act);  
  document.getElementById("sequence").setAttribute('value', seq);  
  document.getElementById("block").setAttribute('value', block);  
  document.getElementById("dodge").setAttribute('value', dodge);
  document.getElementById("gambling").setAttribute('value', gambling);   
   
  document.getElementById("unarmed").setAttribute('value', unarm);  
  document.getElementById("thrown").setAttribute('value', thrown);  
  document.getElementById("grappling").setAttribute('value', grap);  
  document.getElementById("archery").setAttribute('value', arch);  
  document.getElementById("off").setAttribute('value', off);  
  document.getElementById("pistols").setAttribute('value', pistols);      
  document.getElementById("short").setAttribute('value', shortW);  
  document.getElementById("rifles").setAttribute('value', rifles);      
  document.getElementById("long").setAttribute('value', longW);  
  document.getElementById("burst").setAttribute('value', burst);     
  document.getElementById("THM").setAttribute('value', twoH);  
  document.getElementById("special").setAttribute('value', special); 
  document.getElementById("chain").setAttribute('value', chain);  
  document.getElementById("weaponSys").setAttribute('value', wsys);  

  document.getElementById("envAware").setAttribute('value', ENVAWARE);
  document.getElementById("firstAid").setAttribute('value', FIRSTAID);
  document.getElementById("navigation").setAttribute('value', NAVIG);
  document.getElementById("stealth").setAttribute('value', STEALTH);
  document.getElementById("crafting").setAttribute('value', CRAFTING);
  document.getElementById("literacy").setAttribute('value', LITERACY);
  document.getElementById("math").setAttribute('value', MATH);
  document.getElementById("history").setAttribute('value', HISTORY);
  document.getElementById("negotiation").setAttribute('value', NEGOT);
</script>

</form>
</div>

</body>
</html>