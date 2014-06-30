<?php

namespace CCICommunity\BaseBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * VDCRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VDCRepository extends EntityRepository
{
	public function getList($page=1, $maxperpage=3)
    {

      $q = $this->createQueryBuilder('v');
      $q->orderBy('v.date', 'DESC');
	     
	    $q->setFirstResult(($page-1) * $maxperpage)
	    ->setMaxResults($maxperpage);
	     
	    return new Paginator($q);
    }

    public function countTotalVDC (){
     $query = $this->createQueryBuilder('VDC')->select('COUNT(VDC)');
     $total = $query->getQuery()->getSingleScalarResult();
     return $total;
   }




}
