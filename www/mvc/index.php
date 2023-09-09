<?php
require ("model.php");
$homepage = new Model();
$homepage->filename="view/index.html";
$homepage->Display();
?>