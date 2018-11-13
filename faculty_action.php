<!DOCTYPE html>

	<html>
	<head>
	<?php
	session_start();
	?>
	</head>
	<body>
	<?php
	include 'admin2.php';
	?>
	<div class="site-content">
	
			<div class="hero">
				<div class="container">
				
					<div class="row">
		
						<div class="col-md-8">
		
							
						</div>
						<div class="navbar-header navbar-left">
	<h1><a href="index.html"><font color="green"><b>Develop a passsion for learning.If you do,<br> You will never cease to grow. </b></font></a></h1>
				
						<div class="col-md-4">
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
							<div class="request-form">


<?php
	global $nid1;
include 'dbcon.php';
$r="select * from param";
$r1=mysqli_query($conn,$r);
if($r=mysqli_fetch_assoc($r1))
{
$nid1=$r['action_id'];
}
$nid=$nid1+1;
$_SESSION['n']=$nid;
$eve="ACTION_".$nid;
$cmp1=$_SESSION['sam1'];

?>
<form name="actn" method="POST" action="faculty_action1.php">

Action id<div class="control">
<input type="text" name="actid"  value="<?php echo $eve ?>" ></div>
Complaint id<div class="control">
<input type="text" name="cmpid" value="<?php echo $cmp1 ?>"></div>

Action<div class="control">
<input type="textarea" name="actiontxt"></textarea></div>
date<div class="control">
<input type="text" name="stdate" value="<?php echo date("Y/m/d") ?>"></div>
<div class="control">
completed<input type="radio" name="st" value="completed">
pending<input type="radio" name="st" value="pending"></div>
<input type="submit" name="btn" value="proced">
</form>


</body>





</html>