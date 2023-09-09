<?php
$fp = fopen( "sitemap.xml", "w+" ) or die ( "Не удалось открыть файл" );
$fileDateTime = date("Y-m-d", filemtime("index.php"));
$xml ="<?xml version='1.0' encoding='UTF-8'?>
<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>
<url>
<loc>http://localhost/www/mvc/index.php</loc>
<lastmod>$fileDateTime</lastmod>
<changefreq>monthly</changefreq>
<priority>1.0</priority>
</url>";
fputs($fp,$xml);
$url = "";
foreach($arr_asoc as $keys => $value) {
$fileDateTime = date("Y-m-d", filemtime($keys));
//4.6. Построчно записываем URL файлов
fputs($fp,$url . "
<url>
<loc>http://localhost/www/mvc/$keys</loc>
<lastmod>$fileDateTime</lastmod>
<changefreq>monthly</changefreq>
<priority>0.5</priority>
</url>
");
}
//4.7. Дозаписываем закрывающий тег
fputs($fp,"</urlset>");
//4.8. Закрываем файл
fclose($fp);
?>