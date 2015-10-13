<?php
namespace DonPuerto;

class Business {

	protected $staff;
	public function __construct(Staff $staff){

		$this->staff =$staff;

	}

	public function hire(Person $person){

		$this->staff->add($person);
	}
}


