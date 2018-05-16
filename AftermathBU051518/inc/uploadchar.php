<?php
    include('config.php');

//DATA
    //DEMOGRAPHICS
    $username = htmlentities(strip_tags($_POST['username']));
    $charName = htmlentities(strip_tags($_POST['charName']));
    $ethnicity = htmlentities(strip_tags($_POST['ethnicity']));
    $sex = htmlentities(strip_tags($_POST['sex']));
    $age = htmlentities(strip_tags($_POST['age']));
    $hairColor = htmlentities(strip_tags($_POST['hairColor']));
    $hairStyle = htmlentities(strip_tags($_POST['hairStyle']));
    $habitat = htmlentities(strip_tags($_POST['habitat']));
    $background = $_POST['background'];
    
    //TRAITS
    $MEM = $_POST['mem'];
    $STR = $_POST['str'];
    $LOG = $_POST['log'];
    $END = $_POST['end'];
    $PER = $_POST['per'];
    $DEX = $_POST['dex'];
    $WILL = $_POST['will'];
    $SPD = $_POST['spd'];
    $CHA = $_POST['cha'];
    $BTY = $_POST['bty'];
    //COMBAT STATS
    $ACT = $_POST['actions'];
    $SEQ = $_POST['sequence'];
    $BLOCK = $_POST['block'];
    $DODGE = $_POST['dodge'];
    //COMBAT SKILLS
    $UNARM = $_POST['unarmed'];
    $THROW = $_POST['thrown'];
    $GRAPPLE = $_POST['grappling'];
    $ARCH = $_POST['archery'];
    $OFF = $_POST['off'];
    $PISTOLS = $_POST['pistols'];
    $SHORTW = $_POST['short'];
    $RIFLES = $_POST['rifles'];
    $LONGW = $_POST['long'];
    $BURST = $_POST['burst'];
    $TWOHW = $_POST['THM'];
    $SPECIAL = $_POST['special'];
    $CHAIN = $_POST['chain'];
    $WSYS = $_POST['weaponSys'];

    $GAMBLING = $_POST['gambling'];

    //SURVIVAL    
    $envAware =         $_POST['envAware'];
    $firstAid =         $_POST['firstAid'];
    $navigation =       $_POST['navigation'];
    $tracking =         $_POST['tracking'];
    $trapping =         $_POST['trapping'];
    $fishing =          $_POST['fishing'];
    //ESPIONAGE
    $stealth =          $_POST['stealth'];
    $surveillance =     $_POST['surveillance'];
    $pickpocket =       $_POST['pickpocket'];
    $lockpick =         $_POST['lockpick'];
    //TECHNOLOGY
    $crafting =         $_POST['crafting'];
    $computers =        $_POST['computers'];
    $mechanics =        $_POST['mechanics'];
    $electrical =       $_POST['electrical'];
    $radioSys =         $_POST['radioSys'];
    //TRANSPORTATION
    $skateboard =       $_POST['skateboard'];
    $bicycle =          $_POST['bicycle'];
    $horsemanship =     $_POST['horsemanship'];
    $automobile =       $_POST['automobile'];
    $sailing =          $_POST['sailing'];
    $boating =          $_POST['boating'];
    $motorcycle =       $_POST['motorcycle'];
    $jetSki =           $_POST['jetSki'];
    //SOL
    $literacy =         $_POST['literacy'];
    $math =             $_POST['math'];
    $history =          $_POST['history'];
    $biology =          $_POST['biology'];
    $botany =           $_POST['botany'];
    $chemistry =        $_POST['chemistry'];
    //SOFT
    $negotiation =      $_POST['negotiation'];
    $law =              $_POST['law'];
    $lang1 =            $_POST['lang1'];
    $langRate1 =        $_POST['langRate1'];
    $lit1 =             $_POST['lit1'];
    $litRate1 =         $_POST['litRate1'];
    $lang2 =            $_POST['lang2'];
    $langRate2 =        $_POST['langRate2'];
    $lit2 =             $_POST['lit2'];
    $litRate2 =         $_POST['litRate2'];
    $lang3 =            $_POST['lang3'];
    $langRate3 =        $_POST['langRate3'];
    $lit3 =             $_POST['lit3'];
    $litRate3 =         $_POST['litRate3'];
    $lang4 =            $_POST['lang4'];
    $langRate4 =        $_POST['langRate4'];
    $lit4 =             $_POST['lit4'];    
    $litRate4 =         $_POST['litRate4']; 
    //ADVANCED
    $forensics =        $_POST['forensics'];
    $physics =          $_POST['physics'];
    $construction =     $_POST['construction'];
    $programming =      $_POST['programming'];
    $helicopters =      $_POST['helicopters'];
    $airplanes =        $_POST['airplanes'];
    $MGV =              $_POST['MGV'];
    $hvyEquip =         $_POST['hvyEquip'];
    $toxicology =       $_POST['toxicology'];
    $pharmacology =     $_POST['pharmacology']; 
    $doctor =           $_POST['doctor']; 

    //EXPERIENCE
    //$EXP = $_POST['EXP'];
    //$remEXP = $_POST['remEXP'];

    $sql = "INSERT INTO characters (
                username, CHARNAME, ETHNICITY, AGE, SEX, HAIR_COLOR, HAIR_STYLE, HABITAT, BACKGROUND, 
                MEM, LOG, PER, WILL, CHA, STR, END, DEX, SPD, BTY, ACT, SEQ, BLOCK, DODGE, GAMBLING,
                UNARMED, GRAPPLE, OFF, SHORTW, LONGW, TWOHW, CHAIN, THROW, ARCH, PISTOLS, RIFLES, BURST, SPECIAL, WSYS, 
                ENV_AWARENESS, FIRST_AID, NAVIGATION, TRACKING, TRAPPING, FISHING,
                STEALTH, SURVEILLANCE, PICKPOCKET, LOCKPICK,
                CRAFTING, COMPUTERS, MECHANICS, ELECTRICAL, RADIO_SYS,
                SKATEBOARD, BICYCLE, HORSEMANSHIP, AUTOMOBILE, MOTORCYCLE, JET_SKI, SAILING, BOATING,
                LITERACY, MATH, HISTORY, BIOLOGY, BOTANY, CHEMISTRY,
                FORENSICS, PHYSICS, CONSTRUCTION, PROGRAMMING, HELICOPTERS, AIRPLANES, MGV, HVY_EQUIP, TOXICOLOGY, PHARMACOLOGY, DOCTOR,
                NEGOTIATION, FEDERAL_LAW, LANG1, LANGRATE1, LIT1, LITRATE1, LANG2, LANGRATE2, LIT2, LITRATE2, LANG3, LANGRATE3, LIT3, LITRATE3, 
                LANG4, LANGRATE4, LIT4, LITRATE4) 
            VALUES (
                '$username', '$charName', '$ethnicity', '$age', '$sex', '$hairColor', '$hairStyle', '$habitat', '$background', 
                '$MEM', '$LOG', '$PER', '$WILL', '$CHA', '$STR', '$END', '$DEX', '$SPD', '$BTY', '$ACT', '$SEQ', '$BLOCK', '$DODGE', '$GAMBLING',
                '$UNARM', '$GRAPPLE', '$OFF', '$SHORTW', '$LONGW', '$TWOHW', '$CHAIN', '$THROW', '$ARCH', '$PISTOLS', '$RIFLES', '$BURST', '$SPECIAL', '$WSYS', 
                '$envAware', '$firstAid', '$navigation', '$tracking', '$trapping', '$fishing',
                '$stealth', '$surveillance', '$pickpocket', '$lockpick', 
                '$crafting', '$computers', '$mechanics', '$electrical', '$radioSys', 
                '$skateboard', '$bicycle', '$horsemanship', '$automobile', '$motorcycle', '$jetSki', '$sailing', '$boating',  
                '$literacy', '$math', '$history', '$biology', '$botany', '$chemistry',
                '$forensics', '$physics', '$construction', '$programming', '$helicopters', '$airplanes', '$MGV', '$hvyEquip', '$toxicology', '$pharmacology', '$doctor', 
                '$negotiation', '$law', '$lang1', '$langRate1', '$lit1', '$litRate1', '$lang2', '$langRate2', '$lit2', '$litRate2', '$lang3', '$langRate3', '$lit3', '$litRate3', 
                '$lang4', '$langRate4', '$lit4', '$litRate4');

            INSERT INTO idmarks (username, charName)
            VALUES ('$username', '$charName')";

    if (mysqli_multi_query($conn, $sql)){
        header("Location: ../success.php");
    } else {
         echo("Error description: " . mysqli_error($conn));
    }
 ?>  
