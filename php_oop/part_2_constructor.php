<?php
//this code ir sun in part_2.php.
class person{

public $name;
public $age;

public function  __construct($name , $age){

 $this->name = $name;
 $this->age  = $age;  

}

public function sentence(){

	return $this->name . ' is '. $this->age . "years old";
}

}
?>