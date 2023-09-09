<?php
    require('map/getTheArray.inc');
    require('map/getTitle.inc');
    require('map/smHtmlGen.inc');
    require('map/smGenerator.inc');









    require ("model.php");
    $map = new Model();
    $map->filename="view/sitemap.html";
    $map->Display();
    ?>