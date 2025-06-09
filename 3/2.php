<?php
abstract class Payment {
    abstract public function process($message);
}
class CreditCardPayment extends Payment {
    public function process($message) {
        print("Оплата через Карту: {$message}<br>");
    }
}
class PayPalPayment extends Payment {
    public function process($message) {
        print("Оплата через PayPal: {$message}<br>");
    }
}
class BankTransferPayment extends Payment {
    public function process($message) {
        print("Оплата через Перевод Банком: {$message}<br>");
    }
}

$card = new CreditCardPayment();
$PP = new PayPalPayment();
$bank = new BankTransferPayment();
print($card->process("Прошла Успешно"));
print($PP->process("Недоступна в Вашем Регионе"));
print($bank->process("Неожиданная Ошибка (Виноват Пользователь (￣y▽,￣)╭ )"))
?>
