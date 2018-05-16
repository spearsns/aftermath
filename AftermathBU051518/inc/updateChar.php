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
    $PISTOLS = $_POST['pistols'];
    $SHORTW = $_POST['shortW'];
    $RIFLES = $_POST['rifles'];
    $LONGW = $_POST['longW'];
    $BURST = $_POST['burst'];
    $TWOHW = $_POST['twoHW'];
    $SPECIAL = $_POST['special'];
    $CHAIN = $_POST['chain'];
    $WSYS = $_POST['wsys'];

    $GAMBLING = $_POST['gambling'];

    //SURVIVAL    
    $envAware =         $_POST['survival'];
    $firstAid =         $_POST['firstAid'];
    $navigation =       $_POST['navig'];
    $tracking =         $_POST['tracking'];
    $trapping =         $_POST['trapping'];
    $fishing =          $_POST['fishing'];
    //ESPIONAGE
    $stealth =          $_POST['stealth'];
    $surveillance =     $_POST['surveillance'];
    $forensics =        $_POST['forensics'];
    $pickpocket =       $_POST['pickpocket'];
    $lockpick =         $_POST['lockpick'];
    //TECHNOLOGY
    $crafting =         $_POST['craft'];
    $computers =        $_POST['computers'];
    $mechanics =        $_POST['mechanics'];
    $electrical =       $_POST['electrical'];
    $radioSys =         $_POST['radioSys'];
    $construction =     $_POST['construction'];
    $programming =      $_POST['programming'];
    //TRANSPORTATION
    $skateboard =       $_POST['skateboard'];
    $bicycle =          $_POST['bicycle'];
    $horsemanship =     $_POST['horsemanship'];
    $automobile =       $_POST['automobile'];
    $sailing =          $_POST['sailing'];
    $boating =          $_POST['boating'];
    $motorcycle =       $_POST['motorcycle'];
    $jetSki =           $_POST['jetSki'];
    $helicopters =      $_POST['helicopters'];
    $airplanes =        $_POST['airplanes'];
    $MGV =              $_POST['MGV'];
    $hvyEquip =         $_POST['hvyEquip'];
    //SCIENCES
    $literacy =         $_POST['literacy'];
    $math =             $_POST['math'];
    $history =          $_POST['history'];
    $biology =          $_POST['biology'];
    $botany =           $_POST['botany'];
    $chemistry =        $_POST['chemistry'];
    $physics =          $_POST['physics'];
    $toxicology =       $_POST['toxicology'];
    $pharmacology =     $_POST['pharmacology']; 
    $doctor =           $_POST['doctor']; 
    //SOFT
    $negotiation =      $_POST['negot'];
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
    //EXPERIENCE
    $totalEXP =         $_POST['totalEXP'];
    $remEXP =           $_POST['EXPpool'];

    $ABILITY1 =         $_POST['ability1'];
    $ABILITY2 =         $_POST['ability2'];
    $ABILITY3 =         $_POST['ability3'];
    $ABILITY4 =         $_POST['ability4'];
    $ABILITY5 =         $_POST['ability5'];
    $ABILITY6 =         $_POST['ability6'];
    $ABILITY7 =         $_POST['ability7'];
    $ABILITY8 =         $_POST['ability8'];
    $ABILITY9 =         $_POST['ability9'];
    $ABILITY10 =        $_POST['ability10'];
    $ABILITY11 =        $_POST['ability11'];
    $ABILITY12 =        $_POST['ability12'];
    $ABILITY13 =        $_POST['ability13'];
    $ABILITY14 =        $_POST['ability14'];
    $ABILITY15 =        $_POST['ability15'];

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
                    
                    UNARMED =           '$UNARM',
                    GRAPPLE =           '$GRAPPLE',
                    OFF =               '$OFF',
                    SHORTW =            '$SHORTW',
                    LONGW =             '$LONGW',
                    TWOHW =             '$TWOHW',
                    CHAIN =             '$CHAIN',
                    THROW =             '$THROW',
                    ARCH =              '$ARCH',
                    PISTOLS =           '$PISTOLS',
                    RIFLES =            '$RIFLES',
                    BURST =             '$BURST',
                    SPECIAL =           '$SPECIAL',
                    WSYS =              '$WSYS',
                    
                    ENV_AWARENESS =     '$envAware',
                    FIRST_AID =         '$firstAid',
                    NAVIGATION =        '$navigation',
                    TRACKING =          '$tracking',
                    TRAPPING =          '$trapping',
                    FISHING =           '$fishing',

                    STEALTH =           '$stealth',
                    SURVEILLANCE =      '$surveillance',
                    PICKPOCKET =        '$pickpocket',
                    LOCKPICK =          '$lockpick',
                    FORENSICS =         '$forensics',

                    CRAFTING =          '$crafting',
                    COMPUTERS =         '$computers',
                    PROGRAMMING =       '$programming',
                    MECHANICS =         '$mechanics',
                    ELECTRICAL =         '$electrical',
                    RADIO_SYS =         '$radioSys',
                    CONSTRUCTION =      '$construction',

                    SKATEBOARD =        '$skateboard',
                    BICYCLE =           '$bicycle',
                    HORSEMANSHIP =      '$horsemanship',
                    AUTOMOBILE =        '$automobile',
                    SAILING =           '$sailing',
                    BOATING =           '$boating',
                    MOTORCYCLE =        '$motorcycle',
                    JET_SKI =           '$jetSki',
                    MGV =               '$MGV',
                    HVY_EQUIP =         '$hvyEquip',
                    HELICOPTERS =       '$helicopters',
                    AIRPLANES =         '$airplanes',

                    LITERACY =          '$literacy',
                    MATH =              '$math',
                    HISTORY =           '$history',
                    BIOLOGY =           '$biology',
                    BOTANY =            '$botany',
                    CHEMISTRY =         '$chemistry',
                    PHYSICS =           '$physics',
                    TOXICOLOGY =        '$toxicology',
                    PHARMACOLOGY =      '$pharmacology',
                    DOCTOR =            '$doctor',

                    NEGOTIATION =       '$negotiation',
                    FEDERAL_LAW =       '$law',
                    LANG1 =             '$lang1',
                    LANGRATE1 =         '$langRate1',
                    LIT1 =              '$lit1',
                    LITRATE1 =          '$litRate1',
                    LANG2 =             '$lang2',
                    LANGRATE2 =         '$langRate2',
                    LIT2 =              '$lit2',
                    LITRATE2 =          '$litRate2',
                    LANG3 =             '$lang3',
                    LANGRATE3 =         '$langRate3',
                    LIT3 =              '$lit3',
                    LITRATE3 =          '$litRate3',
                    LANG4 =             '$lang4',
                    LANGRATE4 =         '$langRate4',
                    LIT4 =              '$lit4',
                    LITRATE4 =          '$litRate4',

                    ABILITY1 =          '$ABILITY1',
                    ABILITY2 =          '$ABILITY2', 
                    ABILITY3 =          '$ABILITY3', 
                    ABILITY4 =          '$ABILITY4', 
                    ABILITY5 =          '$ABILITY5', 
                    ABILITY6 =          '$ABILITY6', 
                    ABILITY7 =          '$ABILITY7', 
                    ABILITY8 =          '$ABILITY8', 
                    ABILITY9 =          '$ABILITY9', 
                    ABILITY10 =         '$ABILITY10', 
                    ABILITY11 =         '$ABILITY11', 
                    ABILITY12 =         '$ABILITY12', 
                    ABILITY13 =         '$ABILITY13', 
                    ABILITY14 =         '$ABILITY14', 
                    ABILITY15 =         '$ABILITY15',
                    
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
