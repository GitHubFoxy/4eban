<?php
require ("model.php");
class ContactPage extends Model {
//Перекрытие значений атрибутоа родительского класса
Public $title = "Алтай-Тур - Активный туризм";
Public $description = "Алтай-Тур - Активный туризм";
function Display() {
$this -> DisplayTitle();
$this -> DisplayDescriptions();
$this -> DisplayStyles();
$this -> DisplayHeader();
$this -> DisplayMenu($this->buttons);
$this->DisplayContent($this->filename);
$this -> DisplayFooter();
}
}
$contact = new ContactPage();
$contact -> filename = "view/tours-active.html";
//Вызов метода родительского класса Model
$contact -> Display();
?>