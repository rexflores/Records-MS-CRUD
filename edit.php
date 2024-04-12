<?php
include_once("conn.php");

$uid = $_GET['uid'];

$query = $conn->prepare("SELECT empFname, empMname, empLname FROM employee_tbl WHERE employeeID = :id");
$query->bindParam(":id",$uid);
$query->execute();


	while($data = $query->fetch()){
		$firstname = $data['empFname'];
		$middlename = $data['empMname'];
		$lastname = $data['empLname'];
	}
	
	if(isset($_POST['update'])){
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		
		$update = $conn->prepare("UPDATE employee_tbl SET empFname = :una, empMname = :dalawa, empLname = :tatlo WHERE employeeID = :id");
		$update->bindParam(":una",$fname);
		$update->bindParam(":dalawa",$mname);
		$update->bindParam(":tatlo",$lname);
		$update->bindParam(":id",$uid);
		$update->execute();
		
		echo "<script>alert('Successfully Updated')</script>";
		echo "<script>window.open('viewrecords.php', '_self')</script>";
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>RecordS MS</title>
	</head>
	<body>
	<h1>Update Records</h1>
	
	<a href="viewrecords.php">View Records</a> | <a href="index.php">Add Records</a><br><br>
	<form action="" method="post">
		<table>
			<tr>
				<td>Firstname</td>
				<td><input type="text" name="fname" value="<?php echo $firstname;?>" required>
			</tr>
			<tr>
				<td>Middlename</td>
				<td><input type="text" name="mname" value="<?php echo $middlename;?>" required>
			</tr>
			<tr>
				<td>Lastname</td>
				<td><input type="text" name="lname" title="Accept 3" value="<?php echo $lastname;?>" required>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="update" value="Update Records">
			</tr>
		</table>
	</form>
	</body>
</html>