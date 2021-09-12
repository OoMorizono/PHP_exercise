<?php
//どちらのてすとも80点以上 : 合格
//どちらかのテストが50点以上: 追試
//2つの条件をみたさない: 不合格

$score_1 = 20;
$score_2 = 20;

if($score_1 >= 80 && $score_2 >=80){
    echo '合格';
}elseif($score_1 >= 50 || $score_2 >= 50){
    echo '追試';
}else{
    echo '不合格';
}

?>

<?php
echo '<hr>';
$num=5 ;

if($num % 2 !== 0){
    //打ち消し ! は極力使わないほうがいい
    echo $num . 'は偶数ではありません';
}else{
    echo $num . 'は偶数です';
}