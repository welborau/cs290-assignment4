<?php
session_start();

$fail = false;

if(empty($_POST)) {
	//this means no one posted. they just went straight here

	if(!isset($_SESSION['username']) && !isset($_POST['username'])) {
		header("Location: http://web.engr.oregonstate.edu/~welborau/CS290/PHP/login.php");
		echo "Returning to the login screen.";
		exit(1);
	}
}
else {
	// someone is trying to log in
	if(!isset($_POST['username']) || empty(trim($_POST['username'])))
	{
		$fail = true;
	}
	else {
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['counter'] = 0;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Content 1</title>
	<h2>Content 1</h2>
</head>
	<body>
	<p>
	<?php
		if($fail)
		{
			echo "A username must be entered.<br>";
			echo "Click here to return to the login screen.<br>";
			echo "<a href=login.php>Login Screen</a>";
		}
		else
		{
			echo "Hello " . $_SESSION['username'] . ", you have visited this page " . $_SESSION['counter'] . " times!<br>";
			echo "Click <a href='login.php?delete=1'>here</a> to log out<br>";
			echo "Click to go to <a href='content2.php'>Content 2</a><br>";
			$newCount = $_SESSION['counter'];
			$newCount++;
			$_SESSION['counter'] = $newCount;
		}
	?>
	</p>
	</body>
</html>