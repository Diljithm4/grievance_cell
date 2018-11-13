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

?>
<br>
<br><br><br><br><br><br>
		 <div class="panel panel-default">
                        <div class="panel-heading">
                            <center>REPORT</center>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
								<font color="#000">
                                    <thead>
		<tr>
		<th>COMPLAINT TYPE</th>
	
		
		<th>NUMBER OF COMPLAINT</th>	
		
		</tr>
		</thead>
		<tbody>
			<tr>
			<?php
			include 'dbcon.php';
			
			    $query="select complaint_type,count(*) from complaint_student GROUP BY complaint_type";
                $result=mysqli_query($conn,$query);
			
					while($row = mysqli_fetch_array($result)) 
				{
				?>
				<td><?php echo $row[0]?></td>
		
			<td> <?php echo $row[1] ?></td>
			
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