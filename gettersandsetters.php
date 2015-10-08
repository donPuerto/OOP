<?php

/*
Magic Methods in OOP

Note:
__class__  //class name e.g. Person

*/


class Person{

	public $name;
	public $age;


	public function __construct($name=""){

			$this->name = $name;
			echo ;
	
	}

	
	/*
	Note:
		Set will serve as validation of the query
	*/
	public function setAge($age){

			if ($age< 18){
				// thrown and error
				throw new Exception("Person is not old enough");

			}

			$this->age = $age;

	}

	//Get has no argument and use to RETURN the value
	public function getAge(){

		return $this->age;

	}


}

$person = new Person();
$person->setAge(20);

echo $person->getAge();


echo "\n\n\n";

class MyClass
{
  public $prop1 = "I'm a class property!";
 
 //Note: $newval is considered var $newval;	
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "\n";
  }
}
 
$obj = new MyClass;
 
$obj->setProperty("Don Puerto");

echo $obj->getProperty();