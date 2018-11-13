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
		<th>COMPLAINT ID</th>
		<th>CATEGORY</th>
		<th>COMPLAINT</th>
		<TH>DATE</TH>	
		<th>REGISTER ID</th>	
		<th>###</th>	
	
		</tr>
		</thead>
		<tbody>
			<tr>
			<?php
			include 'dbcon.php';
			$s="pending";
			    $query="select *from about_facility where status='$s'";
                $result=mysqli_query($conn,$query);
			    
				while ($row = mysqli_fetch_array($result)) 
				{
				?>
				<td><?php echo $row['complaint_id']?></td>
			<td><?php echo $row['category']?></td>	
			<td> <?php echo $row['complaint'] ?></td>
			<td><?php echo $row['date'] ?></td>	
			<td> <?php echo $row['reg_id'] ?></td>
			
				
				<td> <a href="facility_pending1.php?b=<?php echo $row['complaint_id']?>"><button>view</button></a>
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