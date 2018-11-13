<html>

	<head>
	<?php
		session_start();
		?>
	</head>
	<body>


<?php 


include 'dbcon.php';
$id=$_POST['t1'];
$acc_type=$_SESSION['acc_type'];
$date=$_POST['d1'];
$type=$_POST['cmp_type'];
$acc_name=$_POST['t5'];
$acc_sem=$_POST['t6'];
$acc_branch=$_POST['t7'];
$complaint=$_POST['txt1'];
$witness_name=$_POST['wt1'];
$witness_type=$_POST['n1'];
$witness_dept=$_POST['v3'];
$reg_id=$_SESSION['uid'];	
$cid=$_SESSION['cid'];
$status="not_processed";
$reg=mysqli_query($conn,"INSERT INTO complaint_student(complaint_id,accused_type,reg_id,complaint_type,accused_name,accused_sem,accused_branch,complaint,witness_name,witness_type,witness_dept,date,status) VALUES('$id','$acc_type','$reg_id','$type','$acc_name','$acc_sem','$acc_branch','$complaint','$witness_name','$witness_type','$witness_dept','$date','$status')");
$reg=mysqli_query($conn,"update param set complaint_id='$cid'");
header("Location:complaint.php"); 
		 
?>
	</body>
</html>