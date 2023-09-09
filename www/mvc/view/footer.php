<table width="100%">
<tr>
<td>
<p><!--Пустая строка--></p>
<p class="foot">&copy; ООО "Алтайское туристическое агенство"</p>
<p class="foot">Контактные телефоны:
<a href="tel:+7(3852)111-11-11">+7(3852)111-11-11</a>
</p>
</td>
</tr>
<?php
if(isset($_SESSION['valid_user'])){
echo '<script>load(1);</script>'; //Вход выполнен
//Если пользователь входит в группу Администраторы
if ($_SESSION['valid_user']=='administrators') {
?>
<tr>
<td>
<p class="foot">Раздел администратора сайта:
<a href="admin/upload.html" target="_blank">Наполнение контентом</a>
</p>
</td>
</tr>
<?php
}
}else{echo '<script>load(0);</script>';}//Вход не выполнен
?>
</table>
</body></html>