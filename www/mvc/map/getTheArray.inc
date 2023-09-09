<?php 
$directory = $_SERVER['DOCUMENT_ROOT']."/www/mvc";
$f = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)); 
$files_php=[];
foreach ($f as $files) 
{ 
    if(strpos($f->getSubPathName(), '.php')) 
    { 
        array_push($files_php, $f->getSubPathName()); 
    }
}
$filter = array("map.php","model.php","index.php"); 
$files = array_diff($files_php, $filter);
$files = array_values($files);
?>