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
	<link rel="stylesheet" href="style/base.css" />
	<script src= "js/registration-form.js"></script>
</head>

<body>
	<div id="main">
		

		<div id="menu">
			<ul class="navbar">
				<li class="home"><a href="index.php"><img alt="logo" src="images/qboardlogo.png" width="49" height="49"></a></li>
				<li><a  href="hs/decks.php">Decks</a></li>
				<li><a href="cotw/cofc.php">Card of the week</a></li>
				<li><a class = "active" href="contact.php">Suggest a deck</a></li>
				<li><a href = "forum.php">Forum</a></li>
				<li class="login"><?php if (isLoggedIn()){
				echo "Welcome: ".$_SESSION['SESS_FIRST_NAME']."<br/>";
				echo '<a href="logout.php">Logout</a><br/>';
			} else {
				echo '<a href="form.php">Login</a><br/>';
			} ?></li>
			</ul>
		</div>
		<div id="skype">
			<div id="preskype">
				<h2>Contact via skype:</h2>
			</div>
			<div id="SkypeButton_Call_godoftoa_1">
			</div>

		</div>
		<div class="contactForm">

			<form action="formmail.php" method="post" id="inputform" onsubmit="return submitContact()">
				<label for ="fname">First name</label>
				<input type="text" id ="fname" name="firstname" maxlength="10" oninput="warnFirstNameValid('fname')">
				<p id="alertFirstName">Please enter first name</p>

				<label for ="lname">Last name</label>
				<input type="text" id ="lname" name ="lastname" maxlength="10" oninput="warnLastNameValid('lname')">
				<p id="alertLastName">Please enter last name</p>

				<label for ="email">Email</label>
				<input type ="email" id ="emailCon" name="emailAddress" maxlength="30" oninput="warnEmailConValid('emailCon')" >
				<p id="alertConEmail">Please enter e-mail addres</p>

				<label for ="username">Username</label>
				<input type ="text" id ="username" name="username" maxlength="30" oninput="warnUsernameValid('username')" >
				<p id="alertConEmail">Please enter e-mail addres</p>

				<label for ="decklist">Decklist</label>
				<input type ="file" id ="decklist" name="decklist" oninput="warnDecklistValid('decklist')" >
				<p id="alertConEmail">Please enter e-mail addres</p>

				<label for ="comment">Comments</label>
				<textarea id="comment" name="comments" style="height:200px" oninput="warnTextareaBlank('comment')">
				</textarea>
				<p id="alertTextarea">This filed should not be blank</p>
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="footer">
			<p>Disclaimer &copy; : Team 24</p>
		</div>
	</div>
	<script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
	<script type="text/javascript" src="js/skype.js"></script>
</body>
</html>
