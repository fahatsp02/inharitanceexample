<?php
class Car{
    protected $brand;
    protected $model;
    public function __construct($brand,$model){
        $this->brand = $brand;
        $this->model = $model;
    }
    public function info(){

    }
}
class Toyota extends Car{
    public $features;
    public function __construct($brand,$model, $features){
        parent::__construct($brand,$model);
        $this->features = $features;
    }
    public function info(){
        echo "Car Brand is:".self::getBrand().'<br>';
        echo"Car Model Is:".self::getModel().'<br>';
        echo"Car feature is:$this->features";
    }
    public function getBrand(){
        return $this->brand;
    }
    public function getModel(){
        return $this->model;
    }
}

$Toyota = new Toyota("Toyota","Fortuner","Best 4*4 car in india");
$Toyota->info();
?>