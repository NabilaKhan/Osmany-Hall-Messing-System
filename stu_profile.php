

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Osmany Hall Messing System</title>

<!--Navbar-->
	 <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
     
    
    <!-- Custom styles for this template -->
	<link href="assets/css/style.css" rel="stylesheet">
    
<!--//Navbar-->

<!-- For-Mobile-Apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Exchange Education a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Custom Theme files -->
    <!-- Bootstrap Styling --> <link rel='stylesheet' href="css/bootstrap.css" type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> <script src="js/jquery.min.js"></script>
    <!-- Bootstrap-Working-File --> <script src="js/bootstrap.min.js"></script>
    <!-- Index-Page-Styling --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />   
	<!-- Owl-Carousel-Styling --> <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<!-- //Custom Theme files -->
<link rel="stylesheet" href="css/new.css" type="text/css" media="all">

<!-- Smooth-Scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
           // event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>
<!-- //Smooth-Scrolling -->

<!-- Calender-JavaScript -->
	<link rel="stylesheet" href="css/clndr.css" type="text/css" />
	<script src="js/underscore-min.js" type="text/javascript"></script>
	<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
	<script src="js/clndr.js" type="text/javascript"></script>
	<script src="js/site.js" type="text/javascript"></script>
<!-- //Calender-JavaScript -->

</head>

<!-- Body-Starts-Here -->
<body>


<?php
require "php/connect.php"; 
session_start();
if(!isset($_SESSION['logged_in'])){
header("Location: index.php");  
exit;
}

$idd= $_SESSION['id'];


	echo '<!-- Header-Starts-Here -->
	<div class="header">

	
		<!-- Navbar-Starts-Here -->
	    <nav class="navbar navbar-inverse">
	        <div class="container">
			
			
			
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
					<img src="images/logo.png" align="left" style="float:left;width:120px;height:100px;">
	                <!-- Logo --><a class="navbar-brand" align="right" href="#">Osmany Hall</a><!-- //Logo -->

	            </div>
	            
	            <!-- Navbar-Collapse -->
	            <div id="navbar" class="navbar-collapse collapse">

	                <ul class="nav navbar-nav navbar-right">

		                
		               
		                <li><a href="index.html" class="scroll">Home</a></li>

		                <!-- Dropdown -->
		                <li role="presentation" class="dropdown carat1">
			                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Authority<span class="caret"></span> </a>
				                <ul class="dropdown-menu dropdown1">
					    			<li><a href="staff.php#manager" class="scroll">Hall Manager</a></li>
		                			<li><a href="staff.php#staff" class="scroll">Hall Staff</a></li>
					                
				                </ul>
		                </li>
		                <!-- //Dropdown -->

					    <li><a href="index.html#edifice" class="scroll">Facilities</a></li>
						<li><a href="index.html#project" class="scroll">Hall Info</a></li>
						 <li><a href="index.html#contact" class="scroll">Contact</a></li>

		                <!-- Login-Button -->
		                <li>
			                <div class="login-pop">
				                <div id="loginpop">
					                <a href="php/logout2.php" id="loginButton"><span>Logout</span></a>
					                
				                </div>
			                </div>
			                <script src="js/menu_jquery.js"></script>
		                </li>
		                <!-- //Login-Button -->

		                <!-- Signup-Button -->
		                
		                <!-- //Signup-Button -->

	                </ul>
	            </div>
	            <!-- //Navbar-Collapse -->
				
				
				
				

	        </div>
	    </nav>
	    <!-- //Navbar-Ends-Here -->
		<!--Navbar-->
	            <header class="header black-bg">
				  <div class="sidebar-toggle-box">
					  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
				  </div>
            <!--logo start-->
            
           
           
                </header>
				
				 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	 <p><a href="profile.html"><img src="assets/img/hall.jpg" height="80" width="20"></a></p>
              	 
              	  	
                  <li class="mt">
                      <a class="active" href="stu_profile.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Student Profile</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="Mess_bill.php" >
                          <i class="fa fa-desktop"></i>
                          <span>View Mess Bill</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">Mess Bill</a></li>
                          <li><a  href="buttons.html">Hall Bill</a></li>
                         
                      </ul>
                  </li>
				  
				   <li class="sub-menu">
                      <a href="Hall_bill.html" >
                          <i class="fa fa-desktop"></i>
                          <span>View Hall Bill</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">Mess Bill</a></li>
                          <li><a  href="buttons.html">Hall Bill</a></li>
                         
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="#sign" >
                          <i class="fa fa-cogs"></i>
                          <span>Sign Meal</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Notice Board</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Edit Profile Info</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              
          </section>
      </section>

      <!--main content end-->
     
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    
   
  
    


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
	<!--//Navbar-->


		

	</div>
	<!-- Header-Ends-Here -->
	
	
    <!-- Content-Starts-Here -->
    <div class="content"></br></br></br></br></br></br>
    	
    	
						
    	<div class="container">
    		
    		
		<!-- Faculty-Starts-Here -->';
		
		
		  
			
												
			$sql_query = "SELECT `Name`, `ID`, `Contact`, `Birthdate`, `Blood_Group`, `Father`,`Father_occu`, `Mother`, `Mother_occu`, `Present`, `Permanent`, `guardian_name`,`relation`,`guardian_occu`,`guardian_contact`,`Tobe_paid`,`Paid` FROM  `student_info` WHERE `ID`='$idd';";  
												 //echo $sql_query;
												 $result = mysqli_query($con,$sql_query);  
												 while($row = mysqli_fetch_assoc($result) )  
												 {  

												 $name =$row["Name"]; 
												 $id=$row["ID"];
												 $contact =$row["Contact"]; 
												 $birth =$row["Birthdate"]; 
												 $blood =$row["Blood_Group"]; 
												 $father =$row["Father"]; 
												 $mother =$row["Mother"];
												 $present =$row["Present"]; 
												 $guardian =$row["guardian_name"];
												 }
												 
												 //echo $name;
        											 
												
            echo '<div class="faculty slideanim" id="faculty">
	           </br></br> </br></br>
	            <div class="col-md-4 col-sm-4 team-top">
						
					</div>
					<div class="col-md-4 col-sm-4 team-top team-in">
						<div class="view view-seventh">
							<a href="#"><img class="img-responsive" src="images/developer.jpg" alt="name"></a>
								<div class="mask">
			 					</br></br></br></br></br></br></br></br></br>	</br>	</br>	</br>	</br>	</br>	</br>	</br>	</br>	</br>		
			                    </div>
			                    <h3>'.$name.'</h3>
								<pre><p style="font-size:16px;color:black;text-align:left"><b>Student ID:             </b>'.$id.'</p></br></pre>
								<pre><p style="font-size:16px;color:black;text-align:left"><b>Birthdate Date:              </b>'.$id.'</p></br></pre>
								<pre><p style="font-size:16px;color:black;text-align:left"><b>Father\'s Name:          </b>'.$father.'</p></br></pre>
								<pre><p style="font-size:16px;color:black;text-align:left"><b>Mother\'s Name:         </b> '.$mother.'</p></br></pre>
								<pre><p style="font-size:16px;color:black;text-align:left"><b>Contact:                       </b> '.$contact.'</p></br></pre>
								<pre><p style="font-size:16px;color:black;text-align:left"><b>Email:                           </b>Nabila@gmail.com</p></br></pre>
								<pre><p style="font-size:16px;color:black;text-align:left"><b>Permanent Address: </b> '.$present.'</p></br></pre>
								<pre><p style="font-size:16px;color:black;text-align:left"><b>Local Guardian:         </b>'.$guardian.'</p></br></pre>
								<pre><p style="font-size:16px;color:black;text-align:left"><b>Blood Group:             </b>'.$blood.' </p></br></pre>
								
                   		 </div>
					</div>
					<div class="col-md-4 col-sm-4 team-top">
						
					</div>
					
					<div class="clearfix"> </div>
	        </div>';
			?>
			<!-- //Faculty-Ends-Here -->
    		

			

		
		</br></br>	
			

			

			
    	</div>

    	

    </div>
    <!-- Content-Ends-Here -->
	
	<div class="contact slideanim" id="sign">
			
			    </br> </br></br>
        		<h3>Sign Your Meal</h3>
        		<form class="contact_form" action="php/meal2.php" method="post">

        			<div class="message">
						<div class="col-md-5 col-sm-5 grid_4 c1">
						</div>
						<div class="col-md-2 col-sm-2 grid_3 c1">
							<div class="box">
							<p><strong>Select Date</strong></p>
							</div>
							<input type="date" name="datee" class="text" value="" placeholder="select the date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							
						</div>
				
						
			            <div class="clearfix"> </div>
		        	</div>
					
					<div class="row">
						<div class="col-md-5 col-sm-5"></div>
						<div class="col-md-1 col-sm-1">
						<div class="box">
						<p><strong>Breakfast</strong></p>
						</div>
						</div>
					
						<div class="col-sm-2 col-md-2">
							<div class="onoffswitch">
							<input type="checkbox" name="breakfast" value="yes" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
							<label class="onoffswitch-label" for="myonoffswitch1">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5 col-sm-5"></div>
						<div class="col-md-1 col-sm-1">
						<div class="box">
						<p><strong>Lunch</strong></p>
						</div>
						</div>
					
						<div class="col-sm-2 col-md-2">
							<div class="onoffswitch">
							<input type="checkbox" name="lunch" value="yes" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
							<label class="onoffswitch-label" for="myonoffswitch2">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-5 col-sm-5"></div>
						<div class="col-md-1 col-sm-1">
						<div class="box">
						<p><strong>Dinner</strong></p>
						</div>
						</div>
					
						<div class="col-sm-2 col-md-2">
							<div class="onoffswitch">
							<input type="checkbox" name="dinner" value="yes" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
							<label class="onoffswitch-label" for="myonoffswitch3">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
							</div>
						</div>
					</div>
					</br></br>
					<input type="submit" class="more_btn" value="Meal On">
					</br></br>
			 	</form>
        	</div>

    <!-- Footer-Starts-Here -->
    <div class="footer slideanim">

    	<div class="container">

	    	<div class="footer-info slideanim">
				<div class="col-md-6 col-sm-6 access f1">
					<h3 class="access-h3">About MIST</h3>
	    			<p class="access-p">Military Institute of Science and Technology (MIST)  is the pioneer Technical Institute of Bangladesh Armed Forces under Bangladesh University of Professionals. It is purely a government educational institution focusing only engineering education and research in Bangladesh.</p>
				</div>
				<div class="col-md-4 col-sm-4 f2">
					<h3 class="address">Address</h3>
	    			<address>
	                    <ul>
	                    	<li>Cantontment</li>
	                    	<li>Mirpur 12</li>
	                    	<li>Dhaka 1216, Bangladesh</li>
	                    	<li>Telephone : 02-9013166</li>
	                    	<li>Email : <a class="mail" href="Osmany_Hall@gmail.com">info(at)sseet.com</a></li>
	                    </ul>
	               </address>
				</div>
				<div class="col-md-2 col-sm-2 f3" id="qlinks">
	    		    <h3>Links</h3>
	    			<ul class="footer_list">
	    				<li><a href="#about" class="scroll" style="font-size:17px">About</a></li>
	    				<li><a href="#programs" class="scroll" style="font-size:17px">Programs</a></li>
	    				<li><a href="#services" class="scroll" style="font-size:17px">Services</a></li>
	    				<li><a href="#edifice" class="scroll" style="font-size:17px">Edifice</a></li>
	    				<li><a href="#project" class="scroll" style="font-size:17px">Projects</a></li>
	    			</ul>
	    		</div>
	    		<div class="clearfix"></div>
			</div>

	        <ul class="social slideanim" id="follow">
	            <li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
	            <li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
	            <li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
	            <li><a href="#" class="instagram" title="Go to Our Instagram Account"></a></li>
	            <li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
	        </ul>

	        <div class="copyright">
	            <p>&copy; Powered By Millitary Institute of science & Technology | Design by <a href=""> Group6 </a></p>
	        </div>

        </div>

        <!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                };
                */            
                $().UItoTop({ easingType: 'easeOutQuart' });            
            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!-- //Slide-To-Top JavaScript -->

    </div>
    <!-- //Footer-Ends-Here -->

    <script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
<!-- Body-Ends-Here -->

</html>