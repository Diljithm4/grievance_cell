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
						<br>
						<br>
						
							<div class="request-form">
	<form name="f11" method="POST" action="facility_new2.php">
		<?php 
		
		include 'dbcon.php';
			$val=$_GET['b'];
		    
	       
		    $sql="select *from about_facility where complaint_id='$val'";
			$retrival=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($retrival);
?>
		
		complaint Id
			<div class="control">	
		<input type="text" name="b" value="<?php echo $row['complaint_id'] ?>" readonly="readonly">
				</div>
			
		Category<div class="control">
				
		<input type="text" name="std_id" value="<?php echo $row['category'] ?>" readonly="readonly">
			</div>
			<tr><td>
		complaint<div class="control">
				
				<input type="text" value="<?php echo $row['complaint'] ?>" readonly="readonly" >
				</div>
			
		date<div class="control">
		
		<input type="text" name="txtdate" value="<?php echo $row['date'] ?>" readonly="readonly">
				</div>
			
				reg_id<div class="control">
				 <input type="text" name="reg" value="<?php echo $row['reg_id'] ?>" readonly="readonly">
				</div>
					
						   
						  <input type="submit" value="action" name="act">
						  
						   
		

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