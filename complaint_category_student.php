<!DOCTYPE html>

	<html>
	<head>
	<?php
	session_start();
	?>
	<body>
	<?php
	include 'student2.php';
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
	$reg_id=$_SESSION['uid'];	
	$cmp_id=$_SESSION['cid1'];	

	?>
	<form name="f5" action="complaint_category_student1.php" method="post">
	complaint_id<div class="control">
			
	<input type="text" name="t1" value="<?php echo $cmp_id ?>">
				</div>
		
			reg_id<div class="control">
		
				<input type="text" name="t2" value="<?php echo $reg_id ?>">
			</div>
				date
			<div class="control">
				<input type="text" name="d1" value="<?php echo date("Y/m/d") ?>">
			</div>
		<div class="control">
			ragging<input type="radio" value="ragging" name="cmp_type" >
		
		politics<input type="radio" name="cmp_type" value="politics">
	
	sexual abusement<input type="radio" name="cmp_type" value="sexual_abuse">

	</div>
			name
			<div class="control">
			
				<input type="text" name="t5">
			</div>
		SEMESTER
	<div class="control">
	<select name="t6">
		<option value="" selected disabled hidden>-select-</option>
	<option>S1</option>
	<option>S2</option>
	<option>S3</option>
	<option>S4</option>
	<option>S5</option>
	<option>S6</option>
	<option>S7</option>
	<option>S8</option>
	</select>
	</div>
		
				department
			
				<div class="control">
			<select name="t7">
  <option value="MCA">MCA</option>
  <option value="M.Tech">M.Tech</option>
  <option value="CIVIL">CIVIL</option>
  <option value="EEE">EEE</option>
  <option value="EC">EC</option>
  <option value="MECH">MECH</option>				
</select></div>
			
			
		complaint<div class="control">
	<textarea name="txt1"></textarea></div>
		
			
		
		
			witness name<div class="control">
			
			<input type="text" name="wt1">
			</div>
				witness type<div class="control">
				staff<input type="radio" name="n1" value="staff">
		students<input type="radio" name="n1" value="student"></div>

witness department<div class="control">
			<select name="v3">
  <option value="MCA">MCA</option>
  <option value="M.Tech">M.Tech</option>
  <option value="CIVIL">CIVIL</option>
  <option value="EEE">EEE</option>
  <option value="EC">EC</option>
  <option value="MECH">MECH</option>				
</select></div>
			
				<input type="submit" name="uu" value="submit">
			
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