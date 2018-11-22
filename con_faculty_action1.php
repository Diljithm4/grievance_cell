<html>
<head>
<?php
session_start();
?>
</head>
<?php

		
		include 'dbcon.php';
		$actionid=$_POST['actid'];
		$complaintid=$_POST['cmpid'];
		$action=$_POST['actiontxt'];
		$date=$_POST['stdate'];
	
		$st=$_POST['st'];
		$category=$_SESSION['r1'];
        $nid=$_SESSION['n'];
	    $reg=mysqli_query($conn,"INSERT INTO facility_action(action_id,complaint_id,action,date,status,category)VALUES('$actionid','$complaintid','$action','$date','$st','$category')");
	    $reg=mysqli_query($conn,"update param set action_id='$nid'");
		
	if($st=='con_pending')
	{
		
		$p="con_pending";
           $reg1=mysqli_query($conn,"update complaint_student set status='$p' where complaint_id='$complaintid'");	
	}
	if($st=='con_completed')
	{
		$p="con_completed";
           $reg=mysqli_query($conn,"update complaint_student set status='$p' where complaint_id='$complaintid'");	
	}
	header("Location:con_view_complaint.php"); 
	
?>
</html>