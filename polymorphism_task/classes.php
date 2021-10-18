<?php

class Book
{
    public $id;
    public $name;
    public $author;
    public $file_path;
    public $type;
    public $sort_by;

    function __construct($row)
    {
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->author = $row['author'];
        $this->file_path = $row['file_path'];
        $this->type = $row['type'];
        $this->sort_by = $row['sort_by'];
    }
}

class BookTxt extends Book 
{
    public function printItem() {
        echo '<br> <img src="icons\txt.png" alt="TxtIcon"/>';
        echo '   '. $this->author.', '.$this->name;
        echo '<br>';
    }
}

class BookDoc extends Book 
{
    public function printItem() {
        echo '<br> <img src="icons\doc.png" alt="DocIcon"/>';
        echo '   '. $this->author.', '.$this->name;
        echo '<br>';
    }
}

class BookPdf extends Book 
{
    public function printItem() {
        echo '<br> <img src="icons\pdf.png" alt="PdfIcon"/>';
        echo '   '. $this->author.', '.$this->name;
        echo '<br>';
    }
}

class BookFb2 extends Book 
{
    public function printItem() {
        echo '<br> <img src="icons\default.png" alt="DefaultIcon"/>';
        echo '   '. $this->author.', '.$this->name;
        echo '<br>';
    }
}