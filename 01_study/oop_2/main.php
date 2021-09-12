<?php

require_once __DIR__ . '/User.php';

$bob = new User('Bob',  21);
echo $bob->selfIntroduction();
$tom = new User('Tom', 22);
echo $tom->selfIntroduction();
$ken  = new User('Ken', 23);
echo $bob->selfIntroduction();
