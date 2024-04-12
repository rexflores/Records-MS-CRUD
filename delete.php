<?php
include_once("conn.php");

$uid = $_GET['uid'];

$query = $conn->prepare("DELETE FROM employee_tbl WHERE employeeID = :id");
$query->bindParam(":id",$uid);
$query->execute();

echo "<script>alert('Successfully Deleted')</script>";
echo "<script>window.open('viewrecords.php', '_self')</script>";

?>