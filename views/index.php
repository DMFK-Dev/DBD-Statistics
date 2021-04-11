<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home | DBD Statistics</title>
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
	<div class="banner">
		<div class="bannerText">
			<h1>Death is not escape...</h1>
			<h2>but statistics yes!</h2>
		</div>
	</div>
	<div class="fthr2"></div>
	<div class="container">
	
		<div class="fthr2"></div>
		<details><summary>TIMES: </summary>
		<div class="textBox ">
			<div style="margin: 0;"class="flexBox">
				<div class="shrine">
					<div class="kek">
						<h1 class="time">00:00:00</h1>
						<h1 class="statName">NEW SHRINE</h1>
					</div>
				</div>
				<div class="reset">
					<div class="kek">
						<h1 class="time" id="rankResetTime">00:00:00</h1>
						<h1 class="statName">RANK RESET</h1>
					</div>
				</div>
				<div class="rift">
					<div class="kek">
						<h1 class="time">00:00:00</h1>
						<h1 class="statName">RIFT CLOSE</h1>
					</div>
				</div>
			</div>
		</div>
		</details><div class="fthr2"></div>

		<div class="playerStatsAnimated">
			<div class="flex2 statsBox ">
				<div class="textBox">
					<div class="h1Div"><h1>Welcome to our website!</h1></div> 
					<p>We love the Dead By Daylight as much as you do, so we've created a game statistics page for you. 
					By entering SteamID in the search engine above, you can search for stats for any player who has a public profile. Enjoy!
					<br><br><br><br>
					</p>
					
					<div class="h1Div"><h1>Update: 1.0</h1></div> 
					<p>
						Finally! The website is now available!
						<br><br>Implemented features:
						<ul class="ulList">
							<li>STATS - you can check your or your teammates in-game statistics!</li>
							<li>FAQ - something not workig? Look for your problem in FAQ!</li>
							<li>CONTACT - you checked FAQ and still have any question? Contact us!</li>
							<li>RANDOM PERKS - are you bored playing Dead By Daylight with the same build for hundreds hours?
								'Random Perks' will let you draw perks to play - challenge it!
							</li>
						</ul> 				
					</p>
				</div>
			</div>
				<div class="secondMenu">
					<a href="/stats"><img src="images/links/wykres.png"> STATISTICS</a>
					<div class="fthr1"></div>

					<a href="/randomperks"><img src="images/links/randperk.png"> RANDOM PERKS</a>
					<div class="fthr1"></div>

					<a href="/faq"><img src="images/links/faq.png"> FAST Q&A</a>
					<div class="fthr1"></div>
					
					<a href="/contact"><img src="images/links/contact.png"> CONTACT</a>
					<div class="fthr1"></div>
					
					<a href="/privacypolicy"><img src="images/links/contact.png"> PRIVACY POLICY</a>
				</div>
		</div>	
	</div>
	
	<!-- FOOTER | LAST SECTION -->
	<?php require_once("views/layouts/footer.php"); ?>
	
	<script src="scripts/script.js"></script>
	<script>
	if(window.innerWidth > 767){
		document.querySelector("details").setAttribute("open", "true");
	}
	// Timer do resetu rang itp.
	timeToReset();
	</script>
</body>
</html>