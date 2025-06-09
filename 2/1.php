<?php
class BankAccount {
    private $accountNumber;
    private $balance;
    public function __construct($accountNumber, $balance = 0) {
        $this -> accountNumber = $accountNumber;
        if ($balance >= 0) {
            $this -> balance = $balance;
        } else {
            print('Баланс не Может быть Отрицательным.<br>');
        }
    }
    public function deposit($amount) {
        if ($amount > 0) {
            $this -> balance += $amount;
        } elseif ($amount < 0) {
            return "Пополнение не Может быть Отрицательным<br>";
        } elseif ($amount = 0) {
            return "Пополнение не Может быть Нулевым<br>";
        } else {
            return "Непредвиденная Ошибка o(一︿一+)o<br>";
        }
    }
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this -> balance -= $amount;
        } else {
            return "Недостаточно Средств или Некорректная Сумма<br>";
        }
    }
    public function getAccountNumber(){
        return $this->accountNumber;
    }
    public function getBalance() {
        return $this -> balance;
    }
}

$user = new BankAccount(1729384650, 0);
print("ID Аккаунта: {$user->getAccountNumber()}<br>");
print("Баланс: {$user->getBalance()}<br>");
$user -> deposit(1000);
$user -> withdraw(200);
print("Баланс: {$user->getBalance()}<br>");
?>
