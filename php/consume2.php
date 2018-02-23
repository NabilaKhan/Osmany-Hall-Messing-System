<?php
 require "connect.php";
session_start();
 $id= $_SESSION['id'];
 $date= $_POST["datee"];
 
 $b_items= $_POST["b_items"];
 $b_ata= $_POST["b_ata"];
 $b_price_ata= $_POST["b_price_ata"];
 $b_dal= $_POST["b_dal"];
 $b_price_dal= $_POST["b_price_dal"];
 $b_egg= $_POST["b_egg"];
 $b_price_egg= $_POST["b_price_egg"];
 $b_chillies= $_POST["b_chillies"];
 $b_price_chillies= $_POST["b_price_chillies"];
 $b_onions= $_POST["b_onions"];
 $b_price_onions= $_POST["b_price_onions"];
 $b_total=($b_ata*$b_price_ata)+($b_dal*$b_price_dal)+($b_egg*$b_price_egg)+($b_chillies*$b_price_chillies)+($b_onions*$b_price_onions);
 
 
 $l_items= $_POST["l_items"];
 $l_rice= $_POST["l_rice"];
 $l_price_rice= $_POST["l_price_rice"];
 $l_chicken= $_POST["l_chicken"];
 $l_price_chicken= $_POST["l_price_chicken"];
 $l_beef= $_POST["l_beef"];
 $l_price_beef= $_POST["l_price_beef"];
 $l_fish= $_POST["l_fish"];
 $l_price_fish= $_POST["l_price_fish"];
 $l_potato= $_POST["l_potato"];
 $l_price_potato= $_POST["l_price_potato"];
 $l_vege= $_POST["l_vege"];
 $l_price_vege= $_POST["l_price_vege"];
 $l_chillies= $_POST["l_chillies"];
 $l_price_chillies= $_POST["l_price_chillies"];
 $l_onions= $_POST["l_onions"];
 $l_price_onions= $_POST["l_price_onions"];
 $l_total=($l_rice*$l_price_rice)+($l_chicken*$l_price_chicken)+($l_beef*$l_price_beef)+($l_fish*$l_price_fish)+($l_potato*$l_price_potato)+($l_vege*$l_price_vege)
 +($l_chillies*$l_price_chillies)+($l_onions*$l_price_onions);

 
 
 $d_items= $_POST["d_items"];
 $d_rice= $_POST["d_rice"];
 $d_price_rice= $_POST["d_price_rice"];
 $d_chicken= $_POST["d_chicken"];
 $d_price_chicken= $_POST["d_price_chicken"];
 $d_beef= $_POST["d_beef"];
 $d_price_beef= $_POST["d_price_beef"];
 $d_fish= $_POST["d_fish"];
 $d_price_fish= $_POST["d_price_fish"];
 $d_potato= $_POST["d_potato"];
 $d_price_potato= $_POST["d_price_potato"];
 $d_vege= $_POST["d_vege"];
 $d_price_vege= $_POST["d_price_vege"];
 $d_chillies= $_POST["d_chillies"];
 $d_price_chillies= $_POST["d_price_chillies"];
 $d_onions= $_POST["d_onions"];
 $d_price_onions= $_POST["d_price_onions"];
 $d_total=($d_rice*$d_price_rice)+($d_chicken*$d_price_chicken)+($d_beef*$d_price_beef)+($d_fish*$d_price_fish)+($d_potato*$d_price_potato)+($d_vege*$d_price_vege)
 +($d_chillies*$d_price_chillies)+($d_onions*$d_price_onions);

 
 


$sql_query = "select * from breakfast where date like '$date';";  
$result = mysqli_query($con,$sql_query);
 
 if(mysqli_num_rows($result) >0 )  
 {  
	 $sql_query2 ="UPDATE breakfast
    SET items = '$b_items',
       	ata= '$b_ata',
		price_ata= '$b_price_ata',
		dal = '$b_dal',
        price_dal= '$b_price_dal',
		egg= '$b_egg',
		price_egg = '$b_price_egg',
        chillies= '$b_chillies',
		price_chillies= '$b_price_chillies',
		onions= '$b_onions',
		price_onions = '$b_price_onions',
        total= '$b_total'
		
		WHERE date = '$date' ;";
 
 }  
 else  
 {   
	 $sql_query2 = "insert into breakfast values('$date','$b_items','$b_ata','$b_price_ata','$b_dal','$b_price_dal','$b_egg','$b_price_egg',
	 '$b_chillies','$b_price_chillies','$b_onions','$b_price_onions','$b_total');";  
 }  

    
if(mysqli_query($con,$sql_query2))
 {
	 
	 //echo "<h3>Data inserted successfully...</h3";
	 echo 'breakfast complete';
 }
 else
 {
	 echo "Data insertion error".mysqli_error($con);
 }
 
 
 $sql_query3 = "select * from lunch where date like '$date';";  
$result3 = mysqli_query($con,$sql_query3);
 
 if(mysqli_num_rows($result3) >0 )  
 {  
	 $sql_query4 ="UPDATE lunch
    SET items = '$l_items',
        rice= '$l_rice',
		price_rice= '$l_price_rice',
		chicken = '$l_chicken',
        price_chicken= '$l_price_chicken',
		beef= '$l_beef',
		price_beef = '$l_price_beef',
        fish= '$l_fish',
		price_fish= '$l_price_fish',
		potato= '$l_potato',
		price_potato = '$l_price_potato',
		vegetable= '$l_vege',
		price_vege = '$l_price_vege',
        chillies= '$l_chillies',
		price_chillies	= '$l_price_chillies',
		onions= '$l_onions',
		price_onions = '$l_price_onions',
        total= '$l_total'
		
		WHERE date = '$date' ;";
 
 }  
 else  
 {   
	 $sql_query4 = "insert into lunch values('$date','$l_items','$l_rice','$l_price_rice','$l_chicken','$l_price_chicken','$l_beef','$l_price_beef',
	 '$l_fish','$l_price_fish','$l_potato','$l_price_potato','$l_vege','$l_price_vege','$l_chillies',
	 '$l_price_chillies','$l_onions','$l_price_onions','$l_total');";  
 }  

    
if(mysqli_query($con,$sql_query4))
 {
	 
	 //echo "<h3>Data inserted successfully...</h3";
	 echo 'lunch complete';
 }
 else
 {
	 echo "Data insertion error".mysqli_error($con);
 }
 
 
 $sql_query5 = "select * from dinner where date like '$date';";  
$result5 = mysqli_query($con,$sql_query5);
 
 if(mysqli_num_rows($result5) >0 )  
 {  
	 $sql_query6 ="UPDATE dinner
    SET items = '$d_items',
       rice= '$d_rice',
		price_rice= '$d_price_rice',
		chicken = '$d_chicken',
        price_chicken= '$d_price_chicken',
		beef= '$d_beef',
		price_beef = '$d_price_beef',
        fish= '$d_fish',
		price_fish= '$d_price_fish',
		potato= '$d_potato',
		price_potato = '$d_price_potato',
		vegetable= '$d_vege',
		price_vege = '$d_price_vege',
        chillies= '$d_chillies',
		price_chillies	= '$d_price_chillies',
		onions= '$d_onions',
		price_onions = '$d_price_onions',
        total= '$d_total'
		
		WHERE date = '$date' ;";
 
 }  
 else  
 {   
	 $sql_query6 = "insert into dinner values('$date','$d_items','$d_rice','$d_price_rice','$d_chicken','$d_price_chicken','$d_beef','$d_price_beef',
	 '$d_fish','$d_price_fish','$d_potato','$d_price_potato','$$d_vege','$d_price_vege','$d_chillies',
	 '$d_price_chillies','$d_onions','$d_price_onions','$d_total');";  
 }  

    
if(mysqli_query($con,$sql_query6))
 {
	 
	 //echo "<h3>Data inserted successfully...</h3";
	 echo 'dinner complete';
 }
 else
 {
	 echo "Data insertion error".mysqli_error($con);
 }
 
												 
												 
	$sql_query7 = "SELECT `id`, `breakfast`, `lunch`, `dinner` FROM `meal` 
	WHERE `date`='$date';";  
	//echo $sql_query;
	$result7 = mysqli_query($con,$sql_query7);  
	while($row = mysqli_fetch_assoc($result7) )  
    {  

		$id =$row["id"];
		//echo $id;
		$b=$row["breakfast"];
		//echo $b;
		$l =$row["lunch"]; 
		//echo $l;
		$d =$row["dinner"]; 
		//echo $d;
		
		if($b=='yes'){
			$b_t=$b_total;
		}
		else{
			$b_t=0;
		}
		
		//echo $b_t;
		
		if($l=='yes'){
			$l_t=$l_total;
		}
		else{
			$l_t=0;
		}
		
			//echo $l_t;
		if($d=='yes'){
			$d_t=$d_total;
		}
		else{
			$d_t=0;
		}
		
			//echo $d_t;
			
		$total=$b_t+$l_t+$d_t;
		
		//echo $total;
		
		$sql_query8 = "insert into messbill (id,date,breakfast,lunch,dinner,Bill) values ('$id','$date','$b_t','$l_t','$d_t','$total');";  
		$result8=mysqli_query($con, $sql_query8);
	}
	
	$current_date= date("Y-m-d");
	//echo $current_date;
	$current_day=date("d");
	//echo $current_day;
	
	
	if($current_day=='1')
	{
		$current_month=date("m");
		if($current_month=='1')
		{
			$current_year=date('Y')-1;
			$current_month='12';
		}
		else
		{
			$current_year=date('Y');
			$current_month=$current_month-1;
		}
		$start_date=$current_year.'-'.$current_month.'-'.'1';
		//echo $start_date;
		if($current_month=='2')
		{
			$end_date=$current_year.'-'.$current_month.'-'.'28';
		}
		else if($current_month=='1' || $current_month=='3' || $current_month=='5' || $current_month=='7' || $current_month=='8' || $current_month=='10' || $current_month=='12')
		{
			$end_date=$current_year.'-'.$current_month.'-'.'31';
		}
		else
		{
			$end_date=$current_year.'-'.$current_month.'-'.'30';
		}
		echo $end_date;
		var_dump($start_date);
		 $sql_query9 = "SELECT `Bill` FROM `messbill` WHERE `id`='$id' AND `date` BETWEEN  $start_date AND $end_date;";  
		 $bill=0;
												 //echo $sql_query;
												 $result9 = mysqli_query($con,$sql_query9);  
												 while($row9 = mysqli_fetch_assoc($result9) )  
												 {  

												 $total =$row["total"]; 
												 $bill=$bill+$total;
												 }
												 
												 $sql_query10 = "insert into mess_month (id,year,month,bill) values ('$id','$current_year','$current_month','$bill');";  
												echo $sql_query10;
												$result10=mysqli_query($con, $sql_query10);
	}
 ?>  