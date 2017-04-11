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
				echo "Welcome: ".$_SESSION['SESS_FIRST_NAME']."<br/>";
				echo '<a href="../logout.php">Logout</a><br/>';
			} else {
				echo '<a href="../form.php">Login</a><br/>';
			} ?></li>
			</ul>
		</div>
		<div id= "meat">
		<h2 id = "cohTitle">Card of the Week</h2>
		<h3 id = "cohSub">Week of April 2-8 2017</h3>
		<img id ="cohImg" src="../images/fandral.png" alt = "Fandral Steghelm" width = "286" height = "395"/>
		<p id = "cohText">For the first card of the week we are looking at Fanderal Steghelm. 
		This card has shaped the many metas and has been the corner stone of many decks. Fandaral came into
		the game with the Whispers of the Old Gods set with the old druid mainstay of Force of Nature being nerfed.
		This card alone was able to keep druid as a combo class. What makes this card amazing is the combination of a 3/5 body on turn 4, and how its abbilty allows
		for combos that would have been previously unheard of. </p>
		</div>
		<div id = "bottom">
			<a id="back" href="hs_news.html">Previous</a>
			<a id="next" href="hs_news.html">Next</a>
	
		<div class="footer">
			<p>Disclaimer &copy; : Team 24</p>
		</div>


		</div>
		</div>
	</body>
	</html>