<?php
// this code is run in part_2.php
class bird{

public $canFly;
public $legCount;
 
 public function __construct($canFly ,$legCount){

    $this->canFly = $canFly;
    $this->legCount = $legCount;

}

public function canFly(){

	return $this->canFly;
}

public function getLegCount($legCount){

return $this->legCount;

}

}

?>