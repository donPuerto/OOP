<?php
 
class MainClass
{

  public $prop1 = 'This is MainClass Property';
 

  public function __construct()
  {
      echo 'The class "', __CLASS__, '" was initiated!'."\n\n";
  }
 

  public function __destruct()
  {
      echo 'The class "', __CLASS__, '" was destroyed.'."\n\n";
  }
 

  public function __toString()
  {
      return $this->getProperty();
  }
 

  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 

  public function getProperty()
  {
      return $this->prop1 . "\n\n";
  }
}
 

class SubClass extends MainClass
{
  public function __construct(){

    echo "SubClass overwriting __construct method" . "\n\n";

  }

  public function subClassMethod()
  {
      echo "From a new method in " . __CLASS__ . "\n \n";
  }

}
 
// Create a new object
$newobj = new SubClass;
 
// Output the object as a string
echo $newobj->subClassMethod();
 
// Use a method from the parent class
echo $newobj->getProperty();
 
?>