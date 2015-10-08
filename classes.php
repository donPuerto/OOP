
<!-- 
Documentaion

Properties
Public - Can be called anywhere, outside of the class, inside the class, or even in a child.
Protected - Can be called from only within the current class or any children of that class.
Private - Can only be called by the containing class.  


-->

<?php
/*
Generic empty Class Build
*/ 

$myClass = new stdClass;
$myClass->name = "John Do

$myClass->names = ["Don","Sam","Marcus","Sheng"];
foreach ($myClass->names as $name) {
	echo $name."\n";
}

echo "\n";


class InterestCalculator {

	//default settings
	public $rate=10;
	public $duration=10;
	public $capital=10;

	public function interestCalculator(){

		return ($this->rate*$this->duration*$this->capital)/100;
		
	}

	public function interestCalculator_passvalue($rate,$duration,$capital){

		$this->rate = $rate;
		$this->duration = $duration;
		$this->capital =$capital;
		return ($this->rate*$this->duration*$this->capital)/100;
		
	}

}

$interestCalculator = new InterestCalculator();
echo $interestCalculator->interestCalculator()."\n";


/*
Assigning new property value
*/
$interestCalculator_newpropval = new InterestCalculator();
$interestCalculator_newpropval->rate = 20;
$interestCalculator_newpropval->duration =20;
$interestCalculator_newpropval->capital =20;

echo $interestCalculator_newpropval->interestCalculator()."\n\n";


/*
Passing value
*/
$interestCalculator_passvalue = new InterestCalculator();
echo $interestCalculator_passvalue->interestCalculator_passvalue(15,15,15);






echo "\n\n\n";

/*

Using Constructor

*/

class Person{

	
	public $name;
	public $age;
	
	public function __construct($name = "Don Puerto", $age = 35){

		$this->name = $name;
		$this->age = $age;
		echo $this->name ." ". $this->age ;
	}

}


$person = new Person("Samantha Puerto", 2);
//var_dump($person);
/*echo $person->name ." " . $person->age;*/