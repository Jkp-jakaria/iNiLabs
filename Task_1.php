<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getRadius() {
        return $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }
}

$circle = new Circle(5); 
echo "Area of the Circle: " . $circle->calculateArea() . "\n";

$rectangle = new Rectangle(4, 7);
echo "Area of the Rectangle: " . $rectangle->calculateArea() . "\n";

