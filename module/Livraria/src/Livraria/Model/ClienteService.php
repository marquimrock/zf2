<?php

namespace Livraria\Model;

class ClienteService {

    /**
     * @var Livraria\Model\ClienteTable
     */
    protected $clienteTable;
    
    public function __construct(ClienteTable $table) {
        $this->clienteTable = $table;
    }
    
    public function fetchAll() {
        $resultSet = $this->clienteTable->select();
        return $resultSet;
    }
    
}
