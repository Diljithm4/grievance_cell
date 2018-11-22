<!DOCTYPE html>

	<html>
	<head>
	<script type="text/javascript">
	function valid()
	{
		var x=f2.t3.value.length;
		if(f2.t1.value=="")
		{
		//f2.t1.value="enter your account id";
		alert("enter your account id")
		    

		return false;
		}
		if(f2.t2.value=="")
		{
		//f2.t2.value="enter your name";
		alert("enter your name")
		    

		return false;
		}
		if(!isNaN(f2.t2.value))
	    {
		//f2.t2.value="name must be character format";
		alert("name must be in charecter format")
		  
	return false;
		}
		if(f2.t3.value=="")
		{
		//f2.t3.value="enter your phone number";
		alert("enter your phone number")
		    

		return false;
		}
		if(isNaN(f2.t3.value))
	    {
		//f2.t3.value="phone number must be number format";
		alert("phone number must be in number format")
		  
	return false;
		}
		
		if(x!=10)
		{
			//f2.t3.value="invalid phone number";
			alert("invalid phone number")
			return false;
		}
		if(f2.t4.value=="")
		{
		//f2.t4.value="enter your email";
		  alert("enter your mail id")  

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
	
<form name="f2" method="POST" action="staff_reg1.php">

account id
<div class="control">
<input type="text" name="t1" value=""></div>
name
<div class="control">
<input type="text" name="t2" value=""></div>

phone number
<div class="control">
<input type="text" name="t3" value=""></div>
E-mail
<div class="control">
<input type="email" name="t4" value=""></div>
<input type="submit" name="b1" value="submit" onClick="return valid();">

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

