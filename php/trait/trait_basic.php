<?php

trait TraitA {
    public function sayHello() {
        return "Hello";
    }
}

trait TraitB {
    public function sayWorld() {
        return "World";
    }
}

class HelloWorld {
    use TraitA, TraitB;

    public function sayHelloWorld() {
        $s = fn(string $str) :string => $str;
        echo "{$s($this->sayHello())} {$s($this->sayWorld())}!\n";
        // echo "{$this->sayHello()} {$this->sayWorld()}! \n";
    }
}

$hw = new HelloWorld();
$hw->sayHelloWorld();