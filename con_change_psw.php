<!DOCTYPE html>

	<html>
	<head>
	<script type="text/javascript">
	function valid()
	{
		var x=f2.new_psw.value.length;
		if(x<6)
		{
			f2.new_psw.value="password should be 6 letters";
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
	<?php
	$name=$_SESSION['uid'];
	$pass=$_SESSION['pid'];
	?>

	<form method="post" action="change_pswd.php" name="f2">

	user id<div class="control">	
	<input type="text" name="uid_t1" value="<?php echo $name ?>"></div>
		current password<div class="control">	
		<input type="text" name="current_psw" value="<?php echo $pass ?>"></div>
		new password<div class="control">	
		<input type="text" name="new_psw"></div>
		
		
		<input type="submit" name="change_btn" value="change" onClick="return valid();">
		
	</form>

	<?php


include 'dbcon.php';
if(isset($_POST['change_btn']))
{
$nw_password=$_POST['new_psw'];
$b=$_POST['uid_t1'];



$up=mysqli_query($conn,"update login set password='$nw_password' where user_id='$b'");
?>
<script>
window.location="login.php";
</script>
<?php
}
?>
	
	
</body>
</html>