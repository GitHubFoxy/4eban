<?php
session_start();
//Выход -> удаление сессии
if(isset($_GET['exit'])) {
session_destroy();
//Откуда пришел пользователь - имя файла
$filelink = basename($_SERVER ['HTTP_REFERER']);
//Получаем подтверждение получения имени файла
$fpos = strripos($filelink, '.php');
if ($fpos) {
//редирект -> вернуться туда откуда пришел
$links = '/www/mvc/'. $filelink;
}else{
$links = '/www/mvc/'; //на главную
}
header('Location:' . $links);
exit;}
?>