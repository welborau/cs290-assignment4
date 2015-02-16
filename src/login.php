<?php

session_start();

if($_GET['delete']==1)
{
	session_destroy();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<h1>Login here</h1>
</head>
<body>
	<p>Please login with your username.</p>
	<form action = "http://web.engr.oregonstate.edu/~welborau/CS290/PHP/content1.php" method="post">
	<p>Username:
		<input type="text" name="username" size="20" maxlength="40" />
		<input type="submit" />
	</p>
	<form>
</body>
</html>