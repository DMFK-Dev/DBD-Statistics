/* 'HOME' TIMERS  */
function timeToReset(){
	var dates = [new Date("14 April 2021 0:00").getTime(), new Date("13 April 2021 17:00").getTime(), new Date("21 April 2021 16:00").getTime()];
	var timePlaces = document.getElementsByClassName("time");

	
	var timersReset = setInterval(function() {

		timezone = new Date().getTimezoneOffset() * (-60000);
		var todayyy = Date.now();

		for(var i = 0; i < 3; i++) {

			var distance = dates[i] - todayyy + timezone;
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			if (hours < 10) {
				hours = "0" + hours
			}
			if (minutes < 10) {
				minutes = "0" + minutes
			}
			if (seconds < 10) {
				seconds = "0" + seconds
			}
			
			timePlaces[i].innerHTML = days + "d " + hours + ":" + minutes + ":" + seconds;
				}
	}, 1000);
}

/* MENU FUNCTIONS */
var menu = document.getElementById("menu");
var menuIcon = document.getElementById("menuIcon");
var closeBtn = document.getElementById("closeBtn");

menuIcon.addEventListener("click", function(){
    if(window.innerWidth < 600){
        menu.style.width = "100%" ;
    }
    else{
        menu.style.width = "65%";
        menu.style.borderRight = "2px solid #000"
    }
})
closeBtn.addEventListener("click", function(){
    menu.style.width = "0%" ;
})


var dropdownBtn = document.getElementById("dropdownBtn");
var dropdownMenu = document.getElementById("dropdown");
var dropdownOpen = false;
        
dropdownBtn.addEventListener("click", function(){
    if(dropdownOpen == false){
        dropdownMenu.style.display = "block";
        dropdownOpen = true;
        return 0;
    }
    if(dropdownOpen == true){
        dropdownMenu.style.display = "none";
        dropdownOpen = false;
    }
}) 

/* CLOSE PRIVACY */
const privacy = document.getElementById("privacyDiv");
const privacyBtn = document.getElementById("privacyBtn");

privacyBtn.addEventListener("click", () => {
    privacy.style.display = "none";
})