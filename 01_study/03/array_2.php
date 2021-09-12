<?php
$profile =  [
    'Bob',
    21,
    [
        'Bob',
        'Tom',
        'Ken'
    ]
    
];

echo $profile[0] . '<br>';
echo $profile[1]. '<br>';
echo $profile[2] [0] . '<br>';
echo $profile[2] [1]. '<br>';
echo $profile[2] [2]. '<br>';
echo var_dump($profile);
echo '<br>';
echo print_r($profile);
?>