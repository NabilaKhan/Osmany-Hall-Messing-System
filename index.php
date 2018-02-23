<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<style>
#snackbar {
    visibility: hidden;
    min-width: 300px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 100px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 1.5 s, fadeout 0.5s 2.5 s;
    animation: fadein 1.5 s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 100px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 100px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 100px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 100px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>

<title>Osmany Hall Messing System</title>

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
            //event.preventDefault();
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

	<!-- Header-Starts-Here -->
	<div class="header" id="start">

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
	                <!-- Logo --><a class="navbar-brand" align="right" href="#">Osmany Hall Messing System</a><!-- //Logo -->

	            </div>
	            
	            <!-- Navbar-Collapse -->
	            <div id="navbar" class="navbar-collapse collapse">
					 <!--  <a href="about_us.html">About Us</a>-->
	                <ul class="nav navbar-nav navbar-right">

		               
						
		                <li><a href="http://www.youtube.com">Home</a></li>

		                <!-- Dropdown -->
		                <li role="presentation" >
			                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Authority<span class="caret"></span> </a>
				                <ul class="dropdown-menu dropdown1">
					    			<li><a href="http://www.youtube.com" >Hall Manager</a></li>
		                			<li><a href="http://www.youtube.com" class="scroll">Hall Staff</a></li>
					                
				                </ul>
		                </li>
		                <!-- //Dropdown -->

					    <li><a href="#edifice" class="scroll">Facilities</a></li>
						<li><a href="#project" class="scroll">Hall Info</a></li>
						 <li><a href="#contact" class="scroll">Contact</a></li>
						

		                <!-- Login-Button -->
		                <li>
			                <div class="login-pop">
				                <div id="loginpop">
					                <a href="#" id="loginButton"><span>Login</span></a>
					                <div id="loginBox">
						                <form id="loginForm" action="php/login.php" method="post">
							                <fieldset id="body">
												<fieldset>
												<label for="email">Log In As</label>
												<div class="styled-select">
									                <select name="role">
													  <option value="student">Student</option>
													  <option value="staff">Hall Staff</option>
													  <option value="manager">Hall manager</option>
													</select>
												</div>	 
								                </fieldset>
								                <fieldset>
									                <label for="username">User ID</label>
									                <input type="text" name="username" id="username">
								                </fieldset>
								                <fieldset>
									                <label for="password">Password</label>
									                <input type="password" name="password" id="password">
								                </fieldset>
									                <input type="submit" id="login" value="LOGIN">
									                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
								            </fieldset>
							                <span><a href="#">Forgot your password?</a></span>
						                </form>
					                </div>
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

		<!-- Carousel-Starts-Here -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img class="first-slide" src="images/HallPix/main1.jpg" alt="First Slide">
				</div>
				
				

				<div class="item">
					<img class="second-slide" src="images/HallPix/main2.jpg" alt="Second Slide">
				</div>

				<div class="item">
					<img class="second-slide" src="images/HallPix/main3.jpg" alt="Second Slide">
				</div>

				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>

				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<!-- //Carousel-Ends-Here -->

	</div>
	<!-- Header-Ends-Here -->
	
	
	<?php
	
	
	//echo $_SESSION['unsuccessful'];
	if($_SESSION['unsuccessful']=="yes"){ 
	
	echo '<body onload="myFunction()">

	<div id="snackbar">LOG IN failed, please try again...</div>';
	
	$_SESSION['unsuccessful']="no";
	}
	
	if($_SESSION['success']=="yes"){ 
	
	echo '<body onload="myFunction()">

	<div id="snackbar">You Have Logged Out Successfully...</div>';
	
	$_SESSION['success']="no";
	}
	?>
	
	
    <!-- Content-Starts-Here -->
    <div class="content">
    	
    	<!-- Heading --></br><h1 class="abbr">PROVIDING ALL THE NECESSARY FACILITIES AND COMFORT TO THE STUDENTS</h1><!-- //Heading --><br/><br/>

    	<div class="container">
    		
			<!-- Projects-Starts-Here -->
	        <div class="project slideanim" id="project">
	        	<h3>ALL INFORMATION ABOUT HALL</h3>

	        	<div class="project-grid">
		        	<div class="col-md-4 col-sm-4 p2">
		        		<img src="images/HallPix/history2.jpg" alt="project">
		        	</div>
		        	<div class="col-md-4 col-sm-4 p2">
		        		<h4>History</h4>
		        		<p>MIST is a residential institute & has Student Hall named “Osmany Hall”. It was established in 2006. Osmany Hall is an 8 storied building with female and male wings, each wing having a capacity of 260 students.The hall building accommodates a number of offices to facilitate the administrative works.</p>
		        	</div>
		        	<div class="col-md-4 col-sm-4 p2 p3">
		        		<img src="images/HallPix/history3.jpg" alt="project">
		        	</div>
		        	<div class="col-md-4 col-sm-4 p2 p4">
		        		<img src="images/HallPix/history4.jpg" alt="project">
		        	</div>
		        	<div class="col-md-4 col-sm-4 p2 p5">
		        		<h4>Rules & Regulations</h4>
		        		<p>Students have to sign their meal in order to take breakfast,lunch or dinner. All students must come back from outside within 10 pm. People who are not a student of MIST,are strictly prohibited to go inside the osmany hall.</p>
		        	</div>
		        	<div class="col-md-4 col-sm-4 p2 p6">
		        		<img src="images/HallPix/history5.jpg" alt="project">
		        	</div>
		        	<div class="clearfix"></div>
	        	</div>
        	</div>
			<!-- //Projects-Ends-Here -->
			
			<!-- Edifice-Starts-Here -->
	        <div class="edifice slideanim" id="edifice">
	        	<h3>INFRASTRUCTURE & FACILITIES</h3>
	            <div class="gallery-cursual">

	                <!-- requried-jsfiles-for owl -->
	                    <script src="js/owl.carousel.js"></script>
	                    <script>
		                    $(document).ready(function() {
			                    $("#owl-demo").owlCarousel ({
				                    items : 3,
				                    lazyLoad : true,
				                    autoPlay : true,
				                    pagination : false,
			                    });
		                    });
	                    </script>
	                <!-- //requried-jsfiles-for owl -->

	                <!-- start content_slider -->
	                <div id="owl-demo" class="owl-carousel text-center">
	                    <div class="item">
	                        <img class="lazyOwl" src="images/HallPix/structure.jpg" alt="name">
	                    </div>
	                    <div class="item">
	                        <img class="lazyOwl" src="images/HallPix/structure2.jpg" alt="name">
	                    </div>
	                    <div class="item">
	                        <img class="lazyOwl" src="images/HallPix/structure3.jpg" alt="name">
	                    </div>
	                    <div class="item">
	                        <img class="lazyOwl" src="images/HallPix/structure4.jpg" alt="name">
	                    </div>
	                    <div class="item">
	                        <img class="lazyOwl" src="images/HallPix/structure5.jpg" alt="name">
	                    </div>
	                    <div class="item">
	                        <img class="lazyOwl" src="images/HallPix/structure6.jpg" alt="name">
	                    </div>
	                     <div class="item">
	                        <img class="lazyOwl" src="images/HallPix/structure.jpg" alt="name">
	                    </div>
	                    <div class="item">
	                        <img class="lazyOwl" src="images/HallPix/structure2.jpg" alt="name">
	                    </div>
	                    <div class="item">
	                        <img class="lazyOwl" src="images/HallPix/structure3.jpg" alt="name">
	                    </div>
	                </div>
	                <!--//sreen-gallery-cursual -->
	            </div>
	        </div>
			<!-- //Edifice-Ends-Here -->

    		
			<!-- Programs-Starts-Here -->
			<br/>
            <div class="programs slideanim" id="programs">
			<br/>
	            <h3>FACILITIES</h3>
	            <p>24 hour current,water,cleaners cleaning rooms everyday,high security and many other facilities are provided.</p>

	            <div class="program-grid">
		            <div class="col-md-3 col-sm-6 p1">
		                <div class="program1">
		                    <h4>Prayer Hall</h4>
		                    <p>There is a large Prayer room along with ablution facility.</p>
		                </div>
		            </div>
		            <div class="col-md-3 col-sm-6 p1">
		                <div class="program2">
		                    <h4>Indoor Games</h4>
		                    <p>there are indoor game facilities such as table tennis,chesse,batminton.Every year different game competitions are also arranged.</p>
		                </div>
		            </div>
		            <div class="col-md-3 col-sm-6 p1">
		                <div class="program3">
		                    <h4>Dining Room</h4>
		                    <p>There is a big dinning room where all the students can dine together.Refrigaration facility is available here.</p>
		                </div>
		            </div>
		            <div class="col-md-3 col-sm-6 p1">
		                <div class="program4">
		                    <h4>Common Room</h4>
		                    <p>There is a large common room along with Tv.Here students can sit and enjoy together</p>
		                </div>
		            </div>
		            <div class="clearfix"></div>
	            </div>
        	</div>
			<!-- //Programs-Ends-Here -->

			
			<!-- Events-Starts-Here -->
        	<div class="events slideanim" id="events">
			
        		<h3>Notice Board</h3>
        		<div class="event-grid">
	        		<div class="col-md-4 col-sm-4 cal">
	        			<div class="cal1 cal_2">
	        				<div class="clndr">
	        					<div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">December 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day past adjacent-month last-month calendar-day-2015-08-30"><div class="day-contents">30</div></td><td class="day past adjacent-month last-month calendar-day-2015-08-31"><div class="day-contents">31</div></td><td class="day today calendar-day-2015-09-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-09-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-09-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-09-04"><div class="day-contents">4</div></td><td class="day calendar-day-2015-09-05"><div class="day-contents">5</div></td></tr><tr><td class="day calendar-day-2015-09-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-09-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-09-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-09-09"><div class="day-contents">9</div></td><td class="day event calendar-day-2015-09-10"><div class="day-contents">10</div></td><td class="day event calendar-day-2015-09-11"><div class="day-contents">11</div></td><td class="day event calendar-day-2015-09-12"><div class="day-contents">12</div></td></tr><tr><td class="day event calendar-day-2015-09-13"><div class="day-contents">13</div></td><td class="day event calendar-day-2015-09-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-09-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-09-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-09-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-09-18"><div class="day-contents">18</div></td><td class="day calendar-day-2015-09-19"><div class="day-contents">19</div></td></tr><tr><td class="day calendar-day-2015-09-20"><div class="day-contents">20</div></td><td class="day event calendar-day-2015-09-21"><div class="day-contents">21</div></td><td class="day event calendar-day-2015-09-22"><div class="day-contents">22</div></td><td class="day event calendar-day-2015-09-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-09-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-09-25"><div class="day-contents">25</div></td><td class="day calendar-day-2015-09-26"><div class="day-contents">26</div></td></tr><tr><td class="day calendar-day-2015-09-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-09-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-09-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-09-30"><div class="day-contents">30</div></td><td class="day adjacent-month next-month calendar-day-2015-10-01"><div class="day-contents">1</div></td><td class="day adjacent-month next-month calendar-day-2015-10-02"><div class="day-contents">2</div></td><td class="day adjacent-month next-month calendar-day-2015-10-03"><div class="day-contents">3</div></td></tr></tbody></table>
	        				</div>
	        			</div>
	        		</div>

	        		<div class="col-md-4 col-sm-4 event-info e1">
	        			<h3>Recent News</h3>
	        			<ul>
	        				<li><span>22-12-2016</span> : Pay pill within next 1 week.</li>
	        				<li><span>23-12-2016</span> : Hall Menu has been updated.</li>
	        				<li><span>24-12-2016</span> : Hall seats cancelled if not staying.</li>
	        				<li><span>26-12-2016</span> : Bill increased 100 per month.</li>
	        				<li><span>27-12-2016</span> : Fine 100 for delay in payment.</li>
	        				<li><span>28-12-2016</span> : A meeting will be held tomorrow.</li>
	        				<li><span>29-12-2016</span> : Hall fest cooming soon.</li>
	        			</ul>
	        		</div>

	        		<div class="col-md-4 col-sm-4 event-info e2">
	        			<h3></h3>
	        			<img src="images/HallPix/notice.gif" alt="event">
	        		</div>
	        		<div class="clearfix"></div>
        		</div>
        	</div>
			<!-- //Events-Ends-Here -->

			

			<!-- Contact-Starts-Here -->
        	<div class="contact slideanim" id="contact">
				<h3><a href="about_us.html">About Us</a></h3>
			   
        		<h3>CONTACT</h3>
        		<form class="contact_form">

        			<div class="message">
						<div class="col-md-6 col-sm-6 grid_6 c1">
							<input type="text" class="text" value="Name" placeholder="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" class="text" value="Email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<input type="text" class="text" value="Phone" placeholder="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
						</div>
				
						<div class="col-md-6 col-sm-6 grid_6 c1">
							<textarea placeholder="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						</div>
			            <div class="clearfix"> </div>
		        	</div>

					<input type="submit" class="more_btn" value="Send Message">
			 	</form>
        	</div>
			<!-- //Contact-Ends-Here -->

    	</div>

    	<!-- Map-iFrame -->
    	<div class="map slideanim">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4049.370139009432!2d90.36009931708611!3d23.836487358542335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x93fa46794b59d070!2sOsmani+Hall!5e0!3m2!1sen!2sbd!4v1475441943195" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    	</div>
    	<!-- //Map-iFrame -->

    </div>
    <!-- Content-Ends-Here -->

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
		function myFunction() {
			var x = document.getElementById("snackbar")
			x.className = "show";
			setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
		}
	</script>

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