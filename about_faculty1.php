<html>
<head>

<?php 
session_start();

?>
</head>
<body>
<?php
include 'dbcon.php';

	$complaintid=$_POST['cmpid'];
	$id=$_POST['cmpid'];
$reg=$_POST['regid'];
$name=$_POST['fname'];
$branch=$_POST['s1'];
$chk=$_POST['x1'];
$witness=$_POST['x'];
$witname=$_POST['wn'];
$wcourse=$_POST['s3'];
$complaint=$_POST['cmptxt'];
$date=$_POST['cdate'];
$accusedtype=$_SESSION['acc_type'];
$s="null";
$cd=$_SESSION['cid'];
$status="not_processed";
$reg=mysqli_query($conn,"INSERT INTO complaint_student(complaint_id,accused_type,reg_id,complaint_type,accused_name,accused_sem,accused_branch,complaint,witness_name,
witness_type,witness_dept,date,status)VALUES('$id','$accusedtype','$reg','$chk','$name','$s','$branch','$complaint','$witname','$witness','$wcourse','$date','$status')");
$reg=mysqli_query($conn,"update param set complaint_id='$cd'");
header("Location:complaint.php"); 
		 
?>
</body>
</html>