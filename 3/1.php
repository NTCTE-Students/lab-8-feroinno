<?php
interface Notifier {
    public function send($message);
}
class EmailNotifier implements Notifier {
    public function send($message) {
        print("Отправка email: {$message}<br>");
    }
}
class SMSNotifier implements Notifier {
    public function send($message) {
        print("Отправка SMS: {$message}<br>");
    }
}
class PushNotifier implements Notifier {
    public function send($message) {
        print("Отправка Push: {$message}<br>");
    }
}

$email = new EmailNotifier();
$sms = new SMSNotifier();
$push = new PushNotifier();
print($email->send("Сообщение на Почту"));
print($sms->send("Вам Пришло Сообщение на Почту с Содержимым ''Сообщение на Почту''"));
print($push->send("Уведомление о Новом Сообщении ''Вам Пришло Сообщение на Почту с Содержимым ''Сообщение на Почту''''"));
?>
