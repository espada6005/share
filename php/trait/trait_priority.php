<?php

class Base {
    public function sayHello() {
        echo "Hello ";
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo "World!\n";
    }
}

class HelloWorld extends Base {
    use SayWorld;
}

$hw = new HelloWorld();
$hw->sayHello();

// trait HelloWorld {
//     public function sayHello() {
//         echo "Hello World!\n";
//     }
// }

// class TheWorldIsNotEnough {
//     use HelloWorld;

//     public function sayHello() {
//         echo "Hello Universe!\n";
//     }
// }

// $twine = new TheWorldIsNotEnough();
// $twine->sayHello();