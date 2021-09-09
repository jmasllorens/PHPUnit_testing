<?php

namespace App\Domain\ValueObjects;

class ClientId {

    public string $id;

    public function __construct(? string $id = null)
    {
        $this->id = $id ?: uniqid();
        
    }



}