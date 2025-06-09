<?php
class Counter {
    private $count = 0;
    public function increment() {
        $this -> count++;
    }
    public function decrement() {
        if ($this->count > 0) {
            $this -> count--;
        } else {
            print("Число Не Будет Ниже Нуля<br>");
        }
    }
    public function getCount() {
        return $this->count;
    }
}

$counter = new Counter();
$counter->increment();
$counter->increment();
print($counter->getCount().'<br>');
$counter->decrement();
print($counter->getCount().'<br>');
$counter->decrement();
$counter->decrement();
print($counter->getCount().'<br>');
?>
