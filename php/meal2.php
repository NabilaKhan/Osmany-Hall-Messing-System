<?php
 require "connect.php";
 session_start();
 $id= $_SESSION['id'];
 if(isset($_POST['datee']) && !empty($_POST['datee'])){
  $date = $_POST['datee'];
}
 else{
   $date = date('Y-m-d');
   $date = date('Y-m-d', strtotime($date .' +1 day'));
  //  echo $date."</br>";
 }
 //check whether it is valid or not
 $curr_date = date('Y-m-d'); //this is current date
// echo $date."</br>".$curr_date."</br>";
// var_dump($date);
 if(strtotime($curr_date) >= strtotime($date)){
    ?>
	<div class="alert alert-warning">
    <strong>Warning!</strong> You can't make changes to previous dates.
  </div>
<?php //user, moja loss??
    exit;
 }
 //echo $date."</br>";
 if(isset($_POST['breakfast'])) $breakfast= $_POST['breakfast'];
 if(isset($_POST['lunch'])) $lunch= $_POST['lunch'];
 if(isset($_POST['dinner'])) $dinner= $_POST['dinner'];

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
   ?>
   <div class="alert alert-success">
     <strong>Success!</strong> You signed meal for the day <?php $date= date_create($date); echo date_format($date,'d-m-Y'); ?> successfully.
  </div>
<?php
 }
 else
 {
	 echo "Data insertion error".mysqli_error($con);
 }
 ?>
