<!DOCTYPE html>

<?php
	while ($_GET["min-multiplicand"] > $_GET["max-multiplicand"]) {
		trigger_error("The min-multiplicand can't be greater than the max-multiplicand!");
		break;
	}

	while ($_GET["min-multiplier"] > $_GET["max-multiplier"]) {
		echo "The min multiplier should be less than the max multiplier!";
		break;
	}
?>

<?php
	$n_cols = _GET["max-multiplier"]-_GET["min-multiplier"] + 2;
	$n_rows = _GET["max-multiplicand"] - _GET["min-multiplicand"] + 2;
	$f_cols_val = $cols_val = _GET["min-multiplier"];
	$f_rows_val = $rows_val = _GET["min-multiplicand"];
	
	$table = new HTML_Table();
	// set the 0,0 cell to empty
	$table->setCellContents(0, 0,'');

	// set the first column values
	for($i = 1; $i < $n_rows; i++) 
	{
		setCellContents(i, 0, $f_rows_val);
		$f_rows_val++;
	}
	// set the first row values
	for($i = 1; $i < $n_cols; i++)
	{
		$table->setCellContents(0, i, $f_cols_val);
		$f_cols_val++;
	}
	// loop through each rows/columns and assign each value
	for ($row = 1; $row < $n_rows; $rows++) {
		for ($cols = 1; $cols < $n_cols; $cols++)
		{
			$table->setCellContents($row, $cols, $cols_val*$rows_val);
			$cols_val++;
		}
		$rows_val++;
	} 	
	echo $table->toHTML();
?>

<html>
<head>
	<title>Multtable</title>
	<h1> Assignment 4 Multtable.php </h1>
</head>
<body>
	<legend><strong>Multtable Generator<strong></legend>
	<fieldset>
		<form action="http://web.engr.oregonstate.edu/~welborau/CS290/multtable.php" method="get">
		<label>Min Multiplicand: 
			<input type="text" name="min-multiplicand" size="10" /></label><br/>

		<label>Max Multiplicand:
			<input type="text" name="max-multiplicand" size="10" /></label><br/>

		<label>Min Multiplier:   
			<input type="text" name="min-multiplier" size="10" /></label><br/>

		<label>Max Multiplier:  
			<input type="text" name="max-multiplier" size="10" /></label><br/>
			<input type="submit" name="calculate" value="Create Table"/>
		</form>
	<fieldset>	
</body>	
</html>

