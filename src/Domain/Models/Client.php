<?php

namespace App\Domain\Models;

class Client {

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string 
    {
        return $this->name;
    }
}