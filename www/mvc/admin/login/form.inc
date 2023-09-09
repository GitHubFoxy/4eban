<?php 
echo '<form name="auth_form" method="post" action="admin/login/auth.php">';
echo '<table>'; 
echo '<tr><td>Имя:</td><br>';
echo '<td><input type="text" name="userid" pattern="[a-zA-Z0-9]+" required></td></tr>'; 
echo '<tr><td>Пароль</td>'; 
echo '<td><input type="password" value="" name="password" required></td></tr>';
echo '<tr><td colspan="2" align="center"><br>';
echo '<input type="submit" value="Вход"></td></tr>'; 
echo '</table></form>'; 
    ?>
