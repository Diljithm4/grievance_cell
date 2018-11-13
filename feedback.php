<!doctype html>
<html>				
<head>
<style type="text/css">
table, th, td ,tr{
   border: 4px solid black;
   
}
tr:nth-child(even) {background-color: #CDC8B1;}
</style>
<meta charset="utf-8">
<title>complaint view</title>
<?php
session_start();

?>
</head>

<body>
<?php
include 'student3.php';
$uid=$_SESSION['uid'];
?>
<br>
<br><br><br><br><br><br>
		 <div class="panel panel-default">
                        <div class="panel-heading">
                            <center>Feedback</center>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
								<font color="#000">
                                    <thead>
                                        <tr>
                                            <th>COMPLAINT</th>
		
		<TH>DATE</TH>	
		
		
		<TH>###</TH>	
		
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           
                                        <?php
			include 'dbcon.php';
			
			    $query="select *from complaint_student where reg_id='$uid'";
                $result=mysqli_query($conn,$query);
			    
				while ($row = mysqli_fetch_array($result)) 
				{
				?>
				<td><?php echo $row['complaint']?></td>
			
			<td> <?php echo $row['date'] ?></td>
			<td> <a href="feedback1.php?b=<?php echo $row['complaint_id']?>"><button>view</button></a>
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
                      <!-- End  Basic Table  -->
	
</body>
</html>