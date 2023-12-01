<?php
Class Peron{
protected $name;
protected $age;

public function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;
}
public function intro(){
    echo"The person name is {$this->name} and age is {$this->age};";
}
}

Class Fahat extends Peron{
    public $weight;

    public function __construct($name,$age, $weight){
        parent::__construct($name,$age);
        $this->weight = $weight;
    }
    public function intro(){
        echo "Person Name:" . self::getName();
        echo"Person Age:". self::getAge();
        echo "Person Weight: $this->weight Kg";
    }
    public static function getName(){
        return "Fahat";
    }
    public static function getAge(){
        return "21";
    }

}
$Fahat = new Fahat("Fahat", 21, 60);
$Fahat->intro() ;

?>