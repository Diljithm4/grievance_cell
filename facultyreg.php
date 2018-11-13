<html>
<head>
<title>Faculty Registration</title>
</head>
<body>
	<?php
	global $nid1;
include 'dbcon.php';
$r="select * from param";
$r1=mysqli_query($conn,$r);
if($row=mysqli_fetch_assoc($r1))
{
$nid1=$row['stf_id'];
}
$nid=$nid1+1;
$eve="STAFF_".$nid;

?>

<form name="f1" method=POST action="facultyreg1.php">
<h2>ACCOUNT REGISTRATION</h2>
<label>account id</label>
<input type="text" name="id" value="<?php echo $eve ?>">
<label>faculty name</label>
<input type="text" name="name" value"">
<label>Role</label>
<select name="s1"><option value="" selected disabled hidden>-select-</option>
<option>staff</option>
<option>counselor</opton>
</select>
<label>phone number</label>
<input type="text" name="phn" value>
<label>E-mail</label>
<input type="email" name="mail" value="">
	<input type="reset" name="reset" value="RESET">
<input type="submit"name="b1" value="SUBMIT">
</form>
	<?php
	$reg=mysqli_query($conn,"update param set stf_id='$nid'");
	?>
</body>
</html>

