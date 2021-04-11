<?php

session_start();

$steamApiKey = "********************************";

if(!isset($_POST['playerID'])) {
    echo "Ni ma POSTa\n";
    if(!isset($_COOKIE['playerID'])) {
        echo "Ni ma ciatek\n";
        if(!isset($_SESSION['playerSummaries']['ID'])) {
            echo "Ni ma sesji";
            $playerID = "domrex";
        } else {
            $playerID = $_SESSION['playerSummaries']['ID'];
        }
    } else {
        $playerID = $_COOKIE['playerID'];
    }
} else {
    $playerID = $_POST['playerID'];
}

$gameID = "381210";

// URL Steam API
if(!is_numeric($playerID)) {
    $getPlayerIDUrl = "https://api.steampowered.com/ISteamUser/ResolveVanityURL/v1/?key=$steamApiKey&vanityurl=$playerID";
    $resolveUrl = file_get_contents($getPlayerIDUrl);
    $resolveUrlDecoded = json_decode($resolveUrl);
    $playerID = $resolveUrlDecoded->response->steamid;
}
$statsUrl = "https://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v2/?key=$steamApiKey&steamid=$playerID&appid=$gameID";
$profileUrl = "https://api.steampowered.com/ISteamUser/GetPlayerSummaries/v2/?key=$steamApiKey&steamids=$playerID";
$gameUrl = "https://api.steampowered.com/IPlayerService/GetOwnedGames/v1/?key=$steamApiKey&steamid=$playerID";

// Get stats
$statsJson = file_get_contents($statsUrl);
$statsJsonDecoded = json_decode($statsJson);
$stats = $statsJsonDecoded->playerstats->stats;
$statsArray = array();

$continue = true;
for ($i=0; $continue != false; $i++) { 
    $tempArray = array($stats[$i]->name => $stats[$i]->value);
    $statsArray += $tempArray;

    if(!isset($stats[$i+1])) {
        $continue = false;
    }
}

// Get nick and avatar
$summariesJson = file_get_contents($profileUrl);
$summariesJsonDecoded = json_decode($summariesJson);
$summaries = $summariesJsonDecoded->response->players[0];
$summariesArray = array('Nick' => $summaries->personaname, 'Avatar' => $summaries->avatarfull, 'ID' => $summaries->steamid);


// Get playtime
$gameJson = file_get_contents($gameUrl);
$gameJsonDecoded = json_decode($gameJson);
$game = $gameJsonDecoded->response->games;
$gamePlayTime = 0;

$continue = true;
for ($i=0; $continue != false; $i++) {
    if($game[$i]->appid == strval($gameID)) {
        $gamePlayTime = intval($game[$i]->playtime_forever)/60;
    }

    if(!isset($game[$i+1])) {
        $continue = false;
    }
}

// Set coockies and session
$_SESSION['playerStats'] = $statsArray;
$_SESSION['playerSummaries'] = $summariesArray;
$_SESSION['playerPlaytime'] = $gamePlayTime;

if(isset($_COOKIE['playerID'])) {
    unset($_COOKIE['playerID']); 
    setcookie('playerID', null, time() - 132134, '/'); 
}
setcookie('playerID', $playerID, time() + 2592000, '/');

header("Location: /stats");
