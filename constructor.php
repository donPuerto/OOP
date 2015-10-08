<?php

/*
Note:
Constructor must have assigned value if have passed by value
*/

class Person{
	private $name;
	private $age;

	public function __construct($name="John Doe", $age = 30){
		$this->name=$name;
		$this->age=$age;
		
	}

	

	public function display_result(){
		echo $this->name ." ". $this->age;
	}

}


$person = new Person("Samatha Puerto", 2);
$person->display_result();

