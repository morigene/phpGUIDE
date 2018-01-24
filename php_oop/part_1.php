<?php 

require 'person.php';
require 'part_2_constructor.php';
$student_class = new stdClass;
$student_class ->name = ['origene','Kalisa','Emmanuel'];

foreach($student_class->name as $names){

echo $names.'<br>';

}

// using a class----------------------------

$person = new person;

$person->name ='John';
$person->age = 25;
echo 'The name of person is '.$person->name . '  and Age is '.$person->age;

// call a function from person class
$person->sum(20 , 30) .'<br>';


$person->name 
$person2 = new person(' MUTUYIMANA Origene ' , 25);
echo $person2->sentence();

?>