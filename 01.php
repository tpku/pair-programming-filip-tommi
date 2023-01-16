<?php

declare(strict_types=1);

require __DIR__ . '/src/Person.php';

$person = new Person('Maria Eklöw');

echo $person->name;
