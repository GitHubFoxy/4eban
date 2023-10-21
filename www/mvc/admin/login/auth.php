<?php
@session_start();
if (isset($_POST['userid']) && isset($_POST['password']) && !isset($_SESSION['valid_user'])) {
//Аутентификация (попытка)
$userid = $_POST['userid'];
$password = sha1($_POST['password']);
$mysql = new mysqli('127.0.0.1','root','','auth');
if (mysqli_connect_errno()) {
echo 'Невозможно подключиться к базе данных: '.mysqli_connect_error();
exit();
}
$query = "select * from authorised_users where
name = '$userid' and
password = '$password'";
//возвращает набор результатов "ОбъектБД,Запрос"
$result = mysqli_query($mysql, $query);
if(!$result) {
echo 'Ошибка: Невозможно выполнить запрос.';
exit;
}
//Получение количество найденных записей
$row = mysqli_num_rows($result);
//Если хоть одна найдена, то $row=1 (true)
if ($row) {
//Получение ассоциативного массива из найденной строки
$d = mysqli_fetch_array($result, MYSQLI_ASSOC);
//Если найден, регистрируем его идентификатор (группу)
$_SESSION['valid_user'] = strval($d['groups']);
// Закрытие набора данных
$result->close();
}//end row
$mysql->close();
if (isset($_SESSION['valid_user'])) {
//Откуда пришел пользователь - имя файла
$filelink = basename($_SERVER ['HTTP_REFERER']);
//Получаем подтверждение получения имени файла
//Возможны ситуации, что браузер не отправит!
$fpos = strripos($filelink, '.php');
if ($fpos) {
//редирект -> вернуться туда откуда пришел
$links = '/www/mvc/'. $filelink;
}else{
$links = '/www/mvc/'; //на главную
}
header('Location:' . $links);
exit();
} else {
if (isset($userid)) {
// Была предпринята неудачная попытка зарегистрироваться
echo 'Указан неверный Логин или Пароль.<br />';
echo "<p><a href='../../'>На главную</a></p>";
}
} //end if
} //end isset
// Форма для входа в систему
if (!isset($userid)) {
include "form.inc";
}
?>