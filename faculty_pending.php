<!doctype html>
<html>				
<head>
<?php
session_start();
?>
<style type="text/css">
table, th, td ,tr{
   border: 4px solid black;
   
}
tr:nth-child(even) {background-color: #CDC8B1;}
</style>
<meta charset="utf-8">
<title>complaint view</title>

</head>

<body>
<?php

include 'admin3.php';
$cat=$_SESSION['r1'];
?>
<br>
<br><br><br><br><br><br>
		 <div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Complaints</center>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
								<font color="#000">
                                    <thead>
		<tr>
		<th>COMPLAINT ID</th>
	
		<th>REGISTER ID</th>
		<th>COMPLAINT</th>	
		<th>ACCUSED NAME</th>
		<th>#</th>
		</tr>
		</thead>
		<tbody>
			<tr>
			<?php
			include 'dbcon.php';
			$s="pending";
		
			    $query="select *from complaint_student where status='$s' && accused_type='$cat'";
                $result=mysqli_query($conn,$query);
			
					while($row = mysqli_fetch_array($result)) 
				{
				?>
				<td><?php echo $row['complaint_id']?></td>
		
			<td> <?php echo $row['reg_id'] ?></td>
			<td> <?php echo $row['complaint'] ?></td>
			<td><?php echo $row['accused_name'] ?></td>	
			
			
				
				<td> <a href="faculty_pending1.php?b=<?php echo $row['complaint_id']?>"><button>view</button></a>
						   </td>
	            
		</tr>
			
		<?php
		 }
		?>
			  
	   </tbody>
									</font>
                                </table>
                            </div>
                        </div>
                    </div>
</body>
</html>