<?php
	
		$r=$_POST['rd'];
	if($r=="new")
		header("Location:facility_new.php");
	else
		header("Location:facility_pending.php");
	
	?>