<?php
require ("model.php");
class ContactPage extends Model {
//Перекрытие значений атрибутоа родительского класса
Public $title = "Алтай-Тур - Туры по россии";
Public $description = "Алтай-Тур - Туры по россии";
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
$contact -> filename = "view/tours-russia.html";
//Вызов метода родительского класса Model
$contact -> Display();
?>