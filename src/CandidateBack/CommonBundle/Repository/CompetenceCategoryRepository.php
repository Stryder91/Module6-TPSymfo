<?php

namespace CandidateBack\CommonBundle\Repository;

/**
 * CompetenceCategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CompetenceCategoryRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllCategoryCompetenceOrderedByNameDesc()
    {
        $qb = $this->createQueryBuilder('cc');

        $qb
            ->addSelect('cc')
            ->orderBy('cc.title', 'DESC')
        ;

        return $qb->getQuery()->getResult();
    }

}