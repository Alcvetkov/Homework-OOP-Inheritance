<?php

require_once 'autoload.php';

$person1 = new Person('Maria Marinova', 22, 'female');
$person2 = new Person('Tsvetanka ivanova', 21, 'female');
$student1 = new Student('Ivan Ivanov', 15, 'male', 5);
$student2 = new Student('Stoianka Mihaleva', 14, 'female', 6);
$employee1 = new Employee('Petar Petrov', 30, 'male', 24);
$employee2 = new Employee('Angel Kolev', 27, 'male', 18);

$people = [];

$people[] = $person1;
$people[] = $person2;
$people[] = $student1;
$people[] = $student2;
$people[] = $employee1;
$people[] = $employee2;


foreach ($people as $person) {
	if ($person instanceof Employee) {
		echo $person->showEmployeeInfo() . PHP_EOL;
	}
	elseif ($person instanceof Student) {
		echo $person->showStudentInfo() . PHP_EOL;
	}
	else {
		echo $person->showPersonInfo() . PHP_EOL;
	}
}


foreach ($people as $person) {
	if ($person instanceof Employee) {
		echo $person->calculateOvertime(2) . PHP_EOL;
	}
}
