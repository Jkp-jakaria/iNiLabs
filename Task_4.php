<?php
class Animal {
    public function makeSound() {
        return "Some generic animal sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo";
    }
}

function makeAnimalSound(Animal $animal) {
    echo get_class($animal) . ": " . $animal->makeSound() . "\n";
}

$dog = new Dog();
$cat = new Cat();
$cow = new Cow();

makeAnimalSound($dog);  
makeAnimalSound($cat);  
makeAnimalSound($cow);