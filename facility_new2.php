<html>
<head>
<?php

session_start();
?>
</head>
<?php
	include 'dbcon.php';
	
if(isset($_POST['re']))
{

$b=$_POST['b'];
$s="counceler";

$sql = mysqli_query($conn,"update about_facility set status='$s' where complaint_id='$b'"); 
header("Location:view_complaint.php"); 
		 
}
if(isset($_POST['act']))
{
	$b=$_POST['b'];
	$_SESSION['sam']=$b;

		header("Location:facility_action.php"); 
	
}
     ?>
	 </html>
	