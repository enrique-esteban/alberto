<?php
namespace AppBundle\Repository;
use Doctrine\ORM\EntityRepository;
/**
 * SaleOrderRepository
 *
 * This class was generated by the PhpStorm "Php Annotations" Plugin. Add your own custom
 * repository methods below.
 */
class SaleRepository extends EntityRepository
{
    /**
     * @param $type
     * @param string $status
     * @return array
     */
    public function findSalesByType ($type, $status = 'En venta')
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery(
            'SELECT s, d, t
             FROM AppBundle:Sale s
             JOIN s.device d
             JOIN s.state t
             WHERE s.type = :type AND t.name = :status'
        )->setParameters(array(
            'type' => $type,
            'status' => $status,
        ));
        return $query->getArrayResult();
    }
}