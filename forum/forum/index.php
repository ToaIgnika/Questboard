<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>

	
<!-- ==========================================================	-->
<!--	Created by Devit Schizoper                          	-->
<!--	Created HomePages http://LoadFoo.starzonewebhost.com   	-->
<!--	Created Day 01.12.2006                              	-->
<!-- ========================================================== -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="LoadFoO" />
	<meta name="description" content="Site description" />
	<meta name="keywords" content="key, words" />
	<title>QuestBoard</title>
	<link rel="stylesheet" type="text/css" href="../../style/base.css" media="screen" />
	<link rel="shortcut icon" href="favicon.ico" />
	<script type="text/javascript" src="js/textsizer.js"></script>
	<script type="text/javascript" src="js/rel.js"></script>
</head>

<body>
<div id="main">
	<div id="menu">
			<ul class="navbar">
				<li class="home"><a href="index.html"><img alt="logo" src="../../images/qboardlogo.png" width="49" height="49"></a></li>
				<li><a  href="hs/decks.html">Decks</a></li>
				<li><a href="cotw/cofc.html">Card of the week</a></li>
				<li><a class = "active" href="contact.html">Suggest a deck</a></li>
				<li><a href = "forum.html">Forum</a></li>
				<li class="login"><a href="../form.html">Login</a></li>
			</ul>
	</div>
<div id="content">
<div style="float: right;"><a href="javascript:ts('body',1)">[+]</a> | <a
href="javascript:ts('body',-1)">[-]</a></div>
<div id="right">
	<div class="box">
		<h2 style="margin-top:17px">Recent Entries</h2>
		<ul>
		<?php
			$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
			$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
			$count = min(5, mysqli_num_rows($result));
			if($count==0)
				echo "<li>No topics</li>";
			else
				for($i=0; $i < $count; $i++){
					$row=mysqli_fetch_array($result);
					echo '<li><a href="view_topic.php?id='.$row['id'].'">'.$row['topic'].'</a></li>';
				}
		?>
		</ul>
		<?php
			if (isLoggedIn()){
				echo '<a href="logout.php">Logout</a><br/>';
				echo '<a href="forum.php">Go to forum</a><br/>';
				echo '>><a href="add_topic_form.php">Create new topic</a>';
			} else {
				echo '<a href="login_form.php">Login</a><br/>';
				echo '<a href="register_form.php">New user?</a>';
			}
		?>
	</div>
<div id="clear"></div></div>
<div id="footer">
<p>Copyright 2006 LoadFoO [V1]. Designed by <a href="http://loadfoo.org/" rel="external">LoadFoO</a>. Valid <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="external">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer" rel="external">XHTML</a></p>
</div>
</div>

</body>
</html>
