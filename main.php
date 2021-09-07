<?php

require_once __DIR__ . '/vendor/autoload.php';

$service = new App\Application\ClientService(new \App\Infrastructure\ClientInMemoryRepository());


$list = $serivce->list();

var_dump($list);