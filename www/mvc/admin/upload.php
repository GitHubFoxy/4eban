<html>
<head><title>Загрузка...</title></head>
<body>
<h3>Загрузка файла...</h3>
<?php
//Код ошибки, 0 - ошибок нет
if ($_FILES['userfile']['error'] > 0) {
echo 'Проблема: ';
switch ($_FILES['userfile']['error']) {
case 1: echo 'Размер файла больше upload_max_filesize';
break;
case 2: echo 'Размер файла больше max_file_size';
break;
case 3: echo 'Загружена только часть файла';
break;
case 4: echo 'Файл не загружен';
break;
case 6: echo 'Загрузка невозможна: не задан временный каталог';
break;
case 7: echo 'Загрузка не выполнена: невозможна запись на диск';
break;
}
exit;
}
//Признак, что файл текстовый (не картинка)
$logs = true;
// Проверка, имеет ли файл правильный MIME-тип
//Если Да, то определяем подходящую директорию
switch ($_FILES['userfile']['type']) {
case 'text/html': $catalog = '../view/';
break;
case 'text/css': $catalog = '../css/';
break;
case 'application/x-javascript': $catalog = '../js/';
break;
case 'image/jpeg': $catalog = '../img/';
$logs = false;
break;
default:
echo 'Проблема: файл не является HTML, Css, Js или Jpeg';
exit;
}
//Получаем имя файла
$upfile = $catalog . $_FILES['userfile']['name'];
// помещаем файл в подходящую директорию
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
if (!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile)) {
echo 'Проблема: невозможно переместить файл в каталог назначения';
exit;
}
} else {
echo 'Проблема: возможна атака через загрузку файла. Файл: ';
echo $_FILES['userfile']['name'];
exit;
}
echo 'Файл '. $upfile . ' успешно загружен.<br /><br />';
//Если файл текстовый (HTML, Css или Js)
if ($logs) {
$contents = file_get_contents($upfile);
file_put_contents($upfile, $contents);
// вывод загруженного файла
echo 'Предварительный просмотр содержимого загруженного файла:<br /><hr />';
echo nl2br($contents); //Функция nl2br() вставляет тег <br> с каждой новой строки
echo '<br><hr>';
}
?>
</body>
</html>