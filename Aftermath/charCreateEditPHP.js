
//ADJUST TRAITS
var MEM = 		document.getElementById('MEM'); 
var LOG = 		document.getElementById('LOG');
var PER = 		document.getElementById('PER');
var WILL = 		document.getElementById('WILL');
var CHA = 		document.getElementById('CHA');

var STR = 		document.getElementById('STR');
var END = 		document.getElementById('END');
var DEX = 		document.getElementById('DEX');
var SPD = 		document.getElementById('SPD');
var BTY = 		document.getElementById('BTY');

var traitPts = 	document.getElementById('traitPts');

function incMEM(){
	MEM ++;
	traitPts --;
	document.getElementById('MEM').value == MEM;
	document.getElementById('traitPts').value == traitPts;	
}
function decMEM(){
	MEM --;
	traitPts ++;
	document.getElementById('MEM').value == MEM;
	document.getElementById('traitPts').value == traitPts;	
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

//-------------------------------------STANDARD SKILLS
/*
//SCIENCE
VAR MATH = 				(MEM * 3) + (LOG * 2);
VAR BIOLOGY = 			(MEM * 2) + (LOG * 2);
VAR MARINE_BIO = 		(MEM * 2) + (LOG * 2);
VAR BOTANY =			(MEM * 2) + (LOG * 2);
VAR GEOLOGY = 			(MEM * 2) + (LOG * 2);
VAR CHEMISTRY = 		(MEM * 3) + LOG;
VAR HISTORY = 			MEM * 4;
VAR MYCOLOGY = 			(MEM * 3) + LOG;
VAR METEOROLOGY = 		MEM + (LOG * 3);
VAR ASTROLOGY = 		(MEM * 2) + (LOG * 2);

//TECHNOLOGY
VAR MECHANICS = 		LOG * 4;
VAR ELECTRONICS = 		(MEM * 2) + (LOG * 2);
VAR COMPUTERS = 		(MEM * 2) + (LOG * 2);
VAR CARPENTRY = 		MEM + (LOG * 3);
VAR METALWORK = 		MEM + (LOG * 3);
VAR BINDING = 			(LOG * 3) + DEX;
VAR LOCKPICK = 			(DEX * 2) + LOG + PER;
VAR COMM_SYSTEMS = 		(MEM * 3) + LOG;

//SURVIVAL
VAR TRAPS = 			(PER * 2) + (LOG * 2);
VAR SURVEILLANCE = 		(PER * 3) + LOG;
VAR TRACK =				(PER * 3) + LOG;
VAR OUTDOORSMAN =		(PER * 2) + LOG + MEM;
VAR PICKPOCKET =		(DEX * 2) + PER;
/*
//TRAINING
VAR STEALTHT = 	ROLL(4,40);
VAR NEGOTT =	ROLL(2,20);
VAR CLIMBT =	ROLL(4,40);
VAR NAVIGT = 	ROLL(2,20);
VAR UNARMT =	ROLL(4,40);
VAR GRAPT =		ROLL(4,40);
VAR SHORTT =	ROLL(4,40);
VAR LONGT =		ROLL(4,40);
VAR TWOHT =		ROLL(4,40);
VAR CHAINT =	ROLL(4,40);
VAR THROWNT =	ROLL(4,40);
VAR ARCHT =		ROLL(4,40);
VAR ONEHGUNST = ROLL(4,40);
VAR TWOHGUNST =	ROLL(4,40);

//MEDICAL
VAR FIRST_AID = 		(MEM * 2) + (LOG * 2);
VAR HOLISTICS =			(MEM * 3);

//PILOTING
VAR HORSEMANSHIP = 		(DEX * 2) + LOG + PER;
VAR MOTORCYCLE = 		(DEX * 2) + LOG + PER;
VAR AUTOMOBILE = 		(LOG * 2) + SPD + PER;
VAR BOATING =			(LOG * 2) + SPD + PER;
VAR SAILING =			(LOG * 2) + (PER * 2);
VAR JET_SKI =			(DEX * 2) + LOG + PER;

//SOCIAL
VAR LITERACY =			(MEM * 4) + (LOG * 2);
VAR SIMPLE_FOR_LANG = 	(MEM * 2) + (LOG * 2);
VAR SIMPLE_FOR_LIT =	(MEM * 3) + (LOG * 2);

//-------------------------------------ADVANCED SKILLS

//SCIENCE
VAR FORENSIC =			(LOG *2) + (PER * 2);
VAR TOXICOLOGY =		(MEM * 3) + LOG;
VAR PHARMACOLOGY =		(MEM * 3) + LOG;
VAR MICRO_BIO =			(MEM * 3) + LOG;

//TECHNOLOGY
VAR STRUCTURAL_ENG =	(LOG * 3) + MEM;
VAR ENCRYPTION =		(MEM * 3);
VAR PROGRAMMING = 		(LOG * 3) + MEM;
VAR ROBOTICS =			(LOG * 2) + MEM;
VAR CYBERNETICS =		LOG + MEM;
/*
//TRAINING
VAR OFFT =		ROLL(3,30);
VAR BURSTT =	ROLL(3,30);
VAR SPECIALT =	ROLL(3,30);
VAR WSYST =		ROLL(3,30);

//MEDICAL
VAR DOCTOR =			(MEM * 3) + LOG;

//PILOT
VAR FREIGHT_TRUCKS =	(LOG * 3) + PER;
VAR CONSTRUCTION_VEH =	(LOG * 3) + PER;
VAR MILITARY_VEH =		(LOG * 3) + PER;
VAR HELICOPTER =		(PER * 2) + (LOG * 2);
VAR SMALL_ENG_PLANE =	(PER * 2) + (LOG * 2);
VAR JET_ENG_PLANE =		(PER * 2) + (LOG * 2);
VAR LARGE_PLANE = 		(PER * 2) + (LOG * 2);

//SOCIAL
VAR DIFF_FOR_LANG = 	(MEM * 3) + LOG;
VAR DIFF_FOR_LIT = 		(MEM * 3) + LOG;
VAR LAW =				MEM * 4;
*/