<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css.css">
<body>
<center>
<table>
	<td>
	<form method="POST" action="adding.php">
		<label>Room Number</label><input type="number" name="roomnumber"><br>
		<label>Number Of beds</label>
		<select name="type">
			<option value="none">NON</option>
			<option value="single">Single</option>
			<option value="double">Double</option>
			<option value="family">Family Hall</option>
		</select><br>
		<label>AC</label>
		<select name="ac">
			<option value="non AC">NON AC</option>
			<option value="AC">AC</option>
		</select><br>
	
		
		<label>Cost per day</label><input type="number" name="cost"><br>
		<center>
		<input class="subbtn" type="submit" name="submit" value="Update"></center>

	</form>
	</td>
</table>

</center>
</body>
</html>

