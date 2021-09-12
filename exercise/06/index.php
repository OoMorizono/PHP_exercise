<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。





// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー

class Car
{
    public $name;
    public $num;
    public $color;

    public function __construct($name, $num, $color)
    {
        $this->name =  $name;
        $this->num = $num;
        $this->color = $color;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getNumber()
    {
        return $this->num;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function information()
    {
        return '車の車種' . $this->name . '､' .
            '車体番号' . $this->num . '､' .
            'カラー' . $this->color . 'です｡';
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setNumber($num)
    {
        $this->num = $num;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
}

$car1 = new Car('ランクル', 100, 'black');

// 車名(車種)を取得
echo $car1->getName();
echo '<br>';

// 車体番号を取得
echo $car1->getNumber();
echo '<br>';

// カラーを取得
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->information();
echo '<br>';

// 車名(車種)を更新
$car1->setName('アルファード');
echo $car1->getName();
echo '<br>';

// 車体番号を取得
$car1->setNumber(200);
echo $car1->getNumber();
echo '<br>';

// カラーを取得
$car1->setColor('red');
echo $car1->getColor();
echo '<br>';

// 車の情報表示を表示
echo $car1->information();
echo '<br>';
