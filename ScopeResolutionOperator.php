<?php
/*

Note:
	parent::
	self::

*/




/*
  Example 1:
*/

class MainClass {
    const CONST_VALUE = "A constant value\n";

    public function overrideExample(){

    		echo "This is from MainClass";

    }
}

/*

Note:
Calling the direclty the MainClass by CLASSNAME::CONSTANT_NAME

*/
echo MainClass::CONST_VALUE; // A constant value


class SubClass extends MainClass
{
    public static $my_static = 'static var';

    public static function SCO() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }

    public function overrideExample(){

    		echo "This is from SubClass";

    }
}


echo SubClass::SCO(); // As of PHP 5.3.0

/*Overriding MainClass to SubClass*/
(new Subclass())->overrideExample();


