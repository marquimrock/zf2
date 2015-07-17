<?php

namespace LivrariaAdmin\Controller;

class ClientesController extends CrudController {

    public function __construct() {
        $this->entity = "Livraria\Entity\Cliente";
        $this->form = "LivrariaAdmin\Form\Cliente";
        $this->service = "Livraria\Service\Cliente";
        $this->controller = "clientes";
        $this->route = "livraria-admin";
    }

}
