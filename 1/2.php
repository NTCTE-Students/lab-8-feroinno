<?php
class Employee {
    public $name;
    public $salary;
    public function __construct($name, $salary) {
        $this -> name = $name;
        $this -> salary = $salary;
    }
    public function getInfo() {
        return "{$this->name} {$this->salary}";
    }
}
class Manager extends Employee {
    public function manageTeam() {
        print("{$this->name} Управляет Командой Идиотов");
    }
    public function __construct($name, $salary) {
        parent::__construct($name, $salary);
    }
}
class Developer extends Employee {
    public function writeCode() {
        print("{$this->name} Пишет Код на 1C... (Позор)");
    }
    public function __construct($name, $salary) {
        parent::__construct($name, $salary);
    }
}
class Designer extends Employee {
    public function designDB() {
        print("{$this->name} Пытается Сделать Красивый Дизайн Базы Данных");
    }
    public function __construct($name, $salary) {
        parent::__construct($name, $salary);
    }
}

$manager = new Manager("Алексей", "154800 руб");
$developer = new Developer("Дмитрий", "250000 руб");
$designer = new Designer("Василий", "40000 руб");
print($manager -> getInfo().'<br>');
print($manager -> manageTeam().'<br>');
print($developer -> getInfo().'<br>');
print($developer -> writeCode().'<br>');
print($designer -> getInfo().'<br>');
print($designer -> designDB());
?>
