<?php
    include('config.php');

//DATA
    //DEMOGRAPHICS
    $username = $_POST['username'];
    $charName = $_POST['charName'];
    $ethnicity = $_POST['ethnicity'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $eyeColor = $_POST['eyeColor'];
    $hairColor = $_POST['hairColor'];
    $hairStyle = $_POST['hairStyle'];
    $build = $_POST['build'];
    $habitat = $_POST['habitat'];
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
    $TWOHW = $_POST['twoHW'];
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
    $advSkill9 = $_POST['advSkill9'];
    $advSkill10 = $_POST['advSkill10'];
    $advSkill11 = $_POST['advSkill11'];
    $advSkill12 = $_POST['advSkill12'];

    $advSkillRate1 = $_POST['advSkillRate1'];
    $advSkillRate2 = $_POST['advSkillRate2'];
    $advSkillRate3 = $_POST['advSkillRate3'];
    $advSkillRate4 = $_POST['advSkillRate4'];
    $advSkillRate5 = $_POST['advSkillRate5'];
    $advSkillRate6 = $_POST['advSkillRate6'];
    $advSkillRate7 = $_POST['advSkillRate7'];
    $advSkillRate8 = $_POST['advSkillRate8'];    
    $advSkillRate9 = $_POST['advSkillRate9'];    
    $advSkillRate10 = $_POST['advSkillRate10'];    
    $advSkillRate11 = $_POST['advSkillRate11'];    
    $advSkillRate12 = $_POST['advSkillRate12'];    

    $ability1 = $_POST['ability1'];
    $ability2 = $_POST['ability2'];
    $ability3 = $_POST['ability3'];
    $ability4 = $_POST['ability4'];
    $ability5 = $_POST['ability5'];
    $ability6 = $_POST['ability6'];
    $ability7 = $_POST['ability7'];
    $ability8 = $_POST['ability8'];
    $ability9 = $_POST['ability9'];
    $ability10 = $_POST['ability10'];
    $ability11 = $_POST['ability11'];
    $ability12 = $_POST['ability12'];

    //EXPERIENCE
    $totalEXP = $_POST['totalEXP'];
    $remEXP = $_POST['remEXP'];

    $sql = "UPDATE characters 
                SET MEM =               '$MEM',
                    LOG =               '$LOG',
                    PER =               '$PER',
                    WILL =              '$WILL',
                    CHA =               '$CHA',
                    STR =               '$STR',
                    END =               '$END',
                    DEX =               '$DEX',
                    SPD =               '$SPD',
                    
                    ACT =               '$ACT',
                    SEQ =               '$SEQ',
                    BLOCK =             '$BLOCK',
                    DODGE =             '$DODGE',
                    
                    UNARM =             '$UNARM',
                    GRAPPLE =           '$GRAPPLE',
                    OFF =               '$OFF',
                    SHORTW =            '$SHORTW',
                    LONGW =             '$LONGW',
                    TWOHW =             '$TWOHW',
                    CHAIN =             '$CHAIN',
                    THROW =             '$THROW',
                    ARCH =              '$ARCH',
                    ONEHGUNS =          '$ONEHGUNS',
                    TWOHGUNS =          '$TWOHGUNS',
                    BURST =             '$BURST',
                    SPECIAL =           '$SPECIAL',
                    WSYS =              '$WSYS',
                    
                    STEALTH =           '$STEALTH',
                    CLIMB =             '$CLIMB',
                    NEGOT =             '$NEGOT',
                    NAVIG =             '$NAVIG', 
                    SURVIVAL =          '$SURVIVAL', 
                    CRAFTING =          '$CRAFT',
                    
                    skill1 =            '$skill1', 
                    skill2 =            '$skill2', 
                    skill3 =            '$skill3', 
                    skill4 =            '$skill4', 
                    skill5 =            '$skill5', 
                    skill6 =            '$skill6', 
                    skill7 =            '$skill7', 
                    skill8 =            '$skill8', 
                    skill9 =            '$skill9', 
                    skill10 =           '$skill10', 
                    skill11 =           '$skill11', 
                    skill12 =           '$skill12', 
                    skill13 =           '$skill13', 
                    skill14 =           '$skill14', 
                    skill15 =           '$skill15', 
                    skill16 =           '$skill16', 
                    skill17 =           '$skill17', 
                    skill18 =           '$skill18', 
                    skill19 =           '$skill19', 
                    skill20 =           '$skill20', 
                    
                    skillRate1 =        '$skillRate1', 
                    skillRate2 =        '$skillRate2', 
                    skillRate3 =        '$skillRate3', 
                    skillRate4 =        '$skillRate4', 
                    skillRate5 =        '$skillRate5', 
                    skillRate6 =        '$skillRate6', 
                    skillRate7 =        '$skillRate7', 
                    skillRate8 =        '$skillRate8', 
                    skillRate9 =        '$skillRate9', 
                    skillRate10 =       '$skillRate10', 
                    skillRate11 =       '$skillRate11', 
                    skillRate12 =       '$skillRate12', 
                    skillRate13 =       '$skillRate13', 
                    skillRate14 =       '$skillRate14', 
                    skillRate15 =       '$skillRate15', 
                    skillRate16 =       '$skillRate16', 
                    skillRate17 =       '$skillRate17', 
                    skillRate18 =       '$skillRate18',
                    skillRate19 =       '$skillRate19', 
                    skillRate20 =       '$skillRate20',
                    
                    advSkill1 =         '$advSkill1', 
                    advSkill2 =         '$advSkill2', 
                    advSkill3 =         '$advSkill3', 
                    advSkill4 =         '$advSkill4', 
                    advSkill5 =         '$advSkill5', 
                    advSkill6 =         '$advSkill6', 
                    advSkill7 =         '$advSkill7', 
                    advSkill8 =         '$advSkill8', 
                    advSkill9 =         '$advSkill9', 
                    advSkill10 =        '$advSkill10',
                    advSkill11 =        '$advSkill11', 
                    advSkill12 =        '$advSkill12', 
                    
                    advSkillRate1 =     '$advSkillRate1', 
                    advSkillRate2 =     '$advSkillRate2', 
                    advSkillRate3 =     '$advSkillRate3', 
                    advSkillRate4 =     '$advSkillRate4', 
                    advSkillRate5 =     '$advSkillRate5', 
                    advSkillRate6 =     '$advSkillRate6', 
                    advSkillRate7 =     '$advSkillRate7', 
                    advSkillRate8 =     '$advSkillRate8',
                    advSkillRate9 =     '$advSkillRate9',
                    advSkillRate10 =    '$advSkillRate10',
                    advSkillRate11 =    '$advSkillRate11',
                    advSkillRate12 =    '$advSkillRate12', 
                    
                    ability1 =          '$ability1',
                    ability2 =          '$ability2', 
                    ability3 =          '$ability3', 
                    ability4 =          '$ability4', 
                    ability5 =          '$ability5', 
                    ability6 =          '$ability6', 
                    ability7 =          '$ability7', 
                    ability8 =          '$ability8', 
                    ability9 =          '$ability9', 
                    ability10 =         '$ability10', 
                    ability11 =         '$ability11', 
                    ability12 =         '$ability12',
                    
                    totalEXP =          '$totalEXP', 
                    remEXP =            '$remEXP'
                
                WHERE charName = '$charName';
            ";

    //$result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        header("Location: ../success.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
 ?>  
