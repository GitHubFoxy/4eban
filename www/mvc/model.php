<?php
<<<<<<< HEAD

class Model {
=======
class Model {
// 1. Атрибуты класса Model
>>>>>>> cef5ad0591ada8eae26ada88bfb9e3579ab34b61
    public $content;
    public $filename;
    public $title = "ООО \"Алтайское туристическое агенство\"";
    public $description = "Агенство Алтай-Тур Барнаул";
    public $buttons = array("Главная" => "index.php",
    "Контакты" => "contact.php",
    "Услуги" => "services.php",
    "Карта сайта" => "map.php"
);
<<<<<<< HEAD


=======
// 2. Операции класса Model
>>>>>>> cef5ad0591ada8eae26ada88bfb9e3579ab34b61
public function Display() {
    $this -> DisplayTitle(); //Название веб-страницы
    $this -> DisplayDescriptions();//Мета-тег содержания веб-страницы
    $this -> DisplayStyles();//Стиль оформления
    $this -> DisplayHeader();//Заголовок
    $this -> DisplayMenu($this->buttons);//Панель меню
    $this -> DisplayContent($this->filename); //Контент
    $this -> DisplayFooter(); //Подвал
}
<<<<<<< HEAD


=======
>>>>>>> cef5ad0591ada8eae26ada88bfb9e3579ab34b61
public function DisplayTitle() {
    echo "<!DOCTYPE html><html>\n<head>\n<meta charset='UTF-8'>\n";
    echo "<title>".$this->title."</title>";
}
<<<<<<< HEAD


=======
>>>>>>> cef5ad0591ada8eae26ada88bfb9e3579ab34b61
public function DisplayDescriptions() {
echo "\n<meta name=\"description\"
content=\"".$this->description."\" />";
}
<<<<<<< HEAD


=======
>>>>>>> cef5ad0591ada8eae26ada88bfb9e3579ab34b61
public function DisplayStyles() {
    ?>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <script type="text/javascript" src="js/main.js"></script>
    <body>
    <?php
}
<<<<<<< HEAD


public function DisplayHeader() {
    require('view/header.html'); //Открываем файл в любом случае
}


=======
public function DisplayHeader() {
    require('view/header.html'); //Открываем файл в любом случае
}
>>>>>>> cef5ad0591ada8eae26ada88bfb9e3579ab34b61
public function DisplayMenu($buttons) {
    echo "<table width=\"100%\" bgcolor=\"white\"" .
    "cellpadding=\"4\" cellspacing=\"4\">\n";
    echo "<tr>\n";
    // Вычисление значения кнопки 100/количество
    $width = 100/count($buttons);
    //Получаем ключ и значение массива кнопок
    //И определяем текущий элемент Меню
    foreach($buttons as $name => $url) {
    $this -> DisplayButton($width, $name, $url,
    !$this->URLCurrentPage($url));
    }
    echo "</tr></table>\n";
}
<<<<<<< HEAD


=======
>>>>>>> cef5ad0591ada8eae26ada88bfb9e3579ab34b61
protected function URLCurrentPage($url) {
//Если подстрока элемента массива кнопок НЕ входит в текущую ссылку
    if(strpos($_SERVER['PHP_SELF'], $url)==false) {
    return false; // возврат False
    } else {
    return true; // возврат True
    }
}
<<<<<<< HEAD


=======
>>>>>>> cef5ad0591ada8eae26ada88bfb9e3579ab34b61
protected function DisplayButton($width, $name, $url, $active = true) {
    if ($active) { //Для всех прочих - ставим крестик(код UTF8) и указываем ссылку!
    echo "<td width =\"".$width."%\"> &#10062;" .
    "<a href=\"".$url."\"><span class=\"menu\">".$name."</span></a>" .
    "</td>";
    } else { //Активный (выделен пользователем) - ставим галочку и убираем ссылку!
    echo "<td width =\"".$width."%\">&#9989;" .
    "<span class=\"menu\">".$name."</span></td>";
    }
}
<<<<<<< HEAD


=======
>>>>>>> cef5ad0591ada8eae26ada88bfb9e3579ab34b61
public function DisplayContent($fil) { //Подгружаем контент
    $filename = $fil;
    //Читаем файл
    $myfile = fopen($filename, "r") or die("Не удается открыть файл!");
    $content = fread($myfile,filesize($filename));
    fclose($myfile);
    echo $this->content=$content; //Публикуем контекст -> Атрибут класса = Значение
}
<<<<<<< HEAD


=======
>>>>>>> cef5ad0591ada8eae26ada88bfb9e3579ab34b61
public function DisplayFooter() {
    require('view/footer.html'); //Открываем файл в любом случае
}
}
?>