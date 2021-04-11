<?php 

if(isset($_COOKIE['privacyAccept'])) {
	echo "<div class='privacyDiv' id='privacyDiv' style='display: none;'>";
} else {
	echo "<div class='privacyDiv' id='privacyDiv'>";
}

?>
	<div class="privacy" id="privacy">
		<div class="fthr2"></div>
		<h1> This website uses Cookie for better working. <a href="/privacypolicy">[Read More]</a></h1>
		<button id="privacyBtn" onclick="window.location.href='/privacycookie'">Accept</button>
	</div>
</div>