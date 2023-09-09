<?php
//1.Подключаем файл с Родительским классом Model
require ("model.php");
//2. Класс ServicesPage наследует свойства/методы класса Model
class ServicesPage extends Model {
//2.1.Задаем атрибут-массив элементов подменю для меню Услуги
private $buttons2 = array(
"Туры по Алтаю" => "tours-altay.php",
"Туры по России" => "tours-russia.php",
"Активный отдых" => "tours-active.php"
);
//2.2. Перекрытие значений атрибутов родительского класса
Public $title = "Алтай-Тур - Услуги";
Public $description = "Алтай-Тур - Услуги";
//3.Метод подкласса ServicesPage с новым атрибутом
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
//4. Создание объекта $services подкласса ServicesPage
$services = new ServicesPage();
//5. По ссылке присваиваем значение атрибута класса Model
//в файле хранится контекстная информация страницы Услуги
$services -> filename = "view/services.html";
//6. Вызов операции (метода) подкласса ServicesPage
$services -> Display();
?>