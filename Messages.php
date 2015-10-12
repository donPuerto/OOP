<?php

Class Person {

	protected $name;
	public function __construct($name){
		$this->name=$name;
	}

}

class Business {

	protected $staff;
	public function __construct(Staff $staff){

		$this->staff =$staff;

	}

	public function hire(Person $person){

		$this->staff->add($person);
	}
}

class Staff {

	protected $members =[];

	public function add(Person $person){
		$this->members[] = $person;
	}

}

$person = new Person("Don Puerto");
//var_dump($person);

//Hiring Staff
$staff = new Staff();
$business = new Business($staff);
$addperson = $business->hire($person);

$staff->add($person);

var_dump($staff->add($person));








//
