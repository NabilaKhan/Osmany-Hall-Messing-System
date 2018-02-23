<?php  
 require "connect.php";
 
 
 
 $current_date= date("Y-m-d") ;
	//echo $current_date;
	$current_day=date("d");
	//echo $current_day;
	
	
	if($current_day=='1')
	{
		$current_month=date("m");
		if($current_month=='1')
		{
			$current_year=date('y')-1;
			$current_month='12';
		}
		else
		{
			$current_year=date('y');
			$current_month=$current_month-1;
		}
		$start_date=$current_year.'-'.$current_month.'-'.'1';
		echo $start_date;
	}
	

 
 
 
 //$sql_query = "insert into house values('$area','$location','$address','$rent','$advance','$room_no','$gender','$occupation','$available',
 //'$email','$name','$phone','');";  
 
 
// if(mysqli_query($con,$sql_query))
// {
	 
	 //echo "<h3>Data inserted successfully...</h3";
	 //include 'thank_you.html';
// }
// else
// {
	 //echo "Data insertion error".mysqli_error($con);
// }
 ?>  