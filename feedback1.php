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
$uid=$_REQUEST['b'];
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
                                            <th>ACTION</th>
											
		
		<TH>DATE</TH>	
		<th>STATUS</th>
		<th>CATEGORY</th>
	
	
		
		
			
		
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           
                                        <?php
			include 'dbcon.php';
			
			    $query="select *from facility_action where complaint_id='$uid'";
                $result=mysqli_query($conn,$query);
			    
				while ($row = mysqli_fetch_array($result)) 
				{
				?>
				<td><?php echo $row['action']?></td>
			
			<td> <?php echo $row['date'] ?></td>
			<td> <?php echo $row['status'] ?></td>
			
			<td> <?php echo $row['category'] ?></td>
			
			
	            
				
				
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