<?php
require ("model.php");
class ToursAltayPage extends Model {
private $buttons2 = array(
"Туры по Алтаю" => "tours-altay.php",
"Туры по России" => "tours-russia.php",
"Активный отдых" => " tours-active.php"
);
// Перекрытие значений атрибутов родительского класса
Public $title = "Алтай-Тур - Туры по Алтаю";
Public $description = "Алтай-Тур - Туры по Алтаю";
function Display() {
$this -> DisplayTitle();
$this -> DisplayDescriptions();
$this -> DisplayStyles();
$this -> DisplayHeader();
$this -> DisplayMenu($this->buttons);
$this -> DisplayMenu($this->buttons2);
$this->DisplayContent($this->filename);
$this -> DisplayFooter();
}
}
$ToursAltayObject = new ToursAltayPage();
$ToursAltayObject -> filename = "view/services/tours-altay.html";
$ToursAltayObject -> Display();
?>