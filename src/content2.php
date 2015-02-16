<!DOCTYPE html>
<html>
<head>
    <title>Content 2</title>
    <h2>Content 2</h2>
</head>
<body>
<?php

session_start();

if(!isset($_SESSION['username'])) {
    header("Location: http://web.engr.oregonstate.edu/~welborau/CS290/PHP/login.php");
    echo "Returning to the login screen.";
    exit(1);
}
else
{
    echo "Hello " . $_SESSION["username"] . ", you have reached the content2.php page!";
    echo "Click to go to <a href=\"http://web.engr.oregonstate.edu/~welborau/CS290/PHP/content1.php\"> Content 1</a>";
}
?>
</body>
</html>