<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>Mj Granite: KITCHEN COUNTERTOPS IN SAN ANTONIO</title>

    <meta charset="utf-8">
	
	   <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/waypoint.min.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
	
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300,100,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/productdetail.css" media="screen">
    <!-- <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">-->
    <link rel="icon apple-touch-icon" href="photoswipe/appletouch/apple-touch-icon-144x144.png" sizes="144x144" type="image/png">
    <link href="photoswipe/photoswipe.css" rel="stylesheet">
    <link href="photoswipe/default-skin/default-skin.css" rel="stylesheet">
	<link href="photoswipe/gallery-style.css" rel="stylesheet">
	
    <script src="photoswipe/jquery.2.1.3.min.js"></script>
    <script src="photoswipe/photoswipe.min.js"></script>
    <script src="photoswipe/photoswipe-ui-default.min.js"></script>
</head>
<body>

    <!-- BEGIN Container -->
    <div id="container">
        <!-- BEGIN Header -->
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
                        <a class="navbar-brand" href="index.php#"><img src="images/logo.svg" alt="" width="130"></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="drop">
                                <a class="active" href="index.php">Home</a>

                            </li>
                            <li class="drop">
                                <a href="granite-countertops-in-san-antonio.html">mj granite</a>

                            </li>
                            <li>
                                <a href="best-countertops-in-san-antonio.php">inventory</a>

                            </li>
							<li><a class="active" href="clearance.php">Clearance</a>
							</li>
                            <li><a href="stone-countertops-san-antonio.html">Contact</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- END Header -->
        <!-- BEGIN content -->
        <div id="content" class="photoswipe-container">
			
            <?php
            $path = './images/WebInventory/SA/';
            $queryPath = htmlspecialchars($_GET["gallery"]);
            $galleryType = htmlspecialchars($_GET["gtype"]);
            if($galleryType == "1")
            {
				$path = './images/WebInventory/SA/';
            }
			
            $dir = new DirectoryIterator($path.$queryPath);

            // //BEGIN Read msg file
            // $file = $path.$queryPath.'/msg.txt';
            // $msgContent = '';
            // if(file_exists($file))
            // {
            // $f = fopen($file, "r") or exit("Unable to open file!");
            // // read file line by line until the end of file (feof)
            // while(!feof($f))
            // {
            // $msgContent = $msgContent.fgets($f).'<br />';
            // }
            // fclose($f);
            // }
            // //END Read msg file
            $category = '';
            $catAndType = explode("_", $queryPath);
            $category = $catAndType[0];
            $contador = 0;
            $listBoxText = "";
            $thumbnail = "";
            echo'<div class="photoswipe-gallery" itemscope itemtype="http://schema.org/ImageGallery">';
                foreach ($dir as $fileinfo)
                {
					if(!$fileinfo->isDot() && $fileinfo != 'paleta.jpg' && $fileinfo != 'msg.txt' && $fileinfo != 'textura.jpg' && $fileinfo != 'Textura.jpg')
					{
						$fileName = $fileinfo->getFilename();
						$fileNameAndExt = explode(".", $fileName);
						$fName = $fileNameAndExt[0];
						$fType = $fileNameAndExt[1];

						echo '<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
							<a href="'.$path.$queryPath.'/'.$fileName.'" itemprop="contentUrl" data-size="1920x1080" width="1920" height="1080" caption="">
								<img src="'.$path.$queryPath.'/'.$fileName.'" height="600" width="800" itemprop="thumbnail" alt="">
							</a>
						</figure>';
					}
                }
                echo'</div>';
            ?>
			<!-- BEGIN Root element of PhotoSwipe. Must have class pswp. -->
			<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

				<div class="pswp__bg"></div>
				<div class="pswp__scroll-wrap">

					<div class="pswp__container">
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
					</div>

					<div class="pswp__ui pswp__ui--hidden">

						<div class="pswp__top-bar">

							<div class="pswp__counter"></div>

							<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
							<button class="pswp__button pswp__button--share" title="Share"></button>
							<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
							<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

							<div class="pswp__preloader">
								<div class="pswp__preloader__icn">
									<div class="pswp__preloader__cut">
										<div class="pswp__preloader__donut"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
							<div class="pswp__share-tooltip"></div>
						</div>

						<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

						<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

						<div class="pswp__caption">
							<div class="pswp__caption__center"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- END Root element of PhotoSwipe -->
			<div class="section-content contact-section">
				<div class="buttons">
					<a class="button-third" href="javascript:window.close();">Back to Live Inventory</a> 
				</div>
			</div>
        </div>
		<!-- END content -->
		
        <!-- BEGIN footer -->
        <footer>
			<div class="social-section">
				<ul class="social-icons triggerAnimation animated" data-animate="tada">
					<li><a href="https://www.facebook.com/mjgranite/" target="new" class="facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/mjgranitesupply" target="new" class="twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.instagram.com/mjgranitesupply/" target="new" class="instagram"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.pinterest.com/mjgranite/" target="new" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
					
				</ul>
			</div>
			

		</footer>
        <!-- END footer -->
		<script src="photoswipe/script-min.js"></script>		
    </div>
    <!-- END Container -->		
</body>
</html>