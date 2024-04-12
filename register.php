<?php
include_once("conn.php");

if(isset($_POST['register'])){
	$firstname = htmlentities($_POST['fname']);
	$middlename = $_POST['mname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$user = $_POST['uname'];
	$pass = sha1($_POST['pword']);
	
	// process image
	//filename
	$imgFile = $_FILES['pictureko']['name'];
	//filesize
	$imgSize = $_FILES['pictureko']['size'];
	//temporary name
	$temp_name = $_FILES['pictureko']['tmp_name'];
	//file extension
	$imgExt = pathinfo($imgFile,PATHINFO_EXTENSION);
	
	$valid_ext = array('jpg', 'jpeg', 'png', 'gif');
	
	$newname = rand(1000,10000000).".".$imgExt;
	
	$upload_dir = "photos/";
	
	if(in_array($imgExt,$valid_ext)){
		if($imgSize < 5000000){
			move_uploaded_file($temp_name,$upload_dir.$newname);
			
			$statement = $conn->prepare("INSERT INTO employee_tbl (empFname, empMname, empLname, empEmail, empUsername, empPassword, picture) VALUES (:pangalan,:panggitna,:apelyido,:mail, :palayaw, :lihim, :img)");
			$statement->bindParam(":pangalan",$firstname);
			$statement->bindParam(":panggitna",$middlename);
			$statement->bindParam(":apelyido",$lastname);
			$statement->bindParam(":mail",$email);
			$statement->bindParam(":palayaw",$user);
			$statement->bindParam(":lihim",$pass);
			$statement->bindParam(":img",$newname);
			$statement->execute();

			echo "<script>alert('Successfully Uploaded!')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		} else {
			echo "<script>alert('Sorry, your file is too large!')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
	} else {
		echo "<script>alert('Sorry, only jpeg, jpg, png and gif is allowed!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
?>