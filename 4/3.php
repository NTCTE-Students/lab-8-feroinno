<?php
trait Validatable {
    public function validate($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? "Правильный Формат E-mail<br>" : "Неправильный Формат E-mail<br>";
    }
}
class RegistrationForm {
    use Validatable;
}
class LoginForm {
    use Validatable;
    public function validate($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? "Ждём Ввода Логина<br>" : "Введи Сначала Правильно E-mail, Потом уже Логин (¬_¬ )<br>";
    }
}

$registform = new RegistrationForm();
$loginform = new LoginForm();
print($registform->validate("liza@mail.ru"));
print($loginform->validate("liza@mail.ru"));
// Мысль Валидировать (Такое Слово Вообще Есть? [Есть]) E-mail Взял у Существа ヾ(•ω•`)o
?>
