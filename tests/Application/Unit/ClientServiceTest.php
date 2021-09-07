<?php

namespace Tests\Application;

use App\Application\ClientService;
use PHPUnit\Framework\TestCase;
use Tests\Application\Doubles\ClientDoubleRepository;




class ClientServiceTest extends TestCase {

    public function test_returns_clients_list() {
        $repository = new ClientDoubleRepository();
        $clientService = new ClientService($repository);
        $result = $clientService->list();

        $this->assertIsArray($result);
        $this->assertEquals('cliente1', $result[0]->getName);
    }
}