<?php

namespace App\Infrastructure;

use App\Domain\Contracts\IClientRepository;
use App\Domain\Models\Client;


class ClientInMemoryRepository implements IClientRepository {

    public $data = [];

    public function __construct()
    {
        array_push($this->data, new Client('client1', new \App\Domain\ValueObjects\ClientId()));
    }

    public function listAll(): array
    {
        return $this->data;
    }
}