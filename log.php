<html>
<head>
<?php
session_start();
?>
</head>

<?php 
								
					
						
					

						$name=$_POST['uname'];
						$pass=$_POST['pname'];
						$_SESSION['uid']=$name;
						$_SESSION['pid']=$pass;

include 'dbcon.php';




$sql = "select type from login where user_id='$name' and password='$pass'";  
$retval=mysqli_query($conn, $sql);  
  
 
if($row = mysqli_fetch_assoc($retval))
{
    $t=$row['type'];
	$_SESSION['type']=$t;
	
   if($t=='student')
		header("Location:student.php"); 
		
		else if($t=='admin')
		header("Location:admin.php"); 
		 else if($t=='councellor')
		header("Location:counceler.php"); 
		 
		
		
	else
?>
	<script>
alert("invalid password");
window.location="login.php";
</script>
	<?php
}
else
?>
	<script>
alert("invalid password");
window.location="login.php";
</script>
	

</html>