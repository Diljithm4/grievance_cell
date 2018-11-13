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

$sql = mysqli_query($conn,"update complaint_student set status='$s' where complaint_id='$b'"); 
header("Location:view_complaint.php"); 
		 
}
if(isset($_POST['act']))
{
	$b=$_POST['b'];
	$_SESSION['sam1']=$b;

		header("Location:con_faculty_action.php"); 
	
}
     ?>
	
</html>		