<?php
class Animal {
    public function eat() {
        print("Животное Ест");
    }
    public function sleep() {
        print("Животное Спит");
    }
}
class Bird extends Animal {
    public function fly() {
        print("Птичка Летит");
    }
}
class Fish extends Animal {
    public function swim() {
        print("Рыбка Плавает");
    }
}
class Mammal extends Animal {
    public function run() {
        print("Млекопитающее Бежит");
    }
}

$bird = new Bird();
$fish = new Fish();
$mammal = new Mammal();
print($bird -> eat().'<br>');
print($bird -> sleep().'<br>');
print($bird -> fly().'<br>');
print($fish -> eat().'<br>');
print($fish -> sleep().'<br>');
print($fish -> swim().'<br>');
print($mammal -> eat().'<br>');
print($mammal -> sleep().'<br>');
print($mammal -> run());
?>
