<?php

namespace Livraria\Model;

class Cliente {

    public $id;
    public $razao_social;
    public $fantasia;
    public $cnpj;
    public $ie;
    public $endereco;
    public $bairro;
    public $cidade;
    public $telefone;
    public $email;

    public function exchangeArray($data) {
        $this->id = (isset($data['id'])) ? $data['id'] : null;
        $this->razao_social = (isset($data['razao_social'])) ? $data['razao_social'] : null;
        $this->fantasia = (isset($data['fantasia'])) ? $data['fantasia'] : null;
        $this->cnpj = (isset($data['cnpj'])) ? $data['cnpj'] : null;
        $this->ie = (isset($data['ie'])) ? $data['ie'] : null;
        $this->endereco = (isset($data['endereco'])) ? $data['endereco'] : null;
        $this->bairro = (isset($data['bairro'])) ? $data['bairro'] : null;
        $this->cidade = (isset($data['cidade'])) ? $data['cidade'] : null;
        $this->telefone = (isset($data['telefone'])) ? $data['telefone'] : null;
        $this->email = (isset($data['email'])) ? $data['email'] : null;
    }

}
