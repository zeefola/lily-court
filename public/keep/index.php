<?php
if(isset($_POST['surname']) && $_POST['surname'] !='') { 

$surname = $_POST['surname'];
$othernames = $_POST['othernames'];
$marital = $_POST['marital'];
$sex = $_POST['sex'];
$nationality = $_POST['nationality'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$postal = $_POST['addressp'];
$residence = $_POST['addressr'];
$occupation = $_POST['occupation'];
$employer = $_POST['employer'];
$appartmenttype = $_POST['appartmenttype'];
$payoption = $_POST['payoption'];
$kin = $_POST['kin'];
$kindetails = $_POST['kindetails'];
$adminmail ="info@jirajgardens.ng";"ayokunleshitan@agropark.ng";


$delivery = "Surname:". $surname ."\n"."Othernames:".  $othernames ."\n". "MaritalStatus:". $marital ."\n"."Sex:". $sex ."\n"."Nationality:". $nationality ."\n"."Phone:". $phone ."\n"."Email:". $email ."\n"."Postal:". $postal ."\n"."Contact Addr.:". $residence ."\n"."Occupation:". $occupation ."\n"."Employer:". $employer ."\n"."Appartment:". $appartmenttype ."\n"."Payment Option:". $payoption ."\n"."Next of Kin:". $kin ."--". $kindetails  ; 

  $headers = 'From: '. $adminmail ."\r\n".
'Reply-To: '. $adminmail ."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail('info@jirajgardens.ng','Application from Website', $delivery, $headers);   
    

echo "<span style='display:block; text-align:center; background-color:#fff; position:absolute; z-index:99999999999999; top:0px; width:100%; padding-top:40vh; padding-bottom:20px; font-size:22px;height:400vh'>Your submission is successful. Our sales representatives will contact you soon. <br> <br> <a href='http://jirajgardens.ng'>&laquo; Exit &raquo;</a></span>";
}
?> 

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>JIRAJ Gardens</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- // Meta-Tags -->
<!-- Custom-Stylesheet-Links -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap -->
<link href="css/font-awesome.css" rel="stylesheet"> <!-- Font awesome -->
<link href="css/lsb.css" rel="stylesheet" type="text/css"><!-- gallery -->
<link href="css/JiSlider.css" rel="stylesheet"><!-- banne slider -->
<link rel="stylesheet" type="text/css" href="css/style7.css" /><!-- menu slider -->
<link rel="stylesheet" href="css/easy-responsive-tabs.css"><!-- tabs -->
<!-- tabs inner slider -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom-Stylesheet-Links -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<!--//fonts-->
<style type="text/css">

body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  display: block;
  color: #99CC00;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

#logo { 
 float: left;
  display: inline;
  height: 40px
}

.logo-holder {
	line-height: 80px;
}

.clear {
  clear: both;
}

@media screen and (max-width: 320px) { 
    body { 
        margin:0; padding: 0; font-family: 'Roboto', serif; 
}

#logo{ display: none; } 
}


 
 #centeredmenu {
   float:left;
   width:100%;
   background:#fff;
   border-bottom:4px solid #099ac7;
   overflow:hidden;
   position:relative;
}
#centeredmenu ul {
   clear:left;
   float:left;
   list-style:none;
   margin:0;
   padding:0;
   position:relative;
   left:50%;
   text-align:center;
}
#centeredmenu ul li {
   display:block;
   float:left;
   list-style:none;
   margin:0;
   padding:0;
   position:relative;
   right:50%;
}
#centeredmenu ul li a {
   display:block;
   margin:0 0 0 10px;
   padding:10px 130px;
   background:#ddd;
   color:#000;
   text-decoration:none;
   line-height:1.3em;
}
#centeredmenu ul li a:hover {
   background:#369;
   color:#fff;
}
#centeredmenu ul li a.active,
#centeredmenu ul li a.active:hover {
   color:#fff;
   background:#000;
   font-weight:bold;
}
  </style>
</head>
<body>
    
<!--banner start here-->
  <div class="topnav" id="myTopnav">
  <a href="index.php">HOME</a>
  <a href="#features">SPECIAL FEATURES</a>
  <a href="#map">ROUTE MAP</a>
  <a href="#plans">PAYMENT STRUCTURE</a>
  <a href="#contact">CONTACT</a>
  <a href="#apply">APPLICATION</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

	<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">

							<div class="container">
									
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								
								
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top3">
							<div class="container">
								
								
							</div>
						</div>
					</li>
						<li>
						<div class="w3layouts-banner-top w3layouts-banner-top4">
							<div class="container">
								
								
							</div>
						</div>
					</li>

			</ul>
		</div>
      </div>
</div>
<!-- //banner -->
<!-- about -->

<!-- //about-->
 <!--team-->

<!--team-->
<!--blog-->
<div class="blog" id="features" style="background-color:#99CC00;">
<div class="container">
		<div class="tittle-agileinfo" id="fea">
			<h3>SPECIAL FEATURES</h3>
            <ul>
            <li>Perimeter Fence</li>
		    <li> Fitted Kitchen</li>
		    <li>Well Lit Lawns</li>
		    <li>Ample Parking Space</li>
		    <li>Armed Security Personel</li>
		    <li>Gymnasium</li>
		    <li>Shopping Mall</li>
		    <li>Drivers Sitting Area at the Parking Floor</li>
		    <li>CCTV Camera with a Central Monitoring Unit</li>
            </ul>
		    </div>
	
		
		<div class="clearfix"> </div>
        
        
</div>
	
</div>
<!--/blog-->	
 <!--gallery-->
	<div class="gallery" id="gallery">
			<ul id="flexiselDemo1">	
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/g1.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/banner.jpg" alt="" class="img-responsive" />
							<div class="mask">

							</div>
						</div>	
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/g2.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/banner1.jpg" alt="" class="img-responsive" />
							<div class="mask">

							</div>
						</div>	
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/g3.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/banner2.jpg" alt="" class="img-responsive" />
							<div class="mask">

							</div>
						</div>	
					</a>
				</div>
			</li>
			<li>
				<div class="wthree_gallery_grid">
					<a href="images/g4.jpg" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="images/banner3.jpg" alt="" class="img-responsive" />
							<div class="mask">

							</div>
						</div>	
					</a>
				</div>
			</li>
			
		</ul>
	</div>
<!--//gallery-->
<div class="map" id="plans">
<div class="tittle-agileinfo" style="padding-top:25px;">
<h3>PAYMENT STRUCTURE</h3>
</div>
<img src="images/Payment structure.jpg" width="100%" />

	</div>
<div class="map" id="map">
<div class="tittle-agileinfo" style="padding-top:25px;">
    
    <div id="centeredmenu">
   <ul>
      <li><a href="images/break.jpg">12 MONTHS INSTALLMENT</a></li>
      <li><a href="images/not.jpg">18 MONTHS INSTALLMENT</a></li>
      <li><a href="images/no.jpg">24 MONTHS INSTALLMENT</a></li>
   </ul>
</div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
<h3>ROUTE MAP</h3>
</div>
<img src="images/map.jpg" width="100%" />
	</div>
<!-- mail -->

<!-- //mail -->
<!-- footer -->
<div class="w3l_footer" id="contact">
		<div class="contact-w3-agileits">
		<div class="container">
		<div class="tittle-agileinfo">
			<h3 class="white-w3ls">CONTACT</h3>
		</div>
        
		<div class="logo-agile">
			<a href="index.php"><img src="images/logo1.png" alt="" class="img-responsive" /></a>
		</div>
		<div class="footer-middle-agileinfo">
					<div class="footer-button">
						<h2><i class="fa fa-quote-left" aria-hidden="true"></i>LOCATION<i class="fa fa-quote-right" aria-hidden="true"></i></h2>
						<p class="para-agileits-w3layouts">Akinde Road, Opposite Pinnacle Grammar School,
Ajegunle, Alakuko, Lagos State.</p>
					</div>
				</div>
				<!-- footer-button-info -->
		</div>
		</div>
				<div class="w3ls_footer_grid">
					<div class="col-md-4 w3ls_footer_grid_left fg2">
							<p><a href="mailto:info@jirajgardens.ng">info@jirajgardens.ng</a></p>
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<h4>Email</h4>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left fg3">
							<p>+234-9080829417</p>
							<i class="fa fa-phone" aria-hidden="true"></i>
							<h4>Line 1</h4>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left fg4">
							<p>+234-7017370898</p>
							<i class="fa fa-phone" aria-hidden="true"></i>
							<h4>Line 2</h4>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- footer-button-info -->
</div>
<!-- map -->
<div class="mail" id="mail" style="min-height:200vh">
		<div class="container">
			<div class="tittle-agileinfo">
			<h3 id="apply">APPLICATION FORM</h3>
		</div>
			<div class="w3agile_mail_grids">
				<div class=" w3agile_mail_grid">
					<form action="#" method="post" id="formato">
						<input type="text" placeholder="Surname" name="surname" required="">
                        <input type="text" placeholder="Othernames" name="othernames" required="">
                        <select name="marital">
                          <option value="--" disabled selected>Marital Status</option>
                          <option value="Single">Single</option>
                          <option value="Married">Married</option>
                        </select>
                         <select name="sex">
                          <option value="--" disabled selected>Sex</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        <input type="text" placeholder="Nationality" name="nationality" required="">
                        <input type="text" placeholder="Phone Number" name="phone" required="">
						<input type="text" placeholder="Email" name="email" required="">
                        <input type="text" placeholder="Postal Address" name="addressp" required="">
                        <input type="text" placeholder="Residential Address" name="addressr" required="">
                        <input type="text" placeholder="Occupation" name="occupation" required="">
                        <input type="text" placeholder="Employer name, address & phone" name="employer" required="">
                        <select name="appartmenttype" required>
                        <option value="--" disabled selected>Property Type</option>
                        <option style="color:red; font-size:12px" value="--" disabled>
 Type A - Comprises of 18 apartments: 6 units of 2 bedroom apartments and 12 units of 3 bedroom apartments
                        </option>
                        <option style="color:red; font-size:12px" value="--" disabled>
  Type B - Comprises of 6 apartments: 6 units of 3 bedroom apartments
                        </option>
                          <option value="2-Bedroom Flat-Type-A">2-Bedroom Flat - Type A  (11.6m)</option>
                          <option value="3-Bedroom Flat-Type-A">3-Bedroom Flat  - Type A (13.6m)</option>
                          <option value="3-Bedroom Flat-Type-B">3-Bedroom Flat  - Type B (14.1m)</option>
                        </select>
                           <select name="payoption" required>
                        <option value="--" disabled selected>Payment Option</option>
                          <option value="Outright Payment">Outright Payment</option>
                          <option value="12 months installment payment">12 months installment payment</option>
                          <option value="18 months installment payment">18 months installment payment</option>
                          <option value="24 months installment payment">24 months installment payment</option>
                        </select>
                        

                        <p style="display:block; float:left; position:relative; width:100%;">
                        <textarea placeholder="Next-of-kin name" name="kin" required="" style="width:28%; float:left; position:relative; display:block;"></textarea>
                        <textarea placeholder="Next-of-kin Address & phone number" name="kindetails" required="" style="width:28%; float:left; position:relative"></textarea>
                        </p>
						<div class="con-form text-center">
                        <p class="farc" style="width:100%; border:none; color:#990000">
                        <input name="" type="checkbox" value="" required> &nbsp;I hereby affirm that all information provided as a requirement for purchase of apartment(s) at JIRAJ Gardens Ajegunle- Alakuko, Lagos State is true to the best of my knowledge.</p>
							<input type="submit" value="Send" class="farc">
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>	
<!-- //map -->

<div class="footer-w3layouts">
<div class="w3_agileits_social_media">
					<ul>
						
						<li><a href="http://facebook.com/jirajgardens" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="http://twitter.com/jirajgardens" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>						<li><a href="http://instagram.com/jirajgardens" class="wthree_twitter"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
<div class="botttom-nav-agileits">
</div>
				<div class="container">
				<div class="agile-copy">
					<p>© 2018 JIRAJ Gardens - All rights reserved</p>
				</div>
					<div class="clearfix"></div>
				</div>
			</div>
<!--/footer -->
<!-- Custom-JavaScript-File-Links -->
<!-- Supportive-JavaScript --><script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/demo7.js"></script>
<!-- //menu -->
<script src="js/JiSlider.js"></script>
		<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script>
<!-- menu -->
<!-- for-Map -->
		<script type="text/javascript">
			$(function() {
			
				var menu_ul = $('.faq > li > ul'),
					   menu_a  = $('.faq > li > a');
				
				menu_ul.hide();
			
				menu_a.click(function(e) {
					e.preventDefault();
					if(!$(this).hasClass('active')) {
						menu_a.removeClass('active');
						menu_ul.filter(':visible').slideUp('normal');
						$(this).addClass('active').next().stop(true,true).slideDown('normal');
					} else {
						$(this).removeClass('active');
						$(this).next().stop(true,true).slideUp('normal');
					}
				});
			
			});
		</script>
<!-- //for-Map -->
<!-- flexisel -->
		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems:2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 2
					}
				}
			});
			
		});
	</script>
<script type="text/javascript" src="js/jquery.flexisel">	function openPage(pageName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- gallery-pop-up -->
	<script src="js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery-pop-up -->
<script src="js/SmoothScroll.min.js"></script>
<!-- responsive-tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
		$('#verticalTab').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true
		});
		});
	</script>
<!-- //responsive-tabs -->
<!-- for-Tabs-section-inner-slider -->
<script src="js/responsiveslides.min.js"></script>
					   <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager: false,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
							    
		<!-- //for-Tabs-section-inner-slider -->
<!-- smooth scrolling -->
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
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
	<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- required-js-files-->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :3,
									itemsDesktop : [768,2],
									itemsDesktopSmall : [414,1],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination : true,
									
							      });
								  
							    });
							    </script>
								 <!--//required-js-files-->
<!-- Necessary-JS-File-For-Bootstrap --><script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //Custom-JavaScript-File-Links -->	
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'ozgYU1CypU';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>