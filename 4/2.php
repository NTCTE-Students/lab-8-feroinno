<?php
trait Timestampable {
    private $createdAt;
    private $updateAt;
    public function setCreatedAt($At) {
        $this -> createdAt = $At;
    }
    public function getCreatedAt() {
        return $this->createdAt;
    }
    public function setUpdatedAt($At) {
        $this -> updatedAt = $At;
    }
    public function getUpdatedAt() {
        return $this->updatedAt;
    }
}
class Post {
    use Timestampable;
}
class Comment {
    use Timestampable;
}

$post = new Post();
$comment = new Comment();
$post->setCreatedAt(date("H:i:s d-m-Y"));
print("Cоздано: {$post->getCreatedAt()}<br>");
$comment->setUpdatedAt(date("H:i:s d-m-Y"));
print("Обновлено: {$comment->getUpdatedAt()}<br>");
?>
