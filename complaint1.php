<html>
<head>
<?php
session_start();
?>
</head>
<?php

	 
	  $r=$_POST['cmp'];
	 $_SESSION['acc_type']=$r;
       if( $r=="faculty")
	   			header("Location:about_faculty.php"); 
		elseif($r=="student")
		     header("Location:complaint_category_student.php"); 
	   

	
	else
		header("Location:about_facility.php"); 

		?>
