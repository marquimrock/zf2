<?php

namespace Livraria\Entity;

use Doctrine\ORM\EntityRepository;

class ClienteRepository extends EntityRepository {

    public function fetchPairs() {
        $entities = $this->findAll();
        
        $array = array();
        
        foreach($entities as $entity) {
            $array[$entity->getId()] = $entity->getNome();
        }
        
        return $array;
    }
    
}
