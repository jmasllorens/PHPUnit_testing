<?php

namespace App\Domain\Contracts;

interface IClientRepository {

    public function listAll(): array ;
}