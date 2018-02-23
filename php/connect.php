<?php  
 $db_name = "osmany_hall";  
 $mysql_user = "root";  
 $mysql_pass = "";  
 $server_name = "localhost";  
 $con = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);  
 mysqli_query($con,'SET CHARACTER SET utf8'); 
 mysqli_query($con,"SET SESSION collation_connection ='utf8_general_ci'");
 if(!$con)
 {
	 
	echo "connection failure".mysqli_connect_error();
 }
 else{
	// echo "connection succes<br>";
 }
 
 
 ?>  