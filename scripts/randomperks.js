function characterInfo(id, perk1, perk2, perk3){
	this.id = id;
	this.perk1 = perk1;
	this.perk2 = perk2;
	this.perk3 = perk3;
}

const survBtn = document.getElementById("survBtn");
const killerBtn = document.getElementById("killerBtn");

const survCheckboxes = document.getElementById("survCheckboxes");
const killersCheckboxes = document.getElementById("killersCheckboxes");

survBtn.addEventListener("click", () =>{
	survCheckboxes.style.display = "block";
	killersCheckboxes.style.display = "none";
})
killerBtn.addEventListener("click", () =>{
	survCheckboxes.style.display = "none";
	killersCheckboxes.style.display = "block";
})

/* DATA - CHARACTERS*/
var dwight = new characterInfo("dwight", "bond", "leader", "proveThyself");
var meg = new characterInfo("meg", "quickAndQuiet", "sprintBurst", "adrenaline");
var claudette = new characterInfo("claudette", "empathy", "botanyKnowledge", "selfCare");
var jake = new characterInfo("jake", "ironWill", "saboteur", "calmSpirit");
var nea = new characterInfo("nea", "balancedLanding", "urbanEvasion", "streetwise");
var bill = new characterInfo("bill", "leftBehind", "borrowedTime", "unbreakable");
var david = new characterInfo("david","wereGonnaLiveForever", "deadHard", "noMither");
var laurie = new characterInfo("laurie", "soleSurvivor", "objectOfObsession", "decisiveStrike");
var ace = new characterInfo("ace", "open-Handed", "upTheAnte", "aceInTheHole");
var feng = new characterInfo("feng", "technician", "lithe", "alert");
var quentin = new characterInfo("quentin", "wakeUp", "pharmacy", "vigil");
var tapp = new characterInfo("tapp", "tenacity", "detectivesHunch","stakeOut");
var kate = new characterInfo("kate", "danceWithMe", "windowsOfOpportunity", "boilOver");
var adam = new characterInfo("adam", "diversion", "deliverance", "autodidact","adam");
var jeff = new characterInfo("jeff", "breakdown", "aftercare", "distortion");
var jane = new characterInfo("jane", "solidarity", "poised", "headOn");
var ash = new characterInfo("ash", "flip-Flop", "buckleUp", "mettleOfMan");
var nancy = new characterInfo("nancy", "betterTogether", "fixated", "innerStrength");
var steve = new characterInfo("steve", "babysitter", "camaraderie", "secondWind");
var yui = new characterInfo("yui", "luckyBreak", "anyMeansNecessary", "breakout");
var zarina = new characterInfo("zarina", "offTheRecord", "redHerring", "forThePeople");
var cheryl = new characterInfo("cheryl", "soulGuard", "bloodPact", "repressedAlliance");
var felix = new characterInfo("felix", "visionary", "desperateMeasures", "builtToLast");
var elodie = new characterInfo("elodie", "appraisal", "deception", "powerStruggle");
var yun = new characterInfo("yun", "fastTrack", "smashHit", "selfPreservation");

var trapper = new characterInfo("trapper", "unnervingPresence", "brutalStrength", "agitation");
var wraith = new characterInfo("wraith", "predator", "bloodhound", "shadowborn");
var hillbilly = new characterInfo("hillbilly", "enduring", "lightborn", "tinkerer");
var nurse = new characterInfo("nurse", "stridor", "thanatophobia", "aNursesCalling");
var huntress = new characterInfo("huntress", "beastOfPrey", "territorialImperative", "hexHuntressLullaby");
var myers = new characterInfo("myers", "saveTheBestForLast", "playWithYourFood", "dyingLight");
var hag = new characterInfo("hag", "hexTheThirdSeal", "hexRuin", "hexDevourHope");
var doctor = new characterInfo("doctor", "overwhelmingPresence", "monitorAbuse", "overcharge");
var buba = new characterInfo("buba", "knockOut", "barbecueChilli", "franklinsDemise");
var freddy = new characterInfo("freddy", "fireUp", "rememberMe", "bloodWarden");
var pig = new characterInfo("pig", "hangmansTrick", "surveillance", "makeYourChoice");
var clown = new characterInfo("clown", "bamboozle", "coulrophobia", "popGoesTheWeasel");
var spirit = new characterInfo("spirit", "spiritFury", "hexHauntedGround", "rancor");
var legion = new characterInfo("legion", "discordance", "madGrit", "ironMaiden");
var plaque = new characterInfo("plaque","corruptIntervention", "infectiousFright", "darkDevotion");
var ghostface = new characterInfo("ghostface", "imAllEars", "thrillingTremors", "furtiveChase");
var demogorgon = new characterInfo("demogorgon", "surge", "mindBreaker", "cruelLimits");
var oni = new characterInfo("oni", "zanshinTactics","bloodEcho", "nemesis");
var deathslinger = new characterInfo("deathslinger", "gearhead", "deadMansSwitch", "hexRetribution");
var pyramid = new characterInfo("pyramid", "forcedPenance", "trailOfTorment", "deathbound");
var blight = new characterInfo("blight", "dragonsGrip", "hexBloodFavour", "hexUndying");
var twins = new characterInfo("twins", "hoarder", "oppression", "coupDeGrace")
var trickster = new characterInfo("trickster", "starstruck", "hexCrowdControl", "noWayOut")


var killers = ["trapper", "wraith", "hillbilly", "nurse", "huntress", "myers", "hag", "doctor", "buba", "freddy", "pig", "clown","spirit", 
"legion", "plaque", "ghostface", "demogorgon", "oni", "deathslinger", "pyramid", "blight", "twins", "trickster"];
var characters = ["dwight", "meg", "claudette", "jake", "nea","bill", "david","laurie", "ace","feng", "quentin", 
"tapp", "kate", "adam", "jeff", "jane", "ash", "nancy", "steve","yui", "zarina", "cheryl", "felix", "elodie", "yun"];

var perksToDraw = [];
var drawedPerks = [];

function drawPerks(){	
	if(survCheckboxes.style.display == "block"){
		for(var i=0; i<characters.length; i++){
			const person = document.getElementById(characters[i]);
			if(person.checked == true){
				perksToDraw.push(eval(characters[i] + ".perk1"), eval(characters[i] + ".perk2"), eval(characters[i] + ".perk3"));			
			}		
		}
	}
	
	if(killersCheckboxes.style.display == "block"){
		for(var i=0; i<killers.length; i++){
			const person = document.getElementById(killers[i]);
			if(person.checked == true){
				perksToDraw.push(eval(killers[i] + ".perk1"), eval(killers[i] + ".perk2"), eval(killers[i] + ".perk3"));			
			}		
		}
	}

    console.log("PERKS TO DRAW:  ");
    console.log(perksToDraw);

	if(perksToDraw.length > 5){
		var n=0;
		while(n!=4){
			var perk = Math.floor(Math.random() * perksToDraw.length);
			var x = 0;
			for(var i=0; i<drawedPerks.length; i++){
				if(perksToDraw[perk] == drawedPerks[i]){
					x++;
				}
			}
			if(x==0){
				drawedPerks[n] = perksToDraw[perk]
				n++;
			}
			x=0;
		}
        console.log("DRAWED PERKS: " + drawedPerks);  
		document.getElementById("perk1").setAttribute("src", "/images/perks/" + drawedPerks[0] + ".png");
		document.getElementById("perk2").setAttribute("src", "/images/perks/" + drawedPerks[1] + ".png");
		document.getElementById("perk3").setAttribute("src", "/images/perks/" + drawedPerks[2] + ".png");
		document.getElementById("perk4").setAttribute("src", "/images/perks/" + drawedPerks[3] + ".png");

		perksToDraw = [];
	    drawedPerks = [];
	}
    else if(perksToDraw.length < 5){
        alert("You have to choose two characters at least! ");
		perksToDraw = [];
    }	
}


