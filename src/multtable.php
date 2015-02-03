<!DOCTYPE html>
<html>
<head>
	<title>Multtable</title>
	<h1> Assignment 4 Multtable.php </h1>
</head>
<body>
	<legend><strong>Multtable Generator<strong></legend>
	<fieldset>
		<form action="multtable.php" method="get">
		<label>Min Mulitplicand: 
			<input type="text" name="min-multiplicand" size="10" /></label><br/>

		<label>Max Multiplicand:
			<input type="text" name="max-multiplicand" size="10" /></label><br/>

		<label>Min Multiplier:   
			<input type="text" name="min-multiplier" size="10" /></label><br/>

		<label>Max Multiplier:  
			<input type="text" name="max-multiplier" size="10" /></label><br/>
			<input type="submit" name="calculate" value="Create Table"/>
		</form>
	</fieldset>	
		<div id="multtable">
		</div>
</body>	
</html>


<html>
<body>
<div>
<?php
	if ($_GET["min-multiplicand"] > $_GET["max-multiplicand"]) {
		echo "The min multiplicand should be less than the max multiplicand!";
	}

	if ($_GET["min-multiplier"] > $_GET["max-multiplier"]) {
		echo "The min multiplier should be less than the max multiplier!";
	}
?>
</div>
</body>
</html>