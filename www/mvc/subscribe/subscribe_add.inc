<?php
if (isset($_POST['first_name'])|| isset($_POST['last_name'])|| isset($_POST['email'])) {
$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
try { //Попытка
$conn = new PDO("mysql:host=localhost;dbname=auth","root", "",
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$sql = "INSERT INTO subscribe_users (first_name,last_name,email) VALUES
('$first_name','$last_name','$email')";
$affectedRowsNumber = $conn->exec($sql);
//если добавлена как минимум одна строка
if($affectedRowsNumber > 0 ){
$conn = null;
//Ожидание 1 сек.
sleep(1);
?>
<div id="Subscribe"></div>
<script>
window.onload = function(){
if (document.getElementById('Subscribe')){
alert('Вы подписаны на рассылку!');
}
}
</script>
<?php
} else {echo "Данные НЕ записаны :(";}
}
catch (PDOException $e) { //Исключение
echo "Database error: " . $e->getMessage(); //Вывод ошибки
}
}
?>