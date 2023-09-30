<?php
$fio = $_POST['fio']; 
$email = $_POST['email']; 
$message = $_POST['message']; 
$fio = htmlspecialchars($fio); 
$email = htmlspecialchars($email); 
$message = htmlspecialchars($message); 
$fio = urldecode($fio); 
$email = urldecode($email); 
$message = urldecode($message); 
$fio = trim($fio); 
$email = trim($email);
if (mail("ambrosayos@mail.ru", "Заявка с сайта", "Сообщение: \r\n" . $message.  " . \r\n E-mail: ". $email ,"From: ". $email. "\r\n")) 
echo "<br>Сообщение успешно отправлено!"; 
else { 
    echo "<br>При отправке сообщение возникла ошибка!"; 
} 
?> 


