<?php

namespace App\Domain\ValueObjects;

class ClientId {

    public string $id;

    public function __construct()
    {
        $this->id = uniqid();
        
    }



}