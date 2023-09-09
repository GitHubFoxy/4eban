

<?php
for($i=0; $i<count($files); $i++) {
    $namefile = $files[$i];
    $res = file_get_contents($files[$i]);
    if (preg_match("/Алтай-Тур .*?[\"]/", $res, $titles)==1){
         $arr_asoc[$namefile] =substr_replace($titles[0],"", -1);
    }
    }
    ?>