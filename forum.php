<html lang = "en">
	<head>
		<meta charset="utf-8">
		<title>questboard</title>
		<link rel="stylesheet" href="style/base.css">
	</head>
<?php
	include 'functions.php';
	require_once('config.php');
	session_start();


	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name


	$sql="SELECT * FROM $tbl_name, members where
		members.member_id = topic.member_id ORDER BY id DESC";
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
?>
<body>
	<div id="main">
		<div id="menu">
			<ul class="navbar">
				<li class="home"><a href="index.php"><img alt="logo" src="images/qboardlogo.png" width="49" height="49"></a></li>
				<li><a  href="hs/decks.php">Decks</a></li>
				<li><a href="cotw/cofc.php">Card of the week</a></li>
				<li><a href="contact.php">Suggest a deck</a></li>
				<li><a class = "active" href = "forum.php">Forum</a></li>
				<li class="login"><?php if (isLoggedIn()){
				echo "Welcome: ".$_SESSION['SESS_FIRST_NAME']." ";
				echo '<a href="logout.php">Logout</a>';
			} else {
				echo '<a href="form.php">Login</a>';
			} ?></li>
			</ul>
			</div>		
<table width="800" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#222" style = "color: #FFFFFF;">
<tr>
<td width="5%" align="center" bgcolor="#FDA474"><strong>#</strong></td>
<td width="50%" align="center" bgcolor="#FDA474"><strong>Topic</strong></td>
<td width="20%" align="center" bgcolor="#FDA474"><strong>Date/Time</strong></td>
<td width="20%" align="center" bgcolor="#FDA474"><strong>Name</strong></td>
</tr>

<?php
while($rows=mysqli_fetch_array($result)){ // Start looping table row
?>

<tr>
<td bgcolor="#AAA" style = "color: #000000;"><?php echo $rows['id']; ?></td>
<td bgcolor="#AAA" style = "color: #000000;"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#AAA" style = "color: #000000;"><?php echo $rows['datetime']; ?></td>
<td align="center" bgcolor="#AAA" style = "color: #000000;"><?php echo $rows['firstname']." ".$rows['lastname'];?></td>
</tr>

<?php
// Exit looping and close connection
}
((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>
<tr>
<td colspan="5" align="right" bgcolor="#AAA"><a href="add_topic_form.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
</body>
</div>
</div>
