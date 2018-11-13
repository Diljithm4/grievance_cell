<!DOCTYPE html>

	<html>
	<head>
	<?php
	session_start();
	?>
	</head>
	<body>
	<?php
	include 'counceler2.php';
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
	<form name="f11" method="POST" action="con_faculty_new2.php">
		<?php 
		$cat=$_SESSION['r1'];
		include 'dbcon.php';
			$val=$_GET['b'];
		
		    
			 $query="select *from complaint_student where complaint_id='$val' && accused_type='$cat'";
                $result=mysqli_query($conn,$query);
			
				$row = mysqli_fetch_array($result);
				
	       
		    
?>
		
		complaint Id<div class="control">
				
		<input type="text" name="b" value="<?php echo $row['complaint_id'] ?>" readonly="readonly">
				</div>
			
		accused type<div class="control">
				
		<input type="text" name="std_id" value="<?php echo $row['accused_type'] ?>" readonly="readonly">
				</div>
			
		registration id<div class="control">
				
				<input type="text" value="<?php echo $row['reg_id'] ?>" readonly="readonly" >
				
				</div>
			
		complaint type
				<div class="control">
		<input type="text" name="txtdate" value="<?php echo $row['complaint_type'] ?>" readonly="readonly">
				</div>
				accused name<div class="control">
				 <input type="text" name="reg" value="<?php echo $row['accused_name'] ?>" readonly="readonly">
				</div>
			accused sem<div class="control">
				 <input type="text" name="sem" value="<?php echo $row['accused_sem'] ?>" readonly="readonly">
				</div>
				accused branch<div class="control">
				 <input type="text" name="reg" value="<?php echo $row['accused_branch'] ?>" readonly="readonly"></div>
				complaint<div class="control">
				<input type="text" name="reg" value="<?php echo $row['complaint'] ?>" readonly="readonly">
				</div>
				
				witness name<div class="control">
				<input type="text" name="reg" value="<?php echo $row['witness_name'] ?>" readonly="readonly">
				</div>
		witness type<div class="control">
				 <input type="text" name="reg" value="<?php echo $row['witness_type'] ?>" readonly="readonly">
				</div>
				witness department<div class="control">
				<input type="text" name="reg" value="<?php echo $row['witness_dept'] ?>" readonly="readonly">
				</div>
			date<div class="control">
				<input type="text" name="reg" value="<?php echo $row['date'] ?>" readonly="readonly">
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