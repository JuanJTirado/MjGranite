		<?php
				$path = './images/Inventory/';
				$queryPath = htmlspecialchars($_GET["gallery"]);
				$galleryType = htmlspecialchars($_GET["gtype"]);
				if($galleryType == "1")
				{
					$path = './images/TopSellers/';
				}
				$pathQueryPath = $path.$queryPath.'/';
				$dir = new DirectoryIterator($pathQueryPath);										
				//BEGIN Read msg file
				$file = $path.$queryPath.'/msg.txt';
				$msgContent = '';
				if(file_exists($file))
				{
					$f = fopen($file, "r") or exit("Unable to open file!");
					// read file line by line until the end of file (feof)
					while(!feof($f))
					{
					  $msgContent = $msgContent.fgets($f).'<br />';
					}			 
					fclose($f);
				}
				//END Read msg file
				$category = '';
				$catAndType = explode("_", $queryPath);
				$category = $catAndType[0];
				$contador = 0;
				$listBoxText = "";
				$thumbnail = "";
			echo'
			<div class="row">
			<div class="col-xs-6">
			<div class="myDescription">
			<h1 class="myTitle">'.$category.'</h1>
			<p>'.$msgContent.'</p>
			</div>
			</div>
			<div class="col-xs-6">
				<div class="myPaleta">
					<img src="'.$path.$queryPath.'/paleta.jpg" />
				</div>
			</div>
			</div>
			
			<!-- project -section 
			================================================= -->
			<div class="single-project">						
				<!-- Images used to open the lightbox -->
				<div class="row">';
				foreach ($dir as $fileinfo) 
				{	
					if(!$fileinfo->isDot() && $fileinfo != 'paleta.jpg' && $fileinfo != 'msg.txt')
					{
						$contador = $contador + 1;
					}
				}
				$totalInDir = $contador;
				$contador = 0;
				foreach ($dir as $fileinfo) 
				{	
					if(!$fileinfo->isDot() && $fileinfo != 'paleta.jpg' && $fileinfo != 'msg.txt')
					{
						$contador = $contador + 1;
						$fileName = $fileinfo->getFilename();				
						$fileNameAndExt = explode(".", $fileName);													
						$fName = $fileNameAndExt[0];
						$fType = $fileNameAndExt[1];
						echo '<div class="column hover-shadow myThumb" style="background-image: url(\''.$path.$queryPath.'/'.$fileName.'\');" onclick="openModal();currentSlide('.$contador.')" >';
							//echo '<img src=""  class="" />';
						echo '</div>';
						//Add to listBox
						$listBoxText = $listBoxText.'<div class="mySlides">';
						$listBoxText = $listBoxText.'<div class="numbertext">'.$contador.' / '.$totalInDir.'</div>';
						$listBoxText = $listBoxText.'<div class="myImgContainer" style="background-image: url(\''.$path.$queryPath.'/'.$fileName.'\')"> </div>';
						$listBoxText = $listBoxText.'</div>';
						//Add to Thumbnail
						$thumbnail = $thumbnail.'<div class="column">';
						$thumbnail = $thumbnail.'<div class="myThumb demo" alt="'.$fName.'" style="background-image: url(\''.$path.$queryPath.'/'.$fileName.'\')" onclick="currentSlide('.$contador.')" alt="'.$fName.'"></div>';
						$thumbnail = $thumbnail.'</div>';
					}
				}
				echo'
				</div>
				<!-- The Modal/Lightbox -->
				<div id="myModal" class="modal">
				  <span class="closeModal cursor" onclick="closeModal()">&times;</span>
				  <div class="modal-content">
					'.$listBoxText.'	
					<!-- Next/previous controls -->
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

					<!-- Caption text -->
					<div class="caption-container">
					  <p id="caption"></p>
					</div>

					<!-- Thumbnail image controls -->
					'.$thumbnail.'
				  </div>
				</div>
			</div>';
			?>