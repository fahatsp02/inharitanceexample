<?php
class Fruit {
    protected $name;
    protected $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
}

class Strawberry extends Fruit {
    private $weight;

    public function __construct($name, $color, $weight) {
        parent::__construct($name, $color);
        $this->weight = $weight;
    }

    public function intro() {
        echo "Fruit Name: " . self::getName();
        echo "Fruit Color: " . self::getColor() ;
        echo "Fruit Weight: $this->weight grams";
    }

    public static function getName() {
        return "Strawberry";
    }

    public static function getColor() {
        return "red";
    }
}

$strawberry = new Strawberry(" Strawberry", "red", 50);
$strawberry->intro();

?>