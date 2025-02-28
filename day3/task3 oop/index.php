<?php

class Author {
    private string $name;
    private string $email;
    private string $gender; // 'm' or 'f'

    // Constructor
    public function __construct(string $name, string $email, string $gender) {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    // Getter methods
    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getGender(): string {
        return $this->gender;
    }

    // toString method
    public function __toString(): string {
        return "Author[name=" . $this->name . ",email=" . $this->email . ",gender=" . $this->gender . "]";
    }
}

class TestAuthor {
    public static function main() {
        // Creating an Author object
        $author = new Author("Tan Ah Teck", "ahTeck@somewhere.com", 'm');

        // Testing getters
        echo "Name: " . $author->getName() . "\n";
        echo "Email: " . $author->getEmail() . "\n";
        echo "Gender: " . $author->getGender() . "\n";

        // Testing setEmail
        $author->setEmail("newemail@domain.com");
        echo "Updated Email: " . $author->getEmail() . "\n";

        // Testing toString method
        echo $author . "\n";
    }
}

// Running the test
TestAuthor::main();

?>
