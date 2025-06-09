<?php
class Device {
    public $brand;
    public $model;
    public function __construct($brand, $model) {
        $this -> brand = $brand;
        $this -> model = $model;
    }
    public function getInfo() {
        return "{$this->brand} {$this->model}";
    }
    public function work() {
        return "Устройство Стабильно Работает";
    }
}
class Smartphone extends Device {
    public $display;
    public function __construct($brand, $model, $display) {
        parent::__construct($brand, $model);
        $this -> display = $display;
    }
    public function getInfo() {
        return parent::getInfo() . " {$this->display}";
    }
    public function call() {
        print("{$this->model} Звонит");
    }
}
class Laptop extends Device {
    public $batteryCapacityTime;
    public function __construct($brand, $model, $batteryCapacityTime) {
        parent::__construct($brand, $model);
        $this -> batteryCapacityTime = $batteryCapacityTime;
    }
    public function getInfo() {
        return parent::getInfo() . " {$this->batteryCapacityTime}";
    }
    public function gotHOT() {
        print("{$this->model} Нагрелся");
    }
}
class Tablet extends Device {
    public $temp;
    public function __construct($brand, $model, $temp) {
        parent::__construct($brand, $model);
        $this -> temp = $temp;
    }
    public function getInfo() {
        return parent::getInfo() . " {$this->temp}";
    }
    public function burning() {
        print("{$this->model} Горит... Иди, Спасай!");
    }
}

$smartphone = new Smartphone("Samsung", "A14", "8,2 Дюймов");
$laptop = new Laptop("Acer", "Nitro 15", "3-6 Часов");
$tablet = new Tablet("Apple", "IPad", "142℃");
print($smartphone->getInfo().'<br>');
print($smartphone->work().'<br>');
print($smartphone->call().'<br>');
print($laptop->getInfo().'<br>');
print($laptop->work().'<br>');
print($laptop->gotHOT().'<br>');
print($tablet->getInfo().'<br>');
//print($tablet->work().'<br>');
print($tablet->burning());
?>
