
	<?php
	session_unset();
	unset($_SESSION['logged_in']);  
	session_destroy(); 
	header('Location: ../index.html');
	?>
	