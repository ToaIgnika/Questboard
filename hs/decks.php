<?php
	include '../functions.php';
	require_once('../config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>

<!DOCTYPE html>
	<html lang= "en">
	<head>
		<meta charset="utf-8">
		<title>Game page</title>
		<link rel="stylesheet" href="../style/decks.css">

		<script>
		// Define a function for id
		function $(id){

			var element = document.getElementById(id);
			if( element == null )
			alert( "Programmer error: " + id + " does not exist." );
			return element;
		}

		function druidD() {
			$("druidO").className="";
			$("hunterO").className="error";
			$("mageO").className="error";
			$("paladinO").className="error";
			$("priestO").className="error";
			$("rogueO").className="error";
			$("shamanO").className="error";
			$("warlockO").className="error";
			$("warriorO").className="error";
			$('viewframe').src = "art/druid.png";
			$('druidDef').selected = true;
		}
		function hunterD() {
			$("druidO").className="error";
			$("hunterO").className="";
			$("mageO").className="error";
			$("paladinO").className="error";
			$("priestO").className="error";
			$("rogueO").className="error";
			$("shamanO").className="error";
			$("warlockO").className="error";
			$("warriorO").className="error";
			$('viewframe').src = "art/hunter.png";
			$('hunterDef').selected = true;
		}
		function mageD() {
			$("druidO").className="error";
			$("hunterO").className="error";
			$("mageO").className="";
			$("paladinO").className="error";
			$("priestO").className="error";
			$("rogueO").className="error";
			$("shamanO").className="error";
			$("warlockO").className="error";
			$("warriorO").className="error";
			$('viewframe').src = "art/mage.png";
			$('mageDef').selected = true;
		}
		function paladinD() {
			$("druidO").className="error";
			$("hunterO").className="error";
			$("mageO").className="error";
			$("paladinO").className="";
			$("priestO").className="error";
			$("rogueO").className="error";
			$("shamanO").className="error";
			$("warlockO").className="error";
			$("warriorO").className="error";
			$('viewframe').src = "art/paladin.png";
			$('paladinDef').selected = true;
		}
		function priestD() {
			$("druidO").className="error";
			$("hunterO").className="error";
			$("mageO").className="error";
			$("paladinO").className="error";
			$("priestO").className="";
			$("rogueO").className="error";
			$("shamanO").className="error";
			$("warlockO").className="error";
			$("warriorO").className="error";
			$('viewframe').src = "art/priest.png";
			$('priestDef').selected = true;
		}
		function rogueD() {
			$("druidO").className="error";
			$("hunterO").className="error";
			$("mageO").className="error";
			$("paladinO").className="error";
			$("priestO").className="error";
			$("rogueO").className="";
			$("shamanO").className="error";
			$("warlockO").className="error";
			$("warriorO").className="error";
			$('viewframe').src = "art/rogue.png";
			$('rogueDef').selected = true;
		}
		function shamanD() {
			$("druidO").className="error";
			$("hunterO").className="error";
			$("mageO").className="error";
			$("paladinO").className="error";
			$("priestO").className="error";
			$("rogueO").className="error";
			$("shamanO").className="";
			$("warlockO").className="error";
			$("warriorO").className="error";
			$('viewframe').src = "art/shaman.png";
			$('shamanDef').selected = true;
		}
		function warlockD() {
			$("druidO").className="error";
			$("hunterO").className="error";
			$("mageO").className="error";
			$("paladinO").className="error";
			$("priestO").className="error";
			$("rogueO").className="error";
			$("shamanO").className="error";
			$("warlockO").className="";
			$("warriorO").className="error";
			$('viewframe').src = "art/warlock.png";
			$('warlockDef').selected = true;
		}
		function warriorD() {
			$("druidO").className="error";
			$("hunterO").className="error";
			$("mageO").className="error";
			$("paladinO").className="error";
			$("priestO").className="error";
			$("rogueO").className="error";
			$("shamanO").className="error";
			$("warlockO").className="error";
			$("warriorO").className="";
			$('viewframe').src = "art/warrior.png";
			$('warriorDef').selected = true;
		}
</script>


	</head>
	<!-- THE BODY BEGINS -->
	<body>
		<div id="main">

		<div id="menu">
			<ul class="navbar">
				<li class="home"><a href="../index.php"><img alt="logo" src="../images/qboardlogo.png" width="49" height="49"></a></li>
				<li><a class = "active" href="decks.php">Decks</a></li>
				<li><a  href="../cotw/cofc.php">Card of the week</a></li>
				<li><a  href="../contact.php">Suggest a deck</a></li>
				<li><a href = "../forum.php">Forum</a></li>
				<li class="login"><?php if (isLoggedIn()){
				echo "Welcome: ".$_SESSION['SESS_FIRST_NAME']." ";
				echo '<a href="../logout.php">Logout</a>';
			} else {
				echo '<a href="../form.php">Login</a>';
			} ?></li>
			</ul>
		</div>

		<!-- 350 char max for the content blocks -->
<script>


</script>

		<div class = "contentPanel">
			<ul class = "iconList">
				<li><input class="druidB" type="button" value="" onclick="druidD()"></li>
				<li><input class="hunterB" type="button" value="" onclick="hunterD()"></li>
				<li><input class="mageB" type="button" value="" onclick="mageD()"></li>
				<li><input class="paladinB" type="button" value="" onclick="paladinD()"></li>
				<li><input class="priestB" type="button" value="" onclick="priestD()"></li>
				<li><input class="rogueB" type="button" value="" onclick="rogueD()"></li>
				<li><input class="shamanB" type="button" value="" onclick="shamanD()"></li>
				<li><input class="warlockB" type="button" value="" onclick="warlockD()"></li>
				<li><input class="warriorB" type="button" value="" onclick="warriorD()"></li>
				</ul>
		</div>

		<div class = "contentBox">
			<!--druid decks -->
			<div id = "druidO">
			<select name="druidO" onchange="document.getElementById('viewframe').src = this.options[this.selectedIndex].value">
				<option id = "druidDef" value="art/druid.png">--select Druid deck--</option>
				<option value="decks/druid/1.html">Tempo beast</option>
				<option value="decks/druid/template.html">Extreme ramp</option>
				<option value="decks/druid/1.html">Death is not gonnna happen</option>
			</select>
		</div>

		<div id = "hunterO" class = "error">
			<select name="hunterO" onchange="document.getElementById('viewframe').src = this.options[this.selectedIndex].value">
				<option id = "hunterDef" value="art/hunter.png">--select Hunter deck--</option>
				<option value="decks/hunter/3.html">MidRange Quester</option>
				<option value="decks/hunter/2.html">Miracle Quest Hunter</option>
				<option value="decks/hunter/1.html">Faster(Fast Hunter)</option>
			</select>
		</div>

		<div id = "mageO" class = "error">
			<select name="mageO" onchange="document.getElementById('viewframe').src = this.options[this.selectedIndex].value">
				<option id = "mageDef" value="art/mage.png">--select Mage deck--</option>
				<option value="decks/mage/1.html">Tempo beast</option>
				<option value="decks/mage/1.html">Tempo beast</option>
				<option value="decks/mage/1.html">Tempo beast</option>
			</select>
		</div>

		<div id = "paladinO" class = "error">
			<select name="paladinO" onchange="document.getElementById('viewframe').src = this.options[this.selectedIndex].value">
				<option id = "paladinDef" value="art/paladin.png">--select Paladin deck--</option>
				<option value="decks/paladin/1.html">Midrange Paladin</option>
				<option value="decks/paladin/1.html">Tempo beast</option>
				<option value="decks/paladin/1.html">Tempo beast</option>
			</select>
		</div>

		<div id = "priestO" class = "error">
			<select name="priestO" onchange="document.getElementById('viewframe').src = this.options[this.selectedIndex].value">
				<option id = "priestDef" value="art/priest.png">--select Priest deck--</option>
				<option value="decks/priest/1.html">Tempo</option>
				<option value="decks/priest/1.html">Tempo beast</option>
				<option value="decks/priest/1.html">Tempo beast</option>
			</select>
		</div>

		<div id = "rogueO" class = "error">
			<select name="rogueO" onchange="document.getElementById('viewframe').src = this.options[this.selectedIndex].value">
				<option id = "rogueDef" value="art/rogue.png">--select Rogue deck--</option>
				<option value="decks/rogue/1.html">Tempo beast</option>
				<option value="decks/rogue/1.html">Tempo beast</option>
				<option value="decks/rogue/1.html">Tempo beast</option>
			</select>
		</div>

		<div id = "shamanO" class = "error">
			<select name="shamanO" onchange="document.getElementById('viewframe').src = this.options[this.selectedIndex].value">
				<option id = "shamanDef" value="art/shaman.png">--select Shaman deck--</option>
				<option value="decks/shaman/1.html">Elemental Shaman</option>
				<option value="decks/shaman/1.html">Tempo beast</option>
				<option value="decks/shaman/1.html">Tempo beast</option>
			</select>
		</div>

		<div id = "warlockO" class = "error">
			<select name="warlockO" onchange="document.getElementById('viewframe').src = this.options[this.selectedIndex].value">
				<option id = "warlockDef" value="art/warlock.png">--select Warlock deck--</option>
				<option value="decks/warlock/1.html">Tempo beast</option>
				<option value="decks/warlock/1.html">Tempo beast</option>
				<option value="decks/warlock/1.html">Tempo beast</option>
			</select>
		</div>

		<div id = "warriorO" class = "error">
			<select name="warriorO" onchange="document.getElementById('viewframe').src = this.options[this.selectedIndex].value">
				<option id = "warriorDef" value="art/warrior.png">--select Warrior deck--</option>
				<option value="decks/warrior/1.html">PIRATE WARRIOR</option>
				<option value="decks/warrior/1.html">Tempo beast</option>
				<option value="decks/warrior/1.html">Tempo beast</option>
			</select>
		</div>

			<br><br>
			<iframe name="iframe" id="viewframe" height="500px" width="780px" src="buffer.png"></iframe>
		</div>

		<div class="footer">
			<p>Disclaimer &copy; : Team 24</p>
		</div>


</div>
	</body>
	</html>
