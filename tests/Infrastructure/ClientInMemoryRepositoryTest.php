<?php

namespace Tests\Infrastructure;

use App\Domain\Models\Client;
use PHPUnit\Framework\TestCase;
use App\Infrastructure\ClientInMemoryRepository;

class ClientInMemoryRepositoryTest extends TestCase {

    public function test_getAllClients() {

        $repository = new ClientInMemoryRepository();
        array_push($repository->data, new Client('cliente1'));

        $result = $repository->listAll();

        $this->assertEquals('cliente1', $result[0]->getName());
    }
}