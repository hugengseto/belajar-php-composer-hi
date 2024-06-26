<?php

namespace NdoeeWeb\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHi(string $name = "Guest"): string
    {
        return "Hi {$name}, My Name is {$this->name}";
    }
}