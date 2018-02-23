<?php  
 require "connect.php";
 session_start();
 $id= $_SESSION['id'];
 $date= $_POST["datee"];
 $breakfast= $_POST["breakfast"];
 $lunch= $_POST["lunch"];
 $dinner= $_POST["dinner"];
 
 
 
if(isset($_POST["breakfast"]) && 
   $_POST["breakfast"] == 'yes') 
{
    $b='yes';
}
else
{
    $b='no';
}    

if(isset($_POST["lunch"]) && 
   $_POST["lunch"] == 'yes') 
{
    $l='yes';
}
else
{
    $l='no';
}  

if(isset($_POST["dinner"]) && 
   $_POST["dinner"] == 'yes') 
{
    $d='yes';
}
else
{
    $d='no';
}

$sql_query = "select * from meal where id like '$id' and date like '$date';";  
$result = mysqli_query($con,$sql_query);
 
 if(mysqli_num_rows($result) >0 )  
 {  
	 $sql_query2 ="UPDATE meal
    SET breakfast = '$b',
        lunch= '$l',
		dinner= '$d'
    WHERE id = '$id' and date = '$date' ;";
 
 }  
 else  
 {   
	 $sql_query2 = "insert into meal values('$id','$date','$b','$l','$d');";  
 }  

    
 
 
 
 
 if(mysqli_query($con,$sql_query2))
 {
	 
	 //echo "<h3>Data inserted successfully...</h3";
	 echo 'meal sign complete';
 }
 else
 {
	 echo "Data insertion error".mysqli_error($con);
 }
 ?>  