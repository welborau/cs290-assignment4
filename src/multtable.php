<!DOCTYPE html>


<html>
<head>
	<title>Multtable</title>
	<h1> Assignment 4 Multtable.php </h1>
</head>
<body>	
	<?php

	while ($_GET["min-multiplicand"] > $_GET["max-multiplicand"]) {
		echo "The min-multiplicand can't be greater than the max-multiplicand!";
		exit(1);
	}

	while ($_GET["min-multiplier"] > $_GET["max-multiplier"]) {
		echo "The min multiplier should be less than the max multiplier!";
		exit(1);
	}

	while (is_null($_GET["min-multiplier"] || !is_int($_GET["min-multiplier"])) 
		echo "Missing/incorrect input for min-multiplier!";
		exit(1);
	}
	while (is_null($_GET["max-multiplier"] || !is_int($_GET["max-multiplier"])) 
		echo "Missing/incorrect input for max-multiplier!";
		exit(1);
	}
	while (is_null($_GET["min-multiplicand"] || !is_int($_GET["min-multiplicand"])) 
		echo "Missing/incorrect input for min-multiplicand!";
		exit(1);
	}
	while (is_null($_GET["max-multiplicand"] || !is_int($_GET["max-multiplicand"])) 
		echo "Missing/incorrect input for max-multiplicand!";
		exit(1);
	}

	$n_cols = $_GET["max-multiplier"] - $_GET["min-multiplier"] + 2;
	$n_rows = $_GET["max-multiplicand"] - $_GET["min-multiplicand"] + 2;
	$f_cols_val = $cols_val = $_GET["min-multiplier"];
	$f_rows_val = $rows_val = $_GET["min-multiplicand"];
	
	?><table>
	<tr> 
		<th></th>
		<?php
		// set the first row values
		for($i = 1; $i < $n_cols; i++)
		{
			?><th><?php $f_cols_val ?></th>
			<?php
			$f_cols_val++;
		}
	?></tr>
		<?php
		// set the first column values
		for($i = 1; $i < $n_rows; i++) 
		{
			?><th><?php $f_rows_val ?><th>
			<?php
			$f_rows_val++;
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
?>
<table>
</body>	
</html>

