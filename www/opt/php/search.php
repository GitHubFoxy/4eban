<?php
$directory=$_SERVER['DOCUMENT_ROOT']."/www/opt/html/";
$f=new DirectoryIterator($directory);
$files_html=[];

$search = $_POST['search'];

foreach ($f as $files)
{
    if(strpos($files->getBasename(), '.html')) {
       $files_dir = $directory . $files->getBasename();
       $str = strip_tags(file_get_contents($files_dir));
       $count = substr_count($str, $search);
       if($count){
        $files_nodir = $files->getBasename();
        array_push($files_html,$files_nodir);
    } 
    }
}
echo '<p class="h4">Найдено файлов: '. count($files_html).'</p>';
foreach($files_html as $keys => $value) {
    echo '<tr><th>'. stripslashes($keys).'</th>';
    echo '<td>' . stripslashes($value).'</td>';
    $name= pathinfo($value, PATHINFO_FILENAME);
?>
<script>var hlink='<?php echo $name; ?>'</script>
<?php
echo "<td><a href='#'class='btn btn-success' onclick='href_back(hlink)'>";
echo $value . "</a></td></tr>";
}
echo '</table></div></div></div>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>function href_back(link){
window.location.replace("http://localhost/www/opt/#"+link);
}</script>
</body>
</html>