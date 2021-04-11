<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Random perks | DBD Statistics</title>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="styles/statspage.css">
	<link type="text/css" rel="stylesheet" href="styles/layouts.css">
	<link type="text/css" rel="stylesheet" href="styles/homepage.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
	<link rel="manifest" href="images/favicons/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<!-- NAVIGATION -->
	<?php require_once("views/layouts/navbar.php"); ?>
	<!-- PRIVACY POLICY -->
	<?php require_once("views/layouts/privacyinfo.php"); ?> 

	<!-- HOME PAGE -->
	<div style="background-image: url('../images/bg/image8.jpg');" class="banner">
		<div class="bannerText">
			<h1>Random Perks</h1>
			<h2>Draw your loadout!</h2>
		</div>
	</div>
	<div class="fthr2"></div>
	<div class="container">
	
		<div class="textBox ">
			<div style="margin: 0;"class="flexBox">
				<div class="survsRandom">
					<div class="flex-perk" id="survBtn">
						<h1>SURVS</h1>
					</div>
				</div>
				<div class="killerRandom" >
					<div class="flex-perk" id="killerBtn">
						<h1>KILLERS</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="fthr2"></div>

			<div class="textBox">
				<h1 class="randH1">Drawed perks: </h1>
				<div class="flex-perk">
					<div class="perk"><img class="perkImg" id="perk1" src="images/perks/questionPerk.png" ></div>
					<div class="perk"><img class="perkImg" id="perk2" src="images/perks/questionPerk.png" ></div>
					<div class="perk"><img class="perkImg" id="perk3" src="images/perks/questionPerk.png" ></div>
					<div class="perk"><img class="perkImg" id="perk4" src="images/perks/questionPerk.png" ></div>
				</div>
				<div class="flex-perk">
					<button class="drawBtn" onclick="drawPerks();">DRAW PERKS</button>
				</div>
			</div>			

		<div class="fthr2"></div>

		<div class="playerStatsAnimated" id="survCheckboxes">
			<div class="statsBox ">
				<div class="textBox">
					<div class="checkboxy" >
						<h1 class="randH1">Choose characters: </h1>
						<input type="checkbox" id="dwight" class="checkWithLabel">
							<label for="dwight" class="checkbox"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="meg" class="checkWithLabel">
							<label for="meg" class="checkbox" style="background-image: url('../images/characters/meg.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="claudette" class="checkWithLabel">
							<label for="claudette" class="checkbox" style="background-image: url('../images/characters/claudette.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="jake" class="checkWithLabel">
							<label for="jake" class="checkbox" style="background-image: url('../images/characters/jake.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="nea" class="checkWithLabel">
							<label for="nea" class="checkbox" style="background-image: url('../images/characters/nea.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="bill" class="checkWithLabel">
							<label for="bill" class="checkbox" style="background-image: url('../images/characters/bill.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="david" class="checkWithLabel">
							<label for="david" class="checkbox" style="background-image: url('../images/characters/david.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="laurie" class="checkWithLabel">
							<label for="laurie" class="checkbox" style="background-image: url('../images/characters/laurie.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="ace" class="checkWithLabel">
							<label for="ace" class="checkbox" style="background-image: url('../images/characters/ace.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="feng" class="checkWithLabel">
							<label for="feng" class="checkbox" style="background-image: url('../images/characters/feng.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="quentin" class="checkWithLabel">
							<label for="quentin" class="checkbox" style="background-image: url('../images/characters/quentin.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="tapp" class="checkWithLabel">
							<label for="tapp" class="checkbox" style="background-image: url('../images/characters/tapp.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="kate" class="checkWithLabel">
							<label for="kate" class="checkbox" style="background-image: url('../images/characters/kate.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="adam" class="checkWithLabel">
							<label for="adam" class="checkbox" style="background-image: url('../images/characters/adam.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="jeff" class="checkWithLabel">
							<label for="jeff" class="checkbox" style="background-image: url('../images/characters/jeff.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="jane" class="checkWithLabel">
							<label for="jane" class="checkbox" style="background-image: url('../images/characters/jane.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="ash" class="checkWithLabel">
							<label for="ash" class="checkbox" style="background-image: url('../images/characters/ash.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="nancy" class="checkWithLabel">
							<label for="nancy" class="checkbox" style="background-image: url('../images/characters/nancy.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="steve" class="checkWithLabel">
							<label for="steve" class="checkbox" style="background-image: url('../images/characters/steve.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="yui" class="checkWithLabel">
							<label for="yui" class="checkbox" style="background-image: url('../images/characters/yui.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="zarina" class="checkWithLabel">
							<label for="zarina" class="checkbox" style="background-image: url('../images/characters/zarina.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="cheryl" class="checkWithLabel">
							<label for="cheryl" class="checkbox" style="background-image: url('../images/characters/cheryl.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="felix" class="checkWithLabel">
							<label for="felix" class="checkbox" style="background-image: url('../images/characters/felix.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="elodie" class="checkWithLabel">
							<label for="elodie" class="checkbox" style="background-image: url('../images/characters/elodie.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="yun" class="checkWithLabel">
							<label for="yun" class="checkbox" style="background-image: url('../images/characters/yun.png');"><img class="imgLabel" src="images/links/checked.png"></label>
					</div>
				</div>
			</div>
		</div>	

		<div class="playerStatsAnimated" id="killersCheckboxes">
			<div class="statsBox ">
				<div class="textBox">
					<div class="checkboxy">
						<h1 class="randH1">Choose characters: </h1>
						<input type="checkbox" id="trapper" class="checkWithLabel">
							<label for="trapper" class="checkbox" style="background-image: url('../images/characters/trapper.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="wraith" class="checkWithLabel">
							<label for="wraith" class="checkbox" style="background-image: url('../images/characters/wraith.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="hillbilly" class="checkWithLabel">
							<label for="hillbilly" class="checkbox" style="background-image: url('../images/characters/hillbilly.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="nurse" class="checkWithLabel">
							<label for="nurse" class="checkbox" style="background-image: url('../images/characters/nurse.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="huntress" class="checkWithLabel">
							<label for="huntress" class="checkbox" style="background-image: url('../images/characters/huntress.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="myers" class="checkWithLabel">
							<label for="myers" class="checkbox" style="background-image: url('../images/characters/myers.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="hag" class="checkWithLabel">
							<label for="hag" class="checkbox" style="background-image: url('../images/characters/hag.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="doctor" class="checkWithLabel">
							<label for="doctor" class="checkbox" style="background-image: url('../images/characters/doctor.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="buba" class="checkWithLabel">
							<label for="buba" class="checkbox" style="background-image: url('../images/characters/buba.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="freddy" class="checkWithLabel">
							<label for="freddy" class="checkbox" style="background-image: url('../images/characters/freddy.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="pig" class="checkWithLabel">
							<label for="pig" class="checkbox" style="background-image: url('../images/characters/pig.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="clown" class="checkWithLabel">
							<label for="clown" class="checkbox" style="background-image: url('../images/characters/clown.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="spirit" class="checkWithLabel">
							<label for="spirit" class="checkbox" style="background-image: url('../images/characters/spirit.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="legion" class="checkWithLabel">
							<label for="legion" class="checkbox" style="background-image: url('../images/characters/legion.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="plaque" class="checkWithLabel">
							<label for="plaque" class="checkbox" style="background-image: url('../images/characters/plaque.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="ghostface" class="checkWithLabel">
							<label for="ghostface" class="checkbox" style="background-image: url('../images/characters/ghostface.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="demogorgon" class="checkWithLabel">
							<label for="demogorgon" class="checkbox" style="background-image: url('../images/characters/demogorgon.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="oni" class="checkWithLabel">
							<label for="oni" class="checkbox" style="background-image: url('../images/characters/oni.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="deathslinger" class="checkWithLabel">
							<label for="deathslinger" class="checkbox" style="background-image: url('../images/characters/deathslinger.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="pyramid" class="checkWithLabel">
							<label for="pyramid" class="checkbox" style="background-image: url('../images/characters/pyramid.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="blight" class="checkWithLabel">
							<label for="blight" class="checkbox" style="background-image: url('../images/characters/blight.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="twins" class="checkWithLabel">
							<label for="twins" class="checkbox" style="background-image: url('../images/characters/twins.png');"><img class="imgLabel" src="images/links/checked.png"></label>
						<input type="checkbox" id="trickster" class="checkWithLabel">
							<label for="trickster" class="checkbox" style="background-image: url('../images/characters/trickster.png');"><img class="imgLabel" src="images/links/checked.png"></label>

					</div>
				</div>
			</div>
		</div>	



	</div>
	
	<!-- FOOTER | LAST SECTION -->
	<?php require_once("views/layouts/footer.php"); ?>
	
	<script src="scripts/script.js"></script>
	<script src="scripts\randomperks.js"></script>
</body>
</html>