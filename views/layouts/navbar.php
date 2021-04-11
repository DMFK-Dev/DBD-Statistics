<div class="navbar">
    <!-- MOBILE MENU -->
    <img class="menuIcon" id="menuIcon" src="images/links/menu.png">
    <h1 class="logo"> DBD Statistics</h1>
    <div class="menu" id="menu">
        <div class="menuElements">
            <a class="closeBtn" id="closeBtn">&times;</a>
            <form action="phpscripts/search.php" method="POST">
                <input type="search" class="search-player" id="search-player" name="playerID" placeholder="Search for player">
            </form>
            <a href="/"><img class="menuLinksImg" src="images/links/home.png">&nbsp&nbsp       HOME </a>
            <a href="/stats"><img class="menuLinksImg" src="images/links/wykres.png">&nbsp&nbsp       STATS </a>				
            <a href="/randomperks"><img class="menuLinksImg" src="images/links/randperk.png">&nbsp&nbsp       RANDOM PERKS </a>				
            <a href="/faq"><img class="menuLinksImg" src="images/links/faq.png">&nbsp&nbsp       FAQ </a>				
            <a href="/contact"><img class="menuLinksImg" src="images/links/contact.png">&nbsp&nbsp       CONTACT US </a>
            <a href="/privacypolicy"><img class="menuLinksImg" src="images/links/privacy.png">&nbsp&nbsp       PRIVACY POLICY </a>
        </div>
        <div class="tfoot">
            Copyright © 2021
        </div>
    </div>

    <!-- DESKTOP MENU -->
    <div class="desktopMenu">
        <div class="logoDesktop flex1">
            <h1>DBD Statistics</h1>
        </div>
        <div class="search flex3">
            <form action="phpscripts/search.php" method="POST">
                <input type="text" class="search-player" id="search-player" name="playerID" placeholder="Search for player, enter Steam player ID">
            </form>
        </div>
        <div class="links flex1">
            <a href="/"><img class="menuLinksImg" src="images/links/home.png"></a>
            <a href="/stats"><img class="menuLinksImg" src="images/links/wykres.png"></a>	
            	
            <a id="dropdownBtn"><img class="menuLinksImg" src="images/links/menuArrow.png"></a>	
            
        </div>
        <div id="dropdown" class="dropdown">
            <a href="/randomperks">RANDOM<br>PERKS</a>
            <a href="/faq">FAQ</a>
            <a href="/contact">CONTACT</a>
            <a href="/privacypolicy">PRIVACY<br>POLICY</a>
        </div>
    </div>	
</div>