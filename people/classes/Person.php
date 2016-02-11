<?php

class Person
{
	/**
	 * @var Full name of the person.
	 */
	protected $name;
	
	/**
	 * @var Age of the person.
	 */
	protected $age;
	
	/**
	 * @var Is the person male or female
	 */
	protected $gender;
	
	
	/**
	 * 
	 * @param string $name
	 * @param integer $age
	 * @param string(male or female) $gender
	 */
	public function __construct($name, $age, $gender)
	{
		$this->name = $name;
		$this->age = $age;
		$this->gender = $gender;
	}
	
	
	/**
	 * Display person info
	 */
	public function showPersonInfo()
	{
		return sprintf(
				'My name is %s. My age are %d and I am %s. ',
				$this->name,
				$this->age, 
				$this->gender
			);
	}
	
}