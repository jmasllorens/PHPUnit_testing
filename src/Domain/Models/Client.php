<?php

namespace App\Domain\Models;

use App\Domain\ValueObjects\ClientId;

class Client {

    private ClientId $id;
    private string $name;

    public function __construct(string $name, ? ClientId $id = null) 
    {
        $this->name = $name;
        $this->id = $id ?: new ClientId();
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