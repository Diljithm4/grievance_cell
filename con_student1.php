<?php
	
		$r=$_POST['rd'];
	if($r=="new")
		header("Location:con_student_new.php");
	else
		header("Location:con_student_pending.php");
	
	?>