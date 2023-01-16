<?php

declare(strict_types=1);

class Student extends Person
{
    public array $grades;

    public function addGrades(string $grade): void
    {

        $this->grades[] = $grade;
    }
}
