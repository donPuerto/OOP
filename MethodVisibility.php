<?php

/*
 Conclusion:
 Public and Protected on inheritance is surely work.
 Private on inheritance result to fatal error.

 */

 /*
 Example 1
 */
class MainClass
{
    // Declare a public constructor
    public function __construct() { echo "__construct method of MainClass" ."\n"; }

    // Declare a public method
    public function PublicMethod() { echo "Public method"."\n"; }

    // Declare a protected method
    protected function ProtectedMethod() { echo "Protected method"."\n"; }

    // Declare a private method
    private function PrivateMethod() { echo "Protected method"."\n"; }

    // This is public
    function Foo()
    {
        $this->PublicMethod();
        $this->ProtectedMethod();
        $this->PrivateMethod();
    }
}

$mainClass = new MainClass;
//$mainClass->PublicMethod(); // Work
//$mainClass->ProtectedMethod(); // Fatal Error
//$mainClass->PrivateMethod(); // Fatal Error
echo "\n\n\n";
//$mainClass->Foo(); // Public, Protected and Private 


/**
 * Define MyClass2
 */


class SubClass extends MainClass
{
    // This is public
    function Foo2()
    {
        //$this->PublicMethod(); // Work
        //$this->ProtectedMethod(); // Work
        $this->PrivateMethod(); // Fatal Error
    }
}

$subclass = new SubClass;
//$subclass->PublicMethod(); // Works
//$subclass->ProtectedMethod();  //Fatal Error
//$subclass->PrivateMethod(); //Fatal Error

//$subclass->Foo2(); // Public and Protected work, not Private


/*
	Exampe 2
*/

class Bar 
{
    public function test() {
        $this->testPublic();
        $this->testProtected();
        $this->testPrivate();
    }

    public function testPublic() {
        echo "Bar::testPublic\n";
    }

    protected function testProtected() {
        echo "Bar::testProtected\n";
    }
    
    private function testPrivate() {
        echo "Bar::testPrivate\n";
    }
}




class Foo extends Bar 
{
    public function testPublic() {
        echo "Foo::testPublic\n";
    }

    protected function testProtected() {
        echo "Foo::testProctected\n";
    }
    
    private function testPrivate() {
        echo "Foo::testPrivate\n";
    }

}

/*
   Visibility and overwriting method
*/
   
$myFoo = new Foo();
$myFoo->test(); // Foo::testPublic 
                // Foo::testProctected
				// Bar::testPrivate


