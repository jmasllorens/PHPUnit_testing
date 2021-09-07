<?php

namespace Tests\Application\Doubles;

use App\Domain\Contracts\IClientRepository;
use App\Domain\Models\Client;

class ClientDoubleRepository implements IClientRepository {

    public function listAll(): array
    {
     $clients = [new Client('cliente1'), new Client('cliente2')];
     
     return $clients;
    }
}