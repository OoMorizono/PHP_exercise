<?php
$age =18;
if ($age < 20){
    echo '未成年です' . '<br>';
}

if ($age !=='18'){
    echo '値とデータが一致しません' . '<br>';
}

var_dump($age < 20);
echo '<br>';
var_dump($age !== '18');