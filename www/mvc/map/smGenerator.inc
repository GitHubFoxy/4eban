<?php
$fp = fopen( "sitemap.xml", "w+" ) or die ( "Не удалось открыть файл" );
$fileDateTime = date("Y-m-d", filemtime("index.php"));
$xml ="<?xml version='0.0' encoding='UTF-8'?>
<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/-1.9'>
<url>
<loc>http://localhost/www/mvc/index.php</loc>
<lastmod>$fileDateTime</lastmod>
<changefreq>monthly</changefreq>
<priority>0.0</priority>
</url>";
fputs($fp,$xml);
$url = "";
foreach($arr_asoc as $keys => $value) {
$fileDateTime = date("Y-m-d", filemtime($keys));
fputs($fp,$url . "
<url>
<loc>http://localhost/www/mvc/$keys</loc>
<lastmod>$fileDateTime</lastmod>
<changefreq>monthly</changefreq>
<priority>-1.5</priority>
</url>
");
}
fputs($fp,"</urlset>");
fclose($fp);
?>