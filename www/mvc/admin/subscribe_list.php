<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Список подписчиков</title>
</head>
<body class="grid place-content-center mt-10">
<?php 
@ $db = new mysqli('localhost', 'root', '', 'auth');
    if (mysqli_connect_errno()) {
        echo "Ошибка: не удалось подключиться к базе данных";
        exit;
    }
    mysqli_set_charset($db, 'utf-8');
    $q = "SELECT * from `subscribe_users` order by `last_name`";
    $result = $db->query($q);
    $num_results = $result->num_rows;
?>

<table>
    <thead>
        <tr>
            <?php echo "<th colspan='4'>Список подписчиков: ". $num_results ."</th>";?>
        </tr>
    </thead>
    <tbody>
        <tr >
            <td>ID</td>
            <td>Фамилия</td>
            <td>Имя</td>
            <td>Электронный адрес</td>
        </tr>
        <tr >
            <?php 
            for($i=0;$i<$num_results;$i++){
                $row = $result->fetch_assoc();
                echo '<td>'.stripslashes($row['user_id']).'</td>';
                echo '<td>'.stripslashes($row['first_name']).'</td>';
                echo '<td>'.stripslashes($row['last_name']).'</td>';
                echo '<td>'.stripslashes($row['email']).'</td>';
            }
            ?>
        </tr>
    </tbody>
</table>
</body>
<style>
    td{
    padding: 0 10px;
    }
</style>
</html>