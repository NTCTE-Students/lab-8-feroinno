<?php
class Vehicle {
    public $make;
    public $model;
    public $year;
    public function __construct($make, $model, $year) {
        $this -> make = $make;
        $this -> model = $model;
        $this -> year = $year;
    }
    public function getInfo() {
        return "{$this->year} {$this->make} {$this->model}";
    }
}
class Car extends Vehicle {
    public $doors;
    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this -> doors = $doors;
    }
    public function getInfo() {
        return parent::getInfo() . " {$this -> doors}";
    }
}
class Bike extends Vehicle {
    public $type;
    public function __construct($make, $model, $year, $type) {
        parent::__construct($make, $model, $year);
        $this -> type = $type;
    }
    public function getInfo() {
        return parent::getInfo() . " {$this -> type}";
    }
}
// Далее создай объекты и протестируй их.
class Truck extends Vehicle {
    public $loadCapacity;
    public function __construct($make, $model, $year, $loadCapacity) {
        parent::__construct($make, $model, $year);
        $this -> loadCapacity = $loadCapacity;
    }
    public function getInfo() {
        return parent::getInfo() . " {$this -> loadCapacity}";
    }
}

$car = new Car('Toyota', 'Trueno AE86', 1985, 4);
$bike = new Bike('Кто-то','Популярная','2054','Быстрейшая');
$truck = new Truck('ЗИЛ', 'Ассенизаторный', '2008', '10м3');
print($car -> getInfo() . '<br>');
print($bike -> getInfo() . '<br>');
print($truck -> getInfo());
?>
