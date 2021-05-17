<?php
class QuadraticEquation {
    private $a, $b, $c;
    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    function getter() {
        $arr = [];
        array_push($arr, $this->a, $this->b, $this->c);
        return $arr;
    }
    function getDiscriminant() {
        $delta = $this->b ** 2 - 4 * $this->a * $this->c;
        return $delta;
    }
    function getRoot1() {
        $r1 = (-$this->b + pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
        return $r1;
    }
    function getRoot2() {
        $r2 = (-$this->b - pow($this->getDiscriminant(), 0.5)) / (2 * $this->a);
        return $r2;
    }
}
