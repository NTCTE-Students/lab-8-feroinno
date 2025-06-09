<?php
trait Authenticatable {
    public function login($name){
        return "Пользователь {$name} Залогинился<br>";
    }
    public function logout() {
        return "Пользователь Разлогинился<br>";
    }
}
class User {
    use Authenticatable;
    public $name;
    public function __construct($name) {
        $this -> name = $name;
    }
}

$user = new User("Elizabeth");
print($user->login("Elizabeth"));
print($user->logout());
?>
