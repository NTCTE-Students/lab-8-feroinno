<?php
trait Cacheable {
    private $cache = [];
    public function setCache($key, $value) {
        $this -> cache[$key] = $value;
    }
    public function getCache($key) {
        return $this -> cache[$key] ?? "Данные не Найдены ＞︿＜";
    }
}
class DataProvider {
    use Cacheable;
}
class ProductRepository {
    use Cacheable;
}

$dataprov = new DataProvider();
$productrepos = new ProductRepository();
$dataprov->setCache(254, "Dridin");
print($dataprov->getCache(254)."<br>");
$productrepos->setCache("people", ["Arina", "Liza", "Viktor"]);
print_r($productrepos->getCache("people"));
?>
