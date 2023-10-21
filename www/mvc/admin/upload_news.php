<?php 
$logs = true;
$len = count($_FILES['files']['name']);
for($i=0;$i<$len;$i++){
    switch ($_FILES['files']['type'][$i]){
        case 'image/png': $catalog = '../view/services/news-altay/img/';
        $logs= false;
        break;
        case 'text/xml': $catalog = '../view/services/news-altay/';
            $logs = true;
            break;
        default:
            echo "File is not PNG or XML";
            exit;
    }
    echo 'File'. $upfile . ' succesfuly uploaded!<br /><br />';
    if ($logs) {
        $contents = file_get_contents($upfile);
        echo 'Предварительный просмотр содержимого загруженного файла:<br/><hr/>';
        echo '<br><hr>';
    }
}
?>