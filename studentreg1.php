<?php 


include 'dbcon.php';
$id=$_POST['id'];
$Name=$_POST['name'];
$Course=$_POST['select1'];
$sem=$_POST['select2'];
$mail=$_POST['email'];
$phone=$_POST['phno'];
$type="student";

$reg=mysqli_query($conn,"INSERT INTO student(student_id,name,course,semester,e_mail,phon_number) VALUES('$id','$Name','$Course','$sem','$mail','$phone')");

$reg=mysqli_query($conn,"INSERT INTO login(user_id,password,type)VALUES('$id','$mail','$type')");
header("Location:studentreg.php"); 
		 
		
?>