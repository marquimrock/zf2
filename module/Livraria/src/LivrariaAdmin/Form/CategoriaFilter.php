<?php

namespace LivrariaAdmin\Form;

use Zend\InputFilter\InputFilter;

class CategoriaFilter extends InputFilter {

    public function __construct() {
        $this->add(array(
<<<<<<< HEAD
            'name' => 'nome',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim')
=======
           'name' => 'nome',
            'required' => true,
            'filters' => array(
                array('name'=>'StripTags'),
                array('name'=>'StringTrim')
>>>>>>> cf3485d3df99ddaeb795af2e5074f341c3b8db69
            ),
            'validators' => array(
                array(
                    'name' => 'NotEmpty',
<<<<<<< HEAD
                    'options' => array(
                        'messages' => array('isEmpty' => 'Nome não pode estar em branco'),
=======
                    'options'=>array(
                        'messages' => array('isEmpty'=>'Nome não pode estar em branco'),
>>>>>>> cf3485d3df99ddaeb795af2e5074f341c3b8db69
                    )
                )
            )
        ));
    }

}
