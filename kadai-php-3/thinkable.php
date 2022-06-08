<?php
require_once 'human.php';

trait Thinkable {
    public function think() {
        print  "私は" . $this->hobby . "について考えています。"  . PHP_EOL;

        }
    }

?>