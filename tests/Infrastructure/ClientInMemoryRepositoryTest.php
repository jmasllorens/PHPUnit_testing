<?php

namespace Tests\Infrastructure;

use App\Domain\Models\Client;
use PHPUnit\Framework\TestCase;
use App\Infrastructure\ClientInMemoryRepository;


class ClientInMemoryRepositoryTest extends TestCase {

    public function test_getAllClients() {

        $repository = new ClientInMemoryRepository();
        array_push($repository->data, new Client('client1', new \App\Domain\ValueObjects\ClientId()));

        $result = $repository->listAll();

        $this->assertEquals('client1', $result[0]->getName());
       
    }
}