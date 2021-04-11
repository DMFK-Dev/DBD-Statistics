<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>FAQ | DBD Statistics</title>
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
	<div style="background-image: url('../images/bg/image4.jpg');" class="banner">
		<div class="bannerText">
			<h1>FAQ</h1>
			<h2>Answers & Questions</h2>
		</div>
	</div>
	<div class="fthr2"></div>
	<div class="container">
	
		<div class="playerStatsAnimated">
			<div style="flex: 1;" class="statsBox">
				
					<details class="questions"><summary style="padding: 10px;">QUESTIONS</summary><div class="fthr2"></div>
						<a href="#q1" class="statName question">What is this website?</a>
						<a href="#q2" class="statName question">Who are you?</a>
						<a href="#q3" class="statName question">Something not working</a>
						<a href="#q4" class="statName question">How to set profile to 'public'?</a>
					</details>

			</div>
			<div style="flex: 3;" class="statsBox">
				<div class="textBox">
					<div class="h1Div"><h1 id="q2">What is this website?</h1></div> 
					<p class="answer"> Playerstats is a page where you can view your statistics from Dead By Daylight. The displayed statistics are always up-to-date.
					<br><br>It's also our project that we created for educational purposes to improve our web skills - create a fully functional 
					website that will be useful for Dead By Daylight players (also for us :) ).
					</p>
					<div class="fthr1"></div>

					<div class="h1Div"><h1 id="q3">Who are you?</h1></div> 
					<p class="answer">We are two students from Poland who love making website - one is responsible for front-end, second just love PHP.
						So we are perfect team to make website like this. We also DBD players - front-ender is of course better, because
						back-ender only counts bloodpoints :D 
						<br><br>But without back-ender, this page would not be created :D ~ back-ender 
						<br><br>I don't agree at all - I created main concept, so if not ME, this page would not be created :D ~ front-ender
					</p>
					<div class="fthr1"></div>
					
					<div class="h1Div"><h1 id="q4">Something not working, stats not showing</h1></div> 
					<p class="answer"> Playerstats to work needs your Steam profile to be PUBLIC. If it's 'private', we can't get any stats from
						Steam API about your profile.
					</p>
					<div class="fthr1"></div>

					<div class="h1Div"><h1 id="q5">How to set profile to 'public'?</h1></div> 
					<p class="answer"> You have to go to your Steam profile and click 'Edit Profile' button:
						<br><img class="instrImg" src="images\instruction\step1.png" >
						<br>
						<br>Then, you have to choose 'Privacy Settings' section:
						<br><img class="instrImg" src="images\instruction\step2.png" >
						<br>
						<br>In this section, change settings 'My basic details', 'My profile' and 'Game details' to public. If it won't help, try
						set every setting to public (just like me).
						<br><img class="instrImg" src="images\instruction\step3.png" >
					</p>
					<div class="fthr1"></div>



					
				</div>
			</div>
		</div>
	
	</div>
	
	<!-- FOOTER | LAST SECTION -->
	<?php require_once("views/layouts/footer.php"); ?>
	
	<script src="scripts/script.js"></script>
</body>
</html>