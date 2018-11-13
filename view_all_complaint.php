<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>complaint view</title>
</head>

<body>
	
	<table>
		<thead>
		<tr>
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
			    $query="select * from complaint";
                $result=mysqli_query($conn,$query);
			
				while ($row = mysqli_fetch_array($result)) 
				{
				?>
			<td><?php echo $row['student_id']?></td>	
			<td> <?php echo $row['complaint'] ?></td>
			<td><?php echo $row['category'] ?></td>	
			<td> <?php echo $row['date'] ?></td>
			
				
				 <td><a href="view_complaint1.php?b=<?php echo $row['complaint_id']?>"><button>view</font></button></a>
						   </td>
	            
		</tr>
			
		<?php
		 }
		?>
			  
			
		</tbody>
		
	</table>
</body>
</html>