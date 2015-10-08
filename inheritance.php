<?php

class Student{

	public $name;
	public $year;
	public $course;
	


	public function __construct($name="",$year=""){
		$this->name =$name;
		$this->age = $age;
	}

	public function getPersonDetails(){
		return $this->name ." ". $this->age;
	}
}

$person = new Student("Don Puerto",35);
echo $person->getPersonDetails();


class Course extends Student{

	public function getCourse(){
		return $this->course;
	}

}

