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
	
		header("Location:con_faculty_new.php");
	else
		header("Location:con_student_new.php");


		?>
	
