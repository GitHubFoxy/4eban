<table width="100%" cellpadding="12" cellspacing="0" border="0">
<tr>
<td align="left"><img src="img/logo.webp" id='logo' /></td>
<td>
<h1>ООО "Алтайское туристическое агенство"</h1>
<p class="foot">г. Барнаул, ул. Садовая, 1</p>
</td>
<!-- Кнопки Войти/Выйти -->
<td>
<div class="item_header_auth">
<img id="btn_modal_window" class="img_in" src="admin/login/input.png"
title="Войти">&nbsp;
<img id="btn_out" class="img_in" src="admin/login/output.png"
title="Выйти">&nbsp;
</div>
</td>
</tr>
</table>
<!-- Модальное окно авторизации-->
<div id="my_modal" class="modal">
<div class="modal_content">
<span id="close_modal" class="close_modal_window">&#10062;</span>
<h3>Авторизация</h3>
<?php
if (!isset($_SESSION['valid_user'])) {
include "admin/login/auth.php";
}
?>
</div>
</div><!-- end modal -->