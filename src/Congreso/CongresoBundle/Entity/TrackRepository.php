<?php

namespace Congreso\CongresoBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TrackRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TrackRepository extends EntityRepository
{
	public function getTracks($limit = null)
{
	$qp = $this->createQueryBuilder('p')->select('p');

	if (false === is_null($limit))
		$qp->setMaxResults($limit);

	return $qp->getQuery()->getResult();
}
}
