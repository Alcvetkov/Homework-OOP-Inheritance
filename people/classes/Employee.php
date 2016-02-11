<?php

class Employee extends Person
{
	/**
	 * @var Day salary of the employee
	 */
	protected $daySalary;
	
	
	/**
	 *
	 * @param string $name
	 * @param integer $age
	 * @param string(male or female) $gender
	 * @param integer $daySalary
	 */
	public function __construct($name, $age, $gender, $daySalary)
	{
		parent::__construct($name, $age, $gender);
		$this->daySalary = $daySalary;
	}
	
	
	/**
	 *
	 * Display Employee info
	 */
	public function showEmployeeInfo()
	{
		echo $this->showPersonInfo();
		return sprintf('My day salary is $%d.', $this->daySalary);
		
	}
	
	/**
	 * 
	 * @param integer $hour
	 * Enter overtime hour the employee was working today 
	 * to calculate the payment.  
	 */
	public function calculateOvertime($hour)
	{
		if (($this->age) < 18){
			return 0;
		}
		else{
			return (($this->daySalary / 8) * 1.5) * $hour;
		}
	}
	
	
}