<html>
<head>
<title>about facility</title>
	<?php
	session_start();
	?>
</head>
	<body>
	<?php
	
	include 'student2.php';

	$reg_id=$_SESSION['uid'];	
	$cmp_id=$_SESSION['cid1'];	

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
<form name="facility" method="post" action="about_facility1.php">
	
registration id
<div class="control">
<input type="text" name="t1" value="<?php echo $reg_id ?>">
</div>
	
complaint id <div class="control"><input type="text" name="t2" value="<?php echo $cmp_id ?>">
	</div>	
category of facility complaint
	<div class="control">
library<input type="checkbox" name="cat[]" value="library">
sanitary<input type="checkbox" name="cat[]" value="sanitary">
water<input type="checkbox" name="cat[]" value="water">
canteen<input type="checkbox" name="cat[]" value="canteen">
laboratory<input type="checkbox" name="cat[]" value="laboratory">
electric<input type="checkbox" name="cat[]" value="electric">
	</div>		
complaint<div class="control"><textarea name="txt1" required></textarea></div>
			
			date<div class="control"><input type="text" name="dt" value="<?php echo date("Y/m/d") ?>"/></div>
		

<input type="submit" name="sb" value="submit">
			
</form>
</div>
</div>
							
						
						</div>
							
					</div>
					
				</div>
				
			</div> <!-- .hero -->
			
			</div>
			
</html>