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
    private array $authors; 
    private float $price;
    private int $qty;

    public function __construct(string $name, array $authors, float $price, int $qty = 0) {
        $this->name = $name;
        $this->authors = $authors;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAuthors(): array {
        return $this->authors;
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

    public function getAuthorNames(): string {
        $authorNames = array_map(fn($author) => $author->getName(), $this->authors);
        return join(",", $authorNames);
    }

    public function __toString(): string {
        $authorsStr = join(",", array_map(fn($author) => $author->__toString(), $this->authors));
        return "Book[name={$this->name},authors=[{$authorsStr}],price={$this->price},qty={$this->qty}]";
    }
}
class TestBook{
public static function test(): void {
$author1 = new Author("asmaa", "asmaa@gmail.com", "f");
$author2 = new Author("ali", "ali@gmail.com", "m");

$book = new Book("javaScript", [$author1, $author2], 20, 5);

echo $book . "<br>";

echo "Authors: " . $book->getAuthorNames();
}
}
TestBook::test();

?>
