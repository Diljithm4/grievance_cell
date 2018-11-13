<?php
	
		$r=$_POST['rd'];
	if($r=="new")
		header("Location:student_new.php");
	else
		header("Location:student_pending.php");
	
	?>