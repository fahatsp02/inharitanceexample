<?php
class Shapes{
    protected $shape;
    protected $size;

    public function __construct($shape, $size){
        $this->shape = $shape;
        $this->size = $size;
    }
    public function intro(){
        
    }
}
class Circle extends Shapes{
    public $weight;
    public function __construct($shape, $size, $weight){
    parent::__construct($shape, $size);
    $this->weight = $weight;
    }
    public function intro(){
        echo "Shape name is:" .self::getShape();
        echo "Shape size:" .self::getSize()."cm";
        echo "Shape weight: $this->weight grams";
    }
    public function getSize(){
        return $this->size;
    }
    public function getShape(){
        return $this->shape;
}
}
class Triangle extends Shapes{
    public function __construct($shape, $size){
        parent::__construct($shape, $size);
    }
    public function intro(){
        echo "Shape name is:" .self::getShape();
        echo "Shape size:" .self::getSize()."cm";

    }
    
    public function getSize(){
        return $this->size;
    }
    public function getShape(){
        return $this->shape;
    }
}
$Circle = new Circle("circle", 20, 500);
$Circle->intro();

$Triangle = new Triangle("Triangle",20);
$Triangle->intro();
?>