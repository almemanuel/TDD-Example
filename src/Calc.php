<?php

class Calc{
    private $a, $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }


    public function add() {
        return $this->a + $this->b;
    }


    public function sub() {
        return $this->a - $this->b;
    }


    public function mult() {
        return $this->a * $this->b;
    }


    public function div() {
        return $this->a / $this->b;
    }


    public function pow() {
        return pow($this->a, $this->b);
    }


    public function root() {
        return pow($this->a, 1 / $this->b);
    }
}

?>