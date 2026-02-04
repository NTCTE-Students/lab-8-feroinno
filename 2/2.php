<?php
class User {
    private $username;
    private $passwordHash;
    public function __construct($username, $password) {
        $this -> username = $username;
        $this -> setPassword($password);
    }
    public function setPassword($password) {
        $this -> passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }
    public function checkPassword($password) {
        return password_verify($password, $this->passwordHash);
    }
}

$user = new User("Лизанка", "123");
print($user->checkPassword("123") ? "Пароль Верный" : "Неверный Пароль");
?>
