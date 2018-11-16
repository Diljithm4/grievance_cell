<html>
<head>
<?php
session_start();
?>
</head>

<?php
	include 'dbcon.php';
	

if(isset($_POST['act']))
{
	$b=$_POST['b'];
	$_SESSION['sam1']=$b;

		header("Location:student_action.php"); 
	
}
     ?>
	
</html>		