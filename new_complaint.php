<html>
<head>
<title></title>
</head>
<body>
<table>
		<thead>
		<tr>
		<th>COMPLAINT ID</th>
		<th>STUDENT ID</th>
		<th>COMPLAINT</th>
		<th>CATEGORY</th>	
		<TH>DATE</TH>	
		</tr>
		</thead>
		<tbody>
<tr>
<?php
			include 'dbcon.php';
			    $val="not process";
			    $sql="select * from complaint where status='$val'";
                $result=mysqli_query($conn,$sql);		
			while ($row = mysqli_fetch_array($result)) 
				{
				?>
			
						
			<td><?php echo $row['complaint_id']?></td>	
			<td> <?php echo $row['student_id'] ?></td>
			<td> <?php echo $row['complaint'] ?></td>
			<td><?php echo $row['category'] ?></td>	
			
			<td> <?php echo $row['date'] ?></td>
			
	
				</tr>
				<?php
				}
				?>
</tbody>
					</table>
			
				</html>
				