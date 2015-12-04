<?php

namespace IuchBundle\Entity;

/**
 * ServiceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ServiceRepository extends \Doctrine\ORM\EntityRepository
{
    public function orderByUserChef()
    {
        $queryBuilder = $this->_em->createQueryBuilder()
            ->select('s', 'u')
            ->from('IuchBundle:Service', 's')
            ->leftJoin('ApplicationSonataUserBundle:User', 'u')
            ->orderBy('u.chef_service', 'ASC');
        return $queryBuilder->getQuery()->getResult();
    }
}
