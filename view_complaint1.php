	<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>view complaint</title>
</head>

<body>
	<form name="f11" method="POST" action="view_complaint1.php">
		<?php 
		
		include 'dbcon.php';
			$val=$_REQUEST['b'];
		    $sql="select *from about_facility where complaint_id='$val'";
			$retrival=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($retrival);
?>
		<table>
			<tr><td>
		<label>complaint Id</label>
				</td>
				<td>
		<input type="text" name="cmp_id" value="<?php echo $row['complaint_id'] ?>" readonly="readonly">
				</td></tr>
				<tr><td>
		<label>category</label>
				</td><td>
	    <input type="text" name="cat" value="<?php echo $row['category'] ?>" readonly="readonly">
				</td></tr>
			<tr><td>
		<label>complaint</label>
				</td><td>
		<input type="text" name="txt" value="<?php echo $row['complaint'] ?>" readonly="readonly" >
				</td></tr>
			
			<tr><td>
		<label>date</label>
				</td><td>
		<input type="text" name="txtdate" value="<?php echo $row['date'] ?>" readonly="readonly">
				</td></tr>
				<tr><td>
		<label>registration id</label>
				</td><td>
	    <input type="text" name="regid" value="<?php echo $row['reg_id'] ?>" readonly="readonly">
				</td></tr>
			<tr>
			 <td><a href="view_complaint1.php?b=<?php echo $row['complaint_id']?>"><button name="act">action</font></button></a>
						   </td>
	 <td><a href="forward_complaint.php?b=<?php echo $row['complaint_id']?>"><button name="re">forward</font></button></a>
						   </td></tr>
	
	</form>
	<?php
	
if(isset($_POST['re']))
{

$b=$_POST['cmp_id'];
$s="counceler";


$sql = mysqli_query($conn,"update about_facility set status='$s' where complaint_id='$b'"); 

}
if(isset($_POST['act']))
{
	
		header("Location:facility_action.php"); 
	
}

     ?>
	
		
</body>
</html>