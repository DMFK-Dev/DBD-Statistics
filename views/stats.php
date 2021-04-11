<?php
	session_start();
	
	if(!isset($_SESSION['playerSummaries']) || !isset($_COOKIE['playerID'])) {
		header('Location: /phpscripts/search.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['playerSummaries']['Nick'] ?> | DBD Statistics</title>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="styles/statspage.css">
	<link type="text/css" rel="stylesheet" href="styles/layouts.css">
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
	<?php require_once("layouts/navbar.php"); ?>
	<!-- PRIVACY POLICY -->
	<?php require_once("views/layouts/privacyinfo.php"); ?> 

	<div class="container">
		<!-- PLAYER INFO | FIRST SECTION -->
		<div class="playerInfo" id="playerInfo">
			<div class="flex1">
				<?php
					echo "<img src='".$_SESSION['playerSummaries']['Avatar']."' class='playerAvatar'>";
				?>
			</div>
			<div class="flex2">
				<div class="playerInfoBox">
					<h1 class="playerName"><?php echo $_SESSION['playerSummaries']['Nick'] ?></h1>
					<p class="playerSpec" id="playerSpec">Survivor Main</p>
				</div>
			</div>
		</div>
		<!-- PLAYER STATS | SECOND SECTION -->
		
		<div class="playerStatsAnimated">
			<div style="flex: 2;" class="statsBox">
				<div class="singleStatBox">
					<div class="flex1">
						<img src="images/bloodpoints.png" class="statImg">
					</div>
					<div class="flex-thisbox yAlignParent">
						<div class="yAlignChild">
							<h1 class="statNumber" id="bloodpointsPlace">10000000</h1>
							<h1 class="statName">BP Earned</h1>	
						</div>			
					</div>
				</div>
			</div>
			<div class="statsBox">
				<div class="fakeImg"></div>
				<h1 class="statNumber" id="playtimePlace">0h</h1>
				<h1 class="statName">Playtime</h1>
			</div>
		</div>

		<div class="sectionHeader">
			<h1>SURVIVOR STATS</h1>
			<hr>
		</div>
		<div class="playerStatsAnimated">
			<div class="statsBox">
				<img src="images/perfectSurv.png" class="statImg">
				<h1 class="statNumber" id="survPerfectGamesPlace"><?php if(isset($_SESSION['playerStats']['DBD_CamperMaxScoreByCategory'])){ echo $_SESSION['playerStats']['DBD_CamperMaxScoreByCategory']; } else { echo 0; } ?></h1>
				<h1 class="statName">Perfect Games</h1>
			</div>
			<div class="statsBox">
					<div class="rankSurv" id="rankSurv">
						<h1 class="rankValue" id="rankSurvValue">0</h1>
					</div>
					<h1 class="statName">Survivor Rank</h1>
			</div>			
			<div class="statsBox">
				<img src="images/loadoutSurv.png" class="statImg">
				<h1 class="statNumber" id="fullLoadoutSurvPlace"><?php if(isset($_SESSION['playerStats']['DBD_CamperFullLoadout'])){ echo $_SESSION['playerStats']['DBD_CamperFullLoadout']; } else { echo 0; } ?></h1>
				<h1 class="statName">Full Loadout Games</h1>
			</div>
		</div>	

		<!-- CATEGORY OF STATS -->
		<div class="fthr2"></div>
		<details id="details1" ><summary>SURVIVAL</summary><div class="fthr2"></div>
			<div class="playerStatsAnimated">
				<div class="statsBox">
					<img src="images/escape.png" class="statImg">
					<h1 class="statNumber" id="escapedPlace"><?php if(isset($_SESSION['playerStats']['DBD_Escape'])){ echo $_SESSION['playerStats']['DBD_Escape']; } else { echo 0; } ?></h1>
					<h1 class="statName">Trial Escaped</h1>
				</div>
				<div class="statsBox">
					<img src="images/hatch.png" class="statImg">
					<h1 class="statNumber" id="hatchEscPlace"><?php if(isset($_SESSION['playerStats']['DBD_EscapeThroughHatch'])){ echo $_SESSION['playerStats']['DBD_EscapeThroughHatch']; } else { echo 0; } ?></h1>
					<h1 class="statName">Hatch Escape</h1>
				</div>
				
				<div class="statsBox">
					<img src="images/escape.png" class="statImg">
					<h1 class="statNumber" id="gatesOpenedPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC7_Camper_Stat2'])){ echo $_SESSION['playerStats']['DBD_DLC7_Camper_Stat2']; } else { echo 0; } ?></h1>
					<h1 class="statName">Gates Opened</h1>
				</div>
			</div>
				
				<!-- 'WATCH MORE' SECTION OF THAT CATEGORY-->
				<div class="fthr"></div>
				<div class="tableDiv">
					<table>
						<tr>
							<th >Crawling escape</th>
							<th id="crawlEscPlace"><?php if(isset($_SESSION['playerStats']['DBD_EscapeKO'])){ echo $_SESSION['playerStats']['DBD_EscapeKO']; } else { echo 0; } ?></th>
						</tr>						
						<tr>
							<th >Crawling hatch escape</th>
							<th id="crawlHatchEscPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter12_Camper_Stat2'])){ echo $_SESSION['playerStats']['DBD_Chapter12_Camper_Stat2']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th >Escape with item from match</th>
							<th id="newItemEscPlace"><?php if(isset($_SESSION['playerStats']['DBD_CamperNewItem'])){ echo $_SESSION['playerStats']['DBD_CamperNewItem']; } else { echo 0; } ?></th>
						</tr>
						<tr> 
							<th >Escape with someone's item</th>
							<th id="someoneItemEscPlace"><?php if(isset($_SESSION['playerStats']['DBD_CamperEscapeWithItemFrom'])){ echo $_SESSION['playerStats']['DBD_CamperEscapeWithItemFrom']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th >Escape after unhooked self</th>
							<th id="selfUnhookEscPlace"><?php if(isset($_SESSION['playerStats']['DBD_HookedAndEscape'])){ echo $_SESSION['playerStats']['DBD_HookedAndEscape']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th >Escape from being knocked down once</th>
							<th id="selfUnhookEscPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC8_Camper_Stat1'])){ echo $_SESSION['playerStats']['DBD_DLC8_Camper_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th >Escape after being injured for half a match</th>
							<th id="selfUnhookEscPlace"><?php if(isset($_SESSION['playerStats']['DBD_Camper9_Stat2'])){ echo $_SESSION['playerStats']['DBD_Camper9_Stat2']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th >Escape followers obsessed without losing blood</th>
							<th id="selfUnhookEscPlace"><?php if(isset($_SESSION['playerStats']['DBD_EscapeNoBlood_Obsession'])){ echo $_SESSION['playerStats']['DBD_EscapeNoBlood_Obsession']; } else { echo 0; } ?></th>
						</tr>
					</table>
				</div>
		</details>

		<!-- CATEGORY OF STATS -->
		<div class="fthr2"></div>
		<details><summary>OBJECTIVE</summary><div class="fthr2"></div>
			<div class="playerStatsAnimated">
				<div class="statsBox">
					<img src="images/gen.png" class="statImg">
					<h1 class="statNumber" id="gensPlace"><?php if(isset($_SESSION['playerStats']['DBD_GeneratorPct_float'])){ echo intval($_SESSION['playerStats']['DBD_GeneratorPct_float']); } else { echo 0; } ?></h1>
					<h1 class="statName">Gens Repaired</h1>
				</div>
				<div class="statsBox">
					<img src="images/skillcheck.png" class="statImg">
					<h1 class="statNumber" id="skillChecksPlace"><?php if(isset($_SESSION['playerStats']['DBD_SkillCheckSuccess'])){ echo $_SESSION['playerStats']['DBD_SkillCheckSuccess']; } else { echo 0; } ?></h1>
					<h1 class="statName">Skill Checks</h1>
				</div>
				<div class="statsBox">
					<img src="images/chest.png" class="statImg">
					<h1 class="statNumber" id="chestPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC7_Camper_Stat1'])){ echo $_SESSION['playerStats']['DBD_DLC7_Camper_Stat1']; } else { echo 0; } ?></h1>
					<h1 class="statName">Chest Searched</h1>
				</div>
				
			</div>
			
			<!-- 'WATCH MORE' SECTION OF THAT CATEGORY-->
			<div class="fthr"></div>
				<div class="tableDiv">
					<table>
						<tr>
							<th >Kicked gens repaired</th>
							<th id="kickGensPlace"><?php if(isset($_SESSION['playerStats']['DBD_Camper8_Stat1'])){ echo $_SESSION['playerStats']['DBD_Camper8_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Basement chest searched</th>
							<th id="bsmtChestPlace"><?php if(isset($_SESSION['playerStats']['DBD_Event1_Stat2'])){ echo $_SESSION['playerStats']['DBD_Event1_Stat2']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Items fully used</th>
							<th id="usedItemsPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter17_Camper_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter17_Camper_Stat1']; } else { echo 0; } ?></th>
						</tr>
					</table>
				</div>
		</details>

		<!-- CATEGORY OF STATS -->
		<div class="fthr2"></div>
		<details><summary>ALTRUISM</summary><div class="fthr2"></div>
			<div class="playerStatsAnimated">
				<div class="statsBox">
					<img src="images/healed.png" class="statImg">
					<h1 class="statNumber" id="survHealedPlace"><?php if(isset($_SESSION['playerStats']['DBD_HealPct_float'])){ echo intval($_SESSION['playerStats']['DBD_HealPct_float']); } else { echo 0; } ?></h1>
					<h1 class="statName">Survivor Healed</h1>
				</div>
				<div class="statsBox">
					<img src="images/protHits.png" class="statImg">
					<h1 class="statNumber" id="protHitPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter14_Camper_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter14_Camper_Stat1']; } else { echo 0; } ?></h1>
					<h1 class="statName">Protection Hits</h1>
				</div>
				<div class="statsBox">
					<img src="images/wiggled.png" class="statImg">
					<h1 class="statNumber" id="wiggledPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter12_Camper_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter12_Camper_Stat1']; } else { echo 0; } ?></h1>
					<h1 class="statName">Wiggled</h1>
				</div>
			</div>

			<!-- 'WATCH MORE' SECTION OF THAT CATEGORY-->
			<div class="fthr"></div>
				<div class="tableDiv">
					<table>
						<tr>
							<th >Survivors healed with Exit Gates opened</th>
							<th id="survPostExitHealedPlace"><?php if(isset($_SESSION['playerStats']['DBD_UnhookOrHeal_PostExit'])){ echo $_SESSION['playerStats']['DBD_UnhookOrHeal_PostExit']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th >Obsession healed</th>
							<th id="obsessionHealedPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter16_Camper_Stat1_float'])){ echo intval($_SESSION['playerStats']['DBD_Chapter16_Camper_Stat1_float']); } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Survs healed before 3rd hook</th>
							<th id="thirdHookHealPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter15_Camper_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter15_Camper_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th >Pallet saves</th>
							<th id="palletSavesPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter18_Camper_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter18_Camper_Stat1']; } else { echo 0; } ?></th>
						</tr>
					</table>
				</div>
		</details>

		<!-- CATEGORY OF STATS -->
		<div class="fthr2"></div>
		<details><summary>BOLDNESS</summary><div class="fthr2"></div>
			<div class="playerStatsAnimated">
				<div class="statsBox">
					<img src="images/hex.png" class="statImg">
					<h1 class="statNumber" id="hexClensedPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC3_Camper_Stat1'])){ echo $_SESSION['playerStats']['DBD_DLC3_Camper_Stat1']; } else { echo 0; } ?></h1>
					<h1 class="statName">Hex Totems Cleansed</h1>
				</div>
				<div class="statsBox">
					<img src="images/vault.png" class="statImg">
					<h1 class="statNumber" id="chaseVaultPlace"><?php if(isset($_SESSION['playerStats']['DBD_Camper8_Stat2'])){ echo $_SESSION['playerStats']['DBD_Camper8_Stat2']; } else { echo 0; } ?></h1>
					<h1 class="statName">Vault During Chase</h1>
				</div>				
				<div class="statsBox">
					<img src="images/saboteur.png" class="statImg">
					<h1 class="statNumber" id="sabotageHooksPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter10_Camper_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter10_Camper_Stat1']; } else { echo 0; } ?></h1>
					<h1 class="statName">Hook Sabotaged</h1>
				</div>
			</div>
		</details>
		

		<div class="sectionHeader">
			<h1>KILLER STATS</h1>
			<hr>
		</div>

		<div class="playerStatsAnimated">
			<div class="statsBox">
				<img src="images/perfectKiller.png" class="statImg">
				<h1 class="statNumber" id="perfectGamesPlace"><?php if(isset($_SESSION['playerStats']['DBD_SlasherMaxScoreByCategory'])){ echo $_SESSION['playerStats']['DBD_SlasherMaxScoreByCategory']; } else { echo 0; } ?></h1>
				<h1 class="statName">Perfect Games</h1>
			</div>
			<div class="statsBox">
				<div class="rankKiller" id="rankKiller">
					<h1 class="rankValue" id="rankKillerValue"><br>2<?php if(isset($_SESSION['playerStats']['DBD_Chapter10_Camper_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter10_Camper_Stat1']; } else { echo 0; } ?></h1>
				</div>
				<h1 class="statName">Killer Rank</h1>
			</div>			
			<div class="statsBox">
				<img src="images/loadoutKiller.png" class="statImg">
				<h1 class="statNumber" id="fullLoadoutKillerPlace"><?php if(isset($_SESSION['playerStats']['DBD_SlasherFullLoadout'])){ echo $_SESSION['playerStats']['DBD_SlasherFullLoadout']; } else { echo 0; } ?></h1>
				<h1 class="statName">Full Loadout Games</h1>
			</div>
		</div>

		<!-- CATEGORY OF STATS -->
		<div class="fthr2"></div>
			<details id="details2"><summary>OVERALL</summary><div class="fthr2"></div>
				<div class="playerStatsAnimated">
				<div class="statsBox">
					<img src="images/hatch.png" class="statImg">
					<h1 class="statNumber" id="hatchPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter13_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter13_Slasher_Stat1']; } else { echo 0; } ?></h1>
					<h1 class="statName">Hatch Closed</h1>
				</div>
				<div class="statsBox">
					<img src="images/sacrificed2.png" class="statImg">
					<h1 class="statNumber" id="sacrificedPlace"><?php if(isset($_SESSION['playerStats']['DBD_SacrificedCampers'])){ echo $_SESSION['playerStats']['DBD_SacrificedCampers']; } else { echo 0; } ?></h1>
					<h1 class="statName">Survivors Sacrificed</h1>
				</div>
				<div class="statsBox">
					<img src="images/killed.png" class="statImg">
					<h1 class="statNumber" id="killedPlace"><?php if(isset($_SESSION['playerStats']['DBD_KilledCampers'])){ echo $_SESSION['playerStats']['DBD_KilledCampers']; } else { echo 0; } ?></h1>
					<h1 class="statName">Survivors Killed</h1>
				</div>
			</div>

			<!-- 'WATCH MORE' SECTION OF THAT CATEGORY-->
			<div class="fthr"></div>
				<div class="tableDiv">
					<table>
						<tr>
							<th>Sacrificed obssesion</th>
							<th id="sacrificedObssesionPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC7_Slasher_Stat2'])){ echo $_SESSION['playerStats']['DBD_DLC7_Slasher_Stat2']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Sacrificed during Endgame Collapse</th>
							<th id="sacrificedEndgamePlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter18_Slasher_Stat2'])){ echo $_SESSION['playerStats']['DBD_Chapter18_Slasher_Stat2']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Sacrificed all survs before gens repaired</th>
							<th id="sacrificedBfAllGensPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter11_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter11_Slasher_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Sacrificed surv when all gens repaired</th>
							<th id="sacrificedAllGensPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC8_Slasher_Stat2'])){ echo $_SESSION['playerStats']['DBD_DLC8_Slasher_Stat2']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>3 or 4 survs hooked in basement ('basement tree')</th>
							<th id="bsmtTreePlace"><?php if(isset($_SESSION['playerStats']['DBD_Event1_Stat1'])){ echo $_SESSION['playerStats']['DBD_Event1_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Kicked gens when at least one surv hooked</th>
							<th id="kickedHookGenPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC9_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_DLC9_Slasher_Stat1']; } else { echo 0; } ?></th>
						</tr>
					</table>
				</div>
		</details>

		<!-- CATEGORY OF STATS -->
		<div class="fthr2"></div>
		<details><summary>SPECIAL ABILITIES</summary><div class="fthr2"></div>
			<div class="playerStatsAnimated">
				<div class="statsBox">
					<img src="images/trap.png" class="statImg">
					<h1 class="statNumber" id="trapsPlace"><?php if(isset($_SESSION['playerStats']['DBD_TrapPickup'])){ echo $_SESSION['playerStats']['DBD_TrapPickup']; } else { echo 0; } ?></h1>
					<h1 class="statName">Trapped Survivors</h1>
				</div>
				<div class="statsBox">
					<img src="images/hatchet.png" class="statImg">
					<h1 class="statNumber" id="hatchetsThownPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC5_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_DLC5_Slasher_Stat1']; } else { echo 0; } ?></h1>
					<h1 class="statName">Hatchets Thrown</h1>
				</div>
				<div class="statsBox">
					<img src="images/chainsaw.png" class="statImg">
					<h1 class="statNumber" id="chainsawBillyPlace"><?php if(isset($_SESSION['playerStats']['DBD_ChainsawHit'])){ echo $_SESSION['playerStats']['DBD_ChainsawHit']; } else { echo 0; } ?></h1>
					<h1 class="statName">Chainsawed Survivors (Billy)</h1>
				</div>
			</div>

			<!-- 'WATCH MORE' SECTION OF THAT CATEGORY-->
			<div class="fthr"></div>
				<div class="tableDiv">
					<table>
						<tr>
							<th>Blink Attacks</th>
							<th id="specialNursePlace"><?php if(isset($_SESSION['playerStats']['DBD_SlasherChainAttack'])){ echo $_SESSION['playerStats']['DBD_SlasherChainAttack']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Uncloak Attacks</th>
							<th id="specialWraithPlace"><?php if(isset($_SESSION['playerStats']['DBD_UncloakAttack'])){ echo $_SESSION['playerStats']['DBD_UncloakAttack']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Pulled into Dream State</th>
							<th id="specialFreddyPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC7_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_DLC7_Slasher_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Evil Within Tier Ups</th>
							<th id="specialMyersPlace"><?php if(isset($_SESSION['playerStats']['DBD_SlasherTierIncrement'])){ echo $_SESSION['playerStats']['DBD_SlasherTierIncrement']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Shock Therapy Hits</th>
							<th id="specialDoctorPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC4_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_DLC4_Slasher_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Cages of Atonement</th>
							<th id="specialPiramidPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter16_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter16_Slasher_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Phantasms Triggered</th>
							<th id="specialHagPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC3_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_DLC3_Slasher_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Reverse Bear Traps Placed</th>
							<th id="specialPigPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC8_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_DLC8_Slasher_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Lethal rush attacks</th>
							<th id="specialPigPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter17_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter17_Slasher_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Chainsawed survivors (Letherface)</th>
							<th id="specialPigPlace"><?php if(isset($_SESSION['playerStats']['DBD_DLC6_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_DLC6_Slasher_Stat1']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>Marked attacks</th>
							<th id="specialPigPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter12_Slasher_Stat2'])){ echo $_SESSION['playerStats']['DBD_Chapter12_Slasher_Stat2']; } else { echo 0; } ?></th>
						</tr>
						<tr>
							<th>While Victor is clinged to them</th>
							<th id="specialPigPlace"><?php if(isset($_SESSION['playerStats']['DBD_Chapter18_Slasher_Stat1'])){ echo $_SESSION['playerStats']['DBD_Chapter18_Slasher_Stat1']; } else { echo 0; } ?></th>
						</tr>
					</table>
				</div>
		</details>

	</div>
	<!-- FOOTER | LAST SECTION -->
	<?php require_once("layouts/footer.php"); ?>
	
	<script src="scripts/script.js"></script>
	<script src="scripts/stats.js"></script>
	<script>
		/* DATA */
		var playtime = parseInt("<?php if(isset($_SESSION['playerPlaytime'])) {echo $_SESSION['playerPlaytime']; } else { echo 0;}; ?>");
		var playtimePlace = document.getElementById("playtimePlace");
		var bloodpoints = parseInt("<?php echo $_SESSION['playerStats']['DBD_BloodwebPoints'] ?>");
		var bloodpointsPlace = document.getElementById("bloodpointsPlace");
		var gens = parseInt("<?php echo $_SESSION['playerStats']['DBD_GeneratorPct_float'] ?>");
		var sacrificed = parseInt("<?php echo $_SESSION['playerStats']['DBD_SacrificedCampers'] ?>");
		
		var survRank = parseInt("<?php echo $_SESSION['playerStats']['DBD_CamperSkulls'] ?>");
		var survRankPlace = document.getElementById("rankSurvValue");
		var survRankImage = document.getElementById("rankSurv");
		var killerRank = parseInt("<?php echo $_SESSION['playerStats']['DBD_KillerSkulls'] ?>");
		var killerRankPlace = document.getElementById("rankKillerValue");
		var killerRankImage = document.getElementById("rankKiller");
		/* FUNCTIONS */
		window.onload = () => {
			console.log(killerRank);
			ranks();
			skmain();
			loadStat(playtimePlace, playtime, "h");
			loadStat(bloodpointsPlace, bloodpoints);			
			drawBanner();
			}
	</script>
</body>
</html>