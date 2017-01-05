<?php
session_start();

/*-----------------GLOBALS---------------*/
//TRAITS
$MEM =			(mt_rand(2, 20));
$LOG = 			(mt_rand(2, 20));
$PER = 			(mt_rand(2, 20));
$WILL = 		(mt_rand(2, 20));
$CHA = 			(mt_rand(2, 20));

$STR = 			(mt_rand(2, 20));
$END = 			(mt_rand(2, 20));
$DEX = 			(mt_rand(2, 20));
$SPD = 			(mt_rand(2, 20));
$BTY = 			(mt_rand(2, 20));

$SEQ = 			floor(($GLOBALS['PER'] + $GLOBALS['SPD']) / 2);
$ACT = 			floor($GLOBALS['SPD'] / 2);
$BLOCK =	 	floor(($GLOBALS['DEX'] + $GLOBALS['SPD']) / 2);
$DODGE = 		floor(($GLOBALS['DEX'] + $GLOBALS['SPD']) / 4);

$charName = 	"";
$ethnicity = 	"";
$age = 			"";
$hairColor = 	"";
$hairStyle = 	"";
$eyeColor = 	"";
$build = 		"";
$habitat = 		"";
$background = 	background();
$radiation = 	(mt_rand(2, 20));
$idMarks = 		array();

$traitPts = 	floor($GLOBALS['WILL'] / 2);
$skillChoice;

//COMBAT SKILLS
$UNARM = 		($GLOBALS['SPD'] * 3) + ($GLOBALS['STR'] * 2) + $GLOBALS['DEX'];
$GRAPPLE = 		($GLOBALS['STR'] * 2) + $GLOBALS['END'] + $GLOBALS['DEX'] + $GLOBALS['SPD'];
$OFF = 			0 - ((20 - $GLOBALS['DEX']) * 5);
$SHORTW = 		($GLOBALS['SPD'] * 3) + $GLOBALS['DEX'] + $GLOBALS['STR'];
$LONGW = 		($GLOBALS['SPD'] * 2) + ($GLOBALS['DEX'] * 2) + $GLOBALS['STR'];
$TWOHW = 		($GLOBALS['DEX'] * 2) + ($GLOBALS['STR'] * 2) + $GLOBALS['SPD'];
$CHAIN = 		($GLOBALS['DEX'] * 3) + $GLOBALS['SPD'] + $GLOBALS['LOG'];

$THROW = 		($GLOBALS['STR'] * 2) + ($GLOBALS['DEX'] * 2) + $GLOBALS['LOG'];
$ARCH = 		($GLOBALS['DEX'] * 2) + ($GLOBALS['LOG'] * 2) + $GLOBALS['PER'];
$ONEHGUNS = 	($GLOBALS['DEX'] * 3) + $GLOBALS['PER'] + $GLOBALS['LOG'];
$TWOHGUNS = 	($GLOBALS['DEX'] * 2) + ($GLOBALS['PER'] *2) + $GLOBALS['LOG'];
$BURST = 		($GLOBALS['LOG'] * 2) + $GLOBALS['PER'] + $GLOBALS['DEX'] + $GLOBALS['STR'];
$SPECIAL = 		($GLOBALS['PER'] * 2) + ($GLOBALS['LOG'] * 2) + $GLOBALS['DEX'];
$WSYS = 		($GLOBALS['PER'] * 2) + ($GLOBALS['LOG'] * 2) + $GLOBALS['SPD'];

$abilities = 	array();

//UNIVERSAL SKILLS
$STEALTH = 		($GLOBALS['PER'] * 3) + $GLOBALS['DEX'];
$CLIMB = 		($GLOBALS['DEX'] * 3) + $GLOBALS['STR'];
$NEGOT = 		$GLOBALS['CHA'] * 4;
$NAVIG =		($GLOBALS['LOG'] * 2) + $GLOBALS['PER'] + $GLOBALS['MEM'];

$skills = 		array();
$skillRate = 	array();

$EXP = 			"";
$remEXP = 		"";

$inventory = 	array();

//SCIENCE
$MATH =			 		($GLOBALS['MEM'] * 3) + ($GLOBALS['LOG'] * 2);
$BIOLOGY = 				($GLOBALS['MEM'] * 2) + ($GLOBALS['LOG'] * 2);
$MARINE_BIO = 			($GLOBALS['MEM'] * 2) + ($GLOBALS['LOG'] * 2);
$BOTANY =				($GLOBALS['MEM'] * 2) + ($GLOBALS['LOG'] * 2);
$GEOLOGY = 				($GLOBALS['MEM'] * 2) + ($GLOBALS['LOG'] * 2);
$CHEMISTRY = 			($GLOBALS['MEM'] * 3) + $GLOBALS['LOG'];
$HISTORY = 				$GLOBALS['MEM'] * 4;
$MYCOLOGY = 			($GLOBALS['MEM'] * 3) + $GLOBALS['LOG'];
$METEOROLOGY = 			$GLOBALS['MEM'] + ($GLOBALS['LOG'] * 3);
$ASTROLOGU = 			($GLOBALS['MEM'] * 2) + ($GLOBALS['LOG'] * 2);

//TECHNOLOGY
$MECHANICS = 			$GLOBALS['LOG'] * 4;
$ELECTRONICS = 			($GLOBALS['MEM'] * 2) + ($GLOBALS['LOG'] * 2);
$COMPUTERS = 			($GLOBALS['MEM'] * 2) + ($GLOBALS['LOG'] * 2);
$CARPENTRY = 			$GLOBALS['MEM'] + ($GLOBALS['LOG'] * 3);
$METALWORK = 			$GLOBALS['MEM'] + ($GLOBALS['LOG'] * 3);
$BINDING = 				($GLOBALS['LOG'] * 3) + $GLOBALS['DEX'];
$LOCKPICK = 			($GLOBALS['DEX'] * 2) + $GLOBALS['LOG'] + $GLOBALS['PER'];
$COMM_SYSTEMS = 		($GLOBALS['MEM'] * 3) + $GLOBALS['LOG'];

//SURVIVAL
$TRAPS = 				($GLOBALS['PER'] * 2) + ($GLOBALS['LOG'] * 2);
$SURVEILLANCE = 		($GLOBALS['PER'] * 3) + $GLOBALS['LOG'];
$TRACKING =				($GLOBALS['PER'] * 3) + $GLOBALS['LOG'];
$OUTDOORSMAN =			($GLOBALS['PER'] * 2) + $GLOBALS['LOG'] + $GLOBALS['MEM'];
$PICKPOCKET =			($GLOBALS['DEX'] * 2) + $GLOBALS['PER'];

//MEDICAL
$FIRST_AID = 			($GLOBALS['MEM'] * 2) + ($GLOBALS['LOG'] * 2);
$HOLISTICS =			($GLOBALS['MEM'] * 3);

//PILOTING
$HORSEMANSHIP = 		($GLOBALS['DEX'] * 2) + $GLOBALS['LOG'] + $GLOBALS['PER'];
$MOTORCYCLE = 			($GLOBALS['DEX'] * 2) + $GLOBALS['LOG'] + $GLOBALS['PER'];
$AUTOMOBILE = 			($GLOBALS['LOG'] * 2) + $GLOBALS['SPD'] + $GLOBALS['PER'];
$BOATING =				($GLOBALS['LOG'] * 2) + $GLOBALS['SPD'] + $GLOBALS['PER'];
$SAILING =				($GLOBALS['LOG'] * 2) + ($GLOBALS['PER'] * 2);
$JET_SKI =				($GLOBALS['DEX'] * 2) + $GLOBALS['LOG'] + $GLOBALS['PER'];

//SOCIAL
$LITERACY =				($GLOBALS['MEM'] * 4) + ($GLOBALS['LOG'] * 2);
$SIMPLE_FOR_LANG = 		($GLOBALS['MEM'] * 2) + ($GLOBALS['LOG'] * 2);
$SIMPLE_FOR_LIT =		($GLOBALS['MEM'] * 3) + ($GLOBALS['LOG'] * 2);

//----------------------ADVANCED SKILLS

//SCIENCE
$FORENSICS =			($GLOBALS['LOG'] *2) + ($GLOBALS['PER'] * 2);
$TOXICOLOGY =			($GLOBALS['MEM'] * 3) + $GLOBALS['LOG'];
$PHARMACOLOGY =			($GLOBALS['MEM'] * 3) + $GLOBALS['LOG'];
$MICRO_BIOLOGY =		($GLOBALS['MEM'] * 3) + $GLOBALS['LOG'];

//TECHNOLOGY
$STRUCTURAL_ENG =		($GLOBALS['LOG'] * 3) + $GLOBALS['MEM'];
$ENCRYPTION =			($GLOBALS['MEM'] * 3);
$PROGRAMMING = 			($GLOBALS['LOG'] * 3) + $GLOBALS['MEM'];
$ROBOTICS =				($GLOBALS['LOG'] * 2) + $GLOBALS['MEM'];

//MEDICAL
$DOCTOR =				($GLOBALS['MEM'] * 3) + $GLOBALS['LOG'];
$CYBERNETICS =			$GLOBALS['LOG'] + $GLOBALS['MEM'];

//PILOT
$FREIGHT_TRUCKS =		($GLOBALS['LOG'] * 3) + $GLOBALS['PER'];
$CONSTRUCTION_VEH =		($GLOBALS['LOG'] * 3) + $GLOBALS['PER'];
$MILITARY_VEH =			($GLOBALS['LOG'] * 3) + $GLOBALS['PER'];
$HELICOPTERS =			($GLOBALS['PER'] * 2) + ($GLOBALS['LOG'] * 2);
$SMALL_ENG_PLANES =		($GLOBALS['PER'] * 2) + ($GLOBALS['LOG'] * 2);
$JET_ENG_PLANES =		($GLOBALS['PER'] * 2) + ($GLOBALS['LOG'] * 2);
$LARGE_PLANES = 		($GLOBALS['PER'] * 2) + ($GLOBALS['LOG'] * 2);

//SOCIAL
$DIFF_FOR_LANG = 		($GLOBALS['MEM'] * 3) + $GLOBALS['LOG'];
$DIFF_FOR_LIT = 		($GLOBALS['MEM'] * 3) + $GLOBALS['LOG'];
$LAW =					$GLOBALS['MEM'] * 4;

/*------------END GLOBALS----------*/

//STANDARD TRAINING	
function stealthT(){
	$GLOBALS['STEALTH'] + (mt_rand(4, 40));
	$GLOBALS['skillChoice']--;
}
function negotT(){
	$GLOBALS['NEGOT'] + (mt_rand(2, 20));
	$GLOBALS['skillChoice']--;
}
function climbT(){
	$GLOBALS['CLIMB'] + (mt_rand(4, 40));
	$GLOBALS['skillChoice']--;
}
function navigT(){
	$GLOBALS['NAVIG'] + (mt_rand(2, 20));
	$GLOBALS['skillChoice']--;
}
function unarmT(){
	$GLOBALS['UNARM'] + (mt_rand(4, 40));
	$GLOBALS['skillChoice']--;
}
function grapT(){
	$GLOBALS['GRAPPLE'] + (mt_rand(4, 40));
	$GLOBALS['skillChoice']--;
}
function shortT(){
	$GLOBALS['SHORTW'] + (mt_rand(4, 40));
	$GLOBALS['skillChoice']--;
}
function longT(){
	$GLOBALS['LONGW'] + (mt_rand(4, 40));
	$GLOBALS['skillChoice']--;
}
function twoHT(){
	$GLOBALS['TWOHW'] + (mt_rand(4, 40));
	$GLOBALS['skillChoice']--;
}
function chainT(){
	$GLOBALS['CHAIN'] + (mt_rand(4, 40));
	$$GLOBALS['skillChoice']--;
}
function throwT(){
	$GLOBALS['THROW'] + (mt_rand(4, 40));
	$GLOBALS['skillChoice']--;
}
function archT(){
	$GLOBALS['ARCH'] + (mt_rand(4,40));
	$GLOBALS['skillChoice']--;
}
function oneHGT(){
	$GLOBALS['ONEHGUNS'] + (mt_rand(4, 40));
	$GLOBALS['skillChoice']--;
}
function twoHGT(){
	$GLOBALS['TWOHGUNS'] + (mt_rand(4, 40));
	$GLOBALS['skillChoice']--;
}

//ADVANCED TRAINING
function offT(){
	$GLOBALS['OFF'] + (mt_rand(3, 30));
	$GLOBALS['skillChoice']--;
}
function burstT(){
	$GLOBALS['BURST'] + (mt_rand(3, 30));
	$GLOBALS['skillChoice']--;
}
function specialT(){
	$GLOBALS['SPECIAL'] + (mt_rand(3, 30));
	$GLOBALS['skillChoice']--;
}
function wsysT(){
	$GLOBALS['WSYS'] + (mt_rand(3, 30));
	$GLOBALS['skillChoice']--;
}

//ADJUST MENTAL TRAITS
function incMEM(){
	++ $GLOBALS['MEM'];
	-- $GLOBALS['traitPts'];
}
function decMEM(){
	-- $GLOBALS['MEM'];
	++ $GLOBALS['traitPts'];
}

function incLOG(){
	++ $GLOBALS['LOG'];
	-- $GLOBALS['traitPts'];
}
function decLOG(){
	-- $GLOBALS['LOG'];
	++ $GLOBALS['traitPts'];
}

function incPER(){
	++ $GLOBALS['PER'];
	-- $GLOBALS['traitPts'];
}
function decPER(){
	-- $GLOBALS['PER'];
	++ $GLOBALS['traitPts'];
}

function incWILL(){
	++ $GLOBALS['WILL'];
	-- $GLOBALS['traitPts'];
}
function decWILL(){
	-- $GLOBALS['WILL'];
	++ $GLOBALS['traitPts'];
}

function incCHA(){
	++ $GLOBALS['CHA'];
	-- $GLOBALS['traitPts'];
}
function decCHA(){
	-- $GLOBALS['CHA'];
	++ $GLOBALS['traitPts'];
}
//ADJUST PHYSICAL TRAITS
function incSTR(){
	++ $GLOBALS['STR'];
	-- $GLOBALS['traitPts'];
}
function decSTR(){
	-- $GLOBALS['STR'];
	++ $GLOBALS['traitPts'];
}

function incEND(){
	++ $GLOBALS['END'];
	-- $GLOBALS['traitPts'];
}
function decEND(){
	-- $GLOBALS['END'];
	++ $GLOBALS['traitPts'];
}


function incDEX(){
	++ $GLOBALS['DEX'];
	-- $GLOBALS['traitPts'];
}
function decDEX(){
	-- $GLOBALS['DEX'];
	++ $GLOBALS['traitPts'];
}

function incSPD(){
	++ $GLOBALS['SPD'];
	-- $GLOBALS['traitPts'];
}
function decSPD(){
	-- $GLOBALS['SPD'];
	++ $GLOBALS['traitPts'];
}

function incBTY(){
	++ $GLOBALS['BTY'];
	-- $GLOBALS['traitPts'];
}
function decBTY(){
	-- $GLOBALS['BTY'];
	++ $GLOBALS['traitPts'];
}

//MUTATION GENERATOR
if ($GLOBALS['radiation'] > $GLOBALS['END']){
	$mutts = ($GLOBALS['radiation'] - floor($GLOBALS['END'] / 2));
	for ($i = 0; $i < $mutts; $i++){
		mutation();
	}
};
/*
function addMut(){
      		for ($n = 1; $n < 21; $n++){
      		getElementById('idMarks'+ $n).value = echo.this;
*/
function mutation(){
		$mutation = (mt_rand(1, 100));
		if ($mutation <= 5){
//GETELEMENTBYID ?!?
//HAIRLESS
		$GLOBALS['BTY'] - 2;
		 echo "Hairless";
//NO NAILS
		} else if ($mutation >= 6 && $mutation <= 10){
			echo "No Nails";
//ONE EYE
		} else if ($mutation >= 11 && $mutation <= 15){
			$GLOBALS['PER'] - floor((mt_rand(1, 10)) / 2);
			$GLOBALS['BTY'] - (mt_rand(1, 10));
			echo "One Eye";
//NO EARS
		} else if ($mutation >= 16 && $mutation <= 20){
			$GLOBALS['PER'] - floor((mt_rand(1, 10)) / 2);
			$GLOBALS['BTY'] - floor((mt_rand(1, 10)) / 2);
			echo "No Ears";
//NO NOSE
		} else if ($mutation >= 21 && $mutation <= 25){
			$GLOBALS['BTY'] - (mt_rand(2, 20));
			echo "No Nose";
//UGLY AS HELL
		} else if ($mutation >= 26 && $mutation <= 40){
			$GLOBALS['BTY'] - (mt_rand(2, 20));
			echo "Ugly as Hell";
//EXTRA DIGITS
		} else if ($mutation >= 41 && $mutation <= 45){
			$GLOBALS['DEX'] + 2;
			echo "Extra Digits";
//MUSCLE ATROPHY
		} else if ($mutation >= 46 && $mutation <= 50){
			$GLOBALS['STR'] - (mt_rand(1, 10));
			$GLOBALS['END'] - (mt_rand(1, 10));
			echo "Muscle Atrophy";
//PARTIALLY DEAF
		} else if ($mutation >= 51 && $mutation <= 55){
			$GLOBALS['PER'] - floor((mt_rand(1, 10)) / 2);
			$GLOBALS['DEX'] - floor((mt_rand(1, 10)) / 2);
			echo "Partially Deaf";
//MUTE
		} else if ($mutation >= 56 && $mutation <= 60){
			echo "Mute";
//NO TASTE OR SMELL
		} else if ($mutation >= 61 && $mutation <= 65){
			echo "No Taste or Smell";
//LONG LIMBS
		} else if ($mutation >= 66 && $mutation <= 70){
			$GLOBALS['BTY'] - (mt_rand(1, 10));
			$GLOBALS['DEX'] + floor((mt_rand(1, 10)) / 2);
			echo "Long Limbs";
//DEFORMED ARMS
		} else if ($mutation >= 71 && $mutation <= 75){
			$GLOBALS['BTY'] - (mt_rand(1, 10));
			$GLOBALS['DEX'] - floor((mt_rand(1, 10)) / 2);
			$GLOBALS['STR'] - (mt_rand(1, 10));
			echo "Deformed Arms";
//WEAK BONES
		} else if ($mutation >= 76 && $mutation <= 80){
			$GLOBALS['END'] - (mt_rand(1, 10));
			$GLOBALS['STR'] - floor((mt_rand(1, 10)) / 2);
			$GLOBALS['SPD'] + floor((mt_rand(1, 10)) / 2);
			echo "Weak Bones";
//CARTILAGENEOUS SKELETON
		} else if ($mutation >= 81 && $mutation <= 85){
			$GLOBALS['END'] - floor((mt_rand(1, 10)) / 2);
			$GLOBALS['DEX'] + (mt_rand(1, 10));
			$GLOBALS['SPD'] + floor((mt_rand(1, 10)) / 2);			
			echo "Cartilageneous Skeleton";
//CALCIFIED BONES
		} else if ($mutation >= 86 && $mutation <= 90){
			$GLOBALS['END'] + floor((mt_rand(1, 10)) / 2);
			$GLOBALS['DEX'] - 2;			
			echo "Calcified Bones";
//LEATHERY SKIN
		} else if ($mutation >= 91 && $mutation <= 95){
			$GLOBALS['BTY'] - (mt_rand(1, 10));
			echo "Leathery Skin";
//LOOSE MUSCULATURE		
		} else {
			$GLOBALS['STR'] - floor((mt_rand(1, 10)) / 2);
			$GLOBALS['DEX'] + floor((mt_rand(1, 10)) / 2);
			echo "Loose Musculature";
		}
	}		

//GETELEMENTBYID ?!?
function background(){
		$background = (mt_rand(1, 100));
		if ($background <= 5){
//DOCTOR
/*
		lit
		math
		bio
		firstA
		medicine
		chem
		botany && holis || bio && pharma
*/
		$skillChoice = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Doctor";
//CHEMIST
		} else if ($background >= 6 && $background <= 8){
/*
		lit
		math
		chem
		botany && holis || bio && toxic
*/
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Chemist";
//PROGRAMMER
		} else if ($background >= 9 && $background <= 11){
/*
		lit
		math
		comp
		program
		encrypt || comm
*/		
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Programmer";
//COMMUNICATIONS EXPERT
		} else if ($background >= 12 && $background <= 15){
/*
		lit
		math
		comp
		elect
		comm
		(negotT * 2)
*/		
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Communications Expert";
//INVESTIGATOR
		} else if ($background >= 16 && $background <= 18){
/*
		lit
		surv
		track
		forensic
		melee training
		ranged training
		(negotT * 2)
*/
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Investigator";
//MERCHANT
		} else if ($background >= 19 && $background <= 20){
/*
		lit
		math
		melee training
		ranged training
		navigT
		(negotT * 2)
*/
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Merchant";
//TEACHER
		} else if ($background >= 21 && $background <= 25){
/*
		lit
		math
		hist
		comp
		bio || botany
*/
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(2, 20));
			return "Teacher";
//MECHANIC
		} else if ($background >= 26 && $background <= 30){
/*
		lit
		math
		mech
		metal
		pilot !horse
*/
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Mechanic";
//MEDIC
		} else if ($background >= 31 && $background <= 40){
/*
		lit
		bio
		firstA
		bot && holis || medicine
*/
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Medic";
//CONSTRUCTION WORKER
		} else if ($background >= 41 && $background <= 50){
/*
		math
		carpentry
		metal || bind
		$STREng
*/
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Construction Worker";
//MAN-AT-ARMS
		} else if ($background >= 51 && $background <= 55){
/*
		unarmT
		grapT
		stealthT
		surv
		bio
		melee training
		ranged training
*/
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Man-at-Arms";
//GANG MEMBER
		} else if ($background >= 56 && $background <= 65){
/*
		unarmT
		grapT
		melee training
		ranged training
		negotT
*/
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Gang Member";
//OUTDOORSMAN
		} else if ($background >= 66 && $background <= 75){
/*
		bind
		trap
		surv || track
		outdoor
		navigT
		ranged training
		stealthT
*/			
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Outdoorsman";
//FARMER
		} else if ($background >= 76 && $background <= 85){
/*
		botany
		holis
		bind
		carpentry || metal
		horse || auto
		outdoor
*/
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Farmer";
//DRIFTER
		} else if ($background >= 86 && $background <= 90){
/*
		navigT
		combat training
		pilot
*/			
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(2, 20));
			return "Drifter";
//SCAVENGER
		} else if ($background >= 91 && $background <= 95){
/*
		lit
*/			
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(2, 20));
			return "Scavenger";
//URCHIN
		} else {
/*
		pick
		surv
		negotT
*/			
		$GLOBALS['skillChoice'] = $GLOBALS['WILL'] + (mt_rand(1, 10));
			return "Urchin";
		}
	}		

?>