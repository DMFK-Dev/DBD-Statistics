<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Privacy Policy | DBD Statistics</title>
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

	<!-- HOME PAGE -->
	<div style="background-image: url('../images/bg/image6.jpg');" class="banner">
		<div class="bannerText">
			<h1>Privacy Policy</h1>
			<h2>Our Privacy Policy</h2>
		</div>
	</div>
	<div class="fthr2"></div>
	<div class="container">
	
		<div class="playerStatsAnimated">
			<div class="statsBox">
				<div class="textBox">
						<!-- przyklad:
						<div class="h1Div"><h1> NAGLOWEK </h1></div>
						<p class="answer">
							TRESC
						</p>
						-->

						<div class="h1Div"><h1>Privacy Policy for DBD Statistics</h1></div>
						<p class="answer">
						At DBD Statistics, accessible from dbd-statistics.ct8.pl, one of our main priorities is the privacy of 
						our visitors. This Privacy Policy document contains types of information that is collected and recorded by DBD Statistics 
						and how we use it. <br>
						If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.
						This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the 
						information that they shared and/or collect in DBD Statistics. This policy is not applicable to any information collected 
						offline or via channels other than this website. <br>
						</p>

						<div class="h1Div"><h1>Consent</h1></div>
						<p class="answer">
						By using our website, you hereby consent to our Privacy Policy and agree to its terms.
						Information we collect:
						User SteamID,
						If you contact us directly, we may receive additional information about your Steam account.
						</p>

						<div class="h1Div"><h1>How we use your information</h1></div>
						<p class="answer">
						We use the information we collect in two ways: Obtaining statistics on your Steam account in Dead By Daylight and responding 
						to your application via the contact form.
						DBD Statistics follows a standard procedure of using log files. These files log visitors when they visit websites. 
						All hosting companies do this and a part of hosting services' analytics. The information collected by log files include 
						internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages,
						 and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of 
						 the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering 
						 demographic information.
						</p>

						<div class="h1Div"><h1>Cookies and Web Beacons</h1></div>
						<p class="answer">
						Like any other website, DBD Statistics uses 'cookies'. These cookies are used to store information including visitors' 
						preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' 
						experience by customizing our web page content based on visitors' browser type and/or other information. We use a cookie to 
						save the SteamID of the last searched user on the "Stats" subpage and to record cookie consent.
						</p>

						<div class="h1Div"><h1>Third Party Privacy Policies</h1></div>
						<p class="answer">
						DBD Statistics's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult
						 the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their 
						 practices and instructions about how to opt-out of certain options.
						You can choose to disable cookies through your individual browser options. To know more detailed information about cookie 
						management with specific web browsers, it can be found at the browsers' respective websites. 
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