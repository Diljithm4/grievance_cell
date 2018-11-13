<html>

	<head>
	<?php
		session_start();
		?>
	</head>
	<body>


<?php 


include 'dbcon.php';
		$chk="";
	foreach($_POST['cat'] as $category)
		{
			$chk .=$category." , ";
		}
$id=$_POST['t2'];
$reg_id=$_SESSION['uid'];	
$cid=$_SESSION['cid'];
$category=$_POST['cat'];
$complaint=$_POST['txt1'];
$date=$_POST['dt'];
$status="not_processed";
$reg=mysqli_query($conn,"INSERT INTO about_facility(complaint_id,category,complaint,date,reg_id,status) VALUES('$id','$chk','$complaint','$date','$reg_id','$status')");
$reg=mysqli_query($conn,"update param set complaint_id='$cid'");
header("Location:complaint.php"); 
		 
?>
	</body>
</html>