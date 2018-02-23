
	<?php
	session_start();
	
	//$_SESSION['success']="yes";
	if(session_destroy())
	{
		session_start();
		$_SESSION['success']="yes";
		$_SESSION['unsuccessful']="no";
		
		header('Location: ../index.php');
	}
	
	?>
