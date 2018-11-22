<html>
<head>
<?php
session_start();
?>
</head>

<?php


	 
	  $r=$_POST['adm'];
$_SESSION['r1']=$r;

	   
      
	if($r=="faculty")
	
		header("Location:con_faculty.php");
	else
		header("Location:con_student.php");


		?>
	
