<?php
interface Database {
    public function connect();
    public function query($query);
}
class MySQLDatabase implements Database {
    public function connect() {
        print("Подключение Базы Данных MySQL<br>");
    }
    public function query($quary) {
        print("Выполнение Запроса: {$quary}<br>");
    }
}
class PostgreSQLDatabase implements Database {
    public function connect() {
        print("Подключение Базы Данных PostgreSQL<br>");
    }
    public function query($quary) {
        print("Выполнение Запроса: {$quary}<br>");
    }
}
class SQLiteDatabase implements Database {
    public function connect() {
        print("Подключение Базы Данных SQLite<br>");
    }
    public function query($quary) {
        print("Выполнение Запроса: {$quary}<br>");
    }
}

$DBs = [
    new MySQLDatabase(),
    new PostgreSQLDatabase(),
    new SQLiteDatabase()
];
foreach ($DBs as $DB) {
    $DB->connect();
    $DB->query("CREATE DATABASE st;");
}
?>
