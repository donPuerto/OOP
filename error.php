<?php

/*
Note:

Error List in OOP
	1. throw new Exception("Person is not old enough");

*/

/*Example 1*/
/*try {

	// Code here...
	
	ech "Error test";

	// Code end of line
	//throw new Exception("Error Message",234);
} catch (Exception $e){
	echo $e->getmessage();
} finally{
	// some sort of callback function or message
	echo "Finally";
}*/

/*Example 2*/

try {

	// Code here...
	
	$mysqli = new MYSQLi("localhost","root","root","snippets");

	if (mysql_error()){
		throw new Exception("Error Message",234);
	}

	// Code end of line
	
} catch (Exception $e){
	echo $e->getmessage();
} finally{
	// some sort of callback function or message
	echo "Finally";
}