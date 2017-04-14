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
		<title>Card of The Week</title>
		<link rel="stylesheet" href="../style/base.css">
	</head>
	<!-- THE BODY BEGINS -->
	<body>
	<div id = main>
		<div id="menu">
			<ul class="navbar">
				<li class="home"><a href="../index.php"><img alt="logo" src="../images/qboardlogo.png" width="49" height="49"></a></li>
				<li><a  href="../hs/decks.php">Decks</a></li>
				<li><a class = "active" href="cotw/cofc.php">Card of the week</a></li>
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
		<div id= "meat">
		<h2 id = "cohTitle">Card of the Week</h2>
		<h3 id = "cohSub">Week of April 9-15 2017</h3>
		<img id ="cohImg" src="../images/first.png" alt = "Fandral Steghelm" width = "286" height = "395"/>
		<p id = "cohText">This week we are looking at N'Zoths First Mate. 
		This card is the reason pirate warrior rose to fame in the mean streets of gadjetzan meta. Now your thinking was it not Patches that made the pirate decks so strong and i like to debate that although patches is a staple card in the deck it is N'Zoth first mate that makes the deck so good. The most important thing to look at during this meta was that the only good taunt was second rate bruiser and it didnt get on the board till turn 3. Until then with First Mate, Patches, and another cheap pirate you would have dealt at least 10 points of damage to the enemy hero.
		And by the time a taunt rolls around it is already to late you will have board control. What makes First mate so strong is the 1-3 wepon it allows for pirate sytnergy and it helps outtrade a faster aggro deck like face hunter. I look forward to the future when pirates return to fame as the best deck in the near future.</p>
		</div>
		<div id = "bottom">
			<a id="back" href="cof1.php">Previous</a>
			<a id="next" href="#">Next</a>
	
		<div class="footer">
			<p>Disclaimer &copy; : Team 24</p>
		</div>


		</div>
		</div>
	</body>
	</html>