<?php
	
		$r=$_POST['rd'];
	if($r=="new")
		header("Location:con_faculty_new.php");
	else
		header("Location:con_faculty_pending.php");
	
	?>