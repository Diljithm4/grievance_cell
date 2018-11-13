
<html>
<head>
<title>alot_student_admin</title>
</head>

<body>
	<form name="f10" method="post" action="alot_student1.php">
		<label>SELECT STUDENT </label>
		
		  <?php  
include 'dbcon.php';
            $query="select * from student";
                $result=mysqli_query($conn,$query);
		?>
		<select name="select1">
		<option value="" selected disabled hidden>-select-</option>
			
			<?php
                while ($row = mysqli_fetch_array($result)) 
					{
						?>
			<option><?php echo $row['student_id'] ?>
			</option>
			<?php
					}
          ?>
    </select>
		<input type="submit" value="select" name="b1">
	</form>
	</body>
</html>