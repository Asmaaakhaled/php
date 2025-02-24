<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
     class Author {
        private string $name;
        private string $email;
        private string $gender;
        public function __construct(string $name, string $email, string $gender) {
            $this->name=$name;
            $this->email=$email;
            $this->gender=$gender;
        }
        public function getName():String
        {
            return $this->name;
        }
        public function getEmail():String
        {
            return $this->email;
        }
        public function setEmail(string $email):void{
            $this->email =$email;
        }
        public function getGender(): string{
            return $this->gender;
        }
        public function toString():String{
            return "Author[name={$this->name},email={$this->email},gender={$this->gender}]";
        }
     }
     class TestAuthor{
        public static function test(): void{
        $a=new Author("Tan Ah Teck", "ahTeck@somewhere.com", 'm');
        echo "name ".$a->getName()."<br>";
        echo "email ".$a->getEmail()."<br>";
        echo "gender ".$a->getGender()."<br>";
        echo "toString ".$a->toString()."<br>";
        $a->setEmail("asmaa@abc.com")."<br>";
        echo "new email ".$a->getEmail()."<br>";
        }
     }
     TestAuthor::test();
    ?>
</body>
</html>