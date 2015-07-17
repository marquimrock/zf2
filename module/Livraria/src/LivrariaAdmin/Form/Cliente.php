<?php

namespace LivrariaAdmin\Form;

use Zend\Form\Form;

class Cliente extends Form {
    
    public function __construct($name = null) {
        parent::__construct('cliente');
        
        $this->setAttribute('method', 'post');
        #$this->setInputFilter(new CategoriaFilter);

        $this->add(array(
           'name' =>'id',
            'attibutes' => array(
                'type' => 'hidden'
            )
        ));
        
        $this->add(array(
           'name' => 'razao_social',
            'options' => array(
                'type' => 'text',
                'label' => 'Rasao Social'
            ),
            'attributes' => array(
                'id' => 'razao_social',
                'placeholder' => 'Rasão Social'
            )
        ));
        
        $this->add(array(
           'name' => 'fantasia',
            'options' => array(
                'type' => 'text',
                'label' => 'Fantasia'
            ),
            'attributes' => array(
                'id' => 'fantasia',
                'placeholder' => 'Nome Fantasia'
            )
        ));
        
        $this->add(array(
           'name' => 'cnpj',
            'options' => array(
                'type' => 'text',
                'label' => 'CNPJ'
            ),
            'attributes' => array(
                'id' => 'cnpj',
                'placeholder' => 'CNPJ'
            )
        ));
        
        $this->add(array(
           'name' => 'ie',
            'options' => array(
                'type' => 'text',
                'label' => 'IE'
            ),
            'attributes' => array(
                'id' => 'ie',
                'placeholder' => 'Inscricao Estadual'
            )
        ));
        
        $this->add(array(
           'name' => 'endereco',
            'options' => array(
                'type' => 'text',
                'label' => 'Endereco'
            ),
            'attributes' => array(
                'id' => 'endereco',
                'placeholder' => 'endereco'
            )
        ));
        
        $this->add(array(
           'name' => 'bairro',
            'options' => array(
                'type' => 'text',
                'label' => 'Bairro'
            ),
            'attributes' => array(
                'id' => 'bairro',
                'placeholder' => 'bairro'
            )
        ));
        
        $this->add(array(
           'name' => 'cidade',
            'options' => array(
                'type' => 'text',
                'label' => 'Cidade'
            ),
            'attributes' => array(
                'id' => 'cidadade',
                'placeholder' => 'Cidade'
            )
        ));
        
        $this->add(array(
           'name' => 'telefone',
            'options' => array(
                'type' => 'text',
                'label' => 'Telefone'
            ),
            'attributes' => array(
                'id' => 'telefone',
                'placeholder' => 'Telefone'
            )
        ));
        
        $this->add(array(
           'name' => 'email',
            'options' => array(
                'type' => 'text',
                'label' => 'Email'
            ),
            'attributes' => array(
                'id' => 'email',
                'placeholder' => 'Email'
            )
        ));
        
        $this->add(array(
           'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Salvar',
                'class' => 'btn-success'
            )
        ));
    }
}
