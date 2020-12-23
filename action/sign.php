<?php
include 'conn.php';
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mnum=$_POST['mnum'];
	$addr=$_POST['addr'];
	$uname=$_POST['uname'];
	$passwd=$_POST['psw'];
	$q = " INSERT INTO `users` VALUES ('$fname', '$lname', $mnum, '$addr', '$uname', '$passwd')";
	$query = mysqli_query($conn,$q);
?>