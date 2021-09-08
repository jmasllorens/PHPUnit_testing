<?php

require_once __DIR__ . '/vendor/autoload.php';


$service = new App\Application\ClientService(new \App\Infrastructure\ClientInMemoryRepository());
$client = new App\Domain\Models\Client('client3', new \App\Domain\ValueObjects\ClientId());


$list = $service->list();

var_dump($list, $client);