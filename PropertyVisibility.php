<?php
/*
 note:
 	using var is defined as public 

 Conclusion:
 Protected and Private property could not be access both MainClass and Subclass

 Public, Protected, and Private can be accessed on inheritance.
 */
class MainClass
{
    public $public = 'Public MainClass';
    protected $protected = 'Protected MainClass';
    private $private = 'Private MainClass';

    public function foo1(){
    	echo $this->public ."\n";  // Works
    	echo $this->protected ."\n";  // Works
    	echo $this->private ."\n\n";  // Works
    }

   
}


class SubClass extends MainClass
{

    public $public = 'Public SubClass';
    protected $protected = 'Protected SubClass';
    private $private = 'Private SubClass';

    protected $dummy = "This is a dummy property";
   
    public function foo2(){
    	echo $this->public ."\n";  // Works
    	echo $this->protected ."\n";  // Works
    	echo $this->private ."\n";  // Works
    }
   
}

$mainClass = new MainClass();
//var_dump($mainClass->public);  //Public Main Class
//var_dump($mainClass->protected); // Cannot Access Protected
//var_dump($mainClass->private); //Cannot access private property
//$mainClass->foo1();


/*
Note:
Property on the Subclass was overwritten
*/

$subClass = new SubClass(); 

//var_dump($subClass->public);  //Public Main Class
//var_dump($subClass->protected); // Cannot Access Protected
//var_dump($subClass->private); // Cannot access private property
//var_dump($subClass->dummy); // Cannot access private property
$subClass->foo2();