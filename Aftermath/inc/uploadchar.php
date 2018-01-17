<?php
    include('config.php');

//DATA
    //DEMOGRAPHICS
    $username = htmlentities(strip_tags($_POST['username']));
    $charName = htmlentities(strip_tags($_POST['charName']));
    $ethnicity = htmlentities(strip_tags($_POST['ethnicity']));
    $sex = htmlentities(strip_tags($_POST['sex']));
    $age = htmlentities(strip_tags($_POST['age']));
    $eyeColor = htmlentities(strip_tags($_POST['eyeColor']));
    $hairColor = htmlentities(strip_tags($_POST['hairColor']));
    $hairStyle = htmlentities(strip_tags($_POST['hairStyle']));
    $build = htmlentities(strip_tags($_POST['build']));
    $habitat = htmlentities(strip_tags($_POST['habitat']));
    $background = $_POST['background'];
    
    //TRAITS
    $MEM = $_POST['MEM'];
    $STR = $_POST['STR'];
    $LOG = $_POST['LOG'];
    $END = $_POST['END'];
    $PER = $_POST['PER'];
    $DEX = $_POST['DEX'];
    $WILL = $_POST['WILL'];
    $SPD = $_POST['SPD'];
    $CHA = $_POST['CHA'];
    $BTY = $_POST['BTY'];
    //COMBAT STATS
    $ACT = $_POST['act'];
    $SEQ = $_POST['seq'];
    $BLOCK = $_POST['block'];
    $DODGE = $_POST['dodge'];
    //COMBAT SKILLS
    $UNARM = $_POST['unarm'];
    $THROW = $_POST['thrown'];
    $GRAPPLE = $_POST['grap'];
    $ARCH = $_POST['arch'];
    $OFF = $_POST['off'];
    $ONEHGUNS = $_POST['oneHguns'];
    $SHORTW = $_POST['shortW'];
    $TWOHGUNS = $_POST['twoHguns'];
    $LONGW = $_POST['longW'];
    $BURST = $_POST['burst'];
    $TWOHW = $_POST['twoH'];
    $SPECIAL = $_POST['special'];
    $CHAIN = $_POST['chain'];
    $WSYS = $_POST['wsys'];
    //UNIVERSAL SKILLS
    $STEALTH = $_POST['stealth'];
    $CLIMB = $_POST['climb'];
    $NEGOT = $_POST['negot'];
    $NAVIG = $_POST['navig'];
    $CRAFT = $_POST['craft'];
    $SURVIVAL = $_POST['survival'];
    
    //SKILLS
    $skill1 = $_POST['skill1'];
    $skill2 = $_POST['skill2'];
    $skill3 = $_POST['skill3'];
    $skill4 = $_POST['skill4'];
    $skill5 = $_POST['skill5'];
    $skill6 = $_POST['skill6'];
    $skill7 = $_POST['skill7'];
    $skill8 = $_POST['skill8'];
    $skill9 = $_POST['skill9'];
    $skill10 = $_POST['skill10'];
    $skill11 = $_POST['skill11'];
    $skill12 = $_POST['skill12'];
    $skill13 = $_POST['skill13'];
    $skill14 = $_POST['skill14'];
    $skill15 = $_POST['skill15'];
    $skill16 = $_POST['skill16'];
    $skill17 = $_POST['skill17'];
    $skill18 = $_POST['skill18'];
    $skill19 = $_POST['skill19'];
    $skill20 = $_POST['skill20'];

    $skillRate1 = $_POST['skillRate1'];
    $skillRate2 = $_POST['skillRate2'];
    $skillRate3 = $_POST['skillRate3'];
    $skillRate4 = $_POST['skillRate4'];
    $skillRate5 = $_POST['skillRate5'];
    $skillRate6 = $_POST['skillRate6'];
    $skillRate7 = $_POST['skillRate7'];
    $skillRate8 = $_POST['skillRate8'];
    $skillRate9 = $_POST['skillRate9'];
    $skillRate10 = $_POST['skillRate10'];
    $skillRate11 = $_POST['skillRate11'];
    $skillRate12 = $_POST['skillRate12'];
    $skillRate13 = $_POST['skillRate13'];
    $skillRate14 = $_POST['skillRate14'];
    $skillRate15 = $_POST['skillRate15'];
    $skillRate16 = $_POST['skillRate16'];
    $skillRate17 = $_POST['skillRate17'];
    $skillRate18 = $_POST['skillRate18'];
    $skillRate19 = $_POST['skillRate19'];
    $skillRate20 = $_POST['skillRate20'];

    $advSkill1 = $_POST['advSkill1'];
    $advSkill2 = $_POST['advSkill2'];
    $advSkill3 = $_POST['advSkill3'];
    $advSkill4 = $_POST['advSkill4'];
    $advSkill5 = $_POST['advSkill5'];
    $advSkill6 = $_POST['advSkill6'];
    $advSkill7 = $_POST['advSkill7'];
    $advSkill8 = $_POST['advSkill8'];

    $advSkillRate1 = $_POST['advSkillRate1'];
    $advSkillRate2 = $_POST['advSkillRate2'];
    $advSkillRate3 = $_POST['advSkillRate3'];
    $advSkillRate4 = $_POST['advSkillRate4'];
    $advSkillRate5 = $_POST['advSkillRate5'];
    $advSkillRate6 = $_POST['advSkillRate6'];
    $advSkillRate7 = $_POST['advSkillRate7'];
    $advSkillRate8 = $_POST['advSkillRate8'];    

    //EXPERIENCE
    //$EXP = $_POST['EXP'];
    //$remEXP = $_POST['remEXP'];

    $sql = "INSERT INTO characters (
                username, charName, ethnicity, age, sex, eyeColor, hairColor, hairStyle, build, habitat, background, 
                MEM, LOG, PER, WILL, CHA, STR, END, DEX, SPD, BTY, ACT, SEQ, BLOCK, DODGE, 
                UNARM, GRAPPLE, OFF, SHORTW, LONGW, TWOHW, CHAIN, THROW, ARCH, ONEHGUNS, TWOHGUNS, BURST, SPECIAL, WSYS, 
                STEALTH, CLIMB, NEGOT, NAVIG, SURVIVAL, CRAFTING,
                skill1, skill2, skill3, skill4, skill5, skill6, skill7, skill8, skill9, skill10, skill11, skill12, skill13, skill14, skill15, skill16,
                skill17, skill18, skill19, skill20, 
                skillRate1, skillRate2, skillRate3, skillRate4, skillRate5, skillRate6, skillRate7, skillRate8, skillRate9, skillRate10, skillRate11, 
                skillRate12, skillRate13, skillRate14, skillRate15, skillRate16, skillRate17, skillRate18, skillRate19, skillRate20, 
                advSkill1, advSkill2, advSkill3, advSkill4, advSkill5, advSkill6, advSkill7, advSkill8, 
                advSkillRate1, advSkillRate2, advSkillRate3, advSkillRate4, advSkillRate5, advSkillRate6, advSkillRate7, advSkillRate8,
                remEXP, totalEXP) 
            VALUES (
                '$username', '$charName', '$ethnicity', '$age', '$sex', '$eyeColor', '$hairColor', '$hairStyle', '$build', '$habitat', '$background', 
                '$MEM', '$LOG', '$PER', '$WILL', '$CHA', '$STR', '$END', '$DEX', '$SPD', '$BTY', '$ACT', '$SEQ', '$BLOCK', '$DODGE', 
                '$UNARM', '$GRAPPLE', '$OFF', '$SHORTW', '$LONGW', '$TWOHW', '$CHAIN', '$THROW', '$ARCH', '$ONEHGUNS', '$TWOHGUNS', '$BURST', '$SPECIAL', '$WSYS', 
                '$STEALTH', '$CLIMB', '$NEGOT', '$NAVIG', '$SURVIVAL', '$CRAFT',
                '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$skill6', '$skill7', '$skill8', '$skill9', '$skill10', '$skill11', '$skill12', '$skill13', 
                '$skill14', '$skill15', '$skill16', '$skill17', '$skill18', '$skill19', '$skill20', 
                '$skillRate1', '$skillRate2', '$skillRate3', '$skillRate4', '$skillRate5', '$skillRate6', '$skillRate7', '$skillRate8', '$skillRate9', 
                '$skillRate10', '$skillRate11', '$skillRate12', '$skillRate13', '$skillRate14', '$skillRate15', '$skillRate16', '$skillRate17', '$skillRate18',
                '$skillRate19', '$skillRate20',
                '$advSkill1', '$advSkill2', '$advSkill3', '$advSkill4', '$advSkill5', '$advSkill6', '$advSkill7', '$advSkill8',  
                '$advSkillRate1', '$advSkillRate2', '$advSkillRate3', '$advSkillRate4', '$advSkillRate5', '$advSkillRate6', '$advSkillRate7', '$advSkillRate8',
                '0', '0');

            INSERT INTO idmarks (username, charName)
            VALUES ('$username', '$charName')";

    if (mysqli_multi_query($conn, $sql)){
        header("Location: ../success.php");
    } else {
         echo("Error description: " . mysqli_error($conn));
    }

    /*
    $result = $conn->query($sql);
    */
 ?>  
