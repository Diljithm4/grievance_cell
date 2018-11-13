<!DOCTYPE html>

	<html>
	<head>
	<script type="text/javascript">
 function valid()
			  {		
			  if(isNaN(f2.phno.value))
	    {
		alert('Enter Phone number in numeric format.');
		    f2.phno.focus();

		}
 if(f2.phno.value.length!=10)
 {
   alert("phone number should be 10 digit...");
    f2.phno.focus();
   return false;
  }
  
  
  	if(!isNaN(f2.name.value))
	    {
		alert('Enter Name in character Format.');
		    f2.name.focus();
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
	<form name="f2" action="studentreg1.php" method="post">
		
	NAME<div class="control">
					
	<input type="text" name="name" required>
				</div>
	STUDENT ID<div class="control">
		
	<input type="text" name="id" required>	
		</div>
			COURSE<div class="control">
		
	<select name="select1" required>
		<option value="" selected disabled hidden>-select-</option>
	<option>Btech</option>
	<option>Mtech</option>
	<option>MCA</option>
	</select>
	</div>
				
	SEMESTER
	<div class="control">
	<select name="select2" required>
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
			
	E-mail
				<div class="control">
	<input type="email" name="email" required>
				</div>
	PHONE NO
				<div class="control">
	 <input type="text" name="phno" required>
				</div>
			
	
	<input type="submit" name="submit" value="SUBMIT" onClick="return valid()">
				
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