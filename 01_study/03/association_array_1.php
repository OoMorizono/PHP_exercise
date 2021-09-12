<?php
$profile = [
    'name' => 'Bob',
    'age' => 21,
    'staff'=>[
        'Tom',
        'Ken',
        'John'
    ]
];

echo $profile [2][0]; #ken
echo '<br>';
echo $profile['staff'][2]; #john
