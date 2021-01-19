<?php

namespace CandidateBack\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 *
 * @ORM\Table(name="competence")
 * @ORM\Entity(repositoryClass="CandidateBack\CommonBundle\Repository\CompetenceRepository")
 */
class Competence
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_legacy", type="boolean", nullable=true)
     */
    private $isLegacy;


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
     * Set name
     *
     * @param string $name
     *
     * @return Competence
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set isLegacy
     *
     * @param boolean $isLegacy
     *
     * @return Competence
     */
    public function setIsLegacy($isLegacy)
    {
        $this->isLegacy = $isLegacy;

        return $this;
    }

    /**
     * Get isLegacy
     *
     * @return bool
     */
    public function getIsLegacy()
    {
        return $this->isLegacy;
    }




    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="CandidateBack\CommonBundle\Entity\CompetenceCategory", inversedBy="competences", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $competenceCategory;

    /**
     * @return mixed
     */
    public function getCompetenceCategory()
    {
        return $this->competenceCategory;
    }

    /**
     * @param mixed $competenceCategory
     */
    public function setCompetenceCategory($competenceCategory)
    {
        $this->competenceCategory = $competenceCategory;
    }
}

