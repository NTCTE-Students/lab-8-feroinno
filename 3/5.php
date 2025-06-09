<?php
abstract class Order {
    public $amount;
    public function __construct($amount) {
        $this -> amount = $amount;
    }
    abstract public function calculateTotal();
}
class OnlineOrder extends Order {
    public function calculateTotal() {
        $price = $this -> amount * 1.1; 
        print("Стоимость Онлайн-Заказа: {$price}<br>");
    }
}
class StoreOrder extends Order {
    public function calculateTotal() {
        $price = $this -> amount * 1; 
        print("Стоимость Заказа в Магазине: {$price}<br>");
    }
}
class TelephoneOrder extends Order {
    public function calculateTotal() {
        $price = $this -> amount * 1.03; 
        print("Стоимость Заказа по Телефону: {$price}<br>");
    }
}

$online = new OnlineOrder(1500);
$store = new StoreOrder(1500);
$telephone = new TelephoneOrder(1500);
print("Заказ на Сумму 1500 в Разных Типах Доставках<br>");
print($online->calculateTotal());
print($store->calculateTotal());
print($telephone->calculateTotal());
?>
