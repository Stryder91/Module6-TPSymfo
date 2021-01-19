<?php

namespace CandidateBack\CommonBundle\Repository;

use CandidateBack\CommonBundle\Entity\Candidate;

/**
 * CandidateRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CandidateRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Get all realisations by desc date for a candidate
     * @param $candidate
     * @return array
     */
    public function getBio(Candidate $candidate)
    {
        $qb = $this->createQueryBuilder('r');

        $qb
            ->select('r.id', 'r.jobname', 'r.firstname', 'r.lastname', 'r.zipCode', 'r.country', 'r.birthdate', 'r.city','r.email', 'r.githubUrl', 'r.linkedinUrl', 'r.twitterUrl')
            ->leftJoin('r.candidateCompetences', 'c')
            ->leftJoin('c.competence', 'competence')
            ->addSelect('competence.name')
            ->leftJoin('r.jobExperiences', 'j')
            ->addSelect('j.companyName', 'j.contract', 'j.dateEnd', 'j.dateBegin', 'j.description')
            ->andWhere('r.id = :candidate')
            ->setParameter('candidate', $candidate->getId())

        ;

        return $qb->getQuery()->getArrayResult();
    }
}
