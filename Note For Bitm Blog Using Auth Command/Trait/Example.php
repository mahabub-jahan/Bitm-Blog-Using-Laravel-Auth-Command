<?php 
require './User.php';

class ClassName 
{

	// If I want to use trait we have to call
	use User;


	public function hello(){
		echo "Hello World";
	}
}


