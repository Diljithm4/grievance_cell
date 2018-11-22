<!DOCTYPE html>

	<html>
	<head>
	<script type="text/javascript">
	function valid()
	{
		var x=f2.phn.value.length;
		if(f2.name.value=="")
		{
		alert("enter your name")//f2.name.value="enter your name";
		    

		return false;
		}
		if(!isNaN(f2.name.value))
	    {
		alert("name must be in charecter format")//f2.name.value="name must be character format";
		  
	return false;
		}
		if(f2.id.value=="")
		{
		alert("enter your id")//f2.id.value="enter your id";
		    

		return false;
		}
		
		if(f2.email.value=="")
		{
		alert("enter your mail id")//f2.email.value="enter your email";
		    

		return false;
		}
		if(isNaN(f2.phn.value))
	    {
		alert("phone number must be in numeric value")//f2.phn.value="phone number must be number format";
		  
	return false;
		}
		
		if(x!=10)
		{
			alert("invalid phone number")//f2.phn.value="invalid phone number";
			
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
					
	<input type="text" name="name">
				</div>
	STUDENT ID<div class="control">
		
	<input type="text" name="id">	
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
	<input type="email" name="email">
				</div>
	PHONE NO
				<div class="control">
	<input type="text" name="phn">
				</div>
			
	
	<input type="submit" name="submit" value="SUBMIT" onClick="return valid();">
				
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