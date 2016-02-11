<?php


class Student extends Person
{
	/**
	 * @var integer between 2-6
	 */
	protected $score;
	
	
	/**
	 * 
	 * @param string $name
	 * @param integer $age
	 * @param string(male or female) $gender
	 * @param integer(from 2 to 6) $score
	 */
	public function __construct($name, $age, $gender, $score)
	{
		parent::__construct($name, $age, $gender);
		if ($score > 6) {
			$this->score = 6;
		}
		else if ($score < 2) {
			$this->score = 2;
		}
		else{
			$this->score = $score;
		}
	}
	
	
	/**
	 * 
	 * Display Student info
	 */
	public function showStudentInfo()
	{
		echo $this->showPersonInfo();
		return sprintf('My score is %d.', $this->score);
	}
	
}