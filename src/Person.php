<?php

declare(strict_types=1);

class Person
{
    public function __construct(public string $name)
    {
        $this->name = $name;
    }
}
