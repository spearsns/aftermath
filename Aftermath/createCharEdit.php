<?php
    include("inc/config.php");
    include("inc/charSetup.php");
    
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
    <script src="js/charCreateEdit.js" type="text/javascript"></script>
    <script type="text/javascript">
    var n = 0;
    function addSkill(){
      for (n = 0; n < 17; n++){
      document.getElementById('skill'+ n).value = document.getElementById(this.id);
      document.getElementById('skillRate' + n).value = <?php echo "$.('document.getElementById(this.id);')" ?>;
  }
}
    function addAdvSkill(){
      for (n = 0; n < 17; n++){
      document.getElementById('advSkill'+ n).value = document.getElementById(this.id);
      document.getElementById('advSkillRate' + n).value = <?php echo "$.('document.getElementById(this.id);')" ?>
  }
}
    </script>
  </head>
<body>

<!--ceiling--> 
<div class="row ceiling">
<div class="large-2 columns"><a href="login.php" class="button">LOGIN</a></div>
<form id="logout" action="inc/logout.php" method="post">
<div class="large-2 columns"><input type="submit" value="LOG OUT" class="button" style="font-family: impact;" /></div>
</form>
<div class="large-6 columns">
<?php
    $username = $_SESSION['username'];

    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    
    echo "<p class='error'>Currently logged in as:  " .$username ."</p>";
?>
</div>
<div class="large-2 columns"><a href="signup.php" class="button">JOIN</a></div>
</div>

<!--banner-->
<div class="row banner">
<div class="large-12 columns"><a href="index.php?logged"><img src="img/banners/aftermathcity.jpg" style="margin: 0 auto; max-height: 15vh;" /></a></div>
</div>

<!--form-->
<div class="row content">
<div class="large-12 columns">
<form style="margin-top: 10px;" id="charsheet" action="inc/uploadchar.php" method="post">
<table>
<!--PLAYER-->
    <tr>
      <td colspan="4">PLAYER NAME</td>
      <td colspan="4"><input type="text" id="username" value="<?php echo $username ?>" readonly/>
      </td>
    </tr>
<!--DEMOGRAPHICS-->
    <tr>
      <td colspan="4">DEMOGRAPHIC INFO</td>
      <td colspan="4">IDENTIFYING MARKS</td>
    </tr>
<!--DEMO 1st-->
    <tr>
      <td colspan="2">NAME</td>
      <td colspan="2"><input type="text" id="charName" placeholder="Character Name" /></td>
      <td colspan="2"><input type="text" id="idMarks1" /></td>
      <td colspan="2"><input type="text" id="idMarks2" /></td>
    </tr>
<!--DEMO 2nd-->
    <tr>
      <td colspan="2">ETHNICITY</td>
      <td colspan="2"><input type="text" id="ethnicity" placeholder="Character lineage" /></td>
      <td colspan="2"><input type="text" id="idMarks3" /></td>
      <td colspan="2"><input type="text" id="idMarks4" /></td>
    </tr>
<!--DEMO 3rd-->
    <tr>
      <td colspan="2">AGE</td>
      <td colspan="2"><input type="text" id="age" placeholder="16 - 60 (GM mod stats if old)" /></td>
      <td colspan="2"><input type="text" id="idMarks5" /></td>
      <td colspan="2"><input type="text" id="idMarks6" /></td>
    </tr>   
<!--DEMO 4th-->
    <tr>
      <td colspan="2">HAIR COLOR</td>
      <td colspan="2"><input type="text" id="hairColor" placeholder="..." /></td>
      <td colspan="2"><input type="text" id="idMarks7" /></td>
      <td colspan="2"><input type="text" id="idMarks8" /></td>
    </tr>
<!--DEMO 5th-->
    <tr>
      <td colspan="2">HAIR STYLE</td>
      <td colspan="2"><input type="text" id="hairStyle" placeholder="..."/></td>
      <td colspan="2"><input type="text" id="idMarks9" /></td>
      <td colspan="2"><input type="text" id="idMarks10" /></td>
    </tr>   
<!--DEMO 6th-->
    <tr>
      <td colspan="2">EYECOLOR</td>
      <td colspan="2"><input type="text" id="eyeColor" placeholder="..."/></td>
      <td colspan="2"><input type="text" id="idMarks11" /></td>
      <td colspan="2"><input type="text" id="idMarks12" /></td>
    </tr>   
<!--DEMO 7th-->
    <tr>
      <td colspan="2">BUILD</td>
      <td colspan="2"><input type="text" id="text" placeholder="Based on STR, END, and SPD"/></td>
      <td colspan="2"><input type="text" id="idMarks13" /></td>
      <td colspan="2"><input type="text" id="idMarks14" /></td>
    </tr>   
<!--DEMO 8th-->
    <tr>
      <td colspan="2">HABITAT</td>
      <td colspan="2"><input type="text" id="habitat" placeholder="Environs char is most familiar in"/></td>
      <td colspan="2"><input type="text" id="idMarks15" /></td>
      <td colspan="2"><input type="text" id="idMarks16" /></td>
    </tr>   
<!--DEMO 9th-->
    <tr>
      <td colspan="2">RADIATION</td>
      <td colspan="2"><input type="text" id="radiation" value="<?php echo $radiation ?>" readonly/></td>
      <td colspan="2"><input type="text" id="idMarks17" /></td>
      <td colspan="2"><input type="text" id="idMarks18" /></td>
    </tr>   
<!--DEMO 10th-->
    <tr>
      <td colspan="2">BACKGROUND</td>
      <td colspan="2"><input type="text" id="background" value="<?php echo $background ?>" readonly/></td>
      <td colspan="2"><input type="text" id="idMarks19" /></td>
      <td colspan="2"><input type="text" id="idMarks20" /></td>
    </tr>   
<!--TRAIT-->
    <tr>
      <td colspan="4">MENTAL TRAITS</td>
      <td colspan="4">PHYSICAL TRAITS</td>
    </tr>   
<!--TRAIT 1st-->
    <tr>
      <td colspan="2">MEMORY</td>
      <td colspan="2">
        <button onclick="" class="decbutton" type="button">-</button>
        <input type="text" id="MEM" value="<?php echo $MEM ?>" class="trait" readonly/>
        <button onclick="" class="incbutton" type="button">+</button>
      </td>
      <td colspan="2">STRENGTH</td>
      <td colspan="2">
        <button onclick="" class="decbutton" >-</button>
        <input type="text" id="STR" value="<?php echo $STR ?>" class="trait" readonly/>
        <button onclick="" class="incbutton">+</button>
      </td>
    </tr>
<!--TRAIT 2nd-->
    <tr>
      <td colspan="2">LOGIC</td>
      <td colspan="2">
        <button onclick="" class="decbutton" >-</button>
        <input type="text" id="LOG" value="<?php echo $LOG ?>" class="trait" readonly/>
        <button onclick="" class="incbutton">+</button>
      </td>
      <td colspan="2">ENDURANCE</td>
      <td colspan="2">
        <button onclick="" class="decbutton" >-</button>
        <input type="text" id="END" value="<?php echo $END ?>" class="trait" readonly/>
        <button onclick="" class="incbutton">+</button>
      </td>
    </tr>
<!--TRAIT 3rd-->
    <tr>
      <td colspan="2">PERCEPTION</td>
      <td colspan="2">
        <button onclick="" class="decbutton" >-</button>
        <input type="text" id="PER" value="<?php echo $PER ?>" class="trait" readonly/>
        <button onclick="" class="incbutton">+</button>
      </td>
      <td colspan="2">DEXTERITY</td>
      <td colspan="2">
        <button onclick="" class="decbutton" >-</button>
        <input type="text" id="DEX" value="<?php echo $DEX ?>" class="trait" readonly/>
        <button onclick="" class="incbutton">+</button>
      </td>
    </tr>
<!--TRAIT 4th-->
    <tr>
      <td colspan="2">WILLPOWER</td>
      <td colspan="2">
        <button onclick="" class="decbutton" >-</button>
        <input type="text" id="WILL" value="<?php echo $WILL ?>" class="trait" readonly/>
        <button onclick="" class="incbutton">+</button>
      </td>
      <td colspan="2">SPEED</td>
      <td colspan="2">
        <button onclick="" class="decbutton" >-</button>
        <input type="text" id="SPD" value="<?php echo $SPD ?>" class="trait" readonly/>
        <button onclick="" class="incbutton">+</button>
      </td>
    </tr>
<!--TRAIT 5th-->
    <tr>
      <td colspan="2">CHARISMA</td>
      <td colspan="2">
        <button onclick="" class="decbutton" >-</button>
        <input type="text" id="CHA" value="<?php echo $CHA ?>" class="trait" readonly/>
        <button onclick="" class="incbutton">+</button>
      </td>
      <td colspan="2">BEAUTY</td>
      <td colspan="2">
        <button onclick="" class="decbutton" >-</button>
        <input type="text" id="BTY" value="<?php echo $BTY ?>" class="trait" readonly/>
        <button onclick="" class="incbutton">+</button>
      </td>
    </tr>
<!--CHAR MODS-->    
    <tr>
      <td colspan="4">BONUS TRAIT POINTS</td>
      <td colspan="4" id="traitPts"><?php echo $traitPts ?></td>
    </tr>  
<!--COMBAT-->
    <tr>
      <td colspan="4">COMBAT SKILLS</td>
      <td colspan="4">COMBAT STATS</td>
    </tr>
<!--COMBAT 1st-->
    <tr>
      <td>UNARM</td>
      <td id="UNARM"><input type="text" id="UNARM" value="<?php echo $UNARM ?>"  readonly/></td>
      <td>THROW</td>
      <td id="THROW"><input type="text" id="THROW" value="<?php echo $THROW ?>"  readonly/></td>
      <td colspan="2">SEQUENCE</td>
      <td colspan="2"><input type="text" id="SEQ" value="<?php echo $SEQ ?>"  readonly/></td>
    </tr>
<!--COMBAT 2nd-->
    <tr>
      <td>GRAPPLE</td>
      <td><input type="text" id="GRAPPLE" value="<?php echo $GRAPPLE ?>" readonly/></td>
      <td>ARCH</td>
      <td><input type="text" id="ARCH" value="<?php echo $ARCH ?>" readonly/></td>
      <td colspan="2">ACTIONS</td>
      <td colspan="2"><input type="text" id="ACT" value="<?php echo $ACT ?>" readonly/></td>
      </tr>
<!--COMBAT 3rd-->
    <tr>
      <td>OFF</td>
      <td><input type="text" id="OFF" value="<?php echo $OFF ?>" readonly/></td>
      <td>1H GUNS</td>
      <td><input type="text" id="ONEHGUNS" value="<?php echo $ONEHGUNS ?>" readonly/></td>
      <td colspan="2">BLOCK</td>
      <td colspan="2"><input type="text" id="BLOCK" value="<?php echo $BLOCK ?>" readonly/></td>
    </tr>
<!--COMBAT 4th-->
    <tr>
      <td>SHORT W</td>
      <td><input type="text" id="SHORTW" value="<?php echo $SHORTW ?>" readonly/></td>
      <td>2H GUNS</td>
      <td><input type="text" id="TWOHGUNS" value="<?php echo $TWOHGUNS ?>" readonly/></td>
      <td colspan="2">DODGE</td>
      <td colspan="2"><input type="text" id="DODGE" value="<?php echo $DODGE ?>" readonly/></td>
    </tr>
<!--COMBAT 5th-->
    <tr>
      <td>LONG W</td>
      <td><input type="text" id="LONGW" value="<?php echo $LONGW ?>" readonly/></td>
      <td>BURST</td>
      <td><input type="text" id="BURST" value="<?php echo $BURST ?>" readonly/></td>
      <td colspan="4">ADVANCED SKILLS</td>
    </tr>
<!--COMBAT 6th & ADVANCED SKILLS-->
    <tr>
      <td>2H W</td>
      <td><input type="text" id="TWOHW" value="<?php echo $TWOHW ?>" readonly/></td>
      <td>SPECIAL</td>
      <td><input type="text" id="SPECIAL" value="<?php echo $SPECIAL ?>" readonly/></td>
      <td><input type="text" id="advSkill1" /></td>
      <td><input type="text" id="advSkillRate1" readonly /></td>
      <td><input type="text" id="advSkill2" /></td>
      <td><input type="text" id="advSkillRate2" readonly /></td>
    </tr>
<!--COMBAT 7th-->
    <tr>
      <td>CHAIN</td>
      <td><input type="text" id="CHAIN" value="<?php echo $CHAIN ?>" readonly/></td>
      <td>W SYS</td>
      <td><input type="text" id="WSYS" value="<?php echo $WSYS ?>" readonly/></td>
      <td><input type="text" id="advSkill3" /></td>
      <td><input type="text" id="advSkillRate3" readonly /></td>
      <td><input type="text" id="advSkill4" /></td>
      <td><input type="text" id="advSkillRate4" readonly /></td>
    </tr>
<!--UNIVERSAL-->
    <tr>
      <td colspan="4">UNIVERSAL SKILLS</td>
      <td><input type="text" id="advSkill5" /></td>
      <td><input type="text" id="advSkillRate5" readonly /></td>
      <td><input type="text" id="advSkill6" /></td>
      <td><input type="text" id="advSkillRate6" readonly /></td>
    </tr>
<!--UNI 1st-->
    <tr>
      <td>STEALTH</td>
      <td><input type="text" id="STEALTH" value="<?php echo $STEALTH ?>" readonly/></td>
      <td>CLIMBING</td>
      <td><input type="text" id="CLIMB" value="<?php echo $CLIMB ?>" readonly/></td>
      <td><input type="text" id="advSkill7" /></td>
      <td><input type="text" id="advSkillRate7" readonly /></td>
      <td><input type="text" id="advSkill8" /></td>
      <td><input type="text" id="advSkillRate8" readonly /></td>
    </tr>
<!--UNI 2nd-->
    <tr>
      <td>NAVIG.</td>
      <td><input type="text" id="NAVIG" value="<?php echo $NAVIG ?>" readonly/></td>
      <td>NEGOT.</td>
      <td><input type="text" id="NEGOT" value="<?php echo $NEGOT ?>" readonly/></td>
      <td><input type="text" id="advSkill9" /></td>
      <td><input type="text" id="advSkillRate9" readonly /></td>
      <td><input type="text" id="advSkill10" /></td>
      <td><input type="text" id="advSkillRate10" readonly /></td>
    </tr>
<!--STANDARD SKILLS-->
    <tr>
      <td colspan="8">SKILLS</td>
    </tr>
<!--SKILLS 1st-->
    <tr>
      <td><input type="text" id="skill1" /></td>
      <td><input type="text" id="skillRate1" readonly /></td>
      <td><input type="text" id="skill2" /></td>
      <td><input type="text" id="skillRate2" readonly /></td>
      <td><input type="text" id="skill3" /></td>
      <td><input type="text" id="skillRate3" readonly /></td>
      <td><input type="text" id="skill4" /></td>
      <td><input type="text" id="skillRate4" readonly /></td>
    </tr>    
<!--SKILLS 2nd-->
    <tr>
      <td><input type="text" id="skill5" /></td>
      <td><input type="text" id="skillRate5" readonly /></td>
      <td><input type="text" id="skill6" /></td>
      <td><input type="text" id="skillRate6" readonly /></td>
      <td><input type="text" id="skill7" /></td>
      <td><input type="text" id="skillRate7" readonly /></td>
      <td><input type="text" id="skill8" /></td>
      <td><input type="text" id="skillRate8" readonly /></td>
    </tr>    
<!--SKILLS 3rd-->
    <tr>
      <td><input type="text" id="skill9" /></td>
      <td><input type="text" id="skillRate9" readonly /></td>
      <td><input type="text" id="skill10" /></td>
      <td><input type="text" id="skillRate10" readonly /></td>
      <td><input type="text" id="skill11" /></td>
      <td><input type="text" id="skillRate11" readonly /></td>
      <td><input type="text" id="skill12" /></td>
      <td><input type="text" id="skillRate12" readonly /></td>
    </tr> 
<!--SKILLS 4th-->
    <tr>
      <td><input type="text" id="skill13" /></td>
      <td><input type="text" id="skillRate13" readonly /></td>
      <td><input type="text" id="skill14" /></td>
      <td><input type="text" id="skillRate14" readonly /></td>
      <td><input type="text" id="skill15" /></td>
      <td><input type="text" id="skillRate15" readonly /></td>
      <td><input type="text" id="skill16" /></td>
      <td><input type="text" id="skillRate16" readonly /></td>
    </tr>   
<!--EXP-->
    <tr>
      <td colspan="2">TOTAL EXP</td>
      <td colspan="2" id="totalEXP"></td>
      <td colspan="2">REMAINING EXP</td>
      <td colspan="2" id="remEXP"></td>
    </tr>    
<!--SUBMIT-->
    <tr>
      <td colspan="8"><input type="submit" class="button" name="submit" value="COMMIT CHANGES & UPLOAD CHARACTER" /></td>
    </tr>    
</form>
</table>
</div>
</div>
&nbsp;

<!-- PRE REQUISITES NEEDED -->
<!--SKILL CHOICES-->
<div class="row content">
<div class="large-12 columns">
<form style="margin-top: 10px;" id="skillSheet" action="#" method="#">
<table>
<!--1st ROW-->  
  <tr>
    <td colspan="4">SKILL CHOICES</td>
    <td colspan="4" id="CHOICES"><?php echo $skillChoice ?></td>
  </tr>
<!--2nd ROW-->
  <tr>
    <td colspan="8" style="background-color: lightblue;">STANDARD SKILLS (ONE SKILL CHOICE)</td>
  </tr>
<!--3rd ROW-->
  <tr>
    <td colspan="2" style="background-color: lightblue;">SCIENCE SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">TECHNOLOGY SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">TRAINING SKILLS <br>(MAX TWICE ON THE SAME)</td>
    <td colspan="2" style="background-color: lightblue;">PILOTING SKILLS</td>
  </tr>
<!--4th ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="MATH">MATH</button></td>
      <td><button type="button" onclick="" class="button" id="BIOLOGY">BIOLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="MECHANICS">MECHANICS</button></td>
      <td><button type="button" onclick="" class="button" id="ELECTRONICS">ELECTRONICS</button></td>
      <td><button type="button" onclick="" class="button" id="STEALTH">STEALTH</button></td>
      <td><button type="button" onclick="" class="button" id="NEGOTIATION">NEGOTIATION</button></td>
      <td><button type="button" onclick="" class="button" id="HORSEMANSHIP">HORSEMANSHIP</button></td>
      <td><button type="button" onclick="" class="button" id="MOTORCYCLE">MOTORCYCLE</button></td>
    </tr>   
<!--5th ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="MARINE_BIO">MARINE BIO</button></td>
      <td><button type="button" onclick="" class="button" id="BOTANY">BOTANY</button></td>
      <td><button type="button" onclick="" class="button" id="COMPUTERS">COMPUTERS</button></td>
      <td><button type="button" onclick="" class="button" id="CARPENTRY">CARPENTRY</button></td>
      <td><button type="button" onclick="" class="button" id="CLIMBING">CLIMBING</button></td>
      <td><button type="button" onclick="" class="button" id="NAVIGATION">NAVIGATION</button></td>
      <td><button type="button" onclick="" class="button" id="AUTOMOBILE">AUTOMOBILE</button></td>
      <td><button type="button" onclick="" class="button" id="BOATING">BOATING</button></td>
    </tr>
<!--6th ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="GEOLOGY">GEOLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="CHEMISTRY">CHEMISTRY</button></td>
      <td><button type="button" onclick="" class="button" id="METALWORK">METALWORK</button></td>
      <td><button type="button" onclick="" class="button" id="BINDING">BINDING</button></td>
      <td><button type="button" onclick="" class="button" id="UNARMED">UNARMED</button></td>
      <td><button type="button" onclick="" class="button" id="GRAPPLING">GRAPPLING</button></td>
      <td><button type="button" onclick="" class="button" id="SAILING">SAILING</button></td>
      <td><button type="button" onclick="" class="button" id="JET_SKI">JET SKI</button></td>
    </tr>
<!--7th ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="HISTORY">HISTORY</button></td>
      <td><button type="button" onclick="" class="button" id="MYCOLOGY">MYCOLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="LOCKPICK">LOCKPICK</button></td>
      <td><button type="button" onclick="" class="button" id="COMM_SYSTEMS">COMM. SYSTEMS</button></td>
      <td><button type="button" onclick="" class="button" id="SHORT_WEAPONS">SHORT WEAPONS</button></td>
      <td><button type="button" onclick="" class="button" id="LONG_WEAPONS">LONG WEAPONS</button></td>
      <td colspan="2" style="background-color: lightblue;">SURVIVAL SKILLS</td></td>
    </tr>
<!--8th ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="METEOROLOGY">METEOROLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="ASTROLOGY">ASTROLOGY</button></td>
      <td colspan="2" style="background-color: lightblue;">SOCIAL SKILLS</td></td>
      <td><button type="button" onclick="" class="button" id="TWO_HANDED">TWO HANDED</button></td>
      <td><button type="button" onclick="" class="button" id="CHAIN">CHAIN</button></td>
      <td><button type="button" onclick="" class="button" id="TRAPS">TRAPS</button></td>
      <td><button type="button" onclick="" class="button" id="SURVEILLANCE">SURVEILLANCE</button></td>
    </tr>
<!--9th ROW-->
    <tr>
      <td colspan="2" style="background-color: lightblue;">MEDICAL SKILLS</td></td>
      <td><button type="button" onclick="" class="button" id="LITERACY">LITERACY</button></td>
      <td><button type="button" onclick="" class="button" id="SIMPLE_FOR_LANG">SIMPLE FOREIGN LANG</button></td>
      <td><button type="button" onclick="" class="button" id="THROWING">THROWING</button></td>
      <td><button type="button" onclick="" class="button" id="ARCHERY">ARCHERY</button></td>
      <td><button type="button" onclick="" class="button" id="TRACKING">TRACKING</button></td>
      <td><button type="button" onclick="" class="button" id="OUTDOORSMAN">OUTDOORSMAN</button></td>
    </tr>
<!--10th ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="FIRST_AID">FIRST AID</button></td>
      <td><button type="button" onclick="" class="button" id="HOLISTICS">HOLISTICS</button></td>
      <td><button type="button" onclick="" class="button" id="SIMPLE_FOR_LIT">SIMPLE FOREIGN LIT</button></td>
      <td style="background-color: black;"></td>
      <td><button type="button" onclick="" class="button" id="ONE_HANDED_GUNS">ONE HANDED GUNS</button></td>
      <td><button type="button" onclick="" class="button" id="TWO_HANDED_GUNS">TWO HANDED GUNS</button></td>
      <td><button type="button" onclick="" class="button" id="PICKPOCKET">PICKPOCKET</button></td>
      <td style="background-color: black;"></td>
    </tr>
<tr>
    <td colspan="8" style="background-color: lightblue;">ADVANCED SKILLS (TWO SKILL CHOICES)</td>
</tr>
<!--ADV SKILLS 1ST ROW-->
    <tr>
    <td colspan="2" style="background-color: lightblue;">ADV. SCIENCE SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">ADV. TECHNOLOGY SKILLS</td>
    <td colspan="2" style="background-color: lightblue;">ADV. TRAINING SKILLS <br>(MAX TWICE ON THE SAME)</td>
    <td colspan="2" style="background-color: lightblue;">ADV. PILOTING SKILLS</td>
  </tr>
<!--ADV SKILLS 2ND ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="FORENSICS">FORENSICS</button></td>
      <td><button type="button" onclick="" class="button" id="TOXICOLOGY">TOXICOLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="STRUCTURAL_ENG">STRUCTURAL ENGINEERING</button></td>
      <td><button type="button" onclick="" class="button" id="ENCRYPTION">ENCRYPTION</button></td>
      <td><button type="button" onclick="" class="button" id="OFF_HAND">OFF HAND</button></td>
      <td><button type="button" onclick="" class="button" id="BURST_CONTROL">BURST CONTROL</button></td>
      <td><button type="button" onclick="" class="button" id="FREIGHT_TRUCKS">FREIGHT TRUCKS</button></td>
      <td><button type="button" onclick="" class="button" id="CONSTRUCTION_VEH">CONSTRUCTION VEHICLES</button></td>
    </tr>
<!--ADV SKILLS 3RD ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="PHARMACOLOGY">PHARMACOLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="MICRO_BIOLOGY">MICRO BIOLOGY</button></td>
      <td><button type="button" onclick="" class="button" id="PROGRAMMING">PROGRAMMING</button></td>
      <td><button type="button" onclick="" class="button" id="ROBOTICS">ROBOTICS</button></td>
      <td><button type="button" onclick="" class="button" id="SPECIAL_WEAPONS">SPECIAL WEAPONS</button></td>
      <td><button type="button" onclick="" class="button" id="WEAPON_SYSTEMS">WEAPON SYSTEMS</button></td>
      <td><button type="button" onclick="" class="button" id="MILITARY_VEH">MILITARY VEHICLES</button></td>
      <td><button type="button" onclick="" class="button" id="HELICOPTERS">HELICOPTERS</button></td>
    </tr>
<!--ADV SKILLS 4TH ROW-->
    <tr>
      <td colspan="2" style="background-color: lightblue;">ADV. MEDICAL SKILLS</td>
      <td style="background-color: black;"></td>
      <td colspan="3" style="background-color: lightblue;">ADV. SOCIAL SKILLS</td>
      <td><button type="button" onclick="" class="button" id="SMALL_ENG_PLANES">SMALL ENGINE PLANES</button></td>
      <td><button type="button" onclick="" class="button" id="JET_ENG_PLANES">JET ENGINE PLANES</button></td>
    </tr>
<!--ADV SKILLS 5TH ROW-->
    <tr>
      <td><button type="button" onclick="" class="button" id="DOCTOR">DOCTOR</button></td>
      <td><button type="button" onclick="" class="button" id="CYBERNETICS">CYBERNETICS</button></td>
      <td style="background-color: black;"></td>
      <td><button type="button" onclick="" class="button" id="DIFF_FOR_LANG">DIFF. FOREIGN LANG</button></td>
      <td><button type="button" onclick="" class="button" id="DIFF_FOR_LIT">DIFF. FOREIGN LIT</button></td>
      <td><button type="button" onclick="" class="button" id="LAW">LAW</button></td>
      <td><button type="button" onclick="" class="button" id="LARGE_PLANES">LARGE PLANES</button></td>
      <td style="background-color: black;"></td>
    </tr>
</table>
</form>
</div>
</div>

</body>
</html>