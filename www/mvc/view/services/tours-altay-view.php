<?php
    $filelist = [];
    $filelist = glob("view/services/news-altay/*.xml");
    $filelist = array_reverse($filelist);
    foreach ($filelist as $value){
        $xmlstr = file_get_contents($value);
        $movies = new SimpleXMLElement($xmlstr);
        $imglink = "view/services/news-altay/img/" . $movies->movie[0]->image;
        $datenews = $movies->movie[0]->charecters->datenews;
        $titles = $movies->movie[0]->title;
        $author = $movies->movie[0]->charecters->author;
        $text= $movies->movie[0]->text;
        echo "<div class='container'><div class='row section-news'>";
        echo "<h3 class ='classH3'>".$titles."</h3>";
        echo "<div class='col-25'><img src='$imglink'></div>";
        echo "<div class='col-75'><p class='p-class'>$datenews &#160; Автор: $author</p>";
        echo "&#160;&#160;$text</div></div></div>";
    }
?>