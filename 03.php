<?php

declare(strict_types=1);

require __DIR__ . '/src/Person.php';
require __DIR__ . '/src/Employee.php';
require __DIR__ . '/src/Student.php';

$student = new Student('Johannes Tveitan');
$student->addGrades('A');
$student->addGrades('B');
$student->addGrades('C');
$student->addGrades('D');
$student->addGrades('E');

printf(
    'The student %s is graded with the following grades: %s',
    $student->name,
    implode(', ', $student->grades),
); // The student Johannes Tveitan is graded with the following grades: A, E