<?php

namespace LoversLock\CadenasBundle\Service;

use Doctrine\ORM\EntityManager;
use LoversLock\CadenasBundle\Entity\Cadenas;

use Doctrine\ORM\EntityRepository;

class CadenasService extends EntityRepository
{

    public function __construct(EntityManager $em) {
        $this->_em = $em;
    }

}