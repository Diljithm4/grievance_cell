<html>
<head>
<title>complaint about-faculty</title>
<script type="text/javascript"> 
function valid()
	{
		
		if(!isNaN(complaintfclty.cmptxt.value))
	    {
		alert('Enter valid complaint.');
		    complaintfclty.cmptxt.focus();
	return false;
			  }
		
		return true;
	}
</script>
<?php
session_start();
?>
</head>

<body>
<?php

	include 'admin2.php';
$sid=$_SESSION['uid'];
$cid=$_SESSION['cid'];
$cid01=$_SESSION['cid1'];
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
<form name="complaintfclty" method="POST" action="about_faculty1.php">
compliant id
<div class="control">
<input type="text" name="cmpid" value="<?php echo $cid01 ?>"></div>
registration id
<div class="control">
<input type="text" name="regid" value="<?php echo $sid ?>" ></div>
faculty-name
<div class="control">
<input type="text" name="fname" ></div>
Branch
<div class="control">
<select name="s1" ><option value="" selected disabled hidden>-select-</option>
<option>MCA</option>
<option>Btech</option>
<option>Mtech</option><br>
</select></div>
<div class="control" required>
<center>compliant-type</center>
<input type="radio" name="x1" value="sexual_abuse" required >sexual abuse
<input type="radio" name="x1" value="ragging" required>ragging
<input type="radio" name="x1" value="harrasment" required>harrasment
<input type="radio" name="x1" value="politics"required>politics

</div>

<center>type of witness</center>
<div class="control" >
<input type="radio" name="x" value="faculty" >faculty
<input type="radio" name="x" value="student">student
<input type="radio" name="x" value="no" required >no witness
</div>
if any specify name,course:
<div class="control">
<input type="text" name="wn" >
</div>
<div class="control">
<select name="s3"><option value="" selected disabled hidden>-select-</option>
<option>MCA</option>
<option>Btech</option>
<option>Mtech</option>
</select></div>
complaint
<div class="control" >
<textarea name="cmptxt" required>
</textarea>
</div>
date
<div class="control" >
<input type="text" name="cdate" value="<?php echo date("Y/m/d") ?>">
</div>


<input type="submit" name="sbt" value="submit" onClick="return valid();">
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