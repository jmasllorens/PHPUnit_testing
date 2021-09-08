<?php

namespace App\Application;


use App\Domain\Contracts\IClientRepository;


class ClientService {

    private IClientRepository $clientRepository;

    public function __construct(IClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function list() {

       $list = $this->clientRepository->listAll();

       return $list;
    }

    public function deleteById($id) {

    }

    public function create() {

    }

    public function updateById($id) {

    }

    public function showById($id) {

    }
}