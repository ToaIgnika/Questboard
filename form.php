<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style/base.css" />
	<title>Questboard</title>
</head>
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<body>
	<div id="main">
		<div id="formHead">
			<img src="images/banner.png" alt="banner image"/>
		</div>

		<div id="menu">
			<div id="menu">
			<ul class="navbar">
				<li class="home"><a href="index.html"><img alt="logo" src="images/qboardlogo.png" width="49" height="49"></a></li>
				<li><a  href="hs/decks.html">Decks</a></li>
				<li><a href="cotw/cofc.html">Card of the week</a></li>
				<li><a class = "active" href="contact.html">Suggest a deck</a></li>
				<li><a href = "forum.html">Forum</a></li>
				<li class="login"><a href="../form.html">Login</a></li>
			</ul>
		</div>
		<div class="userForm">
			<table>
				<tr>
					<th>Log in:</th>
					<th>Register:</th>
				</tr>
				<tr>
					<td>
						<h2>Welcome</h2>
						<form id = "loginForm" name = "loginForm" method = "post" action= "login.php">
							<label>Username:<br>
								<input type = "text" name ="login" id = "login" maxlength="15"><br></label>
					
								<label>Password:<br>
									<input type = "password" name ="password" id = "password" maxlength="10"><br></label>
									
									<input type="submit" value="Login">
								</form>
							</td>
							<td>
								<h2>Sign up</h2>
								<form id="registerForm" method = "post" action= "register.php" name = "registerForm">
									<input type = "text" name ="login" id = "login" placeholder="username" maxlength="10"/><br>
									<input type = "email" name ="email" id = "email" placeholder = "email" maxlength="30" /><br>
									<input type = "password" name ="password" id = "password" placeholder = "password" maxlength="10"/><br>								
									<input name="cpassword" type="password" id="cpassword" placeholder = "confirm password" /><br>
									<input name="fname" type="text" placeholder="firstname" id="fname" /><br>
									<input name="lname" type="text" placeholder="Last Name" id="lname" /><br>
									<input type="submit" value="Register">
								</form>
							</td>
					</table>
				</div>
				<div class="footer">
					<p>Disclaimer &copy; : Team 24</p>
				</div>
			</div>
		</body>
		</html>
