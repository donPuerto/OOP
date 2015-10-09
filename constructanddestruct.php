<?php

/*

Note:
	Construct if initiated it triggered
	Destruct will be last function to be triggered, used particularly in closing connection

*/

class MyClass
{
  public $prop1 = "I'm a class property!";
 
  public function __construct()
  {
      echo 'The class "', __CLASS__, '" was initiated!'."\n\n";
  }
 
  public function __destruct()
  {
      echo 'The class "', __CLASS__, '" was destroyed".'."\n\n";
  }
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
 public function __toString(){

 	return $this->getProperty();

 }

  public function getProperty()
  {
      return $this->prop1 . "\n\n";
  }
}
 
// Create a new object
$obj = new MyClass;

//uses __toString() to convert object to String
echo $obj;
 
// Get the value of $prop1
echo $obj->getProperty();


//To explicitly trigger the destructor, you can destroy the object using the function unset():
unset($obj);


// Output a message at the end of the file
echo "End of file.\n";


 
?>
