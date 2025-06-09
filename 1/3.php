<?php
class Material {
    public $title;
    public $author;
    public function __construct($title, $author) {
        $this -> title = $title;
        $this -> author = $author;
    }
    public function getInfo() {
        return "{$this->title} {$this->author}";
    }
}
class Book extends Material {
    public $pages;
    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this -> pages = $pages;
    }
    public function getInfo() {
        return parent::getInfo() . " {$this -> pages}";
    }
}
class Article extends Material {
    public $point;
    public function __construct($title, $author, $point) {
        parent::__construct($title, $author);
        $this -> point = $point;
    }
    public function getInfo() {
        return parent::getInfo() . " {$this -> point}";
    }
}
class Video extends Material {
    public $duration;
    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this -> duration = $duration;
    }
    public function getInfo() {
        return parent::getInfo() . " {$this -> duration}";
    }
}

$book = new Book('Bible', 'God', 560);
$article = new Article('Новости', 'Репортёр', 'Убийство на "Улице Дождя"');
$video = new Video('Ледник', 'О.П.Титаник', '1:12:42');
print($book -> getInfo() . '<br>');
print($article -> getInfo() . '<br>');
print($video -> getInfo());
?>
