<head>
<link href="http://www.ferradermis.org/ScoutingApp/css/styles.css" rel="stylesheet" type="text/css" />
</head>

<?php
session_start();

	if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
		echo "<h1 class='tdHeader'>Please login to access the scouting app!</h1>";
		echo "<p class='noEntries'><a href='http://www.ferradermis.org/account.php'>Click here to visit a login page</a></p>";
		exit();
	} /*
	else {
		if (!($_SESSION['username'] == 'bennett' || $_SESSION['username'] == 'luke' || strtolower($_SESSION['username']) == 'scout')) {
			echo "<h1 class='tdHeader'>Please login to access the scouting app!</h1>";
			echo "<p class='noEntries'><a href='http://www.ferradermis.org/account.php'>Click here to visit a login page</a></p>";
			exit();
		}
	}*/

?>