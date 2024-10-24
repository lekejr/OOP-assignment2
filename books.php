<?php
 

class Book {
    public $title;
    public $author;
    public $year;
    public $pages;
    public $genre;

        public function __construct($title, $author, $year, $pages, $genre) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->pages = $pages;
        $this->genre = $genre;
    }

   
    public function displayInfo() {
        return "'{$this->title}' by {$this->author} ({$this->year}) - {$this->pages} pages, genre: {$this->genre}";
    }

 
    public function isClassic() {
        if ($this->year < 2002) {
            return "'{$this->title}' is considered a classic.";
        } else {
            return "'{$this->title}' is not considered a classic.";
        }
    }

    
    public function comparePages($otherBook) {
        if ($this->pages > $otherBook->pages) {
            return "'{$this->title}' is longer than '{$otherBook->title}'.";
        } elseif ($this->pages < $otherBook->pages) {
            return "'{$this->title}' is shorter than '{$otherBook->title}'.";
        } else {
            return "'{$this->title}' and '{$otherBook->title}' have the same number of pages.";
        }
    }
}


$book1 = new Book("Olumpus", "Tycoon Jay", 2000, 911, "Money");
$book2 = new Book("Scarface", "Big Jay", 2020, 696, "Documentary");

echo $book1->displayInfo();
echo "\n";
echo $book2->displayInfo();
echo "\n";


echo $book1->isClassic();
echo "\n";
echo $book2->isClassic();
echo "\n";


echo $book1->comparePages($book2);
echo "\n";
?>
