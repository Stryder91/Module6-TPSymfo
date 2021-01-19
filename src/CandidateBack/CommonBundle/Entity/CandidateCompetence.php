<?php

namespace CandidateBack\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CandidateCompetence
 *
 * @ORM\Table(name="candidate_competence")
 * @ORM\Entity(repositoryClass="CandidateBack\CommonBundle\Repository\CandidateCompetenceRepository")
 */
class CandidateCompetence
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="isOnCv", type="boolean", nullable=true)
     */
    private $isOnCv;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set isOnCv
     *
     * @param boolean $isOnCv
     *
     * @return CandidateCompetence
     */
    public function setIsOnCv($isOnCv)
    {
        $this->isOnCv = $isOnCv;

        return $this;
    }

    /**
     * Get isOnCv
     *
     * @return bool
     */
    public function getIsOnCv()
    {
        return $this->isOnCv;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return CandidateCompetence
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }



    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="CandidateBack\CommonBundle\Entity\Candidate", inversedBy="candidateCompetences", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $candidate;

    /**
     * @return mixed
     */
    public function getCandidate()
    {
        return $this->candidate;
    }

    /**
     * @param mixed $candidate
     */
    public function setCandidate($candidate)
    {
        $this->candidate = $candidate;
    }




    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="CandidateBack\CommonBundle\Entity\Competence", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $competence;

    /**
     * @return mixed
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * @param mixed $competence
     */
    public function setCompetence($competence)
    {
        $this->competence = $competence;
    }
}

