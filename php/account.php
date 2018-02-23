<?php  
 require "connect.php";
 $name= $_POST["name"];
 $id= $_POST["id"];
 $session=$_POST["session"];
 $contact= $_POST["contact"];
 $birthdate= $_POST["birthdate"];
 $blood= $_POST["blood"];
 $mother_name = $_POST["mother_name"];
 $mother_occu = $_POST["mother_occu"];
 $father_name = $_POST["father_name"];
 $father_occu =$_POST["father_occu"];
 $present=$_POST["present"];
 $permanent= $_POST["permanent"];
 $relation= $_POST["relation"];
 $guardian_name= $_POST["gurdian_name"];
 $guardian_occu= $_POST["gurdian_occu"];
 $gurdian_contact= $_POST["gurdian_contact"];
 $seat= $_POST["seat"];
 $room= $_POST["room"];
 $amount= $_POST["amount"];
 $paid= $_POST["paid"];
 
 
 
 $sql_query = "insert into student_info values('$name','$id','$session','$contact','$birthdate','$blood','$father_name','$father_occu','$mother_name',
 '$mother_occu','$present','$permanent','$relation','$guardian_name','$gurdian_contact','$guardian_occu',' $seat','$room','$amount','$paid');";  
 
 
 if(mysqli_query($con,$sql_query))
 {
	 
	 //echo "<h3>Data inserted successfully...</h3";
	echo '<script>
	function myFunction() {
    alert("Student Account Created!");
	}
	myFunction();
	</script>';
	//header("Location: ../Manager_profile.php");
	
 }
 else
 {
	 $e= "Data insertion error .".mysqli_error($con);
	 echo '<script>
	function myFunction2() {
    alert("'. $e.'!");
	}
	myFunction2();
	</script>';
 }
 ?> 
<script>
	function myFunction() {
    alert("Student Account Created!");
	}
</script> 