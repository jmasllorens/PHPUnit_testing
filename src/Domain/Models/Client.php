<?php

namespace App\Domain\Models;

use App\Domain\ValueObjects\ClientId;

class Client {

    private ClientId $id;
    private string $name;

    public function __construct(string $name, ? ClientId $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    } 
}