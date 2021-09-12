<?php
$prices = [
    'apple' => 150,
    'banana' => 200,
    'melon' => 300
];

foreach($prices as $fruits => $price){
    echo $fruits . 'は' . $price .  'です' . '<br>';
}