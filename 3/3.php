<?php
abstract class Document {
    abstract public function save($message);
}
class PDFDocument extends Document {
    public function save($message) {
        print("Формат Сохранённого Файла: {$message}<br>");
    }
}
class WordDocument extends Document {
    public function save($message) {
        print("Формат Сохранённого Файла: {$message}<br>");
    }
}
class ExcelDocument extends Document {
    public function save($message) {
        print("Формат Сохранённого Файла: {$message}<br>");
    }
}

$pdf = new PDFDocument();
$word = new WordDocument();
$excel = new ExcelDocument();
print($pdf->save(".PDF"));
print($word->save(".DOCX"));
print($excel->save(".XLSX"))
?>
