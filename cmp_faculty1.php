<?php
	
		$r=$_POST['rd'];
	if($r=="new")
		header("Location:faculty_new.php");
	else
		header("Location:faculty_pending.php");
	
	?>