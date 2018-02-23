<?php  
 require "connect.php";
 $id= $_POST["id"];
 $pay_date= $_POST["pay_date"];
 $paid= $_POST["paid"];
 $room= $_POST["room"];
 
 $filetmp = $_FILES["file_img"]["tmp_name"];
 $filename = $_FILES["file_img"]["name"];
 $filetype = $_FILES["file_img"]["type"];
 $filepath = "../receipt_image/".$filename;
 move_uploaded_file($filetmp,$filepath);
	
$sql_query2 = "SELECT `Room` FROM `student_info` WHERE `ID`='201414105'";
$result2 = mysqli_query($con,$sql_query2);  
												 
if($row2= mysqli_fetch_assoc($result2) )  
{  
	$room2=$row2["Room"];
	//echo $room2;
	
	if($room2==$room){
	$sql_query = "insert into hallbill values('$id','$pay_date','$paid','$filename');";  
 
 
		 if(mysqli_query($con,$sql_query))
		 {
			 
			 echo "<h3>Hall Bill for id ".$id." inserted successfully...</h3";
			 
		 }
		 else
		 {
			 echo "Data insertion error".mysqli_error($con);
		 }
	 }
	 
	else
	{
		echo "Invalid ID or room Number".mysqli_error($con);
	} 
 
 }
 ?>  