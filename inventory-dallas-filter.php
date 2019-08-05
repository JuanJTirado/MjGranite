
<!doctype html>
<html lang="en" class="no-js">
<head>
	<title>Live Inventory</title>
<meta name="description" content="Find the best countertops in San Antonio. Beautiful natural materials in Granite, Marble, Quartzite, and more. ¡Take a look at our inventory! ">
    <meta name="keywords" content="Best Countertops, Stone Cuntertops, Marble Countertops, Kitchen countertops, sink slabs, " >

	<meta charset="utf-8">
	
	   <link rel="shortcut icon" href="images/favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300,100,200" rel="stylesheet" type="text/css">


	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	
	
	<!-- <link rel="stylesheet" href="css4/reset.css"> CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	
    <!-- REVOLUTION BANNER CSS SETTINGS -->    
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/inventoryStyle.css" media="screen">
	
	<!--
	
	<link rel="stylesheet" href="css/styleInventory.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
	<script type="text/javascript" src="js/waypoint.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>-->
	
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/mainInventory.js"></script> <!-- Resource jQuery -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
	
  <link rel="stylesheet" href="js/jquery-ui.min.css">
  <script src="js/jquery-ui.min.js"></script>
  <script>
	  $( function() {
		$( "#slider-range" ).slider({
		  orientation: "vertical",
		  range: true,
		  min: 1,
		  max: 20,
		  step: 1,
		  values: [ 1, 20 ],
		  slide: function( event, ui ) {
			//$( "#amount" ).val(ui.values[ 0 ] + " - " + ui.values[ 1 ] );
			doRange(ui.values[ 0 ], ui.values[ 1 ]);
		  }
		});
		//doRange(( "#slider-range" ).slider( "values", 0 ),( "#slider-range" ).slider( "values", 1 ));
	  } );
	  
	  function doRange(min,max){
		var i;
		for (i = 1; i <= 20; i++) {
			if($("#chkLevel" + i).is(':checked'))
			{
				//$("#chkLevel" + i).click();
				$("#chkLevel" + i).prop('checked', false);
				$("#chkLevel" + i).removeClass("chkFilter");
			}
		}
		i = 1;
		
		for (i = max; i >= min; i--) { 
			if(!$("#chkLevel" + i).is(':checked'))
			{
				$("#chkLevel" + i).addClass("chkFilter");
				//sleep(10);
			}
		}
		$(".chkFilter").click();
	  }
	  
	  function sleep(milliseconds) {
			var start = new Date().getTime();
			for (var i = 0; i < 1e7; i++) {
				if ((new Date().getTime() - start) > milliseconds){
					break;
				}
			}
		}
	</script>
</head>
ss
<body style="background-color:#000000">
<?php
	$path = './images/inventory-dallas/dallas/';
	$dir = glob($path.'*', GLOB_ONLYDIR);
	$contador = 0;
	$stringBotones = '';
	$currentColors = '';
	$filtros = array("");
	$categoryElements = '<div class="cd-filter-block"><h4>Category</h4><ul class="cd-filter-content cd-filters list twoCols">';
	$categoryElements = $categoryElements.'<li><input class="filter" data-filter=".categoryAll" type="checkbox" id="chkCategoryAll">';
	$categoryElements = $categoryElements.'<label class="checkbox-label" for="chkCategoryAll">all</label></li>';
	
	$colorElements = '<div class="cd-filter-block"><h4>Color</h4><ul class="cd-filter-content cd-filters list twoCols">';
	$colorElements = $colorElements.'<li><input class="filter" data-filter=".colorAll" type="checkbox" id="chkColorAll">';
	$colorElements = $colorElements.'<label class="checkbox-label" for="chkColorAll">all</label></li>';
	
	//$levelElements = '<div class="cd-filter-block"><h4>Classification</h4><div id="slider-range" style="height:250px;"></div><div style="visibility: hidden"><ul class="cd-filter-content cd-filters list">';	
	$levelElements = '<div class="cd-filter-block flexContainer"><div class="fixed"><h4>Classification</h4><ul class="cd-filter-content cd-filters noBullet">';
	//$levelElements = $levelElements.'<li><input class="filter" data-filter=".levelAll" type="checkbox" id="chkLevelAll">';
	//$levelElements = $levelElements.'<label class="checkbox-label" for="chkLevelAll">all</label></li>';
	//$levelElements = '<div class="cd-filter-block"><h4>Classification</h4>';
	$x = 0;
	for ($x = 20; $x >= 1; $x--) {
		// $levelElements = $levelElements.'<li><input class="filter" data-filter=".P'.$x.'" type="checkbox" id="chkLevel'.$x.'">';
		// $levelElements = $levelElements.'<label class="checkbox-label" for="chkLevel'.$x.'">'.$x.'</label></li>';
		$levelElements = $levelElements.'<li><label class="container1" for="chkLevel'.$x.'">.<input class="filter" data-filter=".P'.$x.'" type="checkbox" id="chkLevel'.$x.'">';
		$levelElements = $levelElements.'<span class="checkmark"></span></label></li>';
		// $levelElements = $levelElements.'<label class="container1">P'.$x.'';
		// $levelElements = $levelElements.'  <input class="filter" data-filter=".P'.$x.'" type="checkbox" id="chkLevel'.$x.'">';
		// $levelElements = $levelElements.'  <span class="checkmark"></span>';
		// $levelElements = $levelElements.'</label>';
	}
	
	////BEGIN Subsidiaries
	// $officeElements = '<div class="cd-filter-block"><h4>Location</h4><ul class="cd-filter-content cd-filters list">';
	// $officeElements = $officeElements.'<li><input class="filter" data-filter=".S1" type="checkbox" id="chkOfficeSanAntonio" checked>';
	// $officeElements = $officeElements.'<label class="checkbox-label" for="chkOfficeSanAntonio">1 - San Antonio</label></li>';
	// array_push($filtros,'S1');
	// $officeElements = $officeElements.'<li><input class="filter" data-filter=".S2" type="checkbox" id="chkOfficeOther">';
	// $officeElements = $officeElements.'<label class="checkbox-label" for="chkOfficeOther">2 - Other</label></li>';
	// array_push($filtros,'S2');
	// $officeElements = $officeElements.'</ul> <!-- cd-filter-content --></div> <!-- cd-filter-block -->';
	////END Subsidiaries
	
	$galleryElements = '<section class="cd-gallery"><ul>';				
	foreach ($dir as $dirInfo) 
	{	
		$dirName =  basename($dirInfo);
		if ($dirName === '.' || $dirName === '..' || $dirName === '_gsdata_' || $dirName === 'texturas-' || $dirName === 'Texturas') {
			continue;
		}
			//Abstrato Leather_Quartzite_Green,White_16
		$cateTypeColor = explode("_", $dirName, 4);
		$container = $cateTypeColor[0];
		$type = strtolower($cateTypeColor[1]);
		$colors = explode(",",strtolower($cateTypeColor[2]));
		$colorsText = strtolower($cateTypeColor[2]);
		$level = strtolower($cateTypeColor[3]);
		//$office = strtolower($cateTypeColor[4]);
		$cPath = $dirInfo;
		$currentColors = '';

		if(!in_array($type, $filtros))
		{
			array_push($filtros,$type);
			$categoryElements = $categoryElements.'<li><input class="filter" data-filter=".'.$type.'" type="checkbox" id="chkCategory'.$type.'">';
			$categoryElements = $categoryElements.'<label class="checkbox-label" for="chkCategory'.$type.'">'.$type.'</label></li>';
		}
		foreach($colors as $color)
		{
			if($color != "")
			{
				if(!in_array($color, $filtros))
				{
					array_push($filtros,$color);
					$colorElements = $colorElements.'<li><input class="filter" data-filter=".'.$color.'" type="checkbox" id="chkColor'.$color.'">';
					$colorElements = $colorElements.'<label class="checkbox-label" for="chkColor'.$color.'">'.$color.'</label></li>';
				}
				$currentColors = $currentColors.$color.' ';
			}
		}
		// if(!in_array('P'.$level, $filtros))
		// {
			// array_push($filtros,'P'.$level);
			// $levelElements = $levelElements.'<li><input class="filter" data-filter=".P'.$level.'" type="checkbox" id="chkLevel'.$level.'">';
			// $levelElements = $levelElements.'<label class="checkbox-label" for="chkLevel'.$level.'">'.$level.'</label></li>';
		// }
		
		// if(!in_array('S'.$office, $filtros))
		// {
			// array_push($filtros,'S'.$office);
			// $categoryElements = $categoryElements.'<li><input class="filter" data-filter=".S'.$office.'" type="checkbox" id="chkOffice'.$office.'">';
			// $categoryElements = $categoryElements.'<label class="checkbox-label" for="chkOffice'.$office.'">'.$office.'</label></li>';
		// }
		
		//$cDir = glob($cPath.'/[tT]extura.{jpg,png,jpeg}', GLOB_BRACE);
		$cDir = glob('./images/inventory-dallas/[tT]exturas-dallas/'.$container.'/[tT]extura.{jpg,png,jpeg}', GLOB_BRACE);
		foreach($cDir as $cDirInfo)
		{
			if($contador > 0)
			{
				break 1;
			}
			else
			{
				$contador = 1;
				$cFileName = basename($cDirInfo);
				////Include Office
				//$galleryElements = $galleryElements.'<li class="project-post mix categoryAll colorAll levelAll '.$type.' '.$currentColors.' P'.$level.' S'.$office.'"> ' ;
				$galleryElements = $galleryElements.'<li class="project-post mix categoryAll colorAll levelAll '.$container.' '.$type.' '.$currentColors.' P'.$level.'"> ' ;
				//$galleryElements = $galleryElements.'<div class"project-post myProjectPost">';
				$galleryElements = $galleryElements.'<div class="project-gal">';
				$galleryElements = $galleryElements.'<img alt="" src="'.$cDirInfo.'" />';				
				//$galleryElements = $galleryElements.'<div class="hover-box">';
				//$galleryElements = $galleryElements.'<a class="zoomLink zoom" href="'.$cDirInfo.'" target="new"><i class="fa fa-search-plus"></i></a>';
				//$galleryElements = $galleryElements.'<a class="link" href="productdetail.php?gtype=2&gallery='.$dirName.'" target="_self"><i class="fa fa-link"></i></a>';
				//$galleryElements = $galleryElements.'</div>';	
				
				$galleryElements = $galleryElements.'</div>';
				$galleryElements = $galleryElements.'<div class="display-detail">';				
				$galleryElements = $galleryElements.'<h2>'.$container.'</h2>';
				$galleryElements = $galleryElements.'<p>'.$type.'</p>';
				//$galleryElements = $galleryElements.'<p>'.$colorsText.'</p>';
				// $galleryElements = $galleryElements.'<p>'.$level.'</p>';				
				$galleryElements = $galleryElements.'<a href="productdetail-dallas.php?gtype=2&gallery='.$dirName.'" target="_blank"><a href="productdetail-dallas.php?gtype=2&gallery='.$dirName.'" target="_blank"><span>LIVE INVENTORY</span></a></a>';
				$galleryElements = $galleryElements.'</div>';
				//$galleryElements = $galleryElements.'</div>';
				
				$galleryElements = $galleryElements.'</li>';
			}
		}
		$contador = 0;
	}
	$categoryElements = $categoryElements.'</ul> <!-- cd-filter-content --></div> <!-- cd-filter-block -->';
	$colorElements = $colorElements.'</ul> <!-- cd-filter-content --></div> <!-- cd-filter-block -->';
	//$levelElements = $levelElements.'</ul> <!-- cd-filter-content --></div><!-- hidden div --></div> <!-- cd-filter-block -->';
	//$levelElements = $levelElements.'</ul> <!-- cd-filter-content --></div> <!-- cd-filter-block -->';
	$levelElements = $levelElements.'</div> <div class="flex-item"></div></div><!-- cd-filter-block -->';
	
	//$levelElements = $levelElements.'<div class="flex-item"></div></div>';	
	
	$galleryElements = $galleryElements.'<li class="gap"></li><li class="gap"></li><li class="gap"></li></ul>';
	$galleryElements = $galleryElements.'<div class="cd-fail-message">No results found</div>';
	$galleryElements = $galleryElements.'</section> <!-- cd-gallery -->';
?>
	<!-- Container -->
	<div id="container">
		<!-- Begin Header 
			================================================== -->
		<header class="clearfix">
			<!-- Static navbar -->
			<div class="navbar navbar-default navbar-fixed-top">			
				
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
					<h1>Live Inventory - Dallas</h1>
				</div>
			</div>

			<!-- portfolio-section 
				================================================== -->
			
			<!-- Begin main-->
		<main id="overrideStyle" class="cd-main-content portfolio-box">
			<div class="cd-tab-filter-wrapper">
				
			</div> <!-- cd-tab-filter-wrapper -->

			<?php
				echo $galleryElements;
			?>

			<div class="cd-filter">
				<form>
					<?php
						//echo $officeElements;
						echo $categoryElements;
						echo $colorElements;
						echo $levelElements;
					?>
				</form>



		<!-- footer 
			================================================== -->
		
		<!-- End footer -->
	</div>
	<!-- End Container -->
</body>
</html>