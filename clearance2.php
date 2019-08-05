<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>Mj Granite: KITCHEN COUNTERTOPS IN SAN ANTONIO</title>

	<meta charset="utf-8">

	   <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300,100,200' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="css/productdetail.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	
	<script>
		// Open the Modal
		function openModal() {
		  document.getElementById('myModal').style.display = "block";
		}

		// Close the Modal
		function closeModal() {
		  document.getElementById('myModal').style.display = "none";
		}

		var slideIndex = 1;
		showSlides(slideIndex);

		// Next/previous controls
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		// Thumbnail image controls
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  var captionText = document.getElementById("caption");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		  captionText.innerHTML = dots[slideIndex-1].getAttribute("alt");
		}
	</script>
</head>
<body>

	<!-- Container -->
	<div id="container">
<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<!-- Static navbar -->
			<div class="navbar navbar-default navbar-fixed-top">			
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><img src="images/logo.svg" alt="" width="130"></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="drop"><a class="active" href="index.php">Home</a>
								
							</li>
							<li class="drop"><a href="granite-countertops-in-san-antonio.html">mj granite</a>
								
							</li>
							<li><a href="best-countertops-in-san-antonio.php">inventory</a>
								
							</li>
							<li><a class="active" href="best-countertops-san-antonio.php">Clearance</a>
							</li>
							
							
							<li><a href="stone-countertops-san-antonio.html">Contact</a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->

		<!-- content 
			================================================== -->
		<div id="content">

			<!-- page-banner 
				================================================== -->
			<div class="section-content page-banner portfolio-page-banner">
				<div class="container">
					<h1>Clearance</h1>
				</div>
			</div>
			<?php
            $path = './images/topsellers/';
							$dir = glob($path.'*', GLOB_ONLYDIR);
							$contador = 0;	
			$queryPath = htmlspecialchars($_GET["gallery"]);
				$galleryType = htmlspecialchars($_GET["gtype"]);
				if($galleryType == "1")
				{
					$path = './images/WebInventory/bestseller/';
				}
				$dir = new DirectoryIterator($path.$queryPath);	
							foreach ($dir as $dirInfo) 
							{	
								$dirName = basename($dirInfo);
								if ($dirName === '.' || $dirName === '..' || $dirName === '_gsdata_') {
									continue;
								}
								//$catAndType = explode("_", $dirName);
								$category = $dirName; 
								//$category = $catAndType[0];
								//$type = $catAndType[1];
								//$color = $catAndType[2];
								// <p>'.$type.'</p>
								// <p>'.$color.'</p>
								$cPath = $dirInfo;
								$imageName = false;
								$ext = array("jpg", "png", "jpeg", "gif", "JPG", "PNG", "GIF", "JPEG");
								if($handle = opendir($cPath))
								{
									while(false !== ($file = readdir($handle)))
									{
										$lastdot = strrpos($file, '.');
										$extension = substr($file, $lastdot + 1);
										if ($file[0] != '.' && in_array($extension, $ext)) break;
									}
									$imageName = $file;
									closedir($handle);
								}
								$cFileName = $cPath.'/'.$imageName;
								//$cDir = glob($cPath.'.{jpg,png,jpeg}', GLOB_BRACE);								
								echo '
									<div class="item project-post">
										<div class="project-gal">
											<img alt="" src="'.$cFileName.'">
											<div class="hover-box">
												<a class="zoom" href="'.$cFileName.'" target="_self"><i class="fa fa-search-plus"></i></a>
												<a class="link" " target="_new" href="clearance.php?gtype=1&gallery='.$dirName.'" target="_self"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="project-content">
											<h2>'.$category.'</h2>
										</div>
									</div>
								';
							}							
						?>
		</div>
		
		
		<div class="section-content contact-section">
				
				
				<div class="buttons">
						
						<a class="button-third" href="javascript:window.close();">Back to Clearance</a> 
						
					</div>

			</div>
		<!-- End content -->

		<!-- footer 
			================================================== -->
		<footer>
			<div class="social-section">
				<ul class="social-icons triggerAnimation animated" data-animate="tada">
					<li><a href="https://www.facebook.com/mjgranite/" target="new" class="facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/mjgranitesupply" target="new" class="twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.instagram.com/mjgranitesupply/" target="new" class="instagram"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.pinterest.com/mjgranite/" target="new" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
					
				</ul>
			</div>
			<div class="up-footer">
				<div class="container">
					<div class="row">

						<div class="col-md-3">
							<div class="widget footer-widget text-widget">
								<h1>About Us</h1>
								<p>We supply high quality stones for kitchen countertops, sinks or slabs.  </p>
								<p>We look for exclusive designs in natural and man made stone of granite, marble, quartz quartzite, and more.  </p>
								<img src="images/footer-logo.svg" alt="Best stone countertops in San Antonio" width="130">
							</div>
						</div>

						<div class="col-md-3">
							<div class="widget footer-widget tweets-widget">
								<h1>Get in Touch</h1>
								<ul>
									<li>
										<i class="fa fa-map-marker"></i>
										<p> 323 E. Nakoma,<br> San Antonio, <br> Texas 78216, USA</p>
										<br>
										<i class="fa fa-phone"></i>
										<p><a href="tel:+2104040377" style="color: #F9F9F9">+210 404 0377</a>Fax: +210 404 0315 </p>
										<br>
										<i class="fa fa-envelope"></i>
										<p><a href="mailto:sales@mjgranite.com" style="color: #F9F9F9">sales@mjgranite.com</a></p>
									
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-3">
							<div class="widget footer-widget flickr-widget">
								<h1>Working Hours</h1>
								<li>
										<p> Weekdays: &nbsp; 9:00 - 18:00</p>
										<p> Saturday: &nbsp; &nbsp; 9:00 - 14:00</p>
										<p> Sunday: &nbsp; &nbsp; &nbsp; Closed</p>
										<p> Holidays: &nbsp; &nbsp; Closed</p>
									</li>
							</div>							
						</div>

						<div class="col-md-3">
							<div class="widget footer-widget subscribe-widget">
								<h1>Subscribe</h1>
								<p>Get to know our new offers and products. Don´t worry we hate spam too.</p>
								<form method="post" action="mail2.php" name="contactform" id="contact-form">
									<input type="text" name="emailid" id="emailid" placeholder="Email Address"/>
									<input type="submit" value="Send" id="submit"/>
								</form>
							</div>							
						</div>

					</div>
					<div class="footer-line">
						<p>Copyright 2017. MJ Granite All rights reserved. Design by <a href="http://www.cincoonce.com.mx" target="new" style="color: #B4B4B4">cincoonce</a></p>
					</div>
				</div>
			</div>

		</footer>
		<!-- End footer -->
	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="http://nunforest.com/marble-demo/coffee/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/waypoint.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
	<script src="photoswipe/script-min.js"></script>		
	
</body>
</html>