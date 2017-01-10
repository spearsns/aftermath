function roll(min, max){
	return Math.round(Math.random() * (max - min)) + min;
} 

var radiation = roll(2,20);
var mutts;
var background = background();

//TRAITS
var mem = roll(2,20);
var log = roll(2,20);
var per = roll(2,20);
var will = roll(2,20);
var cha = roll(2,20);

var str = roll(2,20);
var end = roll(2,20);
var dex = roll(2,20);
var spd = roll(2,20);
var bty = roll(2,20);

var traitPts = 	Math.floor(will / 2);
var skillChoice = will + roll(1,10);

function incMem(){
	mem += 1;
	traitPts -= 1;
	document.getElementById("MEM").setAttribute('value', mem);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decMem(){
	mem -= 1;
	traitPts += 1;
	document.getElementById("MEM").setAttribute('value', mem);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incLog(){
	log += 1;
	traitPts -= 1;
	document.getElementById("LOG").setAttribute('value', log);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decLog(){
	log -= 1;
	traitPts += 1;
	document.getElementById("LOG").setAttribute('value', log);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incPer(){
	per += 1;
	traitPts -= 1;
	document.getElementById("PER").setAttribute('value', per);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decPer(){
	per -= 1;
	traitPts += 1;
	document.getElementById("PER").setAttribute('value', per);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incWill(){
	will += 1;
	traitPts -= 1;
	document.getElementById("WILL").setAttribute('value', will);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decWill(){
	will -= 1;
	traitPts += 1;
	document.getElementById("WILL").setAttribute('value', will);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incCha(){
	cha += 1;
	traitPts -= 1;
	document.getElementById("CHA").setAttribute('value', cha);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decCha(){
	cha -= 1;
	traitPts += 1;
	document.getElementById("CHA").setAttribute('value', cha);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incStr(){
	str += 1;
	traitPts -= 1;
	document.getElementById("STR").setAttribute('value', str);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decStr(){
	str -= 1;
	traitPts += 1;
	document.getElementById("STR").setAttribute('value', str);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incEnd(){
	end += 1;
	traitPts -= 1;
	document.getElementById("END").setAttribute('value', end);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decEnd(){
	end -= 1;
	traitPts += 1;
	document.getElementById("END").setAttribute('value', end);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incDex(){
	dex += 1;
	traitPts -= 1;
	document.getElementById("DEX").setAttribute('value', dex);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decDex(){
	dex -= 1;
	traitPts += 1;
	document.getElementById("DEX").setAttribute('value', dex);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incSpd(){
	spd += 1;
	traitPts -= 1;
	document.getElementById("SPD").setAttribute('value', spd);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decSpd(){
	spd -= 1;
	traitPts += 1;
	document.getElementById("SPD").setAttribute('value', spd);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function incBty(){
	bty += 1;
	traitPts -= 1;
	document.getElementById("BTY").setAttribute('value', bty);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}
function decBty(){
	bty -= 1;
	traitPts += 1;
	document.getElementById("BTY").setAttribute('value', bty);
	document.getElementById("traitPts").setAttribute('value', traitPts);
}

//MUTATION GENERATOR
/*
if (radiation > end){
	mutts = Math.floor((radiation - end) / 2);
	i = 1;
	
	do {
		mutation();
		break;
	}
	while (i <= mutts)
};

function mutation(){
		var mutation = roll(1,100);
		if (mutation <= 5){
//HAIRLESS
			bty -= 2;
			document.getElementById("idMarks" + i).setAttribute("value","HAIRLESS");
			i ++;
			
//NO NAILS
		} else if (mutation >= 6 && mutation <= 10){
			document.getElementById("idMarks" + i).setAttribute("NO NAILS");
			i ++;
			
//ONE EYE
		} else if (mutation >= 11 && mutation <= 15){
			per -= (roll(1,10) / 2);
			bty -= roll(1,10);
			document.getElementById("idMarks" + i).setAttribute("ONE EYE");
			i ++;
			
//NO EARS
		} else if (mutation >= 16 && mutation <= 20){
			per -= (roll(1,10) / 2);
			bty -= (roll(1,10) / 2);
			document.getElementById("idMarks" + i).setAttribute("NO EARS");
			i ++;
				
//NO NOSE
		} else if (mutation >= 21 && mutation <= 25){
			bty -= roll(2,20);
			document.getElementById("idMarks" + i).setAttribute("NO NOSE");
			i ++;
						
//UGLY AS HELLS
		} else if (mutation >= 26 && mutation <= 40){
			bty -= roll(2,20);
			document.getElementById("idMarks" + i).value("UGLY AS HELL");
			i ++;
						
//EXTRA DIGITS
		} else if (mutation >= 41 && mutation <= 45){
			dex += 2;
			document.getElementById("idMarks" + i).setAttribute("EXTRA DIGITS");
			i ++;
						
//MUSCLE ATROPHY
		} else if (mutation >= 46 && mutation <= 50){
			str -= roll(1,10);
			end -= roll(1,10);
			document.getElementById("idMarks" + i).setAttribute("MUSCLE ATROPHY");
			i ++;
						
//PARTIALLY DEAF
		} else if (mutation >= 51 && mutation <= 55){
			per -= (roll(1,10) / 2);
			dex -= (roll(1,10) / 2);
			document.getElementById("idMarks" + i).setAttribute("PARTIALLY DEAF");
			i ++;
			
//MUTE
		} else if (mutation >= 56 && mutation <= 60){
			document.getElementById("idMarks" + i).setAttribute("MUTE");
			i ++;
			
//NO TASTE OR SMELL
		} else if (mutation >= 61 && mutation <= 65){
			document.getElementById("idMarks" + i).setAttribute("NO TASTE OR SMELL");
			i ++;
			
//LONG LIMBS
		} else if (mutation >= 66 && mutation <= 70){
			bty -= roll(1,10);
			dex += (roll(1,10) / 2);
			document.getElementById("idMarks" + i).setAttribute("LONG LIMBS");
			i ++;
			
//DEFORMED ARMS
		} else if (mutation >= 71 && mutation <= 75){
			bty -= roll(1,10);
			dex -= (roll(1,10) / 2);
			str -= roll(1,10);
			document.getElementById("idMarks" + i).setAttribute("DEFORMED ARMS");
			i ++;
			
//WEAK BONES
		} else if (mutation >= 76 && mutation <= 80){
			end -= roll(1,10);
			str -= (roll(1,10) / 2);
			spd += (roll(1,10) / 2);
			document.getElementById("idMarks" + i).setAttribute("WEAK BONES");
			i ++;
			
//CARTILAGENEOUS SKELETON
		} else if (mutation >= 81 && mutation <= 85){
			end -= (roll(1,10) / 2);
			dex += roll(1,10);
			spd += (roll(1,10) / 2);			
			document.getElementById("idMarks" + i).setAttribute("CARTILAGENEOUS SKELETON");
			i ++;
			
//CALCIFIED BONES
		} else if (mutation >= 86 && mutation <= 90){
			end += (roll(1,10) / 2);
			dex -= 2;
			document.getElementById("idMarks" + i).setAttribute("CALCIFIED BONES");
			i ++;
			
//LEATHERY SKIN
		} else if (mutation >= 91 && mutation <= 95){
			bty -= roll(1,10);
			document.getElementById("idMarks" + i).setAttribute("LEATHERY SKIN");
			i ++;
			
//LOOSE MUSCULATURE		
		} else {
			str -= (roll(1,10) / 2);
			dex += (roll(1,10) / 2);
			document.getElementById("idMarks" + i).setAttribute("LOOSE MUSCULATURE");
			i ++;
		}
	}	
*/
var n = 1;
var an = 1;
function background(){
		var background = roll(1,100);
//DOCTOR
		if (background <= 5){
		/*
    	{document.getElementById("skill" + n).setAttribute("value", "LITERACY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
    	n += 1;}
    	{document.getElementById("skill" + n).setAttribute("value", "MATH");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "BIOLOGY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("BIOLOGY"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "FIRST_AID");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("FIRST_AID"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "BIOLOGY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("BIOLOGY"));
    	n += 1;}
    	{document.getElementById("advSkill" + an).setAttribute("value", "DOCTOR");
    	document.getElementById("advSkillRate" + an).setAttribute("value", skillMap.get("DOCTOR"));
    	an += 1;}
    	*/
    	//botany && holis || bio && pharma
			return "Doctor";

//CHEMIST
		} else if (background >= 6 && background <= 8){
			/*
		{document.getElementById("skill" + n).setAttribute("value", "LITERACY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "MATH");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "CHEMISTRY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("CHEMISTRY"));
    	n += 1}
    	*/
    	//botany && holis || bio && toxic
			return "Chemist";

//PROGRAMMER
		} else if (background >= 9 && background <= 11){
		/*
		{document.getElementById("skill" + n).setAttribute("value", "LITERACY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
    	n += 1}	
		{document.getElementById("skill" + n).setAttribute("value", "MATH");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "COMPUTERS");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("COMPUTERS"));
    	n += 1}
		{document.getElementById("advSkill" + n).setAttribute("value", "PROGRAMMING");
    	document.getElementById("advSkillRate" + n).setAttribute("value", skillMap.get("PROGRAMMING"));
    	n += 1}
    	*/
    	//encrypt || comm
			return "Programmer";

//COMMUNICATIONS EXPERT
		} else if (background >= 12 && background <= 15){
		/*
		{document.getElementById("skill" + n).setAttribute("value", "LITERACY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "MATH");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "COMPUTERS");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("COMPUTERS"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "ELECTRONICS");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("ELECTRONICS"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "COMM_SYSTEMS");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("COMM_SYSTEMS"));
    	n += 1}
		document.getElementById('negot').setAttribute('value', negot + roll(4,40));
		*/
			return "Communications Expert";

//INVESTIGATOR
		} else if (background >= 16 && background <= 18){
		/*
		{document.getElementById("skill" + n).setAttribute("value", "LITERACY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "SURVEILLANCE");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("SURVEILLANCE"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "TRACKING");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("TRACKING"));
    	n += 1}
		{document.getElementById("advSkill" + an).setAttribute("value", "FORENSICS");
    	document.getElementById("advSkillRate" + an).setAttribute("value", skillMap.get("FORENSICS"));
    	an += 1}
		document.getElementById('negot').setAttribute('value', negot + roll(4,40));
		*/
		//melee training
		//ranged training
			return "Investigator";

//MERCHANT
		} else if (background >= 19 && background <= 20){
		/*
		{document.getElementById("skill" + n).setAttribute("value", "LITERACY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "MATH");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
    	n += 1}
		document.getElementById('navig').setAttribute('value', navig + roll(2,20));
		document.getElementById('negot').setAttribute('value', negot + roll(4,40));
		*/
		//melee training
		//ranged training
			return "Merchant";

//TEACHER
		} else if (background >= 21 && background <= 25){
		/*
		{document.getElementById("skill" + n).setAttribute("value", "LITERACY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
    	n += 1}
    	document.getElementById("skill" + n).setAttribute("value", "MATH");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "HISTORY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("HISTORY"));
    	n += 1}
		{document.getElementById("skill" + n).setAttribute("value", "COMPUTERS");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("COMPUTERS"));
    	n += 1}
    	*/
    	skillChoice += roll(1,10);
		//bio || botany
			return "Teacher";

//MECHANIC
		} else if (background >= 26 && background <= 30){
		/*	
		{document.getElementById("skill" + n).setAttribute("value", "LITERACY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "MATH");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "MECHANICS");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MECHANICS"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "METALWORK");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("METALWORK"));
    	n += 1;}
    	skillChoice = will + roll(1,10);
		//pilot !horse
		*/
			return "Mechanic";

//MEDIC
		} else if (background >= 31 && background <= 40){
		/*
		{document.getElementById("skill" + n).setAttribute("value", "LITERACY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "BIOLOGY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("BIOLOGY"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "FIRST_AID");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("FIRST_AID"));
    	n += 1;}
		*/
		//bot && holis || medicine
			return "Medic";

//CONSTRUCTION WORKER
		} else if (background >= 41 && background <= 50){
		/*
		{document.getElementById("skill" + n).setAttribute("value", "MATH");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("MATH"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "CARPENTRY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("CARPENTRY"));
    	n += 1;}
    	{document.getElementById("advSkill" + an).setAttribute("value", "STRUCTURAL_ENGINEERING");
    	document.getElementById("advSkillRate" + an).setAttribute("value", skillMap.get("STRUCTURAL_ENGINEERING"));
    	an += 1}
		{document.getElementById("skill" + n).setAttribute("value", "METALWORK");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("METALWORK"));
    	n += 1;}
    	{document.getElementById("skill" + n).setAttribute("value", "BINDING");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("BINDING"));
    	n += 1;}
		skillChoice = will + roll(1,10);
		*/
			return "Construction Worker";

//MAN-AT-ARMS
		} else if (background >= 51 && background <= 55){
		/*
		document.getElementById('unarm').setAttribute('value', unarm + roll(4,40));
		document.getElementById('grapple').setAttribute('value', grap + roll(4,40));
		document.getElementById('stealth').setAttribute('value', stealth + roll(4,40));
		{document.getElementById("skill" + n).setAttribute("value", "SURVEILLANCE");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("SURVEILLANCE"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "BIOLOGY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("BIOLOGY"));
    	n += 1;}
    	*/
		//melee training
		//ranged training
			return "Man-at-Arms";

//GANG MEMBER
		} else if (background >= 56 && background <= 65){
		/*
		document.getElementById('unarm').setAttribute('value', unarm + roll(4,40));
		document.getElementById('grapple').setAttribute('value', grap + roll(4,40));
		document.getElementById('negot').setAttribute('value', negot + roll(2,20));
		*/
		//melee training
		//ranged training
			return "Gang Member";

//OUTDOORSMAN
		} else if (background >= 66 && background <= 75){
		/*
		{document.getElementById("skill" + n).setAttribute("value", "BINDING");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("BINDING"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "TRAPS");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("TRAPS"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "OUTDOORSMAN");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("OUTDOORSMAN"));
    	n += 1;}
		document.getElementById('navig').setAttribute('value', navig + roll(2,20));
		{document.getElementById("skill" + n).setAttribute("value", "SURVEILLANCE");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("SURVEILLANCE"));
    	n += 1;}
    	{document.getElementById("skill" + n).setAttribute("value", "TRACKING");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("TRACKING"));
    	n += 1;}
    	document.getElementById('stealth').setAttribute('value', stealth + roll(4,40));
		//ranged training
		*/
			return "Outdoorsman";

//FARMER
		} else if (background >= 76 && background <= 85){
		/*
		{document.getElementById("skill" + n).setAttribute("value", "BOTANY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("BOTANY"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "HOLISTICS");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("HOLISTICS"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "BINDING");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("BINDING"));
    	n += 1;}
    	{document.getElementById("skill" + n).setAttribute("value", "OUTDOORSMAN");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("OUTDOORSMAN"));
    	n += 1;}
		//carpentry || metal
		//horse || auto
		*/
			return "Farmer";

//DRIFTER
		} else if (background >= 86 && background <= 90){
		/*
		document.getElementById('navig').setAttribute('value', navig + roll(2,20));
		//combat training
		//pilot
		*/
		skillChoice += roll(1,10);	
			return "Drifter";

//SCAVENGER
		} else if (background >= 91 && background <= 95){
		/*
		{document.getElementById("skill" + n).setAttribute("value", "LITERACY");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("LITERACY"));
    	n += 1;}
    	*/
    	skillChoice += roll(1,10);
			return "Scavenger";

//URCHIN
		} else {
		/*
		{document.getElementById("skill" + n).setAttribute("value", "PICKPOCKET");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("PICKPOCKET"));
    	n += 1;}
		{document.getElementById("skill" + n).setAttribute("value", "SURVEILLANCE");
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get("SURVEILLANCE"));
    	n += 1;}
		document.getElementById('negot').setAttribute('value', negot + roll(2,20));
		*/
			return "Urchin";
		}
	}	


//COMBAT STATS
var seq = 	Math.floor((per + spd) / 2);
var act = 	Math.floor(spd / 2);
var block = Math.floor((dex + spd) / 2);
var dodge = Math.floor((dex + spd) / 4);

//UNIVERSAL SKILLS
var stealth = 	(per * 3) + dex;
var climb = 	(dex * 3) + str;
var negot = 	cha * 4;
var navig = 	(log * 2) + per + mem;
//MELEE
var unarm = 	(spd * 3) + (str * 2) + dex;
var grap = 		(str * 2) + end + dex + spd;
var off = 		0 - ((20 - dex) * 3);
var short = 	(spd * 3) + dex + str;
var long = 		(spd * 2) + (dex * 2) + str;
var twoH = 		(dex * 2) + (str * 2) + spd;
var chain = 	(dex * 3) + spd + log;
//RANGED
var thrown = 	(str * 2) + (dex * 2) + log;
var arch = 		(dex * 2) + (log * 2) + per;
var oneHguns = 	(dex * 3) + per + log;
var twoHguns = 	(dex * 2) + (per *2) + log;
var burst = 	(log * 2) + per + dex + str;
var special = 	(per * 2) + (log * 2) + dex;
var wsys = 		(per * 2) + (log * 2) + spd;


//-------------------------------------STANDARD SKILLS
//SCIENCE
var math = 		(mem * 3) + (log * 2);
var bio = 		(mem * 2) + (log * 2);
var marBio = 	(mem * 2) + (log * 2);
var botany =	(mem * 2) + (log * 2);
var geo = 		(mem * 2) + (log * 2);
var chem = 		(mem * 3) + log;
var hist = 		mem * 4;
var myco = 		(mem * 3) + log;
var meteo = 	mem + (log * 3);
var astro = 	(mem * 2) + (log * 2);

//TECHNOLOGY
var mech = 		log * 4;
var elect = 	(mem * 2) + (log * 2);
var comp = 		(mem * 2) + (log * 2);
var carp = 		mem + (log * 3);
var metal = 	mem + (log * 3);
var bind = 		(log * 3) + dex;
var lock = 		(dex * 2) + log + per;
var comm = 		(mem * 3) + log;

//SURVIVAL
var traps = 	(per * 2) + (log * 2);
var surv = 		(per * 3) + log;
var track =		(per * 3) + log;
var outdoor =	(per * 2) + log + mem;
var pick =		(dex * 2) + per;


//MEDICAL
var firstA = 	(mem * 2) + (log * 2);
var holis =		(mem * 3);

//PILOTING
var horse = 	(dex * 2) + log + per;
var cycle = 	(dex * 2) + log + per;
var auto = 		(log * 2) + spd + per;
var boat =		(log * 2) + spd + per;
var sail =		(log * 2) + (per * 2);
var jetski =	(dex * 2) + log + per;

//SOCIAL
var lit =		(mem * 4) + (log * 2);
var forLang = 	(mem * 2) + (log * 2);
var forLit =	(mem * 3) + (log * 2);

//-------------------------------------ADVANCED SKILLS

//SCIENCE
var foren =		(log *2) + (per * 2);
var toxic =		(mem * 3) + log;
var pharma =	(mem * 3) + log;
var micBio =	(mem * 3) + log;

//TECHNOLOGY
var strEng =	(log * 3) + mem;
var encrypt =	(mem * 3);
var program = 	(log * 3) + mem;
var robot =		(log * 2) + mem;
var cyber =		log + mem;

//MEDICAL
var doctor =	(mem * 3) + log;

//PILOT
var freight =	(log * 3) + per;
var conVeh =	(log * 3) + per;
var milVeh =	(log * 3) + per;
var heli =		(per * 2) + (log * 2);
var planes =	(per * 2) + (log * 2);

//SOCIAL
var diffForLan = 	(mem * 3) + log;
var diffForLit = 	(mem * 3) + log;
var law =			mem * 4;

function addSkill(skill){
	var dataset = skill.dataset;
	  do {
    	document.getElementById("skill" + n).setAttribute("value", dataset.name);
    	document.getElementById("skillRate" + n).setAttribute("value", skillMap.get(dataset.name));
    	document.getElementById("skillChoice").setAttribute("value", skillChoice -= 1);
    	n ++;
    	break;
  } while (n < 17);
}
function addAdvSkill(skill){
	var dataset = skill.dataset;
	   do {
    	document.getElementById("advSkill" + an).setAttribute("value", dataset.name);
    	document.getElementById("advSkillRate" + an).setAttribute("value", advSkillMap.get(dataset.name));
    	document.getElementById("skillChoice").setAttribute("value", skillChoice -= 2);
    	an ++;
    	break;
  } while (an < 11);
}
//MAPS
var skills = [
["MATH", math],								//0
["BIOLOGY", bio],							//1
["MECHANICS", mech], 						//2
["ELECTRONICS", elect],						//3
["STEALTH", roll(4,40)],					//4
["NEGOTIATION", roll(2,20)], 				//5
["HORSEMANSHIP", horse],					//6
["MOTORCYCLE", cycle],						//7
["MARINE_BIO", marBio],						//8
["BOTANY", botany],							//9
["COMPUTERS", comp],						//10
["CARPENTRY", carp],						//11
["CLIMBING", roll(4,40)],					//12
["NAVIGATION", roll(2,20)],					//13
["AUTOMOBILE", auto],						//14
["BOATING", boat],							//15
["GEOLOGY",	geo],							//16
["CHEMISTRY", chem],						//17
["METALWORK", metal],						//18
["BINDING",	bind],							//19
["UNARMED",	roll(4,40)],					//20
["GRAPPLING", roll(4,40)],					//21
["SAILING",	sail],							//22
["JET_SKI",	jetski],						//23
["HISTORY",	hist],							//24
["MYCOLOGY", myco],							//25
["LOCKPICK", lock],							//26
["COMM_SYSTEMS", comm],						//27
["SHORT_WEAPONS", roll(4,40)],				//28
["LONG_WEAPONS", roll(4,40)],				//29
["METEOROLOGY",	meteo],						//30
["ASTROLOGY", astro],						//31
["TWO_HANDED", roll(4,40)],					//32
["CHAIN", roll(4,40)],						//33
["TRAPS", traps],							//34
["SURVEILLANCE", surv],						//35
["LITERACY", lit],							//36
["SIMPLE_FOREIGN_LANG", forLang],			//37
["THROWING", roll(4,40)],					//38
["ARCHERY",	roll(4,40)],					//39
["TRACKING", track],						//40
["OUTDOORSMAN",	outdoor],					//41
["FIRST_AID", firstA],						//42
["HOLISTICS", holis],						//43
["SIMPLE_FOREIGN_LIT", forLit],				//44
["ONE_HANDED_GUNS",	roll(4,40)],			//45
["TWO_HANDED_GUNS",	roll(4,40)],			//46
["PICKPOCKET", pick],						//47
];

var advSkills = [
["FORENSICS", foren],						//0
["TOXICOLOGY", toxic],						//1
["STRUCTURAL_ENGINEERING", strEng],			//2
["ENCRYPTION", encrypt],					//3
["OFF_HAND", roll(3,30)],					//4
["BURST_CONTROL", roll(3,30)],				//5
["FREIGHT_TRUCKS", freight],				//6
["CONSTRUCTION_VEHICLES", conVeh],			//7
["PHARMACOLOGY", pharma],					//8
["MICRO_BIOLOGY", micBio],					//9
["PROGRAMMING",	program],					//10
["ROBOTICS", robot],						//11
["SPECIAL_WEAPONS",	roll(3,30)],			//12
["WEAPON_SYSTEMS", roll(3,30)],				//13
["MILITARY_VEHICLES", milVeh],				//14
["HELICOPTERS",	heli],						//15
["AIRPLANES", planes],						//16
["DOCTOR", doctor],							//18
["CYBERNETICS",	cyber],						//19
["DIFF_FOREIGN_LANG", diffForLan],			//20
["DIFF_FOREIGN_LIT", diffForLit],			//21
["LAW",	law],								//22
];

var skillMap = new Map(skills);
var advSkillMap = new Map(advSkills);