<!DOCTYPE html>
<html>
<head>
	<title>Multtable</title>
	<h1> Assignment 4 Multtable.php </h1>
</head>
<body>	
<?php
	$errFlag = false;
	$errFlag2 = false;

	if (!isset($_GET["min-multiplier"]) || !is_numeric($_GET["min-multiplier"])) {
		echo "Missing/incorrect input for min-multiplier!\n";
		$errFlag = true;
	}

	if (!isset($_GET["max-multiplier"]) || !is_numeric($_GET["max-multiplier"])) {
		echo "Missing/incorrect input for max-multiplier!\n";
		$errFlag = true;
	}

	if (!isset($_GET["min-multiplicand"]) || !is_numeric($_GET["min-multiplicand"])) {
		echo "Missing/incorrect input for min-multiplicand!\n";
		$errFlag = true;
	}

	if (!isset($_GET["max-multiplicand"]) || !is_numeric($_GET["max-multiplicand"])) {
		echo "Missing/incorrect input for max-multiplicand!\n";
		$errFlag = true;
	}

	if ($errFlag)
	{
		exit(1);
	}

	if ((int)$_GET["min-multiplicand"] > (int)$_GET["max-multiplicand"]) {
		echo "The min-multiplicand can't be greater than the max-multiplicand!";
		$errFlag2 = true;
	}

	if ((int)$_GET["min-multiplier"] > (int)$_GET["max-multiplier"]) {
		echo "The min multiplier should be less than the max multiplier!";
		$errFlag2 = true;
	}

	if ($errFlag2)
	{
		exit(1);
	}

	$min_cols = (int)$_GET["min-multiplier"];
	$min_rows = (int)$_GET["min-multiplicand"];
	$max_cols = (int)$_GET["max-multiplier"];
	$max_rows = (int)$_GET["max-multiplicand"];

?>
	<table>
		<tr>
<?php
		// loop through each rows/columns and assign each value
		for ($cols = ($min_cols-1); $cols < $max_cols+1; $cols++)
		{
			if ($cols == ($min_cols - 1))
			{
?>
				<th>  </th>
<?php
			}
			else
			{
?>
				<th><?php echo $cols ?> </th>
<?php
			}
		}
?>
		</tr>
<?php
		for ($rows = ($min_rows); $rows < ($max_rows + 1); $rows++)
		{
?>
			<tr><th><?php echo $rows ?></th>
<?php
			for ($cols = ($min_cols); $cols < ($max_cols+1); $cols++)
			{
?>
				<td><?php echo ($cols*$rows) ?></td>
<?php
			}
?>
			</tr>
<?php
		}
?>
	</table>
</body>	
</html>