<?php
 
class scanDir
{
    public static $directories, $files, $ext_filter, $recursive;
    // ----------------------------------------------------------------------------------------------
    // scan(dirpath::string|array, extensions::string|array, recursive::true|false)
    public static function scan()
    {
        // Initialize defaults
        self::$recursive = false;
        self::$directories = array();
        self::$files = array();
        self::$ext_filter = false;
        // Check we have minimum parameters
        if (!($args = func_get_args())) {
            die("Must provide a path string or array of path strings");
        }
        if (gettype($args[0]) != "string" && gettype($args[0]) != "array") {
            die("Must provide a path string or array of path strings");
        }
        // Check if recursive scan | default action: no sub-directories
        if (isset($args[2]) && $args[2] == true) {
            self::$recursive = true;
        }
        // Was a filter on file extensions included? | default action: return all file types
        if (isset($args[1])) {
            if (gettype($args[1]) == "array") {
                self::$ext_filter = array_map('strtolower', $args[1]);
            } else {
                if (gettype($args[1]) == "string") {
                    self::$ext_filter[] = strtolower($args[1]);
                }
            }
        }
        // Grab path(s)
        self::verifyPaths($args[0]);
        return self::$files;
    }
    private static function verifyPaths($paths)
    {
        $path_errors = array();
        if (gettype($paths) == "string") {
            $paths = array($paths);
        }
        foreach ($paths as $path) {
            if (is_dir($path)) {
                self::$directories[] = $path;
                $dirContents = self::find_contents($path);
            } else {
                $path_errors[] = $path;
            }
        }
        if ($path_errors) {
            echo "The following directories do not exists \n";
            die(var_dump($path_errors));
        }
    }
    // This is how we scan directories
    private static function find_contents($dir)
    {
        $result = array();
        $root = scandir($dir);
        foreach ($root as $value) {
            if ($value === '.' || $value === '..') {
                continue;
            }
            if (is_file($dir . DIRECTORY_SEPARATOR . $value)) {
                if (!self::$ext_filter || in_array(strtolower(pathinfo($dir . DIRECTORY_SEPARATOR . $value, PATHINFO_EXTENSION)), self::$ext_filter)) {
                    self::$files[] = $result[] = $dir . DIRECTORY_SEPARATOR . $value;
                }
                continue;
            }
            if (self::$recursive) {
                foreach (self::find_contents($dir . DIRECTORY_SEPARATOR . $value) as $value) {
                    self::$files[] = $result[] = $value;
                }
            }
        }
        // Return required for recursive search
        return $result;
    }
}
// #############################################################################
// Set application type
//header('Content-type: application/javascript');
// Set variables
/*
$str_output = "";
$dirs = array('images');
$file_ext = array();
// Scan for directories from 'images' director
$files = scanDir::scan($dirs, null, false);
$files = array_unique($files);
#print_r($files);
foreach ($files as $file) {
    $str_output .= $file;
}
// Remove single line comments
#$str_output = preg_replace('#//.*#', '', $str_output);
// Remove line breaks and indents
#$str_output = preg_replace('#\n|\n\r|\r|\t#', '', $str_output);
// Send fake js
//echo $str_output;


$dir_iterator = new RecursiveDirectoryIterator("images\TopSellers");
//$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::SELF_FIRST);
// could use CHILD_FIRST if you so wish

foreach ($dir_iterator as $file) {
	if ($file === '.' || $file === '..') {
                continue;
	}
    if(is_dir($file))
		echo $file, "\n";
}
*/

$files = glob('./images/TopSellers/*', GLOB_ONLYDIR); 

foreach ($files as $file) {
	$fileName = basename($file);
	if ($fileName === '.' || $fileName === '..' || $fileName === '_gsdata_') {
		continue;
	}
	echo $fileName, "\n";
}