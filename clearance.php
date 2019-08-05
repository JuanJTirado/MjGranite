<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Mj Granite: BEST MARBLE COUNTERTOPS IN SAN ANTONIO</title>
    <meta name="description" content="Articles about countertops, interiorism, kitchen makeovers, and analysis on granite, quarzite, and marble in San Antonio">
    <meta name="keywords" content="Marble in San Antonio, Interiorism, Kitchen Makeovers, Analysis on Granite, Countertops" >

	<meta charset="utf-8">
	
	   <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300,100,200" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	
</head>
	
	
	
	<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

.header {
    text-align: center;
    padding: 32px;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}
</style> 
	
	
	
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
							<li class="drop"><a href="index.php">Home</a>
								
							</li>
							<li class="drop"><a href="granite-countertops-in-san-antonio.html">mj granite</a>
								
							</li>
							<li><a href="best-countertops-in-san-antonio.php">inventory</a>
								
							</li>
							<li><a class="active" href="clearance.php">Clearance</a>
							</li>
							
							
							<li><a href="stone-countertops-san-antonio.html">Contact</a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->
		<!-- End Header -->

		<!-- content 
			================================================== -->
		<div id="content">

			<!-- page-banner 
				================================================== -->
			<div class="section-content page-banner portfolio-page-banner">
				<div class="container">
					<h1>Clearance of Materials for Countertops in San Antonio</h1>
				</div>
			</div>
			
			
			
			<div class="title-section white">
					<div class="container triggerAnimation animated" data-animate="bounceIn">
						<h1>Click on the collection</h1>
						<p>To see Our Clearance Merchandise </p>
					</div>
				</div>

			<!-- blog-section 
				================================================== --> 
			<div class="row"> 				
				<?php 							
					//$_SERVER['HTTP_HOST'] = localhost
					$path = './images/WebInventory/bestseller/';
					$dir = glob($path.'*', GLOB_ONLYDIR);
					$contador = 0;													
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
						$imageName = "";
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
						if(strlen($imageName) > 4)
						{
							$cFileName = $cPath.'/'.$imageName;								
							//$cDir = glob($cPath.'.{jpg,png,jpeg}', GLOB_BRACE);								
							echo '
								<div class="column"> 
									<a href="productdetail.php?gtype=1&gallery='.$dirName.'" target="new">
										<img src="images/topsellers/'.$dirName.'/'.strtolower($dirName).'.jpg" style="width:100%; padding-left: 20px;">
									</a>
									<br><br>
									<div class="buttons2" style="padding-left: 20px;">
										<a href="productdetail.php?gtype=1&gallery='.$dirName.'" target="new" class="button-third">'.$dirName.'</a> 
									</div>
									<br><br><br>
								 </div>
							';
						}
					}							
				?>
			</div>


		</div>
		

		<!-- End content -->

		<br>
		
		<div class="buttons">
						
						<a class="button-third" href="clearance.php">See All Inventory</a>
						
					</div>
						
<br><br><br>
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
										<p> 12010 Warfield,<br> San Antonio, <br> Texas 78216, USA</p>
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
										<p> Weekdays: &nbsp; 8:00 - 17:00</p>
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
		<!-- End footer -->>
	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="http://nunforest.com/marble-demo/coffee/js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/waypoint.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	
</body>
</html>