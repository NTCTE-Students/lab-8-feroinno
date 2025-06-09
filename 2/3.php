<?php
class Thermostat {
    private $temperature;
    public function setTemp($temperature) {
        if (!is_numeric($temperature)) {
            print("Допустимы Только Цифры<br>");
        } elseif ($temperature < -50 || $temperature > 50) {
            print("Боюсь Представить где Ты Живёшь с Такой Температурой по Цельсию<br>");
        } else {
            $this->temperature = $temperature;
        }
    }
    public function getTemp() {
        return $this->temperature;
    }
}

$street = new Thermostat();
$street->setTemp(-5);
print("Температура на Улице ''Прекрасна'': {$street->getTemp()}");
?>
