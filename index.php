<?php 
require 'config/config.php';

session_start();

    if(isset($_SESSION['username']) && !empty($_SESSION['username']) && $_SESSION['type'] == '1')
    {
        header("refresh : 0 ; url = admin/admin.php");
    }
    else if(isset($_SESSION['username']) && !empty($_SESSION['username']) && $_SESSION['type'] == '3')
    {
    	header("refresh : 0 ; url = home.php");	
    }
    else {
?>
<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<title>RMB</title>
		
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
		<!-- webfonts ->
			<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		 //webfonts --> 
		<!-- js -->
		<script src="assets/jQuery/jQuery-2.1.4.min.js"></script>
		<script src="assets/indexJS/modernizr.custom.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- js -->

		<!-- js for login -->
		<script src = 'assets/js/loginJS.js' type = 'text/javascript'></script>

		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="assets/indexJS/move-top.js"></script>
		<script type="text/javascript" src="assets/indexJS/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
		
		
	
<link href="assets/css/style1.css" rel="stylesheet" type="text/css" media="all" />	
<script src="assets/indexJS/responsiveslides.min.js"></script>
  <script type="text/javascript">
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
		 pager: true,
      });
    });
  </script>

	
	
<!-- <link rel="stylesheet" type="text/css" media="all" href="css/styles.css"> -->
  <!-- <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script> -->
  <!-- <script type="text/javascript" src="js/jquery.glide.min.js"></script> -->

	
	
	</head>
	<body>
		<!-- header -->
		<div id="home">
			<div class="h-top">
				<div class="header">
					<!-- container -->
					<div class="container">
						<div class="header-top">
							<div class="header-logo">
								<a href="#">
								<h2 style="color: rgb(255, 255, 255); font-weight: bold; font-size: 4em;">RMB</h2>
								<!--<img src="images/logo.png" alt="" />-->
								</a>
							</div>
							<div class="header-right">
								<div class="life-chart" style="width: 100%;">
									<ul style="width: 100%; height: 33px;">
							<li style="width: 52%;"><a class="Signup play-icon popup-with-zoom-anim" href="#small-dialog3">Log in</a></li>
							<li style="width: 47%;"><a class="Signup play-icon popup-with-zoom-anim" href="#small-dialog2">Sign Up</a></li>
						</ul>
									<!--<ul>
										<li><a href="#" class="life-img"></a></li>
										<li><a href="#" class="life-text">live chat</a></li>
									</ul>-->
								</div>
								<!--<div class="drop-down"  >
									<select class="d-arrow">
										<option value="volvo">En</option>
										<option value="saab">Saab</option>
										<option value="opel">Opel</option>
										<option value="audi">Audi</option>
									</select>
								</div>-->
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="border"> </div>
						<div class="top-nav">
							<span class="menu">Click here for menu</span>
							<ul class="nav1">
								<li><a href="#home" class="scroll">Home</a></li>
								<li><a href="#about" class="scroll">About Us</a></li>
								<li><a href="#news" class="scroll">How it works</a></li>
								<li><a href="#investment" class="scroll">Pricing</a></li>
								<li><a href="#faq1" class="scroll">FAQ</a></li>
								<li><a href="#affiliate" class="scroll">Post An Reference</a></li>
								<li><a href="#faq" class="scroll">Testimonial</a></li>
								<li><a href="#contact" class="scroll">Contact Us</a></li>
							</ul>
							<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
						</div>
					</div>
					<!-- //container -->
				</div>
				
			</div>
			
			<div class="slider">
			<ul class="rslides" id="slider1">
			  <li><img src="assets/images/1.jpg" alt="">
			  </li>
			  <li><img src="assets/images/2.jpg" alt="">
			  </li>
			   
			</ul>
		</div>
			
			<!--<div class="banner-info">
				<div class="container">
					<div class="banner-middle">
						<h2>REFER A BUSINESS AND HELP US GROW! <span>REFER.GROW.SHARE.</span></h2>
						<p>That a man's ethics are the only possessions he will take beyond the grave. cities fall but they are rebuilt. Heroes die but they are remembered. Cities fall but they.</p>
					</div>
					
				</div>
				
			</div>-->
		</div>
		<div id="about" class="about" style="padding: 0em;">
			<!-- container -->
			<img src="assets/images/970x90.jpg" style="width: 100%;" />
	
			<div class="container" style="padding-bottom: 5em;">
				<h3>About Us</h3>
				<div class="border line"> </div>
				<p>It  only took me six days. same time it took the lord to make the world. I now issue a new commandment: thou shalt <span>do the dance</span>. Circumstances have taught me that a man's ethics are the only possessions he will take beyond the grave. No, this is mount everest. You should flip on the discovery channel from time to time. <span>But i guess</span> you can't now, being dead and all.</p>
				<div><a href="#"><img src="assets/images/read_more.png" /></a></div>
			</div>
			<img src="assets/images/970x90.jpg" style="width: 100%;" />
	
			<!-- //container -->
		</div>
		<!-- //about -->
		<!-- plan -->
		<div id="investment" class="plan">
			<!-- container -->
			<div class="container">
				<h3>Pricing</h3>
				<div class="border line"> </div>
				<div class="plan-grids">
					<div class="plan-grid">
						<div class="plan-grid-top">
							<h4>5D <span>plan</span></h4>
						</div>
						<div class="plan-grid-bottom">
							<ul>
								<li class="left"><span>Period:</span> 20 days</li>
								<li class="right"><span>Total Return:</span> 160%</li>
								<div class="clearfix"> </div>
							</ul>
							<div class="gray-border"> </div>
							<p>Minimum investment: <span>$5</span></p>
							<p>Maximum investment: <span>$30 000</span></p>
							<div class="plan-button" >
								<a class="signup play-icon popup-with-zoom-anim"style="background: rgb(80, 176, 155) none repeat scroll 0% 0%;" href="#small-dialog4">Active</a>
							</div>
						</div>
					</div>
					<div class="plan-grid middle">
						<div class="plan-grid-top sky-blue">
							<h4>20D <span>plan</span></h4>
						</div>
						<div class="plan-grid-bottom">
							<ul>
								<li class="left"><span>Period:</span> 20 days</li>
								<li class="right"><span>Total Return:</span> 160%</li>
								<div class="clearfix"> </div>
							</ul>
							<div class="gray-border"> </div>
							<p>Minimum investment: <span>$5</span></p>
							<p>Maximum investment: <span>$30 000</span></p>
							<div class="plan-button">
								<a class="signup play-icon popup-with-zoom-anim" href="#small-dialog4">Active</a>
							</div>
						</div>
					</div>
					<div class="plan-grid blue-grid">
						<div class="plan-grid-top blue">
							<h4>5D <span>plan</span></h4>
						</div>
						<div class="plan-grid-bottom">
							<ul>
								<li class="left"><span>Period:</span> 20 days</li>
								<li class="right"><span>Total Return:</span> 160%</li>
								<div class="clearfix"> </div>
							</ul>
							<div class="gray-border"> </div>
							<p>Minimum investment: <span>$5</span></p>
							<p>Maximum investment: <span>$30 000</span></p>
							<div class="plan-button red">
								<a class="signup play-icon popup-with-zoom-anim" href="#small-dialog4">Inactive</a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>	
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //plan -->
		<!-- program -->
		
		<div id="affiliate" class="program" align="center">
			<!-- container -->	
			<div class="container">
				<div class="program-grids" >
					<div class="col-md-6 program-grid" style="width:100%; text-align:center;">
					<div>
					<form>
						<table  style="width: 50%; padding: 5px; border: 1px solid #FC7706; margin-bottom: 2%; 
						box-shadow: 0px 0px 10px 0px rgba(255, 136, 2, 0.3);" align="center">
						<tr>
						<td>
						
						<h4 class="hh" style="margin-top: -6%;">PLEASE ENTER YOUR DETAILS</h4>
						</td></tr>
						<tr>
						<td>
						<br/>
						<input type="text" value="Name"  onfocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}"/>
						</td></tr>
						
						<tr><td>
						<br/>
						
						<input type="text" value="Contact No."   onfocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Contact No.';}" />
						</td></tr>
						
						<tr><td>
						<br/>
						<input type="text" class="email" placeholder="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}"  />
						</td></tr>
						
						<tr><td>
						<br/>
						<textarea type="textarea"  placeholder="Messages"  onfocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Messages';}">Messages</textarea>
						</td></tr>
						
						<!--<input type="text" class="email" value="confirm" style ="width:65%; " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm password';}"  />-->
						<tr><td>
						<br/>
						<a href="assets/images/ssfina.jpg">
						<!--<input type="button" class="password inpbutton" value="choose your category" style="width:35%" onfocus="this.value = 'choose your category';" onblur="if (this.value == '') {this.value = 'choose your category';}"/></td></tr>
						-->
						<img src="assets/images/ssfina.jpg" style="width: 90%; border: 1px solid #FC7706;" />
						</a>
						
						<!--<select class="email" style="width:35%">
						
						      <option value="">choose your category</option>
							  <option value="">choose</option>
							  <option value="">choose</option>
							  <option value="">choose</option>
							  <option value="">choose</option>
						</select>-->
						</td></tr>
						<tr><td>
						<br/>
						<br/>
						<button type="button1" class="hhh" value="">Submit</button>
						<!--<input type="submit" value="Submit"/>-->
						<br/>
						<br/>
						</td>
						</tr>
						</table>
					</form>
					</div>
					</div>
					<!--<div class="col-md-6 program-grid right-grid">
						<h4><a href="#">bruce... i'm god. multiply your anger.</a></h4>
						<label>15.04.2015</label>
						<p>cities fAremembered. boxing is about respect. getting it for yourself, and taking it away from the other guy. i once heard a wise man say there are no perfect men. only perfect intentions. bruce... <a href="#">read more</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>-->
				<!--<div class="button"><a href="#">All News</a></div>-->
			</div>
			<!-- //container -->
		</div>
		<!-- //program -->
		<!-- video -->
		<div id="news" class="video">
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><span> </span></a>
		</div>
		<!-- pop-up-box -->
		
		<link href="assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
		<script src="assets/indexJS/jquery.magnific-popup.js" type="text/javascript"></script>
		<!--//pop-up-box -->
		<div id="small-dialog" class="mfp-hide">
			<iframe src="//player.vimeo.com/video/30673955" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
		
		<div id="small-dialog3" class="mfp-hide">

			<form name="frm" id = "loginFRM">
				<div id = 'errorMsg'></div>
					<div class="login" style = 'clear : both'>
						<h3>Login</h3>
						<p>Enter your account details to login</p>
						<input type="text" name="username" placeholder="EMAIL" id = 'username'>		<span class = 'help-block' id = 'usernameError'  style = 'color : red'></span>	
						<input type="password" name="password" maxlength="8" placeholder="PASSWORD" id = 'password'>
						<span class = 'help-block' id = 'passwordError'  style = 'color : red'>
						</span>							
					<input type="submit" name="login"  value="Login"/>
					</div></form>
		</div>
				<div id="small-dialog2" class="mfp-hide">
				<form name="frm1" method="post" action="admin/sinup.php">
					<div class="signup">
						<h3>Signup</h3>
						<h4>Please Enter Your Details</h4>
						<input type="text" name="fn" placeholder="First Name"  required>
						
						<input type="text" name="ln" placeholder="Last Name"  required />
						
						<input type="text" name="email" class="email" placeholder="Email"  required />
						
						<input type="text" name="phno"class="password" placeholder="Phone No."  required/>
						<input type="text" name="unknown1"class="password" placeholder="Company Name"  required/>
						<input type="text" name="unknown2" class="password" placeholder="City."  required/>
						
						<!--<input type="text" class="email" value="confirm" style ="width:65%; " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm password';}"  />-->
						
						<select name="cat" class="email" style="width:90%; height:25%;" required>
						<?php
						$res=mysqli_query($con , "select distinct Industry_Name from industry");
						while($uname=mysqli_fetch_array($res, MYSQLI_ASSOC))
						{
						?>
							<option value="<?php echo $uname['Industry_Name'];?>"><?php echo $uname['Industry_Name'];?>
						<?php
						}
						?>	
						</select>
						
					<input type="submit" value="Submit" name="signup"/>
					</div></form>
				</div>	
				<div id="small-dialog4" class="mfp-hide">
					<div class="signup">
						<h3>Online Shipping</h3>
						<input type="text" placeholder="First Name" required="">
						<input type="text" placeholder="Second Name" required="">
						<input type="text" placeholder="Email" required="">
						<input type="text" placeholder="Phone" required="">						
						<input type="text" class="email" placeholder="Address" required="">
						<h4>Payment</h4>
						<input type="text" placeholder="Card Number" required="">
						<input type="text" placeholder="Card Name" required="">
						<input type="text" placeholder="Date of expired" required="">
						<input type="text" placeholder="CNN" required="">			
						<input type="submit" value="PROCEED"/>
					</div>
				</div>	


		 <script>
				$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
				});
		</script>		
		<!-- //video -->
		<!-- team -->
		<div id="faq" class="team">
			<!-- container -->
			<div class="container">
				<h3>Testimonials</h3>
				<div class="border line"> </div>
				<div class="team-grids-top">
					<div class="col-md-4 team-grid">
						<img src="assets/images/team1.jpg" alt="" />
						<h5>John Smith</h5>
						<p>It's was better. we got no food we got no money and our pets heads are falling off! haaaaaaarry. </p>
					</div>
					<div class="col-md-4 team-grid">
						<img src="assets/images/team2.jpg" alt="" />
						<h5>Patric Dow</h5>
						<p>Look ma i'm road kill it's because i'm green isn't it! we're going for a ride on the information super highway.</p>
					</div>
					<div class="col-md-4 team-grid">
						<img src="assets/images/team3.jpg" alt="" />
						<h5>Piter Parker</h5>
						<p>See you, good afternoon, good evening and goodnight. your entrance was good.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="team-grids-bottom">
					<div class="col-md-6 team-grid">
						<img src="assets/images/team2.jpg" alt="" />
						<h5>Patric Dow</h5>
						<p>Look ma i'm road kill it's because i'm green isn't it! we're going for a ride on the information super highway.</p>
					</div>
					<div class="col-md-6 team-grid">
						<img src="assets/images/team3.jpg" alt="" />
						<h5>Piter Parker</h5>
						<p>See you, good afternoon, good evening and goodnight. your entrance was good.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>

		<!-- //team -->
		
		<div id="faq1" class="team" style="padding: 5em 0px;">
			<!-- container -->
			<div class="container" style="background: rgb(255, 246, 237) none repeat scroll 0% 0%;">
				<h3 style="padding: 2% 0%;"><u>FAQ</u></h3>
				<h3>Lorem Ipsum is simply dummy text of the printing</h3>
				<br/>
				
				<!--<div class="border line"> </div>-->
				<div class="team-grids-top">
					<div class="col-md-6" >
					
					<p style="text-align:left;">
						<b>1. Lorem Ipsum is simply dummy text of the printing and typesetting ?</b>
						<br/>
						A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable
						<br/>
						<br/>
						<b>2. To make it even simpler, more useful, and more enjoyable ?</b>
						<br/>
						A. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
						<br/>
						<br/>
						<b>3. Lorem Ipsum is simply dummy text of the printing and typesetting ?</b>
						<br/>
						A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable
						<br/>
						<br/>
						<b>4. To make it even simpler, more useful, and more enjoyable ?</b>
						<br/>
						A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable
						<br/>
						<br/>
						<b>5. Lorem Ipsum is that it has a more-or-less normal distribution of letters ?</b>
						<br/>
						A. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
					</p>
					
				</div>
				<div class="col-md-6" >
					<p style="text-align:left;">
						
					<b>6. Lorem Ipsum is simply dummy text of the printing and typesetting ?</b>
					<br/>
					A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable
					<br/>
					<br/>
					<b>7. To make it even simpler, more useful, and more enjoyable ?</b>
					<br/>
					A. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
					<br/>
					<br/>
					<b>8. Lorem Ipsum is simply dummy text of the printing and typesetting ?</b>
					<br/>
					A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable
					<br/>
					<br/>
					<b>9. To make it even simpler, more useful, and more enjoyable ?</b>
					<br/>
					A. started with a desire to take an experience people love and make it better. To make it even simpler, more useful, and more enjoyable
					<br/>
					<br/>
					<b>10. Lorem Ipsum is that it has a more-or-less normal distribution of letters ?</b>
					<br/>
					A. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.

				 </p>
				</div>
					
					<div class="clearfix"> </div>
				</div>
				
				
				
			<!--	<div class="team-grids-bottom">
					<div class="col-md-6 team-grid">
						<img src="images/team2.jpg" alt="" />
						<h5>Patric Dow</h5>
						<p>Look ma i'm road kill it's because i'm green isn't it! we're going for a ride on the information super highway.</p>
					</div>
					<div class="col-md-6 team-grid">
						<img src="images/team3.jpg" alt="" />
						<h5>Piter Parker</h5>
						<p>See you, good afternoon, good evening and goodnight. your entrance was good.</p>
					</div>
					<div class="clearfix"> </div>
				</div>-->
			</div>
			<!-- //container -->
		</div>
		<!--team1-->
		
		
		<!--//team1-->
		
		<!-- map -->
		<div id="contact" class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2749.8285366889468!2d30.707547999999992!3d46.432278000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c633a9b65628df%3A0x4a91441b834c0415!2sIMMA+Ltd%2C+International+Maritime+Manning+Agency!5e0!3m2!1sen!2sin!4v1415258536432" 
			frameborder="0" style="border:0; margin-left: -50%;"></iframe>
			<div class="black">
				<img src="assets/images/find.png" alt="" />
				<div class="contact">
					<div class="contact-info">
						<h5>Contacts</h5>
						<div class="border white"> </div>
						<div class="contact-grids">
							<div class="contact-grid">
								<p>Telephone:</p>
								<p class="sub-text">+12 345 6789</p>
							</div>
							<div class="contact-grid">
								<p>Adress:</p>
								<p class="sub-text">Some street, 21</p>
							</div>
							<div class="contact-grid">
								<p>E-mail:</p>
								<p class="sub-text">info@company.com</p>
							</div>
							<div class="clearfix"> </div>
							<label class="u-arrow"> </label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //map -->
		
		<!--<div id="faq" class="team">
			<div class="container" style="width:100%; height:0%;">
                 
				<div class="team-grids-top" >
					<div class="col-md-4 team-grid" > 
							<h5>About us</h5>
						<p style="text-align:left;">
						<font size="2">Fizdi.com has been India’s most trusted store for finding latest and affordable handpainted art since 2009. With over 5000+ artworks in various subjects and sizes, and extensive framing options - we offer you more choice than any other platform online. We are headquarted in Pune, and ship all over India and to 150+ countries abroad..
						 <br/>
						 Fizdi Ecommerce Pvt. Ltd,
						 <br/>
							Ganga Collidium Commercial Center - Phase 1,

							Near Ganga Dham Chowk, Market Yard, Pune - 411037.

							Contact : +91 8822 866 866, +91 02066200648

							(M-F : 10.00 A.M - 6.30 P.M, St : 10.00 A.M - 4 P.M)

							Email : sales@fizdi.com</font>


						</p>
					</div>
					
					<div class="col-md-4 team-grid">
						<img src="images/team2.jpg" alt="" style="width:60%; height:25%;"/>
							</div>
					<div class="col-md-4 team-grid">
                        <h5>Testimonials</h5>
							<marquee  behavior="scroll" direction="up">Ganga Collidium Commercial Center - Phase 1,

							Near Ganga Dham Chowk, Market Yard, Pune - 411037.

							Contact : +91 8822 866 866, +91 02066200648

							(M-F : 10.00 A.M - 6.30 P.M, St : 10.00 A.M - 4 P.M)

							Email : sales@fizdi.com</marquee>
							
						 </div>
					<div class="clearfix"> </div>
				</div>
				</div>
		</div>-->
		
		
		<!-- footer -->
		<div class="footer">
		
			<div class="footer-top">	
				<div class="footer-top-info">
					<!-- container -->
					<div class="container">
						<div class="footer-info-top">
							<ul>
								<li><a href="#home" class="scroll">Home</a></li>
								<li><a href="#about" class="scroll">About Us</a></li>
								<li><a href="#news" class="scroll">How it works</a></li>
								<li><a href="#investment" class="scroll">Pricing</a></li>
								<li><a href="#faq1" class="scroll">FAQ</a></li>
								<li><a href="#affiliate" class="scroll">Post An Reference</a></li>
								<li><a href="#faq" class="scroll">Testimonial</a></li>
								<li><a href="#contact" class="scroll">Contact Us</a></li>
							</ul>
							<div class="border"> </div>
						</div>
						<div class="footer-info-top bottom-text">
							<ul>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Anti-Spam Policy</a></li>
							</ul>
						</div>
					</div>
					<!-- //container -->
				</div>
			</div>
			<div class="footer-bottom">
				<!-- container -->
				<!--<div class="copy_layout">
            <p>Copyright © 2015 . All Rights Reserved | Design by <a href="#" target="_blank">infolink software</a> </p>
           </div>-->
				<!-- //container -->
			</div>
		</div>
		<!-- footer -->
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
	<!-- content-Get-in-touch -->
	</body>  
</html>

<?php

}

?>