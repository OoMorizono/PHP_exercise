<?php
require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/User.php';

// new の横のインスタンスの名に注意!クラス名のままになっているかも!
$bob = new Person('Bob',  21);
$tom = new Person('Tom', 22);
$ken  = new Person('Ken', 23);
echo $bob->selfIntroduction();
echo $bob->greet('小原');
echo $tom->selfIntroduction();
echo $tom->greet('小原');
echo $ken->selfIntroduction();
echo $ken->greet('小原');
