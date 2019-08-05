
												
						
<html>

<body>

<h1>Hola Juan

<?php 

$iterator = new DirectoryIterator('./images/TopSellers');
foreach ($iterator as $fileinfo) {
    echo $fileinfo->getPathname() . "<br>";
}

	
?>

</h1>

</body>
</html>

