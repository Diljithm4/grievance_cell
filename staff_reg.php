<!DOCTYPE html>

	<html>
	<head>
	<script type="text/javascript">
 function valid()
			  {		
			  
 if(f1.t3.value.length!=10)
 {
   alert("phone number should be 10 digit...");
    f1.t3.focus();
   return false;
  }
  if(!isNaN(f1.t2.value))
	    {
		alert('Enter Name in character Format.');
		    f1.t2.focus();
	return false;
		}
  return true;
			  }
			  </script>
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
	
<form name="f1" method="POST" action="staff_reg1.php">

account id
<div class="control">
<input type="text" name="t1" value="" required="required"></div>
name
<div class="control">
<input type="text" name="t2" value="" required></div>

phone number
<div class="control">
<input type="number" name="t3" value="" required></div>
E-mail
<div class="control">
<input type="email" name="t4" value="" required></div>
<input type="submit" name="b1" value="submit" onClick="return valid()">

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

