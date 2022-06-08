<?php

class  Animal{
    public $name = 'adam';
    public $age = 10;

    // オブジェクトの関数（処理）
    function say() {
        print  $this->name . 'です。' . $this->age . '歳です。' . PHP_EOL;
    }
}

?>