<!DOCTYPE html>
<html>
	<head>
		<title>RecordS MS</title>
	</head>
	<body>
	<h1>Records Management System</h1>
	
	<a href="viewrecords.php">View Records</a><br><br>
	<form action="register.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Firstname</td>
				<td><input type="text" name="fname" placeholder="Enter your Firstname" required>
			</tr>
			<tr>
				<td>Middlename</td>
				<td><input type="date" name="mname" placeholder="Enter your Middlename" required>
			</tr>
			<tr>
				<td>Lastname</td>
				<td><input type="text" name="lname" title="Accept 3" placeholder="Enter your Lastname" required>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" placeholder="Enter your Email" required>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname" placeholder="Enter your Username" required>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pword" placeholder="Enter your Password" ma required>
			</tr>
			<tr>
				<td>Picture</td>
				<td><input type="file" name="pictureko" accept="image/*" required>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="register" value="Click to Register">
			</tr>
		</table>
	</form>
	</body>
</html>