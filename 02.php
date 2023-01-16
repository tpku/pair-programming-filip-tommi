<?php

declare(strict_types=1);

require __DIR__ . '/src/Person.php';
require __DIR__ . '/src/Employee.php';

$employee = new Employee('Susan Johansson');
$employee->title = "principle";



printf(
    '%s is the %s at Yrgo',
    $employee->name,
    $employee->title,
); // Susan Johansson is the principal at Yrgo
