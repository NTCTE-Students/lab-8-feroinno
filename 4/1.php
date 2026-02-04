<?php
trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}
class User {
    use Logger;
    public function createUser($name) {
        $this -> log("Пользователь ''{$name}'' Создан");
    }
    public function updateUser($name) {
        $this -> log("Пользователь Обновлён до ''{$name}'' ");
    }
}

class Order {
    use Logger;
    public function createOrder($order) {
        $this -> log("Заказ №{$order} Создан");
    }
    public function updateOrder($order) {
        $this -> log("Заказ Обновлён до №{$order}");
    }
}
class Product {
    use Logger;
    public function createProduct($product) {
        $this -> log("Продукт ''{$product}'' Создан");
    }
    public function updateProduct($product) {
        $this -> log("Продукт Обновлён до ''{$product}''");
    }
}

$user = new User();
$order = new Order();
$product = new Product();
$user->createUser("Liza");
$order->createOrder("47596");
$product->createProduct("Animal Fat");
print("<br>");
$user->updateUser("Arina");
$order->updateOrder("2475962");
$product->updateProduct("Ingratiation UwU (✿◕‿◕✿)");
?>
