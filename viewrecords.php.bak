<?php
include_once("conn.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>RecordS MS</title>
	</head>
	<body>
	<h1>Records Management System</h1>
	
	<a href="index.php">Add Records</a><br><br>
	
	<table border>
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Username</th>
				<th>Picture</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$query = $conn->prepare("SELECT * FROM employee_tbl");
			$query->execute();

			while($data = $query->fetch()){
				$firstname = $data['empFname'];
				$middlename = $data['empMname'];
				$lastname = $data['empLname'];
				$email = $data['empEmail'];
				$username = $data['empUsername'];
				$picture = $data['picture'];
				$eid = $data['employeeID'];
			
			?>
			<tr>
				<td><?php echo $firstname." ".$middlename." ".$lastname;?></td>
				<td><?php echo $email;?></td>
				<td><?php echo $username;?></td>
				<td><img src="photos/<?php echo $picture;?>" alt="profile picture" width="100"></td>
				<td><a href="edit.php?uid=<?php echo $eid;?>">Edit</a> | <a href="delete.php?uid=<?php echo $eid;?>" onclick="return confirm('Are you sure?')">Delete</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	</body>
</html>