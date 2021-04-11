/* 'DRAW BANNER' FUNCTION */
function drawBanner(){
    var playerInfo = document.getElementById("playerInfo");
    var rand = Math.floor(Math.random()* 8) + 1;
    playerInfo.style.backgroundImage = "url('../images/bg/image" + rand + ".jpg')";
    if(rand == 8 || rand == 3){
        playerInfo.style.backgroundPositionY = "15%";
    }
}

/* SURV OR KILLER MAIN */
function skmain(){
    if(gens > sacrificed){
        document.getElementById("playerSpec").innerHTML = "Survivor main";
    }
    else{
        document.getElementById("playerSpec").innerHTML = "Killer main";
    }
}

/* 'LOAD STAT' FUNCTION */
var time = 10
function loadStat(where, amount, add=""){
    let i = 0;
    var statLoad = setInterval(function(){
            where.innerHTML = i + add;
            var speed = Math.ceil(amount / 100); // 100 = 1s
            if(i>amount){
                clearInterval(statLoad);
                where.innerHTML = amount + add;
            }
            i=i+speed;
    }, time);
}

/* OPENS FIRST 'DETAILS' TAG OF "SURV STATS" AND "KILLER STATS" */
function openDetails(){
    if(window.innerWidth > 767){
        document.getElementById("details1").setAttribute("open", "true");
        document.getElementById("details2").setAttribute("open", "true");
    }
}

/* 'LOAD RANK' FUNCTION */
function ranks(){
    if (survRank < 3) {
        survRankPlace.innerHTML = "<br>20";
    } else if(survRank >= 3 && survRank < 6) {
        survRankPlace.innerHTML = "<br>19";
    } else if(survRank >= 6 && survRank < 10) {
        survRankPlace.innerHTML = "<br>18";
    } else if(survRank >= 10 && survRank < 14) {
        survRankPlace.innerHTML = "<br>17";
    } else if(survRank >= 14 && survRank < 18) {
        survRankPlace.innerHTML = "<br>16";
        survRankPlace.style.color = "#beba49";
        survRankImage.style.backgroundImage = "url('../images/ranks/yellowSurv.png')"
    } else if(survRank >= 18 && survRank < 22) {
        survRankPlace.innerHTML = "<br>15";
        survRankPlace.style.color = "#beba49";
        survRankImage.style.backgroundImage = "url('../images/ranks/yellowSurv.png')"
    } else if(survRank >= 22 && survRank < 26) {
        survRankPlace.innerHTML = "<br>14";
        survRankPlace.style.color = "#beba49";
        survRankImage.style.backgroundImage = "url('../images/ranks/yellowSurv.png')"
    } else if(survRank >= 26 && survRank < 30) {
        survRankPlace.innerHTML = "<br>13";
        survRankPlace.style.color = "#beba49";
        survRankImage.style.backgroundImage = "url('../images/ranks/yellowSurv.png')"
    } else if(survRank >= 30 && survRank < 35) {
        survRankPlace.innerHTML = "<br>12";
        survRankPlace.style.color = "#43af0a";
        survRankImage.style.backgroundImage = "url('../images/ranks/greenSurv.png')"
    } else if(survRank >= 35 && survRank < 40) {
        survRankPlace.innerHTML = "<br>11";
        survRankPlace.style.color = "#43af0a";
        survRankImage.style.backgroundImage = "url('../images/ranks/greenSurv.png')"
    } else if(survRank >= 40 && survRank < 45) {
        survRankPlace.innerHTML = "<br>10";
        survRankPlace.style.color = "#43af0a";
        survRankImage.style.backgroundImage = "url('../images/ranks/greenSurv.png')"
    } else if(survRank >= 45 && survRank < 50) {
        survRankPlace.innerHTML = "<br>9";
        survRankPlace.style.color = "#43af0a";
        survRankImage.style.backgroundImage = "url('../images/ranks/greenSurv.png')"
    } else if(survRank >= 50 && survRank < 55) {
        survRankPlace.innerHTML = "<br>8";
        survRankPlace.style.color = "#b05dc3";
        survRankImage.style.backgroundImage = "url('../images/ranks/purpleSurv.png')"
    } else if(survRank >= 55 && survRank < 60) {
        survRankPlace.innerHTML = "<br>7";
        survRankPlace.style.color = "#b05dc3";
        survRankImage.style.backgroundImage = "url('../images/ranks/purpleSurv.png')"
    } else if(survRank >= 60 && survRank < 65) {
        survRankPlace.innerHTML = "<br>6";
        survRankPlace.style.color = "#b05dc3";
        survRankImage.style.backgroundImage = "url('../images/ranks/purpleSurv.png')"
    } else if(survRank >= 65 && survRank < 70) {
        survRankPlace.innerHTML = "<br>5";
        survRankPlace.style.color = "#b05dc3";
        survRankImage.style.backgroundImage = "url('../images/ranks/purpleSurv.png')"
    } else if(survRank >= 70 && survRank < 75) {
        survRankPlace.innerHTML = "<br>4";
        survRankPlace.style.color = "#e50806";
        survRankImage.style.backgroundImage = "url('../images/ranks/redSurv.png')"
    } else if(survRank >= 75 && survRank < 80) {
        survRankPlace.innerHTML = "<br>3";
        survRankPlace.style.color = "#e50806";
        survRankImage.style.backgroundImage = "url('../images/ranks/redSurv.png')"
    } else if(survRank >= 80 && survRank < 85) {
        survRankPlace.innerHTML = "<br>2";
        survRankPlace.style.color = "#e50806";
        survRankImage.style.backgroundImage = "url('../images/ranks/redSurv.png')"
    } else {
        survRankPlace.innerHTML = "<br>1";
        survRankPlace.style.color = "#e50806";
        survRankImage.style.backgroundImage = "url('../images/ranks/firstSurv.png')"
    }
    if (killerRank < 3) {
        killerRankPlace.innerHTML = "<br>20";
    } else if(killerRank >= 3 && killerRank < 6) {
        killerRankPlace.innerHTML = "<br>19";
    } else if(killerRank >= 6 && killerRank < 10) {
        killerRankPlace.innerHTML = "<br>18";
    } else if(killerRank >= 10 && killerRank < 14) {
        killerRankPlace.innerHTML = "<br>17";
    } else if(killerRank >= 14 && killerRank < 18) {
        killerRankPlace.innerHTML = "<br>16";
        killerRankPlace.style.color = "#beba49";
        killerRankImage.style.backgroundImage = "url('../images/ranks/yellowKiller.png')"
    } else if(killerRank >= 18 && killerRank < 22) {
        killerRankPlace.innerHTML = "<br>15";
        killerRankPlace.style.color = "#beba49";
        killerRankImage.style.backgroundImage = "url('../images/ranks/yellowKiller.png')"
    } else if(killerRank >= 22 && killerRank < 26) {
        killerRankPlace.innerHTML = "<br>14";
        killerRankPlace.style.color = "#beba49";
        killerRankImage.style.backgroundImage = "url('../images/ranks/yellowKiller.png')"
    } else if(killerRank >= 26 && killerRank < 30) {
        killerRankPlace.innerHTML = "<br>13";
        killerRankPlace.style.color = "#beba49";
        killerRankImage.style.backgroundImage = "url('../images/ranks/yellowKiller.png')"
    } else if(killerRank >= 30 && killerRank < 35) {
        killerRankPlace.innerHTML = "<br>12";
        killerRankPlace.style.color = "#43af0a";
        killerRankImage.style.backgroundImage = "url('../images/ranks/greenKiller.png')"
    } else if(killerRank >= 35 && killerRank < 40) {
        killerRankPlace.innerHTML = "<br>11";
        killerRankPlace.style.color = "#43af0a";
        killerRankImage.style.backgroundImage = "url('../images/ranks/greenKiller.png')"
    } else if(killerRank >= 40 && killerRank < 45) {
        killerRankPlace.innerHTML = "<br>10";
        killerRankPlace.style.color = "#43af0a";
        killerRankImage.style.backgroundImage = "url('../images/ranks/greenKiller.png')"
    } else if(killerRank >= 45 && killerRank < 50) {
        killerRankPlace.innerHTML = "<br>9";
        killerRankPlace.style.color = "#43af0a";
        killerRankImage.style.backgroundImage = "url('../images/ranks/greenKiller.png')"
    } else if(killerRank >= 50 && killerRank < 55) {
        killerRankPlace.innerHTML = "<br>8";
        killerRankPlace.style.color = "#b05dc3";
        killerRankImage.style.backgroundImage = "url('../images/ranks/purpleKiller.png')"
    } else if(killerRank >= 55 && killerRank < 60) {
        killerRankPlace.innerHTML = "<br>7";
        killerRankPlace.style.color = "#b05dc3";
        killerRankImage.style.backgroundImage = "url('../images/ranks/purpleKiller.png')"
    } else if(killerRank >= 60 && killerRank < 65) {
        killerRankPlace.innerHTML = "<br>6";
        killerRankPlace.style.color = "#b05dc3";
        killerRankImage.style.backgroundImage = "url('../images/ranks/purpleKiller.png')"
    } else if(killerRank >= 65 && killerRank < 70) {
        killerRankPlace.innerHTML = "<br>5";
        killerRankPlace.style.color = "#b05dc3";
        killerRankImage.style.backgroundImage = "url('../images/ranks/purpleKiller.png')"
    } else if(killerRank >= 70 && killerRank < 75) {
        killerRankPlace.innerHTML = "<br>4";
        killerRankPlace.style.color = "#e50806";
        killerRankImage.style.backgroundImage = "url('../images/ranks/redKiller.png')"
    } else if(killerRank >= 75 && killerRank < 80) {
        killerRankPlace.innerHTML = "<br>3";
        killerRankPlace.style.color = "#e50806";
        killerRankImage.style.backgroundImage = "url('../images/ranks/redKiller.png')"
    } else if(killerRank >= 80 && killerRank < 85) {
        killerRankPlace.innerHTML = "<br>2";
        killerRankPlace.style.color = "#e50806";
        killerRankImage.style.backgroundImage = "url('../images/ranks/redKiller.png')"
    } else {
        killerRankPlace.innerHTML = "<br>1";
        killerRankPlace.style.color = "#e50806";
        killerRankImage.style.backgroundImage = "url('../images/ranks/firstKiller.png')"
    }
}