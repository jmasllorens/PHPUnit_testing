<?php

namespace App\Infrastructure;

use App\Domain\Contracts\IClientRepository;
use App\Domain\Models\Client;

class ClientInMemoryRepository implements IClientRepository {

    public $data = [];

    public function __construct()
    {
        array_push($this->data, new Client('soy el cliente en memoria RAM'));
    }

    public function listAll(): array
    {
        return $this->data;
    }
}