<?php
require ("model.php");
class ContactPage extends Model {
//Перекрытие значений атрибутоа родительского класса
Public $title = "Алтай-Тур - Подписка";
Public $description = "Алтай-Тур - Подписка";
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
$contact -> filename = "view/subscribe.html";
$contact -> Display();
require './subscribe/subscribe_add.inc';
?>