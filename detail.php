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
include 'admin3.php';
?>
</head>

<body>
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
                                            <th>COMPLAINT TYPE</th>
		<th>ACCUSSED TYPE</th>
		<th>NAME</th>	
		<th>COMPLAINT</th>
		<TH>DATE</TH>	
		
		
		
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                           
                                        <?php
			include 'dbcon.php';
			
			    $query="select *from complaint_student order by complaint_type";
                $result=mysqli_query($conn,$query);
			    
				while ($row = mysqli_fetch_array($result)) 
				{
				?>
				<td><?php echo $row['complaint_type']?></td>
			<td><?php echo $row['accused_type']?></td>	
			<td> <?php echo $row['accused_name'] ?></td>
			<td><?php echo $row['complaint'] ?></td>	
			<td> <?php echo $row['date'] ?></td>
			
				
				
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