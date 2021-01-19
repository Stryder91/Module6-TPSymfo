<?php

namespace CandidateBack\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompetenceCategory
 *
 * @ORM\Table(name="competence_category")
 * @ORM\Entity(repositoryClass="CandidateBack\CommonBundle\Repository\CompetenceCategoryRepository")
 */
class CompetenceCategory
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
     * @ORM\Column(name="isPublished", type="boolean", nullable=true)
     */
    private $isPublished;

    /**
     * @var int
     *
     * @ORM\Column(name="showOrder", type="integer")
     */
    private $showOrder;


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
     * Set isPublished
     *
     * @param boolean $isPublished
     *
     * @return CompetenceCategory
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * Set showOrder
     *
     * @param integer $showOrder
     *
     * @return CompetenceCategory
     */
    public function setShowOrder($showOrder)
    {
        $this->showOrder = $showOrder;

        return $this;
    }

    /**
     * Get showOrder
     *
     * @return int
     */
    public function getShowOrder()
    {
        return $this->showOrder;
    }




    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="CandidateBack\CommonBundle\Entity\Competence", mappedBy="competenceCategory", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $competences;

    public function removeCompetence($competence)
    {
        if ($this->competences->contains($competence)) {
            $this->competences->remove($competence);
        }

        return $this;
    }

    /**
     * @param $competence
     *
     * @return $this
     */
    public function addCompetence($competence)
    {
        $this->competences[] = $competence;
        $competence->setCompetenceCategory($this);

        return $this;
    }

    /**
     * @param $competences
     */
    public function setCompetences($competences)
    {
        $this->competences->clear();
        foreach ($competences as $competence) {
            $this->addCompetence($competence);
        }
    }

    /**
     * @return mixed
     */
    public function getCompetences() {
        return $this->competences;
    }
}

