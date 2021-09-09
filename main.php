<?php

require_once __DIR__ . '/vendor/autoload.php';


$service = new App\Application\ClientService(new \App\Infrastructure\ClientInMemoryRepository());
$client = new App\Domain\Models\Client('client3');


$list = $service->list();

var_dump($list, $client);