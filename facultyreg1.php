<?php 


include 'dbcon.php';
$Account_id=$_POST['id'];
$Name=$_POST['name'];
$Role=$_POST['s1'];
$phone=$_POST['phn'];
$mail=$_POST['mail'];

$reg=mysqli_query($conn,"INSERT INTO faculty_registration(account_id,name,role,phon_number,e_mail) VALUES('$Account_id','$Name','$Role','$phone','$mail')");
$reg=mysqli_query($conn,"INSERT INTO login(user_id,password,type)VALUES('$Account_id','$mail','$Role')");
?>