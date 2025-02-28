<?php
class Author {
    private string $name;
    private string $email;
    private string $gender;

    public function __construct(string $name, string $email, string $gender) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getGender(): string {
        return $this->gender;
    }

    public function __toString(): string {
        return "Author[name={$this->name},email={$this->email},gender={$this->gender}]";
    }
}

class Book {
    private string $name;
    private Author $author;
    private float $price;
    private int $qty;

    public function __construct(string $name, Author $author, float $price, int $qty = 0) {
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAuthor(): Author {
        return $this->author;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function getQty(): int {
        return $this->qty;
    }

    public function setQty(int $qty): void {
        $this->qty = $qty;
    }

    public function __toString(): string {
        return "Book[name={$this->name}," . $this->author->__toString() . ",price={$this->price},qty={$this->qty}]";
    }
}

$author = new Author("Asmaa", "abc@gmail.com", "f");
$book = new Book("PHP ", $author, 20, 5);

echo $book;

?>
