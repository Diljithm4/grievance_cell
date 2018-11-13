<?php 


include 'dbcon.php';
$id=$_POST['t1'];
$name=$_POST['t2'];
$phone=$_POST['t3'];
$email=$_POST['t4'];

$type="councellor";

$reg=mysqli_query($conn,"INSERT INTO faculty(id,name,phone,email) VALUES('$id','$name','$phone','$email')");

$reg=mysqli_query($conn,"INSERT INTO login(user_id,password,type)VALUES('$id','$email','$type')");
header("Location:staff_reg.php"); 
		 
		
?>