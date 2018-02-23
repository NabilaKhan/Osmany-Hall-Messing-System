<!DOCTYPE html>
<html>
<head>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
</head>
<body>


<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>





<?php 
 
 require "connect.php";
 session_start(); 
 $role= $_POST["role"]; 

 $username = $_POST["username"]; 

 $password =  $_POST["password"];

 $sql_query = "select name from login where role like '$role' and id like '$username' and password like '$password';";  
  //echo $sql_query;
 $result = mysqli_query($con,$sql_query);
 
 if(mysqli_num_rows($result) >0 )  
 {  
 $row = mysqli_fetch_assoc($result);  
 $name =$row["name"];
 $_SESSION['name'] = $name;
 $_SESSION['id'] = $username;
 $_SESSION['logged_in']="yes";
 $_SESSION['unsuccessful']="no";
 $_SESSION['success']="yes";
 
 //echo "Login Success"; 
 if($role=='student')  header('Location: ../stu_profile.php');
  elseif($role=='manager') header('Location: ../Manager_profile.php');
  else header('Location: ../staff_profile.php');
 //include 'add_property.html';
			
 
 //exit();
 
 }  
 else  
 {   
 
 $_SESSION['unsuccessful']="yes";
 $_SESSION['success']="yes";
 header('Location: ../index.php');
 
 

 }


 ?>  
 
 </body>
</html>