<html>
<head>
<?php
session_start();
?>
</head>

<?php


	 
	  $r=$_POST['adm'];
$_SESSION['r1']=$r;

	   
       if($r=="facility")
	   			header("Location:cmp_facility.php"); 
	   

	elseif($r=="faculty")
	
		header("Location:cmp_faculty.php");
	else
		header("Location:cmp_student.php");


		?>
	
