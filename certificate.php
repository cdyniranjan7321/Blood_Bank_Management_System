<!DOCTYPE html>
<html>
<head>
	<title>Blood Donor Certificate</title>
	<link rel="stylesheet" type="text/css" href="styled.css"
</head>
<body>
	<h1>Blood Donor Certificate</h1>
	<form method="POST" action="certified.php">
		<label for="username">Name:</label>
		<input type="text" name="username" id="username" required>
		<label for="bloodgroup">Blood Group:</label>
		<select name="bloodgroup" id="bloodgroup" required>
			<option value="">Select Blood Group</option>
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
		</select>
		<input type="submit" name="generate" value="Generate Certificate">
	</form>
</body>
</html>
