<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact | DBD Statistics</title>
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
	<div style="background-image: url('../images/bg/image2.jpg');" class="banner">
		<div class="bannerText">
			<h1>Contact Us</h1>
			<h2>If you have any questions!</h2>
		</div>
	</div>
	<div class="fthr2"></div>
	<div class="container">
	
		<div class="playerStatsAnimated">
			<div style="flex: 1;" class="statsBox">
				
				<div class="profDiv">
					<h1 id="formTitle" class="formTitle">Authors</h1>
					<ul>
						<li><div class="flexbox"><img class="prof" src="/images/domrex.jpg"><a>Dominik Misiek</a></div><div class="fthr1"></div></li>
						<li><div class="flexbox"><img class="contactImg" src="images/links/contact.png"><a>dominikmisiek02@gmail.com</a></div></li>
						<li><div class="flexbox"><img class="contactImg" src="images/links/github.png"><a href="https://github.com/dmisiek" target="_blank">github.com/dmisiek</a></div></li>
						<li><div class="flexbox"><img class="contactImg" src="images/links/steam.png"><a href="https://steamcommunity.com/id/domrex" target="_blank">steamcommunity.com/id/domrex</a></div></li>
					</ul>					
				</div>
				<div class="profDiv">
					<ul>
						<li><div class="flexbox"><img class="prof" src="/images/sasha.jpg"><a>Filip Krzyżanowski</a></div><div class="fthr1"></div></li>
						<li><div class="flexbox"><img class="contactImg" src="images/links/contact.png"><a>filip.krzyzanowski@protonmail.com</a></div></li>
						<li><div class="flexbox"><img class="contactImg" src="images/links/github.png"><a href="https://github.com/fkrzski" target="_blank">github.com/fkrzyski</a></div></li>
						<li><div class="flexbox"><img class="contactImg" src="images/links/steam.png"><a href="https://steamcommunity.com/id/saaashaaa2518" target="_blank">steamcommunity.com/id/saaashaaa2518</a></div></li>
					</ul>					
				</div>
			</div>
			<div style="flex: 2;" class="statsBox">
				<div class="textBox">
					<div class="formDiv">
							<h1 id="formTitle" class="formTitle">Contact Form</h1>
							<form action="/sendmail" method="POST">
          				     	<input name="name" type="text" class="contactInput" placeholder="Enter your name here " required>
          				     	<input name="email" type="email" class="contactInput" placeholder="Enter your email here" required>
          				     	<input name="topic" type="text" class="contactInput" placeholder="Enter topic here " required>
          				     	<textarea name="body" class="contactInput"  placeholder="Enter your message here ... "></textarea>
								<div class="flexbox"><button id="sendBtn" class="formBtn">Send</button><img id="sendIcon" class="sendIcon" src="images/links/done.png"></div>
								<?php
									if(isset($_SESSION['emailSend'])) {
										echo "<a style='color: green'>".$_SESSION['emailSend']."</a>";
									}
								?>
          				 	</form>
						</div>					
					</div>
				</div>
			</div>
		</div>
	
	</div>
	
	<!-- FOOTER | LAST SECTION -->
	<?php require_once("views/layouts/footer.php"); ?>
	
	<script src="scripts/script.js"></script>
	<script>
		/* POTWIERDZENIE WYSŁANIA, ALE NARAZIE COS NIE DZIALA  
		const sendBtn = document.getElementById("sendBtn");
		sendBtn.addEventListener("click", () => {
			document.getElementById("sendIcon").style.opacity = "1" ;
		}) */
	</script>
</body>
</html>