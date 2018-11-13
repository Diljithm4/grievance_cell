	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>view student admin</title>
</head>

<body>
	<form name="f11" method="POST" action="alot_student1.php">
		<?php 
		
		include 'dbcon.php';
			$val=$_POST['select1'];
		    $sql="select *from student where student_id='$val'";
			$retrival=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($retrival);
?>
		<label>Student Id</label>
		<input type="text" name="select1" value="<?php echo $row['student_id'] ?>" readonly="readonly">
		<label>Name</label>
		<input type="text" name="txt_mail" value="<?php echo $row['name'] ?>" readonly="readonly" >
		<label>COURSE</label>
	    <input type="text" name="txt_course" value="<?php echo $row['course'] ?>" readonly="readonly">
		<label>SEMESTER</label>
		<input type="text" name="txt_sem" value="<?php echo $row['semester'] ?>" readonly="readonly">
		<input type="submit" value="PROCEED" name="submit1">		
	
	</form>
	<?php
	include 'dbcon.php';
	
if(isset($_POST['submit1']))
{

$type=$_POST['select1'];
$s="student_admin";

$sql = mysqli_query($conn,"update login set type='$s' where user_id='$type'"); 
}
			   ?>
		
</body>
</html>