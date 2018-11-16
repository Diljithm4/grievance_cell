<html>


	<html>
	<head>
	<?php
	session_start();
	?>
	</head>
	
	<body>
	<?php
	include 'student2.php';
	
	global $cid1;
include 'dbcon.php';
$r="select * from param";
$r1=mysqli_query($conn,$r);
if($row=mysqli_fetch_assoc($r1))
{
$cid1=$row['complaint_id'];
}
$cid=$cid1+1;
	$_SESSION['cid']=$cid;
$c="complaint_".$cid;
$_SESSION['cid1']=$c;
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
<form name="complaint" method="POST" action="complaint1.php">
	
compliant id<div class="control">
			
<input type="text" name="cmpid" value="<?php echo  $c ?>">
			</div>
		
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;student<div class="control"><input type="radio" name="cmp" value="student">
			</div>
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;faculty<div class="control"><input type="radio" name="cmp" value="faculty">
				</div>
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;facility<div class="control"><input type="radio" name="cmp" value="facility">
				</div>
		
<input type="submit" name="nxt" value="next">
				
</form>
</div>

				</div>			
						
						</div>
							
					</div>
					
				</div>
				
			</div> <!-- .hero -->
			
			</div>
</body>

</html>