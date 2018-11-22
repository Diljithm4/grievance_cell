<?php 


include 'dbcon.php';
$id=$_POST['id'];
$Name=$_POST['name'];
$Course=$_POST['select1'];
$sem=$_POST['select2'];
$mail=$_POST['email'];
$ph=$_POST['phn'];

$type="student";
 $query="select *from student where reg_id='$id'";
                $result=mysqli_query($conn,$query);
			
					if($row = mysqli_fetch_array($result)) 
				{
					?>
				<script>
				alert("the student is already exist");
				window.location="studentreg.php";
				</script>
				<?php
				}



else
{
	
$reg=mysqli_query($conn,"INSERT INTO student(reg_id,name,course,semester,e_mail,phon_number) VALUES('$id','$Name','$Course','$sem','$mail','$ph')");

$reg=mysqli_query($conn,"INSERT INTO login(user_id,password,type)VALUES('$id','$mail','$type')");
header("Location:studentreg.php"); 
		 
}	
?>