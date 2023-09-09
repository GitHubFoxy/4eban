    <?php
    //2. Запись/перезапись файла sitemap.html
    $filename = 'view/sitemap.html';
    $fd = fopen($filename, 'w+') or die("не удалось создать файл");
    $text =
    "<link rel='stylesheet' href='css/map.css'></head></body>\n
    <body><figure><h1>Карта сайта</h1><dl class='holiday'>";
    $text = $text . "\n<dt>Главная</dt><dd><ul><li><a href='index.php'>index.php</a></li></dd>";
    foreach($arr_asoc as $keys => $value) {
    //Если составное имя файла с символом '-', то задаем иерархию
    if (strpos($keys,"-")) {
    $str0 = "<ul><ul><li>";
    $str1 = "</li></ul></ul>";
    } else {
    $str0 = "<ul><li>";
    $str1 = "</li></ul>";
    }
    $text = $text . "\n<dt>" . $value . "</dt><dd>".$str0."<a href='" . $keys .
    "'>".$keys."</a>".$str1."</dd>";
    }
    $text = $text . "\n</ul></dl></figure>";
    fwrite($fd, $text); //Пишем в файл view/map.html
    fclose($fd); //Закрываем файл
    ?>