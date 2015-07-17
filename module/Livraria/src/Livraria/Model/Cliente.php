<?php

namespace Livraria\Model;

class Cliente {

    public $id;
    public $nome;

    public function exchangeArray($data) {
        $this->id = (isset($data['id'])) ? $data['id'] : null;
        $this->nome = (isset($data['razao_social'])) ? $data['razao_social'] : null;
        $this->nome = (isset($data['fantasia'])) ? $data['fantasia'] : null;
        $this->nome = (isset($data['cnpj'])) ? $data['cnpj'] : null;
        $this->nome = (isset($data['ie'])) ? $data['ie'] : null;
        $this->nome = (isset($data['endereco'])) ? $data['endereco'] : null;
        $this->nome = (isset($data['bairro'])) ? $data['bairro'] : null;
        $this->nome = (isset($data['cidade'])) ? $data['cidade'] : null;
        $this->nome = (isset($data['telefone'])) ? $data['telefone'] : null;
        $this->nome = (isset($data['email'])) ? $data['email'] : null;
    }

}
