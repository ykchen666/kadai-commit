<?php
require_once 'animal.php';
require_once 'thinkable.php';

class Human extends Animal {
    public $hobby = '旅行';
    use Thinkable;
    
    
    function __construct($name, $age, $hobby) {
    $this->name = $name;
    $this->age = $age;
    $this->hobby = $hobby;
    }
    
    
}

?>