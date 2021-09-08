<?php

namespace Tests\Application\Doubles;

use App\Domain\Contracts\IClientRepository;
use App\Domain\Models\Client;

class ClientDoubleRepository implements IClientRepository {

    public function listAll(): array
    {
     $clients = [new Client('client1', new \App\Domain\ValueObjects\ClientId()), new Client('client2', new \App\Domain\ValueObjects\ClientId())];
     
     return $clients;
    }
}