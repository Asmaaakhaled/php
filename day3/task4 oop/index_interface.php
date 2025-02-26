<?php
interface Shape {
    public function getColor();
    public function setColor($color);
    public function isFilled();
    public function setFilled($filled);
    public function __toString();
}

class Circle implements Shape {
    private $color;
    private $filled;
    private $radius;

    public function __construct($radius = 1.0, $color = "red", $filled = true) {
        $this->radius = $radius;
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function isFilled() {
        return $this->filled;
    }

    public function setFilled($filled) {
        $this->filled = $filled;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }

    public function __toString() {
        return "Circle[Shape[color=" . $this->color . ", filled=" . ($this->filled ? "true" : "false") . "], radius=" . $this->radius . "]";
    }
}

class Rectangle implements Shape {
    private $color;
    private $filled;
    private $width;
    private $length;

    public function __construct($width = 1.0, $length = 1.0, $color = "red", $filled = true) {
        $this->width = $width;
        $this->length = $length;
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function isFilled() {
        return $this->filled;
    }

    public function setFilled($filled) {
        $this->filled = $filled;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
    }

    public function getArea() {
        return $this->width * $this->length;
    }

    public function getPerimeter() {
        return 2 * ($this->width + $this->length);
    }

    public function __toString() {
        return "Rectangle[Shape[color=" . $this->color . ", filled=" . ($this->filled ? "true" : "false") . "], width=" . $this->width . ", length=" . $this->length . "]";
    }
}

class Square extends Rectangle {
    public function __construct($side = 1.0, $color = "red", $filled = true) {
        parent::__construct($side, $side, $color, $filled);
    }

    public function getSide() {
        return $this->getWidth();
    }

    public function setSide($side) {
        $this->setWidth($side);
        $this->setLength($side);
    }

    public function setWidth($width) {
        $this->setSide($width);
    }

    public function setLength($length) {
        $this->setSide($length);
    }

    public function __toString() {
        return "Square[" . parent::__toString() . "]";
    }
}

$circle = new Circle(5.0, "green", true);
echo $circle . "<br>";
echo "Circle Area: " . $circle->getArea() . "<br>";

$rectangle = new Rectangle(4.0, 6.0, "yellow", false);
echo $rectangle . "<br>";
echo "Rectangle Area: " . $rectangle->getArea() . "<br>";

$square = new Square(4.0, "purple", true);
echo $square . "<br>";
echo "Square Area: " . $square->getArea() . "<br>";
?>
