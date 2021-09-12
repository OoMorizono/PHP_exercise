<?php
class User
{
    public $name = 'Bob';
    public $age = 24;
    public function __construct()
    { 
    }
    public function greet($to)
    {
        return "こんにちは" . $to . "さん\n";
    }
    public function selfIntroduction()
    {
        return "私の名前は" . $this->name . "です\n" ;
        "年齢は" . $this->age . "です\n";
    }
}

