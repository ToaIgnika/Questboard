<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<title>questboard</title>
		<link rel="stylesheet" href="style/base.css">
	</head>

	<body>
		<div id="main">
		<div id="bufferPage">
			<div class="firstSentence"><h1>Gather round the</h1></div>
			<div class="secondSentence"><img src="images/banner.png" alt="banner image" width = "600" height = "150"/> <img src="images/qboardlogo.png" id = "logo" width = "80" alt="lightning"/></div>
		</div>
			<div id = pip>
			<ul class="house">
				<li><a href="hs/decks.php">Our Decks</a></li>
				<li><a href="cotw/cofc.php">Card of the Week</a></li>
				<li><a href="forum.php">Forum</a></li>
				<li><a href="contact.php">Suggest a Deck</a></li>
				<li class="login"><?php
			if (isLoggedIn()){
				//question 1a
				echo "Welcome: ".$_SESSION['SESS_FIRST_NAME']."<br/>";
				echo '<a href="logout.php">Logout</a><br/>';
			} else {
				echo '<a href="form.php">Login</a><br/>';
			}
		?></li>
			</ul>
			</div>
		<div class ="footer"> <a href="http://jigsaw.w3.org/css-validator/check/referer">
			<img style="border:0;width:88px;height:31px"
				src="http://jigsaw.w3.org/css-validator/images/vcss"
				alt="Valid CSS!" />
			</a>
			<a href="https://validator.w3.org/check?uri=referer">
			<img style="border:0;width:88px;height:31px"
				src="https://www.w3.org/Icons/valid-html40"
				alt="Valid HTML!" />
			</a>
		</div>
		</div>
	</body>
</html>
