<!DOCTYPE html>
<html>
<head>
	<title>Assigment 4 Multtable</title>
</head>
<body>
	<fieldset>
		<form action="multtable.php" method="get">
		<label>Min Mulitplicand:
			<input type="text" name="min-multiplicand"/></label>

		<label>Max Multiplicand:
			<input type="text" name="max-multiplicand"/></label>

		<label>Min Multiplier:
			<input type="text" name="min-multiplier"/></label>

		<label>Max Multiplier:
			<input type="text" name="max-multiplier"/></label><br/>
			<input type="submit" name="calculate" value="Calculate"/>
		</form>
	</fieldset>	
		<div id="multtable">
		</div>
</body>	
</html>