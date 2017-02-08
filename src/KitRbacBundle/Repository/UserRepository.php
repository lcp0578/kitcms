<?php

namespace KitRbacBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function getList()
    {
        $query = $this->getEntityManager()->createQuery(
                'SELECT u.id, u.username,u.createAt,u.updateAt, r.rolename FROM KitRbacBundle:User u 
                JOIN u.role r
                WHERE u.status = :status'
            )->setParameter('status', 1);
        return $query->getResult();
    }
}
