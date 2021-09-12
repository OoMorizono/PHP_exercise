<?php 
class Car
{
    public $name;
    public $num;
    public $color;

    public function __construct($name, $num , $color)
    {
        $this->name = $name;
        $this->num = $num;
        $this->color = $color;
    }
}